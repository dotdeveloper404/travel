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

  <!-- <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet"> -->


  <!-- Stylesheets -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('frontend/css/vendors.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/css/main.css')}}">

  <title>@yield('title')</title>

  <!-- Requird for slider  Start -->

 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Requird for slider  End -->

  <!-- required for package single for icons start -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <!-- required for package single for icons end -->
  
  
   <link rel="stylesheet" href="{{ asset('frontend/js/bootstrap.min.js') }}">



  @yield('css')

</head>



<body>

  @include('sweetalert::alert')



  <div class="preloader js-preloader">

    <div class="preloader__wrap">

      <div>

        <!-- class="preloader__icon" -->

        <!-- <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">

          <g clip-path="url(#clip0_1_41)">

            <path d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z" fill="#3554D1" />

          </g>



          <defs>

            <clipPath id="clip0_1_41">

              <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />

            </clipPath>

          </defs>

        </svg>

       -->

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




  <div class="langMenu is-hidden js-langMenu" data-x="lang" data-x-toggle="is-hidden">

    <div class="langMenu__bg" data-x-click="lang"></div>



    <div class="langMenu__content bg-white rounded-4">

      <div class="d-flex items-center justify-between px-30 py-20 sm:px-15 border-bottom-light">

        <div class="text-20 fw-500 lh-15">Select your language</div>

        <button class="pointer" data-x-click="lang">

          <i class="icon-close"></i>

        </button>

      </div>



      <div class="modalGrid px-30 py-30 sm:px-15 sm:py-15">



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">English</div>

            <div class="text-14 lh-15 mt-5 js-title">United States</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Türkçe</div>

            <div class="text-14 lh-15 mt-5 js-title">Turkey</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Español</div>

            <div class="text-14 lh-15 mt-5 js-title">España</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Français</div>

            <div class="text-14 lh-15 mt-5 js-title">France</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Italiano</div>

            <div class="text-14 lh-15 mt-5 js-title">Italia</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">English</div>

            <div class="text-14 lh-15 mt-5 js-title">United States</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Türkçe</div>

            <div class="text-14 lh-15 mt-5 js-title">Turkey</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Español</div>

            <div class="text-14 lh-15 mt-5 js-title">España</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Français</div>

            <div class="text-14 lh-15 mt-5 js-title">France</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Italiano</div>

            <div class="text-14 lh-15 mt-5 js-title">Italia</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">English</div>

            <div class="text-14 lh-15 mt-5 js-title">United States</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Türkçe</div>

            <div class="text-14 lh-15 mt-5 js-title">Turkey</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Español</div>

            <div class="text-14 lh-15 mt-5 js-title">España</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Français</div>

            <div class="text-14 lh-15 mt-5 js-title">France</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Italiano</div>

            <div class="text-14 lh-15 mt-5 js-title">Italia</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">English</div>

            <div class="text-14 lh-15 mt-5 js-title">United States</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Türkçe</div>

            <div class="text-14 lh-15 mt-5 js-title">Turkey</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Español</div>

            <div class="text-14 lh-15 mt-5 js-title">España</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Français</div>

            <div class="text-14 lh-15 mt-5 js-title">France</div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Italiano</div>

            <div class="text-14 lh-15 mt-5 js-title">Italia</div>

          </div>

        </div>



      </div>

    </div>

  </div>



  <div class="currencyMenu is-hidden js-currencyMenu" data-x="currency" data-x-toggle="is-hidden">

    <div class="currencyMenu__bg" data-x-click="currency"></div>



    <div class="currencyMenu__content bg-white rounded-4">

      <div class="d-flex items-center justify-between px-30 py-20 sm:px-15 border-bottom-light">

        <div class="text-20 fw-500 lh-15">Select your currency</div>

        <button class="pointer" data-x-click="currency">

          <i class="icon-close"></i>

        </button>

      </div>



      <div class="modalGrid px-30 py-30 sm:px-15 sm:py-15">



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">USD</span>

              - $

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">AUD</span>

              - $

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">BRL</span>

              - R$

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">BGN</span>

              - лв.

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">CAD</span>

              - $

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">USD</span>

              - $

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">AUD</span>

              - $

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">BRL</span>

              - R$

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">BGN</span>

              - лв.

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">CAD</span>

              - $

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">USD</span>

              - $

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">AUD</span>

              - $

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">BRL</span>

              - R$

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">BGN</span>

              - лв.

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">CAD</span>

              - $

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">USD</span>

              - $

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">AUD</span>

              - $

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">BRL</span>

              - R$

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">BGN</span>

              - лв.

            </div>

          </div>

        </div>



        <div class="modalGrid__item js-item">

          <div class="py-10 px-15 sm:px-5 sm:py-5">

            <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>

            <div class="text-14 lh-15 mt-5">

              <span class="js-title">CAD</span>

              - $

            </div>

          </div>

        </div>



      </div>

    </div>

  </div>

 

</body>



@stack('scripts')

<!--@vite(['resources/js/frontend.js'])-->



</html>