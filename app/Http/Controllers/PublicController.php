<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Mail\PackageBookingMail;
use App\Models\City;
use App\Models\Country;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $recomended_packages = Package::with('images')->where('recomended', 1)->get();
        $packages = Package::with('images')->where('status', 1)->get();

        $top_city = City::whereTop(1)->with('country')->get();
        $top_country = Country::whereTop(1)->get();
        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "https://ilinkturkey.com/blog/wp-json/wp/v2/posts", // your preferred link
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_TIMEOUT => 30000,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "GET",
        //     CURLOPT_HTTPHEADER => array(
        //         // Set Here Your Requesred Headers
        //         'Content-Type: application/json',
        //     ),
        // ));
        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        // curl_close($curl);

        // if ($err) {
        //     echo "cURL Error #:" . $err;
        // } else {
        //     echo '<pre>';
        //     // print_r(json_decode($response,true));
        //     // print_r(json_decode($response,true));
        //     echo '</pre>';
        // }
        // $data = json_decode($response, true);
        // //  echo '<pre>';
        // // print_r($data[0]['yoast_head_json']['og_image'][0]['url']);
        // //     echo '</pre>';
        // //     die;
        // foreach ($data as $blog) {
        //     $blogs[] = [
        //         'link' => $blog['link'],
        //         'image' => $blog['yoast_head_json']['og_image'][0]['url'],
        //         'title' => $blog['title']['rendered'],

        //     ];
        // }
        // //  echo '<pre>';
        // // print_r($blogs);
        // //     echo '</pre>';
        // //     die;

        $blogs = array();

        $response = Http::get('https://ilinkturkey.com/blog/wp-json/wp/v2/posts');

        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            $data = json_decode($response->getBody(), true);
            foreach ($data as $blog) {
                $blogs[] = [
                    'link' => $blog['link'],
                    'image' => $blog['yoast_head_json']['og_image'][0]['url'],
                    'title' => $blog['title']['rendered'],

                ];
            }
        }

        return view('frontend.index', compact('recomended_packages', 'packages', 'blogs', 'top_city','top_country'));
    }


    public function cancelationPolicy()
    {
        return view('frontend.cancelation_policy');
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }

    public function aboutUs()
    {
        return view('frontend.about');
    }

    public function travelGuide()
    {

        // return redirect()->route('thank-you');

        $recomended_packages = Package::with('images')->where('recomended', 1)->get();
        $packages = Package::with('images')->where('status', 1)->get();

        return view('frontend.travel_guide', compact('recomended_packages', 'packages'));
    }

    public function thankYou()
    {

        $packages = Package::with('images')->where('status', 1)->get();
        return view('frontend.thank_you', compact('packages'));
    }

    public function subscribe()
    {

        return redirect()->route('thank-you')->with('msg', 'thank you for subscribe');
    }

    public function testemail()
    {

        $package = Package::with('images', 'hotels', 'transports')->find(8);
        $itenary = $package->itenary  != null  ? collect(json_decode($package->itenary, true)) : null;
        $faqs = $package->faqs  != null  ? collect(json_decode($package->faqs, true)) : null;
        $pdf = PDF::loadView('portal.mails.pdf-package-booking', ['package' => $package, 'itenaries' => $itenary, 'faqs' => $faqs])->setOptions(['defaultFont' => 'sans-serif']);
        // dd( $pdf );

        Mail::to('dot.developer404@gmail.com')->send(new PackageBookingMail($package, $itenary, $faqs, $pdf->output()));
    }
}
