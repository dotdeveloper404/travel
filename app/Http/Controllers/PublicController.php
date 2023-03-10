<?php

namespace App\Http\Controllers;

use App\Mail\PackageBookingMail;
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
        return view('frontend.index', compact('recomended_packages'));
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
