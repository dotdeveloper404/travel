<!DOCTYPE html>



<html lang="en">


<head>



  <!-- Required meta tags -->



  <meta charset="UTF-8">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-261702684-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-261702684-1');
  </script>


  <!-- Stylesheets -->

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <!-- <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}"> -->

{{-- Preload Css start --}}
<link rel="preload" href="{{ asset('frontend/css/vendors.css') }}" as="style"/>
<link rel="preload" href="{{ asset('frontend/css/main.css') }}" as="style"/>
<link rel="preload" href="{{ asset('frontend/css/owl.carousel.min.css') }}" as="style"/>
<link rel="preload" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" as="style"/>
<link rel="preload" href="{{ asset('frontend/css/font-awesome_6.3.0_css_all.min.css') }}" as="style"/>


<link rel="preload" href="{{ asset('frontend/js/jquery_3.6.3_jquery.min.js') }}" as="script"/>
<link rel="preload" href="{{ asset('frontend/js/OwlCarousel2_2.3.4_owl.carousel.min.js') }}" as="script"/>
<link rel="preload" href="{{ asset('frontend/js/bootstrap.min.js') }}" as="script"/>
<link rel="preload" href="{{ asset('frontend/js/vendors.js') }}" as="script"/>
<link rel="preload" href="{{ asset('frontend/js/main.min.js') }}" as="script"/>


  {{-- Preload css End --}}
  <link rel="stylesheet" href="{{ asset('frontend/css/vendors.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/css/main.css')}}">

  <style>
  input{
    padding-left:10px;
  }
  </style>

  <title>@yield('title')</title>

  <link rel="icon" type="image/x-icon" href="{{ asset('frontend/img/favicon/favicon-16x16.png')}}">


  <meta name="description" content="@yield('description')">

  <meta name="keywords" content="@yield('keywords')">

  <!-- Requird for slider  Start -->

  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">


  <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">


  <!-- Requird for slider  End -->


  <!-- required for package single for icons start -->

  <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome_6.3.0_css_all.min.css') }}">

  <!-- required for package single for icons end -->

  @stack('css')



</head>







<body>



  @include('sweetalert::alert')


  <div class="preloader js-preloader">


    <div class="preloader__wrap">


      <div>

        <img src="{{ asset('frontend/img/ilinkturkey.png') }}" alt="logo icon">


      </div>


    </div>



    <div class="preloader__title">iLinkTurkey</div>



  </div>



  <main id="app">


    <!-- Header Start -->



    @include('frontend.layouts.header')



    <!-- Header End -->



    <!-- BEGIN MAIN CONTENT -->



    @yield('content')



    <!--END MAIN CONTENT  -->



    <!-- Subscribe section -->



    @include('frontend.layouts.subscribe')



    <!-- Footer Start  -->



    @include('frontend.layouts.footer')



    <!-- Footer End -->




  </main>



</body>
 
 

@stack('scripts')
 
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
 <script type="text/javascript">
  // var onloadCallback = function() {
  //   alert("grecaptcha is ready!");
  // };

  var getPhone = document.getElementsByClassName("phone");
console.log(getPhone);
for(var i =0 ;i< getPhone.length; i++){
  getPhone[i].addEventListener('input', function (e) {
  var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
  e.target.value = !x[2] ? x[1] : '' + x[1] + '-' + x[2] + (x[3] ? '-' + x[3] : '');
});
}

</script>
   
<!--@vite(['resources/js/frontend.js'])-->







</html>