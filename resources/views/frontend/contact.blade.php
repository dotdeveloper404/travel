@extends('frontend.layouts.app')

@push('css')
    <style>
        .contactBanner {

            background: linear-gradient(rgb(0 0 0 / 70%), rgba(24, 29, 56, .7)), url("../frontend/img/contact.png") no-repeat;
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 50vh;
        }
    </style>
@endpush()

@section('content')
    <main>



        <section class="pt-40 pb-40 bg-light-2 contactBanner flex-center">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <div class="text-center">

                            <h1 class="text-40 md:text-25 fw-600 text-white">iLinkTurkey</h1>
                            <div class="text-white mt-15">
                                Contact Us
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <section class="layout-pt-md">
            <div class="container">
                <div class="row y-gap-30 justify-between items-center">
                    <div class="col-lg-12">
                        @if (Session::has('message'))
                            <p style="    background: #eb7346;
                        color: white;
                        text-align: center;
                        border-radius: 25px;
                        text-transform: capitalize;"
                                class="alert {{ Session::get('alert-class', 'alert-info') }}">

                                {{ Session::get('message') }}
                            </p>
                        @endif
                        <p class="text-dark-1">
                        <div class="text-22 fw-500"> Ready to book a tour of a lifetime? </div>
                        <br />
                        Here at iLinkTurkey, we're dedicated to providing an individualised experience to each of our
                        customers.
                        If you have any questions, concerns, or feedback, please feel free to get in touch with us via our
                        contact details listed below. Our team is available 24/7,
                        seven days a week to answer your questions, listen to your feedback, and help you plan your dream
                        trip.

                        </p>
                        <br />
                        <div class="text-22 fw-500">
                            Contact Details
                        </div>

                        <p class="text-dark-1 mt-10" style="font-weight:bolder;">
                            Phone : <span><a href="tel:+1-201-366-1155">+1-201-366-1155</a></span> <br />
                            Email: <span><a href="email:info@ilinkturkey.com">info@ilinkturkey.com</a></span>
                        </p>


                        <p class="text-dark-1 mt-10">
                            You can also reach out to us using the contact form below.
                            Simply fill out the form with your name, email address, and message, and we'll get back to you
                            as soon as possible.
                        </p>

                        <form method="POST" action="{{ route('contact') }}">
                            @csrf
                            @method('post')
                            <div class="row y-gap-20 pt-20">
                                <div class="col-12">

                                    <div class="form-input ">
                                        <input name="name" type="text" required>
                                        <label class="lh-1 text-16 text-light-1">Full Name</label>
                                        @error('name')
                                            <div class="invalid-feedback">

                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-12">

                                    <div class="form-input ">
                                        <input name="email" type="text" required>
                                        <label class="lh-1 text-16 text-light-1">Email</label>
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback">


                                            {{ $message }}



                                        </div>
                                    @enderror

                                </div>
                                <div class="col-12">

                                    <div class="form-input ">
                                        <input name="subject" type="text" required>
                                        <label class="lh-1 text-16 text-light-1">Phone</label>
                                    </div>

                                </div>
                                <div class="col-12">

                                    <div class="form-input ">
                                        <textarea name="message" required rows="4"></textarea>
                                        <label class="lh-1 text-16 text-light-1">Your Messages</label>
                                    </div>

                                </div>
                                <div class="col-auto">
                                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                                    
                                    <br />
                                    @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif
                                
                                    <button type="submit" value="Send a Messsage"
                                        class="button px-24 h-50 -dark-1 bg-blue-1 text-white">
                                        Send a Messsage <div class="icon-arrow-top-right ml-15"></div>
                                    </button>
                                    <br />

                                </div>
                            </div>

                        </form>

                        <br />

                        <div class="text-22 fw-500">
                            Stay connected
                        </div>

                        <p class="mt-10">
                            iLinkTurkey is constantly working hard to bring new travel expenses to you. Join us on our
                            journey by keeping up with our social platforms to stay in tune with the latest tours, packages,
                            deals, discounts, and so much more.
                        </p>
                        <p class="mt-10">
                            Follow us on Facebook, Instagram, Twitter, and LinkedIn to remain updated with us.
                        </p>
                        <br />
                    </div>


                </div>
            </div>
        </section>



    </main>
@endsection
