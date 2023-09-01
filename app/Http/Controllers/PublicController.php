<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Mail\PackageBookingMail;
use App\Models\City;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Package;
use App\Rules\ReCaptcha;
use DateTime;
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
       // $packages = Package::with('images')->where('status', 1)->get();
        
        $featured_world_wide_packages = Package::with('images')->where('categories','like',"%featured-world-wide-packages%")->get();
        $best_selling = Package::with('images')->where('categories','like',"%best-selling-turkey-packages%")->get();
        $popular = Package::with('images')->where('categories','like',"%popular-summer-packages%")->get();
        $top_rated = Package::with('images')->where('categories','like',"%top-rated-istanbul-packages%")->get();

     
        $top_city = City::whereTop(1)->with('country')->get();
        $top_country = Country::whereTop(1)->get();

        $cities = City::get();

        
        $blogs = array();

        $response = Http::get('https://ilinkturkey.com/blog/wp-json/wp/v2/posts');

        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            $data = json_decode($response->getBody(), true);
            $i = 0;
            foreach ($data as $blog) {

                $date = new DateTime($blog['date']);

                if ($i == 3) {
                    break;
                }
                $blogs[] = [
                    'link' => $blog['link'],
                    'image' => $blog['yoast_head_json']['og_image'][0]['url'],
                    'title' => $blog['title']['rendered'],
                    'date' => $date->format('Y-m-d')

                ];
                $i++;
            }
        }

        return view('frontend.index', compact('recomended_packages', 'featured_world_wide_packages','popular','best_selling','top_rated', 'blogs', 'top_city', 'top_country','cities'));
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


        $blogs = array();

        $response = Http::get('https://ilinkturkey.com/blog/wp-json/wp/v2/posts');

        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            $data = json_decode($response->getBody(), true);
            $i = 0;
            foreach ($data as $blog) {

                if ($i == 3) {
                    break;
                }
                $blogs[] = [
                    'link' => $blog['link'],
                    'image' => $blog['yoast_head_json']['og_image'][0]['url'],
                    'title' => $blog['title']['rendered'],

                ];
                $i++;
            }
        }

        return view('frontend.travel_guide', compact('recomended_packages', 'packages', 'blogs'));
    }

    public function thankYou()
    {

      
        $recomended_packages = Package::with('images')->where('recomended', 1)->get();
        $cities = City::get();

        return view('frontend.thank_you', compact('recomended_packages','cities'));
    }

    public function subscribe()
    {

        return redirect()->route('thank-you')->with('msg', 'thank you for subscribe');
    }


    public function Contact(Request $request){
        
      
        $request->validate([
            'name' => 'required|string|max:255' ,
            'email' => 'required|string|max:255', 
         'g-recaptcha-response'=> ['required',new ReCaptcha]
        ]);

        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);

        return redirect()->route('thank-you')->with(['message'=>'Thank You For Contact Us' , 'content'=>"your query has been submitted successfully, our representative will contact you shortly"]);
   
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
