@extends('frontend.layouts.app')

@section('content')

 
   
 
  <main>


    <section class="section-bg layout-pt-lg layout-pb-lg">
      <div class="section-bg__item col-12">
        <img src="../frontend/img/home-banner.png" alt="image">
      </div>

      <div class="container">
        <div class="row justify-center text-center">
          <div class="col-xl-6 col-lg-8 col-md-10">
            <h1 class="text-40 md:text-25 fw-600 text-white">IlinkTurkey</h1>
            <div class="text-white mt-15">Contact Us</div>
          </div>
        </div>
      </div>
    </section>
    
        <section class="layout-pt-md">
      <div class="container">
        <div class="row y-gap-30 justify-between items-center">
          <div class="col-lg-12">

            <p class="text-dark-1">
       
       Thank you for your interest in iLink Turkey!  <br><br>

We're here to help with any questions you may have, so please feel free to reach out to us using one of the methods below.   <br><br>

If you prefer to speak with us directly, please give us a call at <a href="tel:+1-201-366-1155" onclick="">+1-201-366-1155</a> Our team is available during office hours to answer your questions and help you plan your dream trip to Turkey.
<br><br>
If you have a question that isn't urgent, you can send us an email at info@ilinkturkey.com. We'll do our best to respond within 24 hours.
<br><br>

You can also reach out to us using the contact form below. Please fill out the form with your name, email address, and message, and we'll get back to you as soon as possible.
<br><br>

           </p>
        
               <div class="text-22 fw-500">
                Send a message
              </div>
              
                <form>
                    
                       <div class="row y-gap-20 pt-20">
                <div class="col-12">

                  <div class="form-input ">
                    <input type="text" required>
                    <label  class="lh-1 text-16 text-light-1">Full Name</label>
                  </div>

                </div>
                <div class="col-12">

                  <div class="form-input ">
                    <input type="text" required>
                    <label class="lh-1 text-16 text-light-1">Email</label>
                  </div>

                </div>
                <div class="col-12">

                  <div class="form-input ">
                    <input type="text" required>
                    <label class="lh-1 text-16 text-light-1">Subject</label>
                  </div>

                </div>
                <div class="col-12">

                  <div class="form-input ">
                    <textarea required rows="4"></textarea>
                    <label class="lh-1 text-16 text-light-1">Your Messages</label>
                  </div>

                </div>
                <div class="col-auto">
                 <div class="g-recaptcha" data-sitekey="6LcDQsclAAAAAF9xioPFfGoLIGlgW1RHUSstoBSz"></div>
                  <a href="#" class="button px-24 h-50 -dark-1 bg-blue-1 text-white">
                    Send a Messsage <div class="icon-arrow-top-right ml-15"></div>
                  </a>

                </div>
              </div>
              
                </form>
          </div>

         
        </div>
      </div>
    </section>
    
    


 
    <section class="layout-pt-md layout-pb-lg">
      <div class="container">
        <div class="row x-gap-80 y-gap-20 justify-between">
        

          <div class="col-lg-3">
            <div class="text-14 text-light-1">Address</div>
            <div class="text-18 fw-500 mt-10">15 Prospect Lane, Suite#1C9, Colonia, NJ 07067</div>
          </div>

          <div class="col-auto">
            <div class="text-14 text-light-1">Phone</div>
            <div class="text-18 fw-500 mt-10"><a href="tel:+1-201-366-1155" onclick="">+1-201-366-1155</a> </div>
          </div>

          <div class="col-auto">
            <div class="text-14 text-light-1">Need live support?</div>
            <div class="text-18 fw-500 mt-10">info@ilinkturkey.com</div>
          </div>

          <div class="col-auto">
            <div class="text-14 text-light-1">Follow us on social media</div>
            <div class="d-flex x-gap-20 items-center mt-10">
              <a href="#"><i class="icon-facebook text-14"></i></a>
              <a href="#"><i class="icon-twitter text-14"></i></a>
              <a href="#"><i class="icon-instagram text-14"></i></a>
              <a href="#"><i class="icon-linkedin text-14"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

   
  </main>

   


@endsection

  
 