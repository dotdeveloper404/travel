<template>
  <div class="col-xl-3 col-lg-4 lg:d-none">
    <aside class="sidebar y-gap-40">
      <div class="sidebar__item -no-border">
        <div
          class="flex-center ratio ratio-15:9 js-lazy"
          data-bg="frontend/img/general/map.png"
        >
          <button
            class="button py-15 px-24 -blue-1 bg-white text-dark-1 absolute"
            data-x-click="mapFilter"
          >
            <i class="icon-destination text-22 mr-10"></i>
            Show on map
          </button>
        </div>
      </div>

      <div class="sidebar__item -no-border">
        <h5 class="text-18 fw-500 mb-10">Search by property name</h5>
        <div class="single-field relative d-flex items-center py-10">
          <input
            class="pl-50 border-light text-dark-1 h-50 rounded-8"
            type="email"
            placeholder="e.g. Best Western"
          />
          <button class="absolute d-flex items-center h-full">
            <i class="icon-search text-20 px-15 text-dark-1"></i>
          </button>
        </div>
      </div>

      <div class="sidebar__item">
        <h5 class="text-18 fw-500 mb-10">Deals</h5>
        <div class="sidebar-checkbox">
          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>
                <div class="text-15 ml-10">Free cancellation</div>
              </div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>
                <div class="text-15 ml-10">Reserve now, pay at stay</div>
              </div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>
                <div class="text-15 ml-10">Properties with special offers</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar__item">
        <h5 class="text-18 fw-500 mb-10">Popular Filters</h5>
        <div class="sidebar-checkbox">
          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>
                <div class="text-15 ml-10">Breakfast Included</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">92</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>
                <div class="text-15 ml-10">Romantic</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">45</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>
                <div class="text-15 ml-10">Airport Transfer</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">21</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>
                <div class="text-15 ml-10">WiFi Included</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">78</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>
                <div class="text-15 ml-10">5 Star</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">679</div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar__item pb-30">
        <h5 class="text-18 fw-500 mb-10">Nightly Price</h5>
        <div class="row x-gap-10 y-gap-30">
          <div class="col-12">
            <div class="js-price-rangeSlider">
              <div class="text-14 fw-500"></div>

              <div class="d-flex justify-between mb-20">
                <div class="text-15 text-dark-1">
                  <span class="js-lower"></span>
                  -
                  <span class="js-upper"></span>
                </div>
              </div>

              <div class="px-5">
                <div class="js-slider"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar__item">
        <h5 class="text-18 fw-500 mb-10">Amenities</h5>
        <div class="sidebar-checkbox">
          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Breakfast Included</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">92</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">WiFi Included</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">45</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Pool</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">21</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Restaurant</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">78</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Air conditioning</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">679</div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar__item">
        <h5 class="text-18 fw-500 mb-10">Star Rating</h5>
        <div class="row x-gap-10 y-gap-10 pt-10">
          <div class="col-auto">
            <a
              href="#"
              class="
                button
                -blue-1
                bg-blue-1-05
                text-blue-1
                py-5
                px-20
                rounded-100
              "
              >1</a
            >
          </div>

          <div class="col-auto">
            <a
              href="#"
              class="
                button
                -blue-1
                bg-blue-1-05
                text-blue-1
                py-5
                px-20
                rounded-100
              "
              >2</a
            >
          </div>

          <div class="col-auto">
            <a
              href="#"
              class="
                button
                -blue-1
                bg-blue-1-05
                text-blue-1
                py-5
                px-20
                rounded-100
              "
              >3</a
            >
          </div>

          <div class="col-auto">
            <a
              href="#"
              class="
                button
                -blue-1
                bg-blue-1-05
                text-blue-1
                py-5
                px-20
                rounded-100
              "
              >4</a
            >
          </div>

          <div class="col-auto">
            <a
              href="#"
              class="
                button
                -blue-1
                bg-blue-1-05
                text-blue-1
                py-5
                px-20
                rounded-100
              "
              >5</a
            >
          </div>
        </div>
      </div>

      <div class="sidebar__item">
        <h5 class="text-18 fw-500 mb-10">Guest Rating</h5>
        <div class="sidebar-checkbox">
          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="form-radio d-flex items-center">
                <div class="radio">
                  <input type="radio" name="name" />
                  <div class="radio__mark">
                    <div class="radio__icon"></div>
                  </div>
                </div>
                <div class="ml-10">Any</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">92</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="form-radio d-flex items-center">
                <div class="radio">
                  <input type="radio" name="name" />
                  <div class="radio__mark">
                    <div class="radio__icon"></div>
                  </div>
                </div>
                <div class="ml-10">Wonderful 4.5+</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">45</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="form-radio d-flex items-center">
                <div class="radio">
                  <input type="radio" name="name" />
                  <div class="radio__mark">
                    <div class="radio__icon"></div>
                  </div>
                </div>
                <div class="ml-10">Very good 4+</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">21</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="form-radio d-flex items-center">
                <div class="radio">
                  <input type="radio" name="name" />
                  <div class="radio__mark">
                    <div class="radio__icon"></div>
                  </div>
                </div>
                <div class="ml-10">Good 3.5+</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">78</div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar__item">
        <h5 class="text-18 fw-500 mb-10">Style</h5>
        <div class="sidebar-checkbox">
          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Budget</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">92</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Mid-range</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">45</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Luxury</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">21</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Family-friendly</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">78</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Business</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">679</div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar__item">
        <h5 class="text-18 fw-500 mb-10">Neighborhood</h5>
        <div class="sidebar-checkbox">
          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Central London</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">92</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Guests&#39; favourite area</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">45</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Westminster Borough</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">21</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Kensington and Chelsea</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">78</div>
            </div>
          </div>

          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="form-checkbox">
                  <input type="checkbox" name="name" />
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon icon-check"></div>
                  </div>
                </div>

                <div class="text-15 ml-10">Oxford Street</div>
              </div>
            </div>

            <div class="col-auto">
              <div class="text-15 text-light-1">679</div>
            </div>
          </div>
        </div>
      </div>
    </aside>
  </div>
</template>


<script>
export default {
    
};
</script>