@extends('frontend.layouts.app')


@section('content')

<div class="singleMenu js-singleMenu">
    <div class="col-12">
        <div class="py-10 bg-dark-2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mainSearch bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-4">
                            <div class="button-grid items-center">

                                <div class="searchMenu-loc pl-10 pr-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                                    <div data-x-dd-click="searchMenu-loc">
                                        <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <input autocomplete="off" type="search" placeholder="Warwick Allerton Hotel Chicago" class="js-search js-dd-focus" />
                                        </div>
                                    </div>


                                    <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                        <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                                            <div class="y-gap-5 js-results">

                                                <div>
                                                    <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                        <div class="d-flex">
                                                            <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                            <div class="ml-10">
                                                                <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                                                                <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <div>
                                                    <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                        <div class="d-flex">
                                                            <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                            <div class="ml-10">
                                                                <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                                                                <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <div>
                                                    <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                        <div class="d-flex">
                                                            <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                            <div class="ml-10">
                                                                <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                                                                <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <div>
                                                    <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                        <div class="d-flex">
                                                            <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                            <div class="ml-10">
                                                                <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                                                                <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                                <div>
                                                    <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                        <div class="d-flex">
                                                            <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                            <div class="ml-10">
                                                                <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                                                                <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="searchMenu-date px-30 lg:py-20 lg:px-0 js-form-dd js-calendar">

                                    <div data-x-dd-click="searchMenu-date">
                                        <h4 class="text-15 fw-500 ls-2 lh-16">Check in - Check out</h4>

                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <span class="js-first-date">Wed 2 Mar</span>
                                            -
                                            <span class="js-last-date">Fri 11 Apr</span>
                                        </div>
                                    </div>


                                    <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                                        <div class="bg-white px-30 py-30 rounded-4">
                                            <div class="overflow-hidden js-calendar-slider">
                                                <div class="swiper-wrapper">


                                                    <div class="swiper-slide">
                                                        <div class="text-28 fw-500 text-center mb-10">January 2022</div>

                                                        <div class="table-calendar js-calendar-single">
                                                            <div class="table-calendar__header">
                                                                <div>Sun</div>
                                                                <div>Mon</div>
                                                                <div>Tue</div>
                                                                <div>Wed</div>
                                                                <div>Thu</div>
                                                                <div>Fri</div>
                                                                <div>Sat</div>
                                                            </div>

                                                            <div class="table-calendar__grid overflow-hidden">

                                                                <div data-index="1" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="2" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="3" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="4" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="5" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="6" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                                <div data-index="7" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">1</span>


                                                                </div>


                                                                <div data-index="8" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="9" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="10" data-week="Tue" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="11" data-week="Wed" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="12" data-week="Thu" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="13" data-week="Fri" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="14" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="15" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">9</span>


                                                                </div>


                                                                <div data-index="16" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">10</span>


                                                                </div>


                                                                <div data-index="17" data-week="Tue" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">11</span>


                                                                </div>


                                                                <div data-index="18" data-week="Wed" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">12</span>


                                                                </div>


                                                                <div data-index="19" data-week="Thu" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">13</span>


                                                                </div>


                                                                <div data-index="20" data-week="Fri" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">14</span>


                                                                </div>


                                                                <div data-index="21" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">15</span>


                                                                </div>


                                                                <div data-index="22" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">16</span>


                                                                </div>


                                                                <div data-index="23" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">17</span>


                                                                </div>


                                                                <div data-index="24" data-week="Tue" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">18</span>


                                                                </div>


                                                                <div data-index="25" data-week="Wed" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">19</span>


                                                                </div>


                                                                <div data-index="26" data-week="Thu" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">20</span>


                                                                </div>


                                                                <div data-index="27" data-week="Fri" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">21</span>


                                                                </div>


                                                                <div data-index="28" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">22</span>


                                                                </div>


                                                                <div data-index="29" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">23</span>


                                                                </div>


                                                                <div data-index="30" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">24</span>


                                                                </div>


                                                                <div data-index="31" data-week="Tue" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="32" data-week="Wed" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="33" data-week="Thu" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="34" data-week="Fri" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="35" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="36" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="37" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide">
                                                        <div class="text-28 fw-500 text-center mb-10">February 2022</div>

                                                        <div class="table-calendar js-calendar-single">
                                                            <div class="table-calendar__header">
                                                                <div>Sun</div>
                                                                <div>Mon</div>
                                                                <div>Tue</div>
                                                                <div>Wed</div>
                                                                <div>Thu</div>
                                                                <div>Fri</div>
                                                                <div>Sat</div>
                                                            </div>

                                                            <div class="table-calendar__grid overflow-hidden">

                                                                <div data-index="38" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="39" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                                <div data-index="40" data-week="Tue" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">1</span>


                                                                </div>


                                                                <div data-index="41" data-week="Wed" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="42" data-week="Thu" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="43" data-week="Fri" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="44" data-week="Sat" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="45" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="46" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="47" data-week="Tue" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="48" data-week="Wed" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">9</span>


                                                                </div>


                                                                <div data-index="49" data-week="Thu" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">10</span>


                                                                </div>


                                                                <div data-index="50" data-week="Fri" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">11</span>


                                                                </div>


                                                                <div data-index="51" data-week="Sat" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">12</span>


                                                                </div>


                                                                <div data-index="52" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">13</span>


                                                                </div>


                                                                <div data-index="53" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">14</span>


                                                                </div>


                                                                <div data-index="54" data-week="Tue" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">15</span>


                                                                </div>


                                                                <div data-index="55" data-week="Wed" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">16</span>


                                                                </div>


                                                                <div data-index="56" data-week="Thu" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">17</span>


                                                                </div>


                                                                <div data-index="57" data-week="Fri" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">18</span>


                                                                </div>


                                                                <div data-index="58" data-week="Sat" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">19</span>


                                                                </div>


                                                                <div data-index="59" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">20</span>


                                                                </div>


                                                                <div data-index="60" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">21</span>


                                                                </div>


                                                                <div data-index="61" data-week="Tue" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">22</span>


                                                                </div>


                                                                <div data-index="62" data-week="Wed" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">23</span>


                                                                </div>


                                                                <div data-index="63" data-week="Thu" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">24</span>


                                                                </div>


                                                                <div data-index="64" data-week="Fri" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="65" data-week="Sat" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="66" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="67" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide">
                                                        <div class="text-28 fw-500 text-center mb-10">March 2022</div>

                                                        <div class="table-calendar js-calendar-single">
                                                            <div class="table-calendar__header">
                                                                <div>Sun</div>
                                                                <div>Mon</div>
                                                                <div>Tue</div>
                                                                <div>Wed</div>
                                                                <div>Thu</div>
                                                                <div>Fri</div>
                                                                <div>Sat</div>
                                                            </div>

                                                            <div class="table-calendar__grid overflow-hidden">

                                                                <div data-index="68" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="69" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="70" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">1</span>


                                                                </div>


                                                                <div data-index="71" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="72" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="73" data-week="Fri" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="74" data-week="Sat" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="75" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="76" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="77" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="78" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">9</span>


                                                                </div>


                                                                <div data-index="79" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">10</span>


                                                                </div>


                                                                <div data-index="80" data-week="Fri" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">11</span>


                                                                </div>


                                                                <div data-index="81" data-week="Sat" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">12</span>


                                                                </div>


                                                                <div data-index="82" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">13</span>


                                                                </div>


                                                                <div data-index="83" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">14</span>


                                                                </div>


                                                                <div data-index="84" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">15</span>


                                                                </div>


                                                                <div data-index="85" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">16</span>


                                                                </div>


                                                                <div data-index="86" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">17</span>


                                                                </div>


                                                                <div data-index="87" data-week="Fri" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">18</span>


                                                                </div>


                                                                <div data-index="88" data-week="Sat" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">19</span>


                                                                </div>


                                                                <div data-index="89" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">20</span>


                                                                </div>


                                                                <div data-index="90" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">21</span>


                                                                </div>


                                                                <div data-index="91" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">22</span>


                                                                </div>


                                                                <div data-index="92" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">23</span>


                                                                </div>


                                                                <div data-index="93" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">24</span>


                                                                </div>


                                                                <div data-index="94" data-week="Fri" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="95" data-week="Sat" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="96" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="97" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="98" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="99" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="100" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide">
                                                        <div class="text-28 fw-500 text-center mb-10">April 2022</div>

                                                        <div class="table-calendar js-calendar-single">
                                                            <div class="table-calendar__header">
                                                                <div>Sun</div>
                                                                <div>Mon</div>
                                                                <div>Tue</div>
                                                                <div>Wed</div>
                                                                <div>Thu</div>
                                                                <div>Fri</div>
                                                                <div>Sat</div>
                                                            </div>

                                                            <div class="table-calendar__grid overflow-hidden">

                                                                <div data-index="101" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="102" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="103" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="104" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="105" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                                <div data-index="106" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">1</span>


                                                                </div>


                                                                <div data-index="107" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="108" data-week="Sun" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="109" data-week="Mon" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="110" data-week="Tue" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="111" data-week="Wed" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="112" data-week="Thu" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="113" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="114" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">9</span>


                                                                </div>


                                                                <div data-index="115" data-week="Sun" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">10</span>


                                                                </div>


                                                                <div data-index="116" data-week="Mon" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">11</span>


                                                                </div>


                                                                <div data-index="117" data-week="Tue" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">12</span>


                                                                </div>


                                                                <div data-index="118" data-week="Wed" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">13</span>


                                                                </div>


                                                                <div data-index="119" data-week="Thu" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">14</span>


                                                                </div>


                                                                <div data-index="120" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">15</span>


                                                                </div>


                                                                <div data-index="121" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">16</span>


                                                                </div>


                                                                <div data-index="122" data-week="Sun" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">17</span>


                                                                </div>


                                                                <div data-index="123" data-week="Mon" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">18</span>


                                                                </div>


                                                                <div data-index="124" data-week="Tue" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">19</span>


                                                                </div>


                                                                <div data-index="125" data-week="Wed" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">20</span>


                                                                </div>


                                                                <div data-index="126" data-week="Thu" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">21</span>


                                                                </div>


                                                                <div data-index="127" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">22</span>


                                                                </div>


                                                                <div data-index="128" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">23</span>


                                                                </div>


                                                                <div data-index="129" data-week="Sun" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">24</span>


                                                                </div>


                                                                <div data-index="130" data-week="Mon" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="131" data-week="Tue" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="132" data-week="Wed" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="133" data-week="Thu" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="134" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="135" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide">
                                                        <div class="text-28 fw-500 text-center mb-10">May 2022</div>

                                                        <div class="table-calendar js-calendar-single">
                                                            <div class="table-calendar__header">
                                                                <div>Sun</div>
                                                                <div>Mon</div>
                                                                <div>Tue</div>
                                                                <div>Wed</div>
                                                                <div>Thu</div>
                                                                <div>Fri</div>
                                                                <div>Sat</div>
                                                            </div>

                                                            <div class="table-calendar__grid overflow-hidden">

                                                                <div data-index="136" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">1</span>


                                                                </div>


                                                                <div data-index="137" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="138" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="139" data-week="Wed" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="140" data-week="Thu" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="141" data-week="Fri" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="142" data-week="Sat" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="143" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="144" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">9</span>


                                                                </div>


                                                                <div data-index="145" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">10</span>


                                                                </div>


                                                                <div data-index="146" data-week="Wed" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">11</span>


                                                                </div>


                                                                <div data-index="147" data-week="Thu" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">12</span>


                                                                </div>


                                                                <div data-index="148" data-week="Fri" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">13</span>


                                                                </div>


                                                                <div data-index="149" data-week="Sat" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">14</span>


                                                                </div>


                                                                <div data-index="150" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">15</span>


                                                                </div>


                                                                <div data-index="151" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">16</span>


                                                                </div>


                                                                <div data-index="152" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">17</span>


                                                                </div>


                                                                <div data-index="153" data-week="Wed" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">18</span>


                                                                </div>


                                                                <div data-index="154" data-week="Thu" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">19</span>


                                                                </div>


                                                                <div data-index="155" data-week="Fri" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">20</span>


                                                                </div>


                                                                <div data-index="156" data-week="Sat" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">21</span>


                                                                </div>


                                                                <div data-index="157" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">22</span>


                                                                </div>


                                                                <div data-index="158" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">23</span>


                                                                </div>


                                                                <div data-index="159" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">24</span>


                                                                </div>


                                                                <div data-index="160" data-week="Wed" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="161" data-week="Thu" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="162" data-week="Fri" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="163" data-week="Sat" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="164" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="165" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="166" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide">
                                                        <div class="text-28 fw-500 text-center mb-10">June 2022</div>

                                                        <div class="table-calendar js-calendar-single">
                                                            <div class="table-calendar__header">
                                                                <div>Sun</div>
                                                                <div>Mon</div>
                                                                <div>Tue</div>
                                                                <div>Wed</div>
                                                                <div>Thu</div>
                                                                <div>Fri</div>
                                                                <div>Sat</div>
                                                            </div>

                                                            <div class="table-calendar__grid overflow-hidden">

                                                                <div data-index="167" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="168" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="169" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                                <div data-index="170" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">1</span>


                                                                </div>


                                                                <div data-index="171" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="172" data-week="Fri" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="173" data-week="Sat" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="174" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="175" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="176" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="177" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="178" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">9</span>


                                                                </div>


                                                                <div data-index="179" data-week="Fri" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">10</span>


                                                                </div>


                                                                <div data-index="180" data-week="Sat" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">11</span>


                                                                </div>


                                                                <div data-index="181" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">12</span>


                                                                </div>


                                                                <div data-index="182" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">13</span>


                                                                </div>


                                                                <div data-index="183" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">14</span>


                                                                </div>


                                                                <div data-index="184" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">15</span>


                                                                </div>


                                                                <div data-index="185" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">16</span>


                                                                </div>


                                                                <div data-index="186" data-week="Fri" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">17</span>


                                                                </div>


                                                                <div data-index="187" data-week="Sat" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">18</span>


                                                                </div>


                                                                <div data-index="188" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">19</span>


                                                                </div>


                                                                <div data-index="189" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">20</span>


                                                                </div>


                                                                <div data-index="190" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">21</span>


                                                                </div>


                                                                <div data-index="191" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">22</span>


                                                                </div>


                                                                <div data-index="192" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">23</span>


                                                                </div>


                                                                <div data-index="193" data-week="Fri" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">24</span>


                                                                </div>


                                                                <div data-index="194" data-week="Sat" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="195" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="196" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="197" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="198" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="199" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide">
                                                        <div class="text-28 fw-500 text-center mb-10">July 2022</div>

                                                        <div class="table-calendar js-calendar-single">
                                                            <div class="table-calendar__header">
                                                                <div>Sun</div>
                                                                <div>Mon</div>
                                                                <div>Tue</div>
                                                                <div>Wed</div>
                                                                <div>Thu</div>
                                                                <div>Fri</div>
                                                                <div>Sat</div>
                                                            </div>

                                                            <div class="table-calendar__grid overflow-hidden">

                                                                <div data-index="200" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="201" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="202" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="203" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="204" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="205" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">1</span>


                                                                </div>


                                                                <div data-index="206" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="207" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="208" data-week="Mon" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="209" data-week="Tue" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="210" data-week="Wed" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="211" data-week="Thu" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="212" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="213" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">9</span>


                                                                </div>


                                                                <div data-index="214" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">10</span>


                                                                </div>


                                                                <div data-index="215" data-week="Mon" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">11</span>


                                                                </div>


                                                                <div data-index="216" data-week="Tue" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">12</span>


                                                                </div>


                                                                <div data-index="217" data-week="Wed" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">13</span>


                                                                </div>


                                                                <div data-index="218" data-week="Thu" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">14</span>


                                                                </div>


                                                                <div data-index="219" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">15</span>


                                                                </div>


                                                                <div data-index="220" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">16</span>


                                                                </div>


                                                                <div data-index="221" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">17</span>


                                                                </div>


                                                                <div data-index="222" data-week="Mon" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">18</span>


                                                                </div>


                                                                <div data-index="223" data-week="Tue" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">19</span>


                                                                </div>


                                                                <div data-index="224" data-week="Wed" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">20</span>


                                                                </div>


                                                                <div data-index="225" data-week="Thu" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">21</span>


                                                                </div>


                                                                <div data-index="226" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">22</span>


                                                                </div>


                                                                <div data-index="227" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">23</span>


                                                                </div>


                                                                <div data-index="228" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">24</span>


                                                                </div>


                                                                <div data-index="229" data-week="Mon" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="230" data-week="Tue" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="231" data-week="Wed" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="232" data-week="Thu" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="233" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="234" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="235" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide">
                                                        <div class="text-28 fw-500 text-center mb-10">August 2022</div>

                                                        <div class="table-calendar js-calendar-single">
                                                            <div class="table-calendar__header">
                                                                <div>Sun</div>
                                                                <div>Mon</div>
                                                                <div>Tue</div>
                                                                <div>Wed</div>
                                                                <div>Thu</div>
                                                                <div>Fri</div>
                                                                <div>Sat</div>
                                                            </div>

                                                            <div class="table-calendar__grid overflow-hidden">

                                                                <div data-index="236" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                                <div data-index="237" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">1</span>


                                                                </div>


                                                                <div data-index="238" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="239" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="240" data-week="Thu" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="241" data-week="Fri" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="242" data-week="Sat" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="243" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="244" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="245" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">9</span>


                                                                </div>


                                                                <div data-index="246" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">10</span>


                                                                </div>


                                                                <div data-index="247" data-week="Thu" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">11</span>


                                                                </div>


                                                                <div data-index="248" data-week="Fri" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">12</span>


                                                                </div>


                                                                <div data-index="249" data-week="Sat" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">13</span>


                                                                </div>


                                                                <div data-index="250" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">14</span>


                                                                </div>


                                                                <div data-index="251" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">15</span>


                                                                </div>


                                                                <div data-index="252" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">16</span>


                                                                </div>


                                                                <div data-index="253" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">17</span>


                                                                </div>


                                                                <div data-index="254" data-week="Thu" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">18</span>


                                                                </div>


                                                                <div data-index="255" data-week="Fri" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">19</span>


                                                                </div>


                                                                <div data-index="256" data-week="Sat" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">20</span>


                                                                </div>


                                                                <div data-index="257" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">21</span>


                                                                </div>


                                                                <div data-index="258" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">22</span>


                                                                </div>


                                                                <div data-index="259" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">23</span>


                                                                </div>


                                                                <div data-index="260" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">24</span>


                                                                </div>


                                                                <div data-index="261" data-week="Thu" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="262" data-week="Fri" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="263" data-week="Sat" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="264" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="265" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="266" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="267" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide">
                                                        <div class="text-28 fw-500 text-center mb-10">September 2022</div>

                                                        <div class="table-calendar js-calendar-single">
                                                            <div class="table-calendar__header">
                                                                <div>Sun</div>
                                                                <div>Mon</div>
                                                                <div>Tue</div>
                                                                <div>Wed</div>
                                                                <div>Thu</div>
                                                                <div>Fri</div>
                                                                <div>Sat</div>
                                                            </div>

                                                            <div class="table-calendar__grid overflow-hidden">

                                                                <div data-index="268" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="269" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="270" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="271" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                                <div data-index="272" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">1</span>


                                                                </div>


                                                                <div data-index="273" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="274" data-week="Sat" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="275" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="276" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="277" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="278" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="279" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="280" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">9</span>


                                                                </div>


                                                                <div data-index="281" data-week="Sat" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">10</span>


                                                                </div>


                                                                <div data-index="282" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">11</span>


                                                                </div>


                                                                <div data-index="283" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">12</span>


                                                                </div>


                                                                <div data-index="284" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">13</span>


                                                                </div>


                                                                <div data-index="285" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">14</span>


                                                                </div>


                                                                <div data-index="286" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">15</span>


                                                                </div>


                                                                <div data-index="287" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">16</span>


                                                                </div>


                                                                <div data-index="288" data-week="Sat" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">17</span>


                                                                </div>


                                                                <div data-index="289" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">18</span>


                                                                </div>


                                                                <div data-index="290" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">19</span>


                                                                </div>


                                                                <div data-index="291" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">20</span>


                                                                </div>


                                                                <div data-index="292" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">21</span>


                                                                </div>


                                                                <div data-index="293" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">22</span>


                                                                </div>


                                                                <div data-index="294" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">23</span>


                                                                </div>


                                                                <div data-index="295" data-week="Sat" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">24</span>


                                                                </div>


                                                                <div data-index="296" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="297" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="298" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="299" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="300" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="301" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide">
                                                        <div class="text-28 fw-500 text-center mb-10">October 2022</div>

                                                        <div class="table-calendar js-calendar-single">
                                                            <div class="table-calendar__header">
                                                                <div>Sun</div>
                                                                <div>Mon</div>
                                                                <div>Tue</div>
                                                                <div>Wed</div>
                                                                <div>Thu</div>
                                                                <div>Fri</div>
                                                                <div>Sat</div>
                                                            </div>

                                                            <div class="table-calendar__grid overflow-hidden">

                                                                <div data-index="302" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="303" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="304" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="305" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="306" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="307" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="308" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">1</span>


                                                                </div>


                                                                <div data-index="309" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="310" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="311" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="312" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="313" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="314" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="315" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="316" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="317" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="318" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="319" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="320" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="321" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="322" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="323" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">9</span>


                                                                </div>


                                                                <div data-index="324" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">10</span>


                                                                </div>


                                                                <div data-index="325" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">11</span>


                                                                </div>


                                                                <div data-index="326" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">12</span>


                                                                </div>


                                                                <div data-index="327" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">13</span>


                                                                </div>


                                                                <div data-index="328" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">14</span>


                                                                </div>


                                                                <div data-index="329" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">15</span>


                                                                </div>


                                                                <div data-index="330" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">16</span>


                                                                </div>


                                                                <div data-index="331" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">17</span>


                                                                </div>


                                                                <div data-index="332" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">18</span>


                                                                </div>


                                                                <div data-index="333" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">19</span>


                                                                </div>


                                                                <div data-index="334" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">20</span>


                                                                </div>


                                                                <div data-index="335" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">21</span>


                                                                </div>


                                                                <div data-index="336" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">22</span>


                                                                </div>


                                                                <div data-index="337" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">23</span>


                                                                </div>


                                                                <div data-index="338" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">24</span>


                                                                </div>


                                                                <div data-index="339" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="340" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="341" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="342" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="343" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="344" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="345" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide">
                                                        <div class="text-28 fw-500 text-center mb-10">November 2022</div>

                                                        <div class="table-calendar js-calendar-single">
                                                            <div class="table-calendar__header">
                                                                <div>Sun</div>
                                                                <div>Mon</div>
                                                                <div>Tue</div>
                                                                <div>Wed</div>
                                                                <div>Thu</div>
                                                                <div>Fri</div>
                                                                <div>Sat</div>
                                                            </div>

                                                            <div class="table-calendar__grid overflow-hidden">

                                                                <div data-index="346" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="347" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                                <div data-index="348" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">1</span>


                                                                </div>


                                                                <div data-index="349" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="350" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="351" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="352" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="353" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="354" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="355" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="356" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="357" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="358" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="359" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="360" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="361" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="362" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="363" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">9</span>


                                                                </div>


                                                                <div data-index="364" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">10</span>


                                                                </div>


                                                                <div data-index="365" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">11</span>


                                                                </div>


                                                                <div data-index="366" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">12</span>


                                                                </div>


                                                                <div data-index="367" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">13</span>


                                                                </div>


                                                                <div data-index="368" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">14</span>


                                                                </div>


                                                                <div data-index="369" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">15</span>


                                                                </div>


                                                                <div data-index="370" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">16</span>


                                                                </div>


                                                                <div data-index="371" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">17</span>


                                                                </div>


                                                                <div data-index="372" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">18</span>


                                                                </div>


                                                                <div data-index="373" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">19</span>


                                                                </div>


                                                                <div data-index="374" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">20</span>


                                                                </div>


                                                                <div data-index="375" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">21</span>


                                                                </div>


                                                                <div data-index="376" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">22</span>


                                                                </div>


                                                                <div data-index="377" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">23</span>


                                                                </div>


                                                                <div data-index="378" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">24</span>


                                                                </div>


                                                                <div data-index="379" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="380" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="381" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="382" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="383" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="384" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide">
                                                        <div class="text-28 fw-500 text-center mb-10">December 2022</div>

                                                        <div class="table-calendar js-calendar-single">
                                                            <div class="table-calendar__header">
                                                                <div>Sun</div>
                                                                <div>Mon</div>
                                                                <div>Tue</div>
                                                                <div>Wed</div>
                                                                <div>Thu</div>
                                                                <div>Fri</div>
                                                                <div>Sat</div>
                                                            </div>

                                                            <div class="table-calendar__grid overflow-hidden">

                                                                <div data-index="385" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="386" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="387" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="388" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 text-light-1">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="389" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">1</span>


                                                                </div>


                                                                <div data-index="390" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="391" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="392" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="393" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="394" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="395" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="396" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="397" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">2</span>


                                                                </div>


                                                                <div data-index="398" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">3</span>


                                                                </div>


                                                                <div data-index="399" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">4</span>


                                                                </div>


                                                                <div data-index="400" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">5</span>


                                                                </div>


                                                                <div data-index="401" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">6</span>


                                                                </div>


                                                                <div data-index="402" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">7</span>


                                                                </div>


                                                                <div data-index="403" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">8</span>


                                                                </div>


                                                                <div data-index="404" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">9</span>


                                                                </div>


                                                                <div data-index="405" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">10</span>


                                                                </div>


                                                                <div data-index="406" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">11</span>


                                                                </div>


                                                                <div data-index="407" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">12</span>


                                                                </div>


                                                                <div data-index="408" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">13</span>


                                                                </div>


                                                                <div data-index="409" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">14</span>


                                                                </div>


                                                                <div data-index="410" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">15</span>


                                                                </div>


                                                                <div data-index="411" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">16</span>


                                                                </div>


                                                                <div data-index="412" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">17</span>


                                                                </div>


                                                                <div data-index="413" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">18</span>


                                                                </div>


                                                                <div data-index="414" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">19</span>


                                                                </div>


                                                                <div data-index="415" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">20</span>


                                                                </div>


                                                                <div data-index="416" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">21</span>


                                                                </div>


                                                                <div data-index="417" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">22</span>


                                                                </div>


                                                                <div data-index="418" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">23</span>


                                                                </div>


                                                                <div data-index="419" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">24</span>


                                                                </div>


                                                                <div data-index="420" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">25</span>


                                                                </div>


                                                                <div data-index="421" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">26</span>


                                                                </div>


                                                                <div data-index="422" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">27</span>


                                                                </div>


                                                                <div data-index="423" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">28</span>


                                                                </div>


                                                                <div data-index="424" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">29</span>


                                                                </div>


                                                                <div data-index="425" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">30</span>


                                                                </div>


                                                                <div data-index="426" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                                    <span class="js-date">31</span>


                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <button class="calendar-icon -left js-calendar-prev z-2">
                                                    <i class="icon-arrow-left text-24"></i>
                                                </button>

                                                <button class="calendar-icon -right js-calendar-next z-2">
                                                    <i class="icon-arrow-right text-24"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="searchMenu-guests px-30 lg:py-20 lg:px-0 js-form-dd js-form-counters">

                                    <div data-x-dd-click="searchMenu-guests">
                                        <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <span class="js-count-adult">2</span> adults
                                            -
                                            <span class="js-count-child">1</span> childeren
                                            -
                                            <span class="js-count-room">1</span> room
                                        </div>
                                    </div>


                                    <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                                        <div class="bg-white px-30 py-30 rounded-4">
                                            <div class="row y-gap-10 justify-between items-center">
                                                <div class="col-auto">
                                                    <div class="text-15 fw-500">Adults</div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                            <i class="icon-minus text-12"></i>
                                                        </button>

                                                        <div class="flex-center size-20 ml-15 mr-15">
                                                            <div class="text-15 js-count">2</div>
                                                        </div>

                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                            <i class="icon-plus text-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-top-light mt-24 mb-24"></div>

                                            <div class="row y-gap-10 justify-between items-center">
                                                <div class="col-auto">
                                                    <div class="text-15 lh-12 fw-500">Children</div>
                                                    <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                            <i class="icon-minus text-12"></i>
                                                        </button>

                                                        <div class="flex-center size-20 ml-15 mr-15">
                                                            <div class="text-15 js-count">1</div>
                                                        </div>

                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                            <i class="icon-plus text-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-top-light mt-24 mb-24"></div>

                                            <div class="row y-gap-10 justify-between items-center">
                                                <div class="col-auto">
                                                    <div class="text-15 fw-500">Rooms</div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                            <i class="icon-minus text-12"></i>
                                                        </button>

                                                        <div class="flex-center size-20 ml-15 mr-15">
                                                            <div class="text-15 js-count">1</div>
                                                        </div>

                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                            <i class="icon-plus text-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="button-item">
                                    <button class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-4 bg-blue-1 text-white">
                                        <i class="icon-search text-20 mr-10"></i>
                                        Check availability
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="singleMenu__content">
            <div class="container">
                <div class="row y-gap-20 justify-between items-center">
                    <div class="col-auto">
                        <div class="singleMenu__links row x-gap-30 y-gap-10">
                            <div class="col-auto">
                                <a href="#overview">Overview</a>
                            </div>
                            <div class="col-auto">
                                <a href="#rooms">Rooms</a>
                            </div>
                            <div class="col-auto">
                                <a href="#reviews">Reviews</a>
                            </div>
                            <div class="col-auto">
                                <a href="#facilities">Facilities</a>
                            </div>
                            <div class="col-auto">
                                <a href="#faq">Faq</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="row x-gap-15 y-gap-15 items-center">
                            <div class="col-auto">
                                <div class="text-14">
                                    From
                                    <span class="text-22 text-dark-1 fw-500">US$72</span>
                                </div>
                            </div>

                            <div class="col-auto">

                                <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                    Select Room <div class="icon-arrow-top-right ml-15"></div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-10 bg-dark-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mainSearch bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-4">
                    <div class="button-grid items-center">

                        <div class="searchMenu-loc pl-10 pr-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                            <div data-x-dd-click="searchMenu-loc">
                                <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                                <div class="text-15 text-light-1 ls-2 lh-16">
                                    <input autocomplete="off" type="search" placeholder="Warwick Allerton Hotel Chicago" class="js-search js-dd-focus" />
                                </div>
                            </div>


                            <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                                    <div class="y-gap-5 js-results">

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="searchMenu-date px-30 lg:py-20 lg:px-0 js-form-dd js-calendar">

                            <div data-x-dd-click="searchMenu-date">
                                <h4 class="text-15 fw-500 ls-2 lh-16">Check in - Check out</h4>

                                <div class="text-15 text-light-1 ls-2 lh-16">
                                    <span class="js-first-date">Wed 2 Mar</span>
                                    -
                                    <span class="js-last-date">Fri 11 Apr</span>
                                </div>
                            </div>


                            <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                                <div class="bg-white px-30 py-30 rounded-4">
                                    <div class="overflow-hidden js-calendar-slider">
                                        <div class="swiper-wrapper">


                                            <div class="swiper-slide">
                                                <div class="text-28 fw-500 text-center mb-10">January 2022</div>

                                                <div class="table-calendar js-calendar-single">
                                                    <div class="table-calendar__header">
                                                        <div>Sun</div>
                                                        <div>Mon</div>
                                                        <div>Tue</div>
                                                        <div>Wed</div>
                                                        <div>Thu</div>
                                                        <div>Fri</div>
                                                        <div>Sat</div>
                                                    </div>

                                                    <div class="table-calendar__grid overflow-hidden">

                                                        <div data-index="1" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="2" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="3" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="4" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="5" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="6" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                        <div data-index="7" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">1</span>


                                                        </div>


                                                        <div data-index="8" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="9" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="10" data-week="Tue" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="11" data-week="Wed" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="12" data-week="Thu" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="13" data-week="Fri" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="14" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="15" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">9</span>


                                                        </div>


                                                        <div data-index="16" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">10</span>


                                                        </div>


                                                        <div data-index="17" data-week="Tue" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">11</span>


                                                        </div>


                                                        <div data-index="18" data-week="Wed" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">12</span>


                                                        </div>


                                                        <div data-index="19" data-week="Thu" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">13</span>


                                                        </div>


                                                        <div data-index="20" data-week="Fri" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">14</span>


                                                        </div>


                                                        <div data-index="21" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">15</span>


                                                        </div>


                                                        <div data-index="22" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">16</span>


                                                        </div>


                                                        <div data-index="23" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">17</span>


                                                        </div>


                                                        <div data-index="24" data-week="Tue" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">18</span>


                                                        </div>


                                                        <div data-index="25" data-week="Wed" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">19</span>


                                                        </div>


                                                        <div data-index="26" data-week="Thu" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">20</span>


                                                        </div>


                                                        <div data-index="27" data-week="Fri" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">21</span>


                                                        </div>


                                                        <div data-index="28" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">22</span>


                                                        </div>


                                                        <div data-index="29" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">23</span>


                                                        </div>


                                                        <div data-index="30" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">24</span>


                                                        </div>


                                                        <div data-index="31" data-week="Tue" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="32" data-week="Wed" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="33" data-week="Thu" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="34" data-week="Fri" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="35" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="36" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="37" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="text-28 fw-500 text-center mb-10">February 2022</div>

                                                <div class="table-calendar js-calendar-single">
                                                    <div class="table-calendar__header">
                                                        <div>Sun</div>
                                                        <div>Mon</div>
                                                        <div>Tue</div>
                                                        <div>Wed</div>
                                                        <div>Thu</div>
                                                        <div>Fri</div>
                                                        <div>Sat</div>
                                                    </div>

                                                    <div class="table-calendar__grid overflow-hidden">

                                                        <div data-index="38" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="39" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                        <div data-index="40" data-week="Tue" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">1</span>


                                                        </div>


                                                        <div data-index="41" data-week="Wed" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="42" data-week="Thu" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="43" data-week="Fri" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="44" data-week="Sat" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="45" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="46" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="47" data-week="Tue" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="48" data-week="Wed" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">9</span>


                                                        </div>


                                                        <div data-index="49" data-week="Thu" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">10</span>


                                                        </div>


                                                        <div data-index="50" data-week="Fri" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">11</span>


                                                        </div>


                                                        <div data-index="51" data-week="Sat" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">12</span>


                                                        </div>


                                                        <div data-index="52" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">13</span>


                                                        </div>


                                                        <div data-index="53" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">14</span>


                                                        </div>


                                                        <div data-index="54" data-week="Tue" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">15</span>


                                                        </div>


                                                        <div data-index="55" data-week="Wed" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">16</span>


                                                        </div>


                                                        <div data-index="56" data-week="Thu" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">17</span>


                                                        </div>


                                                        <div data-index="57" data-week="Fri" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">18</span>


                                                        </div>


                                                        <div data-index="58" data-week="Sat" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">19</span>


                                                        </div>


                                                        <div data-index="59" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">20</span>


                                                        </div>


                                                        <div data-index="60" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">21</span>


                                                        </div>


                                                        <div data-index="61" data-week="Tue" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">22</span>


                                                        </div>


                                                        <div data-index="62" data-week="Wed" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">23</span>


                                                        </div>


                                                        <div data-index="63" data-week="Thu" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">24</span>


                                                        </div>


                                                        <div data-index="64" data-week="Fri" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="65" data-week="Sat" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="66" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="67" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="text-28 fw-500 text-center mb-10">March 2022</div>

                                                <div class="table-calendar js-calendar-single">
                                                    <div class="table-calendar__header">
                                                        <div>Sun</div>
                                                        <div>Mon</div>
                                                        <div>Tue</div>
                                                        <div>Wed</div>
                                                        <div>Thu</div>
                                                        <div>Fri</div>
                                                        <div>Sat</div>
                                                    </div>

                                                    <div class="table-calendar__grid overflow-hidden">

                                                        <div data-index="68" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="69" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="70" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">1</span>


                                                        </div>


                                                        <div data-index="71" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="72" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="73" data-week="Fri" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="74" data-week="Sat" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="75" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="76" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="77" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="78" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">9</span>


                                                        </div>


                                                        <div data-index="79" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">10</span>


                                                        </div>


                                                        <div data-index="80" data-week="Fri" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">11</span>


                                                        </div>


                                                        <div data-index="81" data-week="Sat" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">12</span>


                                                        </div>


                                                        <div data-index="82" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">13</span>


                                                        </div>


                                                        <div data-index="83" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">14</span>


                                                        </div>


                                                        <div data-index="84" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">15</span>


                                                        </div>


                                                        <div data-index="85" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">16</span>


                                                        </div>


                                                        <div data-index="86" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">17</span>


                                                        </div>


                                                        <div data-index="87" data-week="Fri" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">18</span>


                                                        </div>


                                                        <div data-index="88" data-week="Sat" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">19</span>


                                                        </div>


                                                        <div data-index="89" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">20</span>


                                                        </div>


                                                        <div data-index="90" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">21</span>


                                                        </div>


                                                        <div data-index="91" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">22</span>


                                                        </div>


                                                        <div data-index="92" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">23</span>


                                                        </div>


                                                        <div data-index="93" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">24</span>


                                                        </div>


                                                        <div data-index="94" data-week="Fri" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="95" data-week="Sat" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="96" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="97" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="98" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="99" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="100" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="text-28 fw-500 text-center mb-10">April 2022</div>

                                                <div class="table-calendar js-calendar-single">
                                                    <div class="table-calendar__header">
                                                        <div>Sun</div>
                                                        <div>Mon</div>
                                                        <div>Tue</div>
                                                        <div>Wed</div>
                                                        <div>Thu</div>
                                                        <div>Fri</div>
                                                        <div>Sat</div>
                                                    </div>

                                                    <div class="table-calendar__grid overflow-hidden">

                                                        <div data-index="101" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="102" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="103" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="104" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="105" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                        <div data-index="106" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">1</span>


                                                        </div>


                                                        <div data-index="107" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="108" data-week="Sun" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="109" data-week="Mon" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="110" data-week="Tue" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="111" data-week="Wed" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="112" data-week="Thu" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="113" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="114" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">9</span>


                                                        </div>


                                                        <div data-index="115" data-week="Sun" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">10</span>


                                                        </div>


                                                        <div data-index="116" data-week="Mon" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">11</span>


                                                        </div>


                                                        <div data-index="117" data-week="Tue" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">12</span>


                                                        </div>


                                                        <div data-index="118" data-week="Wed" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">13</span>


                                                        </div>


                                                        <div data-index="119" data-week="Thu" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">14</span>


                                                        </div>


                                                        <div data-index="120" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">15</span>


                                                        </div>


                                                        <div data-index="121" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">16</span>


                                                        </div>


                                                        <div data-index="122" data-week="Sun" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">17</span>


                                                        </div>


                                                        <div data-index="123" data-week="Mon" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">18</span>


                                                        </div>


                                                        <div data-index="124" data-week="Tue" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">19</span>


                                                        </div>


                                                        <div data-index="125" data-week="Wed" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">20</span>


                                                        </div>


                                                        <div data-index="126" data-week="Thu" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">21</span>


                                                        </div>


                                                        <div data-index="127" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">22</span>


                                                        </div>


                                                        <div data-index="128" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">23</span>


                                                        </div>


                                                        <div data-index="129" data-week="Sun" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">24</span>


                                                        </div>


                                                        <div data-index="130" data-week="Mon" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="131" data-week="Tue" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="132" data-week="Wed" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="133" data-week="Thu" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="134" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="135" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="text-28 fw-500 text-center mb-10">May 2022</div>

                                                <div class="table-calendar js-calendar-single">
                                                    <div class="table-calendar__header">
                                                        <div>Sun</div>
                                                        <div>Mon</div>
                                                        <div>Tue</div>
                                                        <div>Wed</div>
                                                        <div>Thu</div>
                                                        <div>Fri</div>
                                                        <div>Sat</div>
                                                    </div>

                                                    <div class="table-calendar__grid overflow-hidden">

                                                        <div data-index="136" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">1</span>


                                                        </div>


                                                        <div data-index="137" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="138" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="139" data-week="Wed" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="140" data-week="Thu" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="141" data-week="Fri" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="142" data-week="Sat" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="143" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="144" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">9</span>


                                                        </div>


                                                        <div data-index="145" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">10</span>


                                                        </div>


                                                        <div data-index="146" data-week="Wed" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">11</span>


                                                        </div>


                                                        <div data-index="147" data-week="Thu" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">12</span>


                                                        </div>


                                                        <div data-index="148" data-week="Fri" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">13</span>


                                                        </div>


                                                        <div data-index="149" data-week="Sat" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">14</span>


                                                        </div>


                                                        <div data-index="150" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">15</span>


                                                        </div>


                                                        <div data-index="151" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">16</span>


                                                        </div>


                                                        <div data-index="152" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">17</span>


                                                        </div>


                                                        <div data-index="153" data-week="Wed" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">18</span>


                                                        </div>


                                                        <div data-index="154" data-week="Thu" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">19</span>


                                                        </div>


                                                        <div data-index="155" data-week="Fri" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">20</span>


                                                        </div>


                                                        <div data-index="156" data-week="Sat" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">21</span>


                                                        </div>


                                                        <div data-index="157" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">22</span>


                                                        </div>


                                                        <div data-index="158" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">23</span>


                                                        </div>


                                                        <div data-index="159" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">24</span>


                                                        </div>


                                                        <div data-index="160" data-week="Wed" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="161" data-week="Thu" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="162" data-week="Fri" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="163" data-week="Sat" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="164" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="165" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="166" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="text-28 fw-500 text-center mb-10">June 2022</div>

                                                <div class="table-calendar js-calendar-single">
                                                    <div class="table-calendar__header">
                                                        <div>Sun</div>
                                                        <div>Mon</div>
                                                        <div>Tue</div>
                                                        <div>Wed</div>
                                                        <div>Thu</div>
                                                        <div>Fri</div>
                                                        <div>Sat</div>
                                                    </div>

                                                    <div class="table-calendar__grid overflow-hidden">

                                                        <div data-index="167" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="168" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="169" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                        <div data-index="170" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">1</span>


                                                        </div>


                                                        <div data-index="171" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="172" data-week="Fri" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="173" data-week="Sat" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="174" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="175" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="176" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="177" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="178" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">9</span>


                                                        </div>


                                                        <div data-index="179" data-week="Fri" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">10</span>


                                                        </div>


                                                        <div data-index="180" data-week="Sat" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">11</span>


                                                        </div>


                                                        <div data-index="181" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">12</span>


                                                        </div>


                                                        <div data-index="182" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">13</span>


                                                        </div>


                                                        <div data-index="183" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">14</span>


                                                        </div>


                                                        <div data-index="184" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">15</span>


                                                        </div>


                                                        <div data-index="185" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">16</span>


                                                        </div>


                                                        <div data-index="186" data-week="Fri" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">17</span>


                                                        </div>


                                                        <div data-index="187" data-week="Sat" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">18</span>


                                                        </div>


                                                        <div data-index="188" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">19</span>


                                                        </div>


                                                        <div data-index="189" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">20</span>


                                                        </div>


                                                        <div data-index="190" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">21</span>


                                                        </div>


                                                        <div data-index="191" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">22</span>


                                                        </div>


                                                        <div data-index="192" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">23</span>


                                                        </div>


                                                        <div data-index="193" data-week="Fri" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">24</span>


                                                        </div>


                                                        <div data-index="194" data-week="Sat" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="195" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="196" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="197" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="198" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="199" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="text-28 fw-500 text-center mb-10">July 2022</div>

                                                <div class="table-calendar js-calendar-single">
                                                    <div class="table-calendar__header">
                                                        <div>Sun</div>
                                                        <div>Mon</div>
                                                        <div>Tue</div>
                                                        <div>Wed</div>
                                                        <div>Thu</div>
                                                        <div>Fri</div>
                                                        <div>Sat</div>
                                                    </div>

                                                    <div class="table-calendar__grid overflow-hidden">

                                                        <div data-index="200" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="201" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="202" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="203" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="204" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="205" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">1</span>


                                                        </div>


                                                        <div data-index="206" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="207" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="208" data-week="Mon" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="209" data-week="Tue" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="210" data-week="Wed" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="211" data-week="Thu" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="212" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="213" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">9</span>


                                                        </div>


                                                        <div data-index="214" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">10</span>


                                                        </div>


                                                        <div data-index="215" data-week="Mon" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">11</span>


                                                        </div>


                                                        <div data-index="216" data-week="Tue" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">12</span>


                                                        </div>


                                                        <div data-index="217" data-week="Wed" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">13</span>


                                                        </div>


                                                        <div data-index="218" data-week="Thu" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">14</span>


                                                        </div>


                                                        <div data-index="219" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">15</span>


                                                        </div>


                                                        <div data-index="220" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">16</span>


                                                        </div>


                                                        <div data-index="221" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">17</span>


                                                        </div>


                                                        <div data-index="222" data-week="Mon" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">18</span>


                                                        </div>


                                                        <div data-index="223" data-week="Tue" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">19</span>


                                                        </div>


                                                        <div data-index="224" data-week="Wed" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">20</span>


                                                        </div>


                                                        <div data-index="225" data-week="Thu" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">21</span>


                                                        </div>


                                                        <div data-index="226" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">22</span>


                                                        </div>


                                                        <div data-index="227" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">23</span>


                                                        </div>


                                                        <div data-index="228" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">24</span>


                                                        </div>


                                                        <div data-index="229" data-week="Mon" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="230" data-week="Tue" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="231" data-week="Wed" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="232" data-week="Thu" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="233" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="234" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="235" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="text-28 fw-500 text-center mb-10">August 2022</div>

                                                <div class="table-calendar js-calendar-single">
                                                    <div class="table-calendar__header">
                                                        <div>Sun</div>
                                                        <div>Mon</div>
                                                        <div>Tue</div>
                                                        <div>Wed</div>
                                                        <div>Thu</div>
                                                        <div>Fri</div>
                                                        <div>Sat</div>
                                                    </div>

                                                    <div class="table-calendar__grid overflow-hidden">

                                                        <div data-index="236" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                        <div data-index="237" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">1</span>


                                                        </div>


                                                        <div data-index="238" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="239" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="240" data-week="Thu" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="241" data-week="Fri" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="242" data-week="Sat" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="243" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="244" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="245" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">9</span>


                                                        </div>


                                                        <div data-index="246" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">10</span>


                                                        </div>


                                                        <div data-index="247" data-week="Thu" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">11</span>


                                                        </div>


                                                        <div data-index="248" data-week="Fri" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">12</span>


                                                        </div>


                                                        <div data-index="249" data-week="Sat" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">13</span>


                                                        </div>


                                                        <div data-index="250" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">14</span>


                                                        </div>


                                                        <div data-index="251" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">15</span>


                                                        </div>


                                                        <div data-index="252" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">16</span>


                                                        </div>


                                                        <div data-index="253" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">17</span>


                                                        </div>


                                                        <div data-index="254" data-week="Thu" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">18</span>


                                                        </div>


                                                        <div data-index="255" data-week="Fri" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">19</span>


                                                        </div>


                                                        <div data-index="256" data-week="Sat" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">20</span>


                                                        </div>


                                                        <div data-index="257" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">21</span>


                                                        </div>


                                                        <div data-index="258" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">22</span>


                                                        </div>


                                                        <div data-index="259" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">23</span>


                                                        </div>


                                                        <div data-index="260" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">24</span>


                                                        </div>


                                                        <div data-index="261" data-week="Thu" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="262" data-week="Fri" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="263" data-week="Sat" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="264" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="265" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="266" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="267" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="text-28 fw-500 text-center mb-10">September 2022</div>

                                                <div class="table-calendar js-calendar-single">
                                                    <div class="table-calendar__header">
                                                        <div>Sun</div>
                                                        <div>Mon</div>
                                                        <div>Tue</div>
                                                        <div>Wed</div>
                                                        <div>Thu</div>
                                                        <div>Fri</div>
                                                        <div>Sat</div>
                                                    </div>

                                                    <div class="table-calendar__grid overflow-hidden">

                                                        <div data-index="268" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="269" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="270" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="271" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                        <div data-index="272" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">1</span>


                                                        </div>


                                                        <div data-index="273" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="274" data-week="Sat" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="275" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="276" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="277" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="278" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="279" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="280" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">9</span>


                                                        </div>


                                                        <div data-index="281" data-week="Sat" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">10</span>


                                                        </div>


                                                        <div data-index="282" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">11</span>


                                                        </div>


                                                        <div data-index="283" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">12</span>


                                                        </div>


                                                        <div data-index="284" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">13</span>


                                                        </div>


                                                        <div data-index="285" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">14</span>


                                                        </div>


                                                        <div data-index="286" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">15</span>


                                                        </div>


                                                        <div data-index="287" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">16</span>


                                                        </div>


                                                        <div data-index="288" data-week="Sat" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">17</span>


                                                        </div>


                                                        <div data-index="289" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">18</span>


                                                        </div>


                                                        <div data-index="290" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">19</span>


                                                        </div>


                                                        <div data-index="291" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">20</span>


                                                        </div>


                                                        <div data-index="292" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">21</span>


                                                        </div>


                                                        <div data-index="293" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">22</span>


                                                        </div>


                                                        <div data-index="294" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">23</span>


                                                        </div>


                                                        <div data-index="295" data-week="Sat" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">24</span>


                                                        </div>


                                                        <div data-index="296" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="297" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="298" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="299" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="300" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="301" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="text-28 fw-500 text-center mb-10">October 2022</div>

                                                <div class="table-calendar js-calendar-single">
                                                    <div class="table-calendar__header">
                                                        <div>Sun</div>
                                                        <div>Mon</div>
                                                        <div>Tue</div>
                                                        <div>Wed</div>
                                                        <div>Thu</div>
                                                        <div>Fri</div>
                                                        <div>Sat</div>
                                                    </div>

                                                    <div class="table-calendar__grid overflow-hidden">

                                                        <div data-index="302" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="303" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="304" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="305" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="306" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="307" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="308" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">1</span>


                                                        </div>


                                                        <div data-index="309" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="310" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="311" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="312" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="313" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="314" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="315" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="316" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="317" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="318" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="319" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="320" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="321" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="322" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="323" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">9</span>


                                                        </div>


                                                        <div data-index="324" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">10</span>


                                                        </div>


                                                        <div data-index="325" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">11</span>


                                                        </div>


                                                        <div data-index="326" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">12</span>


                                                        </div>


                                                        <div data-index="327" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">13</span>


                                                        </div>


                                                        <div data-index="328" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">14</span>


                                                        </div>


                                                        <div data-index="329" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">15</span>


                                                        </div>


                                                        <div data-index="330" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">16</span>


                                                        </div>


                                                        <div data-index="331" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">17</span>


                                                        </div>


                                                        <div data-index="332" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">18</span>


                                                        </div>


                                                        <div data-index="333" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">19</span>


                                                        </div>


                                                        <div data-index="334" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">20</span>


                                                        </div>


                                                        <div data-index="335" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">21</span>


                                                        </div>


                                                        <div data-index="336" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">22</span>


                                                        </div>


                                                        <div data-index="337" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">23</span>


                                                        </div>


                                                        <div data-index="338" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">24</span>


                                                        </div>


                                                        <div data-index="339" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="340" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="341" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="342" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="343" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="344" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="345" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="text-28 fw-500 text-center mb-10">November 2022</div>

                                                <div class="table-calendar js-calendar-single">
                                                    <div class="table-calendar__header">
                                                        <div>Sun</div>
                                                        <div>Mon</div>
                                                        <div>Tue</div>
                                                        <div>Wed</div>
                                                        <div>Thu</div>
                                                        <div>Fri</div>
                                                        <div>Sat</div>
                                                    </div>

                                                    <div class="table-calendar__grid overflow-hidden">

                                                        <div data-index="346" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="347" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                        <div data-index="348" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">1</span>


                                                        </div>


                                                        <div data-index="349" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="350" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="351" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="352" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="353" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="354" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="355" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="356" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="357" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="358" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="359" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="360" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="361" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="362" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="363" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">9</span>


                                                        </div>


                                                        <div data-index="364" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">10</span>


                                                        </div>


                                                        <div data-index="365" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">11</span>


                                                        </div>


                                                        <div data-index="366" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">12</span>


                                                        </div>


                                                        <div data-index="367" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">13</span>


                                                        </div>


                                                        <div data-index="368" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">14</span>


                                                        </div>


                                                        <div data-index="369" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">15</span>


                                                        </div>


                                                        <div data-index="370" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">16</span>


                                                        </div>


                                                        <div data-index="371" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">17</span>


                                                        </div>


                                                        <div data-index="372" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">18</span>


                                                        </div>


                                                        <div data-index="373" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">19</span>


                                                        </div>


                                                        <div data-index="374" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">20</span>


                                                        </div>


                                                        <div data-index="375" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">21</span>


                                                        </div>


                                                        <div data-index="376" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">22</span>


                                                        </div>


                                                        <div data-index="377" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">23</span>


                                                        </div>


                                                        <div data-index="378" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">24</span>


                                                        </div>


                                                        <div data-index="379" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="380" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="381" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="382" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="383" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="384" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="text-28 fw-500 text-center mb-10">December 2022</div>

                                                <div class="table-calendar js-calendar-single">
                                                    <div class="table-calendar__header">
                                                        <div>Sun</div>
                                                        <div>Mon</div>
                                                        <div>Tue</div>
                                                        <div>Wed</div>
                                                        <div>Thu</div>
                                                        <div>Fri</div>
                                                        <div>Sat</div>
                                                    </div>

                                                    <div class="table-calendar__grid overflow-hidden">

                                                        <div data-index="385" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="386" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="387" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="388" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 text-light-1">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="389" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">1</span>


                                                        </div>


                                                        <div data-index="390" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="391" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="392" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="393" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="394" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="395" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="396" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="397" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">2</span>


                                                        </div>


                                                        <div data-index="398" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">3</span>


                                                        </div>


                                                        <div data-index="399" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">4</span>


                                                        </div>


                                                        <div data-index="400" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">5</span>


                                                        </div>


                                                        <div data-index="401" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">6</span>


                                                        </div>


                                                        <div data-index="402" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">7</span>


                                                        </div>


                                                        <div data-index="403" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">8</span>


                                                        </div>


                                                        <div data-index="404" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">9</span>


                                                        </div>


                                                        <div data-index="405" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">10</span>


                                                        </div>


                                                        <div data-index="406" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">11</span>


                                                        </div>


                                                        <div data-index="407" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">12</span>


                                                        </div>


                                                        <div data-index="408" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">13</span>


                                                        </div>


                                                        <div data-index="409" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">14</span>


                                                        </div>


                                                        <div data-index="410" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">15</span>


                                                        </div>


                                                        <div data-index="411" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">16</span>


                                                        </div>


                                                        <div data-index="412" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">17</span>


                                                        </div>


                                                        <div data-index="413" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">18</span>


                                                        </div>


                                                        <div data-index="414" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">19</span>


                                                        </div>


                                                        <div data-index="415" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">20</span>


                                                        </div>


                                                        <div data-index="416" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">21</span>


                                                        </div>


                                                        <div data-index="417" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">22</span>


                                                        </div>


                                                        <div data-index="418" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">23</span>


                                                        </div>


                                                        <div data-index="419" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">24</span>


                                                        </div>


                                                        <div data-index="420" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">25</span>


                                                        </div>


                                                        <div data-index="421" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">26</span>


                                                        </div>


                                                        <div data-index="422" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">27</span>


                                                        </div>


                                                        <div data-index="423" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">28</span>


                                                        </div>


                                                        <div data-index="424" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">29</span>


                                                        </div>


                                                        <div data-index="425" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">30</span>


                                                        </div>


                                                        <div data-index="426" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                                            <span class="js-date">31</span>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <button class="calendar-icon -left js-calendar-prev z-2">
                                            <i class="icon-arrow-left text-24"></i>
                                        </button>

                                        <button class="calendar-icon -right js-calendar-next z-2">
                                            <i class="icon-arrow-right text-24"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="searchMenu-guests px-30 lg:py-20 lg:px-0 js-form-dd js-form-counters">

                            <div data-x-dd-click="searchMenu-guests">
                                <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                                <div class="text-15 text-light-1 ls-2 lh-16">
                                    <span class="js-count-adult">2</span> adults
                                    -
                                    <span class="js-count-child">1</span> childeren
                                    -
                                    <span class="js-count-room">1</span> room
                                </div>
                            </div>


                            <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                                <div class="bg-white px-30 py-30 rounded-4">
                                    <div class="row y-gap-10 justify-between items-center">
                                        <div class="col-auto">
                                            <div class="text-15 fw-500">Adults</div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                                                <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                    <i class="icon-minus text-12"></i>
                                                </button>

                                                <div class="flex-center size-20 ml-15 mr-15">
                                                    <div class="text-15 js-count">2</div>
                                                </div>

                                                <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                    <i class="icon-plus text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top-light mt-24 mb-24"></div>

                                    <div class="row y-gap-10 justify-between items-center">
                                        <div class="col-auto">
                                            <div class="text-15 lh-12 fw-500">Children</div>
                                            <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                                                <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                    <i class="icon-minus text-12"></i>
                                                </button>

                                                <div class="flex-center size-20 ml-15 mr-15">
                                                    <div class="text-15 js-count">1</div>
                                                </div>

                                                <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                    <i class="icon-plus text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top-light mt-24 mb-24"></div>

                                    <div class="row y-gap-10 justify-between items-center">
                                        <div class="col-auto">
                                            <div class="text-15 fw-500">Rooms</div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                                                <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                    <i class="icon-minus text-12"></i>
                                                </button>

                                                <div class="flex-center size-20 ml-15 mr-15">
                                                    <div class="text-15 js-count">1</div>
                                                </div>

                                                <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                    <i class="icon-plus text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="button-item">
                            <button class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-4 bg-blue-1 text-white">
                                <i class="icon-search text-20 mr-10"></i>
                                Check availability
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-10 d-flex items-center bg-light-2">
    <div class="container">
        <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
                <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
                    <div class="col-auto">
                        <div class="">Home</div>
                    </div>
                    <div class="col-auto">
                        <div class="">></div>
                    </div>
                    <div class="col-auto">
                        <div class="">London Hotels</div>
                    </div>
                    <div class="col-auto">
                        <div class="">></div>
                    </div>
                    <div class="col-auto">
                        <div class="text-dark-1">Great Northern Hotel, a Tribute Portfolio Hotel, London</div>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <a href="#" class="text-14 text-blue-1 underline">All Hotel in London</a>
            </div>
        </div>
    </div>
