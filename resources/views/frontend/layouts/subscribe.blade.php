<section class="layout-pt-md layout-pb-md bg-dark-2">
      <div class="container">
        <div class="row y-gap-30 justify-between items-center">
          <div class="col col-md-6">
            <div class="row y-gap-20  flex-wrap items-center">
              <div class="col-auto">
                <div class="icon-newsletter text-60 sm:text-40 text-white"></div>
              </div>

              <div class="col-auto">
                <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
                <div class="text-white">Sign up and we'll send the best deals to you</div>
              </div>
            </div>
          </div>
          <div class="col col-md-6">
         <form method="POST" action="{{route('subscribe')}}">
          <div class="col-auto">
            <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
              
                    @csrf
              <div>
                <input class="bg-white h-60" type="text" placeholder="Your Email">
              </div>

              <div>
                <button type="submit" class="button -md h-60 bg-blue-1 text-white">Subscribe</button>
              </div>
            
            </div>
          </div>
            </form>
            </div>
        </div>
      </div>
    </section>
