<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontend\PackageBookingStoreRequest;
use App\Mail\PackageBookingMail;
use App\Models\Package;
use App\Models\PackageBooking;
use DateTime;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;
class PackageBookingController extends Controller
{

    public function store(PackageBookingStoreRequest $request, Package $package)
    {

        $data = $request->validated();
        $data['package_id'] = $package->id;
        $ip    = $_SERVER["REMOTE_ADDR"];
        // $users = \DB::connection('mysql2')->table('leads')->find(2);
        $profile_id  = 0;
        $getProfile = \DB::connection('mysql2')->table('profile')->where('email_address', $request->email)->where('phone', $request->phone)->get();
        if (count($getProfile) > 0) {
            $profile_id  = $getProfile[0]->profile_id;
        } else {
            $insert_leads_profile = \DB::connection('mysql2')->table('profile')->insertGetId(
                [
                    'name' => $data['name'],
                    'email_address' => $data['email'],
                    'phone' => $data['phone']
                ]
            );

            $profile_id = $insert_leads_profile;
        }

        $form_type = 'turkey';
        $sql = "SELECT DISTINCT form_id FROM leads WHERE form_type = '" . $form_type . "' ORDER BY form_id DESC LIMIT 1";
        $lastFormId = \DB::connection('mysql2')->select(\DB::raw("SELECT DISTINCT form_id FROM leads WHERE form_type = '" . $form_type . "' ORDER BY form_id DESC LIMIT 1"));

        if (count($lastFormId) == 0) {
            $lastFormId[0]->form_id = 0;
        }


        $insert_leads = \DB::connection('mysql2')->table('leads')->insertGetId(
            [
                'form_type' => $form_type,
                'form_prefix' => $form_type,
                'submission_date' => new DateTime(),
                'form_id' => ((int) $lastFormId[0]->form_id + 1),
                'profile_id' => $profile_id,
                'agent_id' => 0
            ]
        );

        $leads_id = $insert_leads;
        if ($insert_leads) {
            $data['reference'] = 'Online';
            $data['ip'] = $ip;
            foreach ($data as $key => $value) {

                $insert_leads_data = \DB::connection('mysql2')->table('leads_data')->insertGetId(
                    [
                        'leads_id' => $leads_id,
                        'field_key' => $key,
                        'field_value' => $value,
                        'sort_order' => 0,
                    ]
                );
            }
        }

        unset($data['reference']);
        unset($data['ip']);

        PackageBooking::create($data);

        Alert::success('your package has been successfully booked', 'success');

        $package->load('images', 'hotels', 'transports');

        $itenary = null;
        $faqs = null;

        $itenaries = $package->itenary  != null  ? collect(json_decode($package->itenary, true)) : null;

        $faqs = $package->faqs  != null  ? collect(json_decode($package->faqs, true)) : null;


        $pdf = PDF::loadView('frontend.packages.package-pdf', ['package' => $package, 'itenaries' => $itenaries, 'faqs' => $faqs])
            ->setOptions(['defaultFont' => 'poppins',  'isRemoteEnabled' => true]);

        // Mail::to(env('MAIL_FROM_ADDRESS'))->send(new PackageBookingMail($package, $itenaries, $faqs,$heading,$message, $pdf->output()));
        $content = array(
            'heading' => "Package Booking Heading",
            'message' => "Package Booking Message"
        );
        // Mail::to(env('MAIL_FROM_ADDRESS'))->send(new PackageBookingMail($package, $itenaries, $faqs,$heading,$message, $pdf->output()));
        //        Mail::to('dot.developer404@gmail.com')->send(new PackageBookingMail($package, $itenaries, $faqs,$content, $pdf->output()));
        Mail::to(env('MAIL_USERNAME'))->send(new PackageBookingMail($package, $itenaries, $faqs, $content, $pdf->output()));

        return redirect()->route('thank-you');

        //return redirect()->back()->with('message','your package has been successfully booked');

    }
}