</section>

<section class="pt-40">
    <div class="container">
        <div class="hotelSingleGrid">
            <div>
                <div class="galleryGrid -type-2">
                    <div class="galleryGrid__item relative d-flex justify-end">
                        <img src="{{ asset('storage/uploads/hotel_images/' . $hotel->images()->first()->name ) }}" alt="image" class="rounded-4">

                        <div class="absolute px-20 py-20">
                            <button class="button -blue-1 size-40 rounded-full bg-white">
                                <i class="icon-heart text-16"></i>
                            </button>
                        </div>
                    </div>


                    <div class="galleryGrid__item">
                        <img src="{{ asset('storage/uploads/hotel_images/' . $hotel->images()->get()[1]->name ) }}" alt="image" class="rounded-4">
                    </div>

                    <div class="galleryGrid__item">
                        <img src="{{ asset('storage/uploads/hotel_images/' . $hotel->images()->get()[2]->name ) }}" alt="image" class="rounded-4">
                    </div>


                    <div class="galleryGrid__item relative d-flex justify-end items-end">
                        <img src="{{ asset('storage/uploads/hotel_images/' . $hotel->images()->get()[3]->name ) }}" alt="image" class="rounded-4">

                        <div class="absolute px-10 py-10">
                            <a href="img/gallery/1/1.png" class="button -blue-1 px-24 py-15 bg-white text-dark-1 js-gallery" data-gallery="gallery2">
                                See All {{$hotel->images()->count() }} Photos
                            </a>

                            @foreach($hotel->images()->get() as $image)
                            <a href="{{ asset('storage/uploads/hotel_images/' . $image ) }}" class="js-gallery" data-gallery="gallery2"></a>
                            @endforeach


                        </div>
                    </div>
                </div>

                <div class="row justify-between items-end pt-40">
                    <div class="col-auto">
                        <div class="row x-gap-20 y-gap-20 items-center">
                            <div class="col-auto">
                                <h1 class="text-26 fw-600">{{$hotel->name}}</h1>
                            </div>

                            <div class="col-auto">
                                {!! $hotel->stars == 1 ? '<i class="icon-star text-10 text-yellow-1"></i>' : '' !!}
                                {!! $hotel->stars == 1 ? '<i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i>' : '' !!}
                                {!! $hotel->stars == 3 ? '<i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i>' : '' !!}
                                {!! $hotel->stars == 4 ? '<i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i>' : '' !!}
                                {!! $hotel->stars == 5 ? '<i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}
                            </div>
                        </div>

                        <div class="row x-gap-20 y-gap-20 items-center">
                            <div class="col-auto">
                                <div class="text-15 text-light-1">{!! $hotel->description !!}</div>
                            </div>

                            <!-- <div class="col-auto">
                                <button data-x-click="mapFilter" class="text-blue-1 text-15 underline">Show on map</button>
                            </div> -->
                        </div>
                    </div>

                    <!-- <div class="col-auto">
                        <div class="text-14 text-right">
                            From
                            <span class="text-22 text-dark-1 fw-500">US$72</span>
                        </div>


                        <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white mt-5">
                            Select Room <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                    </div> -->
                </div>

                <div id="overview" class="row y-gap-40 pt-40">
                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Property Info</h3>
                        <p class="text-dark-1 text-15 mt-20">
                            {!! $hotel->property_info !!}
                        </p>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Main Amenities</h3>
                        <div class="row y-gap-10 pt-20">

                            {!! $hotel->main_amenities !!}

                        </div>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">About This Area</h3>
                        <div class="row y-gap-10 pt-20">

                            {!! $hotel->about_this_area !!}

                        </div>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">About This Property</h3>
                        <div class="row y-gap-10 pt-20">

                            {!! $hotel->about_this_property !!}

                        </div>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">At a Glance</h3>
                        <div class="row y-gap-10 pt-20">

                            {!! $hotel->at_a_glance !!}

                        </div>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Property Amenities</h3>
                        <div class="row y-gap-10 pt-20">

                            {!! $hotel->property_amenities !!}

                        </div>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Room Amenities</h3>
                        <div class="row y-gap-10 pt-20">

                            {!! $hotel->room_amenities !!}

                        </div>
                    </div>

                </div>
            </div>

            <div>
                <div class="px-30 py-30 border-light rounded-4">
                    <div class="flex-center ratio ratio-15:9 mb-15 js-lazy" data-bg="/frontend/img/general/map.png">
                        <button data-x-click="mapFilter" class="button py-15 px-24 -blue-1 bg-white text-dark-1 absolute">
                            <i class="icon-location text-22 mr-10"></i>
                            Show on map
                        </button>
                    </div>

                    <div class="row y-gap-10">
                        <div class="col-12">
                            <div class="d-flex items-center">
                                <i class="icon-award text-20 text-blue-1"></i>
                                <div class="text-14 fw-500 ml-10">Exceptional location - Inside city center</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex items-center">
                                <i class="icon-pedestrian text-20 text-blue-1"></i>
                                <div class="text-14 fw-500 ml-10">Exceptional for walking</div>
                            </div>
                        </div>
                    </div>

                    <div class="border-top-light mt-15 mb-15"></div>

                    <div class="text-15 fw-500">Popular landmarks</div>

                    <div class="d-flex justify-between pt-10">
                        <div class="text-14">Royal Pump Room Museum</div>
                        <div class="text-14 text-light-1">0.1 km</div>
                    </div>

                    <div class="d-flex justify-between pt-5">
                        <div class="text-14">Harrogate Turkish Baths</div>
                        <div class="text-14 text-light-1">0.1 km</div>
                    </div>

                    <a href="#" class="d-block text-14 fw-500 underline text-blue-1 mt-10">Show More</a>
                </div>

                <div class="px-30 py-30 border-light rounded-4 mt-30">
                    <div class="d-flex items-center">
                        <div class="size-40 flex-center bg-blue-1 rounded-4">
                            <div class="text-14 fw-600 text-white">4.8</div>
                        </div>

                        <div class="text-14 ml-10">
                            <div class="lh-15 fw-500">Exceptional</div>
                            <div class="lh-15 text-light-1">3,014 reviews</div>
                        </div>
                    </div>

                    <div class="d-flex mt-20">
                        <i class="icon-group text-16 mr-10 pt-5"></i>
                        <div class="text-15">Highly rated by guests – 86% would recommend</div>
                    </div>

                    <div class="border-top-light mt-20 mb-20"></div>

                    <div class="row x-gap-10 y-gap-10">
                        <div class="col-auto">
                            <div class="d-flex items-center py-5 px-20 rounded-100 border-light">
                                <i class="icon-like text-12 text-blue-1 mr-10"></i>
                                <div class="text-14 lh-15">
                                    Breakfast <span class="fw-500 text-blue-1">25</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="d-flex items-center py-5 px-20 rounded-100 border-light">
                                <i class="icon-like text-12 text-blue-1 mr-10"></i>
                                <div class="text-14 lh-15">
                                    WiFi <span class="fw-500 text-blue-1">14</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="d-flex items-center py-5 px-20 rounded-100 border-light">
                                <i class="icon-like text-12 text-blue-1 mr-10"></i>
                                <div class="text-14 lh-15">
                                    Food & Dining <span class="fw-500 text-blue-1">67</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-30 py-30 border-light rounded-4 mt-30">
                    <div class="text-18 fw-500">Property highlights</div>

                    <div class="row x-gap-20 y-gap-20 pt-20">
                        <div class="col-auto">
                            <i class="icon-city text-24 text-blue-1"></i>
                        </div>
                        <div class="col-auto">
                            <div class="text-15">In London City Centre</div>
                        </div>
                    </div>

                    <div class="row x-gap-20 y-gap-20 pt-5">
                        <div class="col-auto">
                            <i class="icon-airplane text-24 text-blue-1"></i>
                        </div>
                        <div class="col-auto">
                            <div class="text-15">Airport transfer</div>
                        </div>
                    </div>

                    <div class="row x-gap-20 y-gap-20 pt-5">
                        <div class="col-auto">
                            <i class="icon-bell-ring text-24 text-blue-1"></i>
                        </div>
                        <div class="col-auto">
                            <div class="text-15">Front desk [24-hour]</div>
                        </div>
                    </div>

                    <div class="row x-gap-20 y-gap-20 pt-5">
                        <div class="col-auto">
                            <i class="icon-tv text-24 text-blue-1"></i>
                        </div>
                        <div class="col-auto">
                            <div class="text-15">Premium TV channels</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-30">
    <div class="container">
        <div class="row y-gap-30">
            <div class="col-12">
                <div class="px-24 py-20 rounded-4 bg-green-1">
                    <div class="row x-gap-20 y-gap-20 items-center">
                        <div class="col-auto">
                            <div class="flex-center size-60 rounded-full bg-white">
                                <i class="icon-star text-yellow-1 text-30"></i>
                            </div>
                        </div>

                        <div class="col-auto">
                            <h4 class="text-18 lh-15 fw-500">This property is in high demand!</h4>
                            <div class="text-15 lh-15">7 travelers have booked today.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="rooms" class="pt-30">
    <div class="container">
        <div class="row pb-20">
            <div class="col-auto">
                <h3 class="text-22 fw-500">Available Rooms</h3>
            </div>
        </div>


        <div class="bg-blue-2 rounded-4 px-30 py-30 sm:px-20 sm:py-20">
            <div class="row y-gap-30">
                <div class="col-xl-auto">
                    <div class="ratio ratio-1:1 col-12 col-md-4 col-xl-12">
                        <img src="/frontend/img/backgrounds/1.png" alt="image" class="img-ratio rounded-4">
                    </div>

                    <div class="">
                        <div class="text-18 fw-500 mt-10">Standard Twin Room</div>

                        <div class="y-gap-5 pt-5">

                            <div class="d-flex items-center">
                                <i class="icon-no-smoke text-20 mr-10"></i>
                                <div class="text-15">Non-smoking rooms</div>
                            </div>

                            <div class="d-flex items-center">
                                <i class="icon-wifi text-20 mr-10"></i>
                                <div class="text-15">Free WiFi</div>
                            </div>

                            <div class="d-flex items-center">
                                <i class="icon-parking text-20 mr-10"></i>
                                <div class="text-15">Parking</div>
                            </div>

                            <div class="d-flex items-center">
                                <i class="icon-kitchen text-20 mr-10"></i>
                                <div class="text-15">Kitchen</div>
                            </div>

                        </div>

                        <a href="#" class="d-block text-15 fw-500 underline text-blue-1 mt-15">Show Room Information</a>
                    </div>
                </div>

                <div class="col-xl">


                    <div class="bg-white rounded-4 px-30 py-30">

                        <div class="row y-gap-30">
                            <div class="col-lg col-md-6">
                                <div class="text-15 fw-500 mb-10">Your price includes:</div>

                                <div class="y-gap-5">

                                    <div class="d-flex items-center text-green-2">
                                        <i class="icon-check text-12 mr-10"></i>
                                        <div class="text-15">Pay at the hotel</div>
                                    </div>

                                    <div class="d-flex items-center text-green-2">
                                        <i class="icon-check text-12 mr-10"></i>
                                        <div class="text-15">Pay nothing until March 30, 2022</div>
                                    </div>

                                    <div class="d-flex items-center text-green-2">
                                        <i class="icon-check text-12 mr-10"></i>
                                        <div class="text-15">Free cancellation before April 1, 2022</div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-auto col-md-6 border-left-light lg:border-none">
                                <div class="px-40 lg:px-0">
                                    <div class="text-15 fw-500 mb-20">Sleeps</div>

                                    <div class="d-flex items-center text-light-1">
                                        <div class="icon-man text-24"></div>
                                        <div class="icon-man text-24"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-auto col-md-6 border-left-light lg:border-none">
                                <div class="px-40 lg:px-0">
                                    <div class="text-15 fw-500 mb-20">Select Rooms</div>


                                    <div class="dropdown js-dropdown js-price-1-active">
                                        <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-1-toggle" data-el-toggle-active=".js-price-1-active">
                                            <span class="js-dropdown-title">1 (US$ 3,120)</span>
                                            <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                        </div>

                                        <div class="toggle-element -dropdown  js-click-dropdown js-price-1-toggle">
                                            <div class="text-14 y-gap-15 js-dropdown-list">

                                                <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                                                <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                                                <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                                                <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-auto col-md-6 border-left-light lg:border-none text-right lg:text-left">
                                <div class="pl-40 lg:pl-0">
                                    <div class="text-14 lh-14 text-light-1 mb-5">3 rooms for</div>
                                    <div class="text-20 lh-14 fw-500">US$72</div>


                                    <a href="#" class="button h-50 px-35 -dark-1 bg-blue-1 text-white mt-10">
                                        Reserve <div class="icon-arrow-top-right ml-15"></div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="bg-white rounded-4 px-30 py-30 mt-20">

                        <div class="row y-gap-30">
                            <div class="col-lg col-md-6">
                                <div class="text-15 fw-500 mb-10">Your price includes:</div>

                                <div class="y-gap-5">

                                    <div class="d-flex items-center text-green-2">
                                        <i class="icon-check text-12 mr-10"></i>
                                        <div class="text-15">Pay at the hotel</div>
                                    </div>

                                    <div class="d-flex items-center text-green-2">
                                        <i class="icon-check text-12 mr-10"></i>
                                        <div class="text-15">Pay nothing until March 30, 2022</div>
                                    </div>

                                    <div class="d-flex items-center text-green-2">
                                        <i class="icon-check text-12 mr-10"></i>
                                        <div class="text-15">Free cancellation before April 1, 2022</div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-auto col-md-6 border-left-light lg:border-none">
                                <div class="px-40 lg:px-0">
                                    <div class="text-15 fw-500 mb-20">Sleeps</div>

                                    <div class="d-flex items-center text-light-1">
                                        <div class="icon-man text-24"></div>
                                        <div class="icon-man text-24"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-auto col-md-6 border-left-light lg:border-none">
                                <div class="px-40 lg:px-0">
                                    <div class="text-15 fw-500 mb-20">Select Rooms</div>


                                    <div class="dropdown js-dropdown js-price-2-active">
                                        <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-2-toggle" data-el-toggle-active=".js-price-2-active">
                                            <span class="js-dropdown-title">1 (US$ 3,120)</span>
                                            <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                        </div>

                                        <div class="toggle-element -dropdown  js-click-dropdown js-price-2-toggle">
                                            <div class="text-14 y-gap-15 js-dropdown-list">

                                                <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                                                <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                                                <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                                                <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-auto col-md-6 border-left-light lg:border-none text-right lg:text-left">
                                <div class="pl-40 lg:pl-0">
                                    <div class="text-14 lh-14 text-light-1 mb-5">3 rooms for</div>
                                    <div class="text-20 lh-14 fw-500">US$72</div>


                                    <a href="#" class="button h-50 px-35 -dark-1 bg-blue-1 text-white mt-10">
                                        Reserve <div class="icon-arrow-top-right ml-15"></div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="bg-white rounded-4 px-30 py-30 mt-20">

                        <div class="row y-gap-30">
                            <div class="col-lg col-md-6">
                                <div class="text-15 fw-500 mb-10">Your price includes:</div>

                                <div class="y-gap-5">

                                    <div class="d-flex items-center text-green-2">
                                        <i class="icon-check text-12 mr-10"></i>
                                        <div class="text-15">Pay at the hotel</div>
                                    </div>

                                    <div class="d-flex items-center text-green-2">
                                        <i class="icon-check text-12 mr-10"></i>
                                        <div class="text-15">Pay nothing until March 30, 2022</div>
                                    </div>

                                    <div class="d-flex items-center text-green-2">
                                        <i class="icon-check text-12 mr-10"></i>
                                        <div class="text-15">Free cancellation before April 1, 2022</div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-auto col-md-6 border-left-light lg:border-none">
                                <div class="px-40 lg:px-0">
                                    <div class="text-15 fw-500 mb-20">Sleeps</div>

                                    <div class="d-flex items-center text-light-1">
                                        <div class="icon-man text-24"></div>
                                        <div class="icon-man text-24"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-auto col-md-6 border-left-light lg:border-none">
                                <div class="px-40 lg:px-0">
                                    <div class="text-15 fw-500 mb-20">Select Rooms</div>


                                    <div class="dropdown js-dropdown js-price-3-active">
                                        <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-3-toggle" data-el-toggle-active=".js-price-3-active">
                                            <span class="js-dropdown-title">1 (US$ 3,120)</span>
                                            <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                        </div>

                                        <div class="toggle-element -dropdown  js-click-dropdown js-price-3-toggle">
                                            <div class="text-14 y-gap-15 js-dropdown-list">

                                                <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                                                <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                                                <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                                                <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-auto col-md-6 border-left-light lg:border-none text-right lg:text-left">
                                <div class="pl-40 lg:pl-0">
                                    <div class="text-14 lh-14 text-light-1 mb-5">3 rooms for</div>
                                    <div class="text-20 lh-14 fw-500">US$72</div>


                                    <a href="#" class="button h-50 px-35 -dark-1 bg-blue-1 text-white mt-10">
                                        Reserve <div class="icon-arrow-top-right ml-15"></div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="mt-20">

            <div class="bg-blue-2 rounded-4 px-30 py-30 sm:px-20 sm:py-20">
                <div class="row y-gap-30">
                    <div class="col-xl-auto">
                        <div class="ratio ratio-1:1 col-12 col-md-4 col-xl-12">
                            <img src="/frontend/img/backgrounds/1.png" alt="image" class="img-ratio rounded-4">
                        </div>

                        <div class="">
                            <div class="text-18 fw-500 mt-10">Standard Twin Room</div>

                            <div class="y-gap-5 pt-5">

                                <div class="d-flex items-center">
                                    <i class="icon-no-smoke text-20 mr-10"></i>
                                    <div class="text-15">Non-smoking rooms</div>
                                </div>

                                <div class="d-flex items-center">
                                    <i class="icon-wifi text-20 mr-10"></i>
                                    <div class="text-15">Free WiFi</div>
                                </div>

                                <div class="d-flex items-center">
                                    <i class="icon-parking text-20 mr-10"></i>
                                    <div class="text-15">Parking</div>
                                </div>

                                <div class="d-flex items-center">
                                    <i class="icon-kitchen text-20 mr-10"></i>
                                    <div class="text-15">Kitchen</div>
                                </div>

                            </div>

                            <a href="#" class="d-block text-15 fw-500 underline text-blue-1 mt-15">Show Room Information</a>
                        </div>
                    </div>

                    <div class="col-xl">


                        <div class="bg-white rounded-4 px-30 py-30">

                            <div class="row y-gap-30">
                                <div class="col-lg col-md-6">
                                    <div class="text-15 fw-500 mb-10">Your price includes:</div>

                                    <div class="y-gap-5">

                                        <div class="d-flex items-center text-green-2">
                                            <i class="icon-check text-12 mr-10"></i>
                                            <div class="text-15">Pay at the hotel</div>
                                        </div>

                                        <div class="d-flex items-center text-green-2">
                                            <i class="icon-check text-12 mr-10"></i>
                                            <div class="text-15">Pay nothing until March 30, 2022</div>
                                        </div>

                                        <div class="d-flex items-center text-green-2">
                                            <i class="icon-check text-12 mr-10"></i>
                                            <div class="text-15">Free cancellation before April 1, 2022</div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-auto col-md-6 border-left-light lg:border-none">
                                    <div class="px-40 lg:px-0">
                                        <div class="text-15 fw-500 mb-20">Sleeps</div>

                                        <div class="d-flex items-center text-light-1">
                                            <div class="icon-man text-24"></div>
                                            <div class="icon-man text-24"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-auto col-md-6 border-left-light lg:border-none">
                                    <div class="px-40 lg:px-0">
                                        <div class="text-15 fw-500 mb-20">Select Rooms</div>


                                        <div class="dropdown js-dropdown js-price-2-1-active">
                                            <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-2-1-toggle" data-el-toggle-active=".js-price-2-1-active">
                                                <span class="js-dropdown-title">1 (US$ 3,120)</span>
                                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                            </div>

                                            <div class="toggle-element -dropdown  js-click-dropdown js-price-2-1-toggle">
                                                <div class="text-14 y-gap-15 js-dropdown-list">

                                                    <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-auto col-md-6 border-left-light lg:border-none text-right lg:text-left">
                                    <div class="pl-40 lg:pl-0">
                                        <div class="text-14 lh-14 text-light-1 mb-5">3 rooms for</div>
                                        <div class="text-20 lh-14 fw-500">US$72</div>


                                        <a href="#" class="button h-50 px-35 -dark-1 bg-blue-1 text-white mt-10">
                                            Reserve <div class="icon-arrow-top-right ml-15"></div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="bg-white rounded-4 px-30 py-30 mt-20">

                            <div class="row y-gap-30">
                                <div class="col-lg col-md-6">
                                    <div class="text-15 fw-500 mb-10">Your price includes:</div>

                                    <div class="y-gap-5">

                                        <div class="d-flex items-center text-green-2">
                                            <i class="icon-check text-12 mr-10"></i>
                                            <div class="text-15">Pay at the hotel</div>
                                        </div>

                                        <div class="d-flex items-center text-green-2">
                                            <i class="icon-check text-12 mr-10"></i>
                                            <div class="text-15">Pay nothing until March 30, 2022</div>
                                        </div>

                                        <div class="d-flex items-center text-green-2">
                                            <i class="icon-check text-12 mr-10"></i>
                                            <div class="text-15">Free cancellation before April 1, 2022</div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-auto col-md-6 border-left-light lg:border-none">
                                    <div class="px-40 lg:px-0">
                                        <div class="text-15 fw-500 mb-20">Sleeps</div>

                                        <div class="d-flex items-center text-light-1">
                                            <div class="icon-man text-24"></div>
                                            <div class="icon-man text-24"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-auto col-md-6 border-left-light lg:border-none">
                                    <div class="px-40 lg:px-0">
                                        <div class="text-15 fw-500 mb-20">Select Rooms</div>


                                        <div class="dropdown js-dropdown js-price-2-2-active">
                                            <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-2-2-toggle" data-el-toggle-active=".js-price-2-2-active">
                                                <span class="js-dropdown-title">1 (US$ 3,120)</span>
                                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                            </div>

                                            <div class="toggle-element -dropdown  js-click-dropdown js-price-2-2-toggle">
                                                <div class="text-14 y-gap-15 js-dropdown-list">

                                                    <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-auto col-md-6 border-left-light lg:border-none text-right lg:text-left">
                                    <div class="pl-40 lg:pl-0">
                                        <div class="text-14 lh-14 text-light-1 mb-5">3 rooms for</div>
                                        <div class="text-20 lh-14 fw-500">US$72</div>


                                        <a href="#" class="button h-50 px-35 -dark-1 bg-blue-1 text-white mt-10">
                                            Reserve <div class="icon-arrow-top-right ml-15"></div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div id="facilities"></div>
<section class="mt-40">
    <div class="container">
        <div class="row x-gap-40 y-gap-40">
            <div class="col-12">
                <h3 class="text-22 fw-500">Facilities of The Crown Hotel</h3>

                <div class="row x-gap-40 y-gap-40 pt-20">
                    <div class="col-xl-4">
                        <div class="row y-gap-30">
                            <div class="col-12">

                                <div class="">
                                    <div class="d-flex items-center text-16 fw-500">
                                        <i class="icon-bathtub text-20 mr-10"></i>
                                        Bathroom
                                    </div>

                                    <ul class="text-15 pt-10">

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Towels
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Bath or shower
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Private bathroom
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Toilet
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Free toiletries
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Hairdryer
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Bath
                                        </li>

                                    </ul>
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="">
                                    <div class="d-flex items-center text-16 fw-500">
                                        <i class="icon-bed text-20 mr-10"></i>
                                        Bedroom
                                    </div>

                                    <ul class="text-15 pt-10">

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Linen
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Wardrobe or closet
                                        </li>

                                    </ul>
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="">
                                    <div class="d-flex items-center text-16 fw-500">
                                        <i class="icon-bell-ring text-20 mr-10"></i>
                                        Reception services
                                    </div>

                                    <ul class="text-15 pt-10">

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Invoice provided
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Private check-in/check-out
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Luggage storage
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            24-hour front desk
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="row y-gap-30">
                            <div class="col-12">

                                <div class="">
                                    <div class="d-flex items-center text-16 fw-500">
                                        <i class="icon-tv text-20 mr-10"></i>
                                        Media &amp; Technology
                                    </div>

                                    <ul class="text-15 pt-10">

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Flat-screen TV
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Satellite channels
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Radio
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Telephone
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            TV
                                        </li>

                                    </ul>
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="">
                                    <div class="d-flex items-center text-16 fw-500">
                                        <i class="icon-juice text-20 mr-10"></i>
                                        Food &amp; Drink
                                    </div>

                                    <ul class="text-15 pt-10">

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Kid meals
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Special diet menus (on request)
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Breakfast in the room
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Bar
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Restaurant
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Tea/Coffee maker
                                        </li>

                                    </ul>
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="">
                                    <div class="d-flex items-center text-16 fw-500">
                                        <i class="icon-washing-machine text-20 mr-10"></i>
                                        Cleaning services
                                    </div>

                                    <ul class="text-15 pt-10">

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Daily housekeeping
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Dry cleaning
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Laundry
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="row y-gap-30">
                            <div class="col-12">

                                <div class="">
                                    <div class="d-flex items-center text-16 fw-500">
                                        <i class="icon-shield text-20 mr-10"></i>
                                        Safety &amp; security
                                    </div>

                                    <ul class="text-15 pt-10">

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Fire extinguishers
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            CCTV in common areas
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Smoke alarms
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            24-hour security
                                        </li>

                                    </ul>
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="">
                                    <div class="d-flex items-center text-16 fw-500">
                                        <i class="icon-city-2 text-20 mr-10"></i>
                                        General
                                    </div>

                                    <ul class="text-15 pt-10">

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Hypoallergenic
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Non-smoking throughout
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Wake-up service
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Heating
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Packed lunches
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Carpeted
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Lift
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Fan
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Family rooms
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Facilities for disabled guests
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Ironing facilities
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Non-smoking rooms
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Iron
                                        </li>

                                        <li class="d-flex items-center">
                                            <i class="icon-check text-10 mr-20"></i>
                                            Room service
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-40 mb-40">
    <div class="border-top-light"></div>
</div>

<div id="reviews"></div>
<section>
    <div class="container">
        <div class="row y-gap-40 justify-between">
            <div class="col-xl-3">
                <h3 class="text-22 fw-500">Guest reviews</h3>

                <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-70 text-22 fw-600 text-white">4.8</div>
                    <div class="ml-20">
                        <div class="text-16 text-dark-1 fw-500 lh-14">Exceptional</div>
                        <div class="text-15 text-light-1 lh-14 mt-4">3,014 reviews</div>
                    </div>
                </div>

                <div class="row y-gap-20 pt-20">

                    <div class="col-12">
                        <div class="">
                            <div class="d-flex items-center justify-between">
                                <div class="text-15 fw-500">Location</div>
                                <div class="text-15 text-light-1">9.4</div>
                            </div>

                            <div class="progressBar mt-10">
                                <div class="progressBar__bg bg-blue-2"></div>
                                <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="">
                            <div class="d-flex items-center justify-between">
                                <div class="text-15 fw-500">Staff</div>
                                <div class="text-15 text-light-1">9.4</div>
                            </div>

                            <div class="progressBar mt-10">
                                <div class="progressBar__bg bg-blue-2"></div>
                                <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="">
                            <div class="d-flex items-center justify-between">
                                <div class="text-15 fw-500">Cleanliness</div>
                                <div class="text-15 text-light-1">9.4</div>
                            </div>

                            <div class="progressBar mt-10">
                                <div class="progressBar__bg bg-blue-2"></div>
                                <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="">
                            <div class="d-flex items-center justify-between">
                                <div class="text-15 fw-500">Value for money</div>
                                <div class="text-15 text-light-1">9.4</div>
                            </div>

                            <div class="progressBar mt-10">
                                <div class="progressBar__bg bg-blue-2"></div>
                                <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="">
                            <div class="d-flex items-center justify-between">
                                <div class="text-15 fw-500">Comfort</div>
                                <div class="text-15 text-light-1">9.4</div>
                            </div>

                            <div class="progressBar mt-10">
                                <div class="progressBar__bg bg-blue-2"></div>
                                <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="">
                            <div class="d-flex items-center justify-between">
                                <div class="text-15 fw-500">Facilities</div>
                                <div class="text-15 text-light-1">9.4</div>
                            </div>

                            <div class="progressBar mt-10">
                                <div class="progressBar__bg bg-blue-2"></div>
                                <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="">
                            <div class="d-flex items-center justify-between">
                                <div class="text-15 fw-500">Free WiFi</div>
                                <div class="text-15 text-light-1">9.4</div>
                            </div>

                            <div class="progressBar mt-10">
                                <div class="progressBar__bg bg-blue-2"></div>
                                <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-8">
                <div class="row y-gap-40">


                    <div class="col-12">
                        <div class="row x-gap-20 y-gap-20 items-center">
                            <div class="col-auto">
                                <img src="/frontend/img/avatars/2.png" alt="image">
                            </div>
                            <div class="col-auto">
                                <div class="fw-500 lh-15">Tonko</div>
                                <div class="text-14 text-light-1 lh-15">March 2022</div>
                            </div>
                        </div>

                        <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
                        <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>


                        <div class="row x-gap-30 y-gap-30 pt-20">

                            <div class="col-auto">
                                <img src="/frontend/img/testimonials/1/1.png" alt="image" class="rounded-4">
                            </div>

                            <div class="col-auto">
                                <img src="/frontend/img/testimonials/1/2.png" alt="image" class="rounded-4">
                            </div>

                            <div class="col-auto">
                                <img src="/frontend/img/testimonials/1/3.png" alt="image" class="rounded-4">
                            </div>

                            <div class="col-auto">
                                <img src="/frontend/img/testimonials/1/4.png" alt="image" class="rounded-4">
                            </div>

                        </div>


                        <div class="d-flex x-gap-30 items-center pt-20">
                            <button class="d-flex items-center text-blue-1">
                                <i class="icon-like text-16 mr-10"></i>
                                Helpful
                            </button>

                            <button class="d-flex items-center text-light-1">
                                <i class="icon-dislike text-16 mr-10"></i>
                                Not helpful
                            </button>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="row x-gap-20 y-gap-20 items-center">
                            <div class="col-auto">
                                <img src="/frontend/img/avatars/2.png" alt="image">
                            </div>
                            <div class="col-auto">
                                <div class="fw-500 lh-15">Tonko</div>
                                <div class="text-14 text-light-1 lh-15">March 2022</div>
                            </div>
                        </div>

                        <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
                        <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>


                        <div class="row x-gap-30 y-gap-30 pt-20">

                            <div class="col-auto">
                                <img src="/frontend/img/testimonials/1/1.png" alt="image" class="rounded-4">
                            </div>

                            <div class="col-auto">
                                <img src="/frontend/img/testimonials/1/2.png" alt="image" class="rounded-4">
                            </div>

                            <div class="col-auto">
                                <img src="/frontend/img/testimonials/1/3.png" alt="image" class="rounded-4">
                            </div>

                            <div class="col-auto">
                                <img src="/frontend/img/testimonials/1/4.png" alt="image" class="rounded-4">
                            </div>

                        </div>


                        <div class="d-flex x-gap-30 items-center pt-20">
                            <button class="d-flex items-center text-blue-1">
                                <i class="icon-like text-16 mr-10"></i>
                                Helpful
                            </button>

                            <button class="d-flex items-center text-light-1">
                                <i class="icon-dislike text-16 mr-10"></i>
                                Not helpful
                            </button>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="row x-gap-20 y-gap-20 items-center">
                            <div class="col-auto">
                                <img src="/frontend/img/avatars/2.png" alt="image">
                            </div>
                            <div class="col-auto">
                                <div class="fw-500 lh-15">Tonko</div>
                                <div class="text-14 text-light-1 lh-15">March 2022</div>
                            </div>
                        </div>

                        <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
                        <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>


                        <div class="d-flex x-gap-30 items-center pt-20">
                            <button class="d-flex items-center text-blue-1">
                                <i class="icon-like text-16 mr-10"></i>
                                Helpful
                            </button>

                            <button class="d-flex items-center text-light-1">
                                <i class="icon-dislike text-16 mr-10"></i>
                                Not helpful
                            </button>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="row x-gap-20 y-gap-20 items-center">
                            <div class="col-auto">
                                <img src="/frontend/img/avatars/2.png" alt="image">
                            </div>
                            <div class="col-auto">
                                <div class="fw-500 lh-15">Tonko</div>
                                <div class="text-14 text-light-1 lh-15">March 2022</div>
                            </div>
                        </div>

                        <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
                        <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>


                        <div class="d-flex x-gap-30 items-center pt-20">
                            <button class="d-flex items-center text-blue-1">
                                <i class="icon-like text-16 mr-10"></i>
                                Helpful
                            </button>

                            <button class="d-flex items-center text-light-1">
                                <i class="icon-dislike text-16 mr-10"></i>
                                Not helpful
                            </button>
                        </div>
                    </div>


                    <div class="col-auto">

                        <a href="#" class="button -md -outline-blue-1 text-blue-1">
                            Show all 116 reviews <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-40 mb-40">
    <div class="border-top-light"></div>
</div>

<section>
    <div class="container">
        <div class="row y-gap-30 justify-between">
            <div class="col-xl-3">
                <div class="row">
                    <div class="col-auto">
                        <h3 class="text-22 fw-500">Leave a Reply</h3>
                        <p class="text-15 text-dark-1 mt-5">Your email address will not be published.</p>
                    </div>
                </div>

                <div class="row y-gap-30 pt-30">

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Location</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Staff</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Cleanliness</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Value for money</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Comfort</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Facilities</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Free WiFi</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-8">
                <div class="row y-gap-30">
                    <div class="col-xl-6">

                        <div class="form-input ">
                            <input type="text" required>
                            <label class="lh-1 text-16 text-light-1">Text</label>
                        </div>

                    </div>
                    <div class="col-xl-6">

                        <div class="form-input ">
                            <input type="text" required>
                            <label class="lh-1 text-16 text-light-1">Email</label>
                        </div>

                    </div>
                    <div class="col-12">

                        <div class="form-input ">
                            <textarea required rows="6"></textarea>
                            <label class="lh-1 text-16 text-light-1">Write Your Comment</label>
                        </div>

                    </div>
                    <div class="col-auto">

                        <a href="#" class="button -md -dark-1 bg-blue-1 text-white">
                            Post Comment <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="px-24 py-20 rounded-4 bg-light-2">
                    <div class="row x-gap-20 y-gap-20 items-center">
                        <div class="col-auto">
                            <div class="flex-center size-60 rounded-full bg-white">
                                <img src="/frontend/img/icons/health.svg" alt="icon">
                            </div>
                        </div>

                        <div class="col-auto">
                            <h4 class="text-18 lh-15 fw-500">Extra health & safety measures</h4>
                            <div class="text-15 lh-15">This property has taken extra health and hygiene measures to ensure that your safety is their priority</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-22 fw-500">Hotel surroundings</h3>
            </div>
        </div>

        <div class="row x-gap-50 y-gap-30 pt-20">
            <div class="col-lg-4 col-md-6">
                <div class="d-flex items-center">
                    <i class="icon-nearby text-20 mr-10"></i>
                    <div class="text-16 fw-500">What's nearby</div>
                </div>

                <div class="row y-gap-10 pt-10">

                    <div class="col-12">
                        <div class="row items-center justify-between">
                            <div class="col-auto">
                                <div class="text-15">Royal Pump Room Museum</div>
                            </div>

                            <div class="col-auto">
                                <div class="text-15 text-right">0.1 km</div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="border-top-light"></div>
                    </div>


                    <div class="col-12">
                        <div class="row items-center justify-between">
                            <div class="col-auto">
                                <div class="text-15">Harrogate Turkish Baths</div>
                            </div>

                            <div class="col-auto">
                                <div class="text-15 text-right">0.1 km</div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="border-top-light"></div>
                    </div>


                    <div class="col-12">
                        <div class="row items-center justify-between">
                            <div class="col-auto">
                                <div class="text-15">Royal Hall Theatre</div>
                            </div>

                            <div class="col-auto">
                                <div class="text-15 text-right">0.1 km</div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="border-top-light"></div>
                    </div>


                    <div class="col-12">
                        <div class="row items-center justify-between">
                            <div class="col-auto">
                                <div class="text-15">Harrogate Theatre</div>
                            </div>

                            <div class="col-auto">
                                <div class="text-15 text-right">0.1 km</div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="border-top-light"></div>
                    </div>


                    <div class="col-12">
                        <div class="row items-center justify-between">
                            <div class="col-auto">
                                <div class="text-15">Harrogate Library</div>
                            </div>

                            <div class="col-auto">
                                <div class="text-15 text-right">0.1 km</div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="border-top-light"></div>
                    </div>


                    <div class="col-12">
                        <div class="row items-center justify-between">
                            <div class="col-auto">
                                <div class="text-15">The Valley Gardens</div>
                            </div>

                            <div class="col-auto">
                                <div class="text-15 text-right">0.1 km</div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="border-top-light"></div>
                    </div>


                    <div class="col-12">
                        <div class="row items-center justify-between">
                            <div class="col-auto">
                                <div class="text-15">Harrogate District Hospital</div>
                            </div>

                            <div class="col-auto">
                                <div class="text-15 text-right">0.1 km</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="mb-40 md:mb-30">
                    <div class="d-flex items-center">
                        <i class="icon-airplane text-20 mr-10"></i>
                        <div class="text-16 fw-500">Closest airports</div>
                    </div>

                    <div class="row y-gap-10 pt-10">

                        <div class="col-12">
                            <div class="row items-center justify-between">
                                <div class="col-auto">
                                    <div class="text-15">Leeds Bradford International Airport</div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-right">57.9 km</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="border-top-light"></div>
                        </div>


                        <div class="col-12">
                            <div class="row items-center justify-between">
                                <div class="col-auto">
                                    <div class="text-15">Durham Tees Valley Airport</div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-right">57.9 km</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="border-top-light"></div>
                        </div>


                        <div class="col-12">
                            <div class="row items-center justify-between">
                                <div class="col-auto">
                                    <div class="text-15">Doncaster Sheffield Airport</div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-right">57.9 km</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="">
                    <div class="d-flex items-center">
                        <i class="icon-food text-20 mr-10"></i>
                        <div class="text-16 fw-500">Restaurants & cafes</div>
                    </div>

                    <div class="row y-gap-10 pt-10">

                        <div class="col-12">
                            <div class="row items-center justify-between">
                                <div class="col-auto">
                                    <div class="text-15">Cafe/bar Bettys Café Tea Rooms</div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-right">57.9 km</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="border-top-light"></div>
                        </div>


                        <div class="col-12">
                            <div class="row items-center justify-between">
                                <div class="col-auto">
                                    <div class="text-15">Cafe/bar Bettys Café Tea Rooms</div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-right">57.9 km</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="">
                    <div class="d-flex items-center">
                        <i class="icon-ticket text-20 mr-10"></i>
                        <div class="text-16 fw-500">Top attractions</div>
                    </div>

                    <div class="row y-gap-10 pt-10">

                        <div class="col-12">
                            <div class="row items-center justify-between">
                                <div class="col-auto">
                                    <div class="text-15">Ripley Castle</div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-right">57.9 km</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="border-top-light"></div>
                        </div>


                        <div class="col-12">
                            <div class="row items-center justify-between">
                                <div class="col-auto">
                                    <div class="text-15">Roundhay Park</div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-right">57.9 km</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="border-top-light"></div>
                        </div>


                        <div class="col-12">
                            <div class="row items-center justify-between">
                                <div class="col-auto">
                                    <div class="text-15">Bramham Park</div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-right">57.9 km</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-40">
    <div class="container">
        <div class="pt-40 border-top-light">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-22 fw-500">Some helpful facts</h3>
                </div>
            </div>

            <div class="row x-gap-50 y-gap-30 pt-20">
                <div class="col-lg-4 col-md-6">
                    <div class="">
                        <div class="d-flex items-center">
                            <i class="icon-calendar text-20 mr-10"></i>
                            <div class="text-16 fw-500">Check-in/Check-out</div>
                        </div>

                        <div class="row x-gap-50 y-gap-5 pt-10">

                            <div class="col-12">
                                <div class="text-15">Check-in from: 16:00</div>
                            </div>

                            <div class="col-12">
                                <div class="text-15">Check-out until: 12:00</div>
                            </div>

                            <div class="col-12">
                                <div class="text-15">Reception open until: 00:00</div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-30">
                        <div class="d-flex items-center">
                            <i class="icon-location-pin text-20 mr-10"></i>
                            <div class="text-16 fw-500">Getting around</div>
                        </div>

                        <div class="row x-gap-50 y-gap-5 pt-10">

                            <div class="col-12">
                                <div class="text-15">Airport transfer fee: 60 USD</div>
                            </div>

                            <div class="col-12">
                                <div class="text-15">Distance from city center: 2 km</div>
                            </div>

                            <div class="col-12">
                                <div class="text-15">Travel time to airport (minutes): 45</div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="">
                        <div class="d-flex items-center">
                            <i class="icon-ticket text-20 mr-10"></i>
                            <div class="text-16 fw-500">Extras</div>
                        </div>

                        <div class="row x-gap-50 y-gap-5 pt-10">

                            <div class="col-12">
                                <div class="text-15">Breakfast charge (unless included in room price): 25 USD</div>
                            </div>

                            <div class="col-12">
                                <div class="text-15">Daily Internet/Wi-Fi fee: 10 USD</div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-30">
                        <div class="d-flex items-center">
                            <i class="icon-parking text-20 mr-10"></i>
                            <div class="text-16 fw-500">Parking</div>
                        </div>

                        <div class="row x-gap-50 y-gap-5 pt-10">

                            <div class="col-12">
                                <div class="text-15">Daily parking fee: 65 USD</div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="">
                        <div class="d-flex items-center">
                            <i class="icon-plans text-20 mr-10"></i>
                            <div class="text-16 fw-500">The property</div>
                        </div>

                        <div class="row x-gap-50 y-gap-5 pt-10">

                            <div class="col-12">
                                <div class="text-15">Non-smoking rooms/floors: Yes</div>
                            </div>

                            <div class="col-12">
                                <div class="text-15">Number of bars/lounges: 1</div>
                            </div>

                            <div class="col-12">
                                <div class="text-15">Number of floors: 26</div>
                            </div>

                            <div class="col-12">
                                <div class="text-15">Number of restaurants: 1</div>
                            </div>

                            <div class="col-12">
                                <div class="text-15">Number of rooms : 443</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="pt-40 layout-pb-md">
    <div class="container">
        <div class="pt-40 border-top-light">
            <div class="row y-gap-20">
                <div class="col-lg-4">
                    <h2 class="text-22 fw-500">FAQs about<br> The Crown Hotel</h2>
                </div>

                <div class="col-lg-8">
                    <div class="accordion -simple row y-gap-20 js-accordion">

                        <div class="col-12">
                            <div class="accordion__item px-20 py-20 border-light rounded-4">
                                <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                        <i class="icon-plus"></i>
                                        <i class="icon-minus"></i>
                                    </div>

                                    <div class="button text-dark-1">What do I need to hire a car?</div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="accordion__item px-20 py-20 border-light rounded-4">
                                <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                        <i class="icon-plus"></i>
                                        <i class="icon-minus"></i>
                                    </div>

                                    <div class="button text-dark-1">How old do I have to be to rent a car?</div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="accordion__item px-20 py-20 border-light rounded-4">
                                <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                        <i class="icon-plus"></i>
                                        <i class="icon-minus"></i>
                                    </div>

                                    <div class="button text-dark-1">Can I book a hire car for someone else?</div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="accordion__item px-20 py-20 border-light rounded-4">
                                <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                        <i class="icon-plus"></i>
                                        <i class="icon-minus"></i>
                                    </div>

                                    <div class="button text-dark-1">How do I find the cheapest car hire deal?</div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="accordion__item px-20 py-20 border-light rounded-4">
                                <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                        <i class="icon-plus"></i>
                                        <i class="icon-minus"></i>
                                    </div>

                                    <div class="button text-dark-1">What should I look for when I&#39;m choosing a car?</div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-lg">
    <div class="container">
        <div class="row justify-center text-center">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Popular properties similar to The Crown Hotel</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
                </div>
            </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">

            <div class="col-xl-3 col-lg-3 col-sm-6">

                <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">

                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="/frontend/img/hotels/1.png" alt="image">


                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>


                            <div class="cardImage__leftBadge">
                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                    Breakfast included
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                        <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                            <span>The Montcalm At Brewery London City</span>
                        </h4>

                        <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                        <div class="d-flex items-center mt-20">
                            <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                            <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                        </div>

                        <div class="mt-5">
                            <div class="fw-500">
                                Starting from <span class="text-blue-1">US$72</span>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

                <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">


                                <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <img class="col-12 js-lazy" src="#" data-src="/frontend/img/hotels/2.png" alt="image">
                                        </div>

                                        <div class="swiper-slide">
                                            <img class="col-12 js-lazy" src="#" data-src="/frontend/img/hotels/1.png" alt="image">
                                        </div>

                                        <div class="swiper-slide">
                                            <img class="col-12 js-lazy" src="#" data-src="/frontend/img/hotels/3.png" alt="image">
                                        </div>

                                    </div>

                                    <div class="cardImage-slider__pagination js-pagination"></div>

                                    <div class="cardImage-slider__nav -prev">
                                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                                            <i class="icon-chevron-left text-10"></i>
                                        </button>
                                    </div>

                                    <div class="cardImage-slider__nav -next">
                                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                                            <i class="icon-chevron-right text-10"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>


                        </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                        <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                            <span>Staycity Aparthotels Deptford Bridge Station</span>
                        </h4>

                        <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                        <div class="d-flex items-center mt-20">
                            <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                            <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                        </div>

                        <div class="mt-5">
                            <div class="fw-500">
                                Starting from <span class="text-blue-1">US$72</span>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

                <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">

                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="/frontend/img/hotels/3.png" alt="image">


                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>


                            <div class="cardImage__leftBadge">
                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                                    Best Seller
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                        <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                            <span>The Westin New York at Times Square</span>
                        </h4>

                        <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                        <div class="d-flex items-center mt-20">
                            <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                            <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                        </div>

                        <div class="mt-5">
                            <div class="fw-500">
                                Starting from <span class="text-blue-1">US$72</span>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

                <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">

                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="/frontend/img/hotels/4.png" alt="image">


                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>


                            <div class="cardImage__leftBadge">
                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                                    Top Rated
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                        <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                            <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                        </h4>

                        <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                        <div class="d-flex items-center mt-20">
                            <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                            <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                        </div>

                        <div class="mt-5">
                            <div class="fw-500">
                                Starting from <span class="text-blue-1">US$72</span>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </div>
</section>

@endsection