(function () {
  "use strict";

  /*------------------------------------------------------------------
  
    01. Custom easings
  
  -------------------------------------------------------------------*/

  window.App = {};

  App.html = document.querySelector('html');
  App.body = document.querySelector('body');
  App.SMcontroller = new ScrollMagic.Controller();

  window.onload = function () {
    document.fonts.ready.then(function () {
      initialReveal()
      initComponents()
    });
  }

  function initialReveal() {
    const preloader = document.querySelector('.js-preloader')
    if (!preloader) return

    setTimeout(() => {
      preloader.classList.add('-is-hidden')
      RevealAnim.init()
    }, 300)
  }

  // Reloads all scripts when navigating through pages
  function initComponents() {
    lazyLoading()
    Accordion.init()
    Tabs.init()
    warmDestinySlider()
    sectionSlider()
    interestSlider()
    Select.init(".js-select")
    parallaxInit()
    Events.init()
    Events.ddInit()
    Header.init()
    Header.headerSticky()

    testimonialsSlider()
    testimonialsSlider2()
    cardImageSlider()
    mastheadSlider4()
    mastheadSlider7()
    mastheadSlider8()
    dropDown()
    clickElToggle()
    carsSlider()
    cruiseSlider()
    singleMenu()
    calendarInteraction()
    testimonialsSlider3()
    calendarSlider()
    mastheadSlider9()
    galleryInit()
    pinOnScroll()
    lineChart()
    parallaxIt()
    timeRangeSliderInit()
    priceRangeSliderInit()
    countChange()
    liveSearch()
    // initMap()
    // initMapPlaces()
    // initMapSingle()
    languageSwitch()
    priceSwitch()

    //
    // your custom plugins init here
    //
  }

  function languageSwitch() {
    if (!document.querySelector('.js-langMenu')) return

    const mainTitle = document.querySelector('.js-language-mainTitle')
    const modal = document.querySelector('.js-langMenu')
    const items = modal.querySelectorAll('.js-item')

    items.forEach(el => {
      const title = el.querySelector('.js-title')

      el.addEventListener("click", () => {
        if (modal.querySelector('.-is-active')) {
          modal.querySelector('.-is-active').classList.remove("-is-active")
          console.log('some')
        }

        el.classList.toggle('-is-active')
        mainTitle.innerHTML = title.innerHTML
      })
    })

  }

  function priceSwitch() {
    if (!document.querySelector('.js-currencyMenu')) return

    const mainTitle = document.querySelector('.js-currencyMenu-mainTitle')
    const modal = document.querySelector('.js-currencyMenu')
    const items = modal.querySelectorAll('.js-item')

    items.forEach(el => {
      const title = el.querySelector('.js-title')

      el.addEventListener("click", () => {
        if (modal.querySelector('.-is-active')) {
          modal.querySelector('.-is-active').classList.remove("-is-active")
          console.log('some')
        }

        el.classList.toggle('-is-active')
        mainTitle.innerHTML = title.innerHTML
      })
    })

  }

  function liveSearch() {
    const targets = document.querySelectorAll('.js-liverSearch')
    if (!targets) return

    const data = [
      { city: "London", country: "Greater London, United Kingdom" },
      { city: "New York", country: "New York State, United States" },
      { city: "Paris", country: "France" },
      { city: "Madrid", country: "Spain" },
      { city: "Santorini", country: "Greece" }
    ]

    targets.forEach(el => {
      const search = el.querySelector('.js-search')
      const results = el.querySelector('.js-results')
      let searchTerm = ''

      results.querySelectorAll('.js-search-option').forEach(option => {
        const title = option.querySelector('.js-search-option-target').innerHTML

        option.addEventListener('click', () => {
          search.value = title
          el.querySelector('.js-popup-window').classList.remove('-is-active')
        })
      })

      search.addEventListener('input', (event) => {
        searchTerm = event.target.value.toLowerCase()
        showList(searchTerm, results)

        results.querySelectorAll('.js-search-option').forEach(option => {
          const title = option.querySelector('.js-search-option-target').innerHTML

          option.addEventListener('click', () => {
            search.value = title
            el.querySelector('.js-popup-window').classList.remove('-is-active')
          })
        })
      })
    })

    const showList = (searchTerm, resultsEl) => {
      resultsEl.innerHTML = '';

      data
        .filter((item) => item.city.toLowerCase().includes(searchTerm))
        .forEach((e) => {
          const div = document.createElement('div')

          div.innerHTML = `
          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
            <div class="d-flex">
              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
              <div class="ml-10">
                <div class="text-15 lh-12 fw-500 js-search-option-target">${e.city}</div>
                <div class="text-14 lh-12 text-light-1 mt-5">${e.country}</div>
              </div>
            </div>
          </button>
        `

          resultsEl.appendChild(div)
        })
    }
  }

  function countChange() {
    const targets = document.querySelectorAll('.js-form-counters')
    if (!targets) return

    targets.forEach(item => {
      const counters = item.querySelectorAll('.js-counter')

      counters.forEach(el => {
        const count = el.querySelector('.js-count')
        const buttonDown = el.querySelector('.js-down')
        const buttonUp = el.querySelector('.js-up')

        buttonDown.addEventListener('click', () => {
          if (count.innerHTML != 0) {
            count.innerHTML = parseInt(count.innerHTML) - 1

            if (el.getAttribute('data-value-change')) {
              item.querySelector(el.getAttribute('data-value-change')).innerHTML = parseInt(count.innerHTML)
            }
          }
        })

        buttonUp.addEventListener('click', () => {
          count.innerHTML = parseInt(count.innerHTML) + 1

          if (el.getAttribute('data-value-change')) {
            item.querySelector(el.getAttribute('data-value-change')).innerHTML = parseInt(count.innerHTML)
          }
        })
      });
    })
  }

  function timeRangeSliderInit() {
    const targets = document.querySelectorAll('.js-time-rangeSlider')

    targets.forEach(el => {
      const slider = el.querySelector('.js-slider')

      noUiSlider.create(slider, {
        start: [6, 11.5],
        step: 0.5,
        connect: true,
        range: {
          'min': 1,
          'max': 12
        },
        format: {
          to: function (value) {
            const string = value.toString()
            let newVal
            let time

            if (string.includes('.5')) {
              newVal = string.substr(0, string.indexOf('.')) + ':30'
            } else {
              newVal = parseInt(string).toFixed(0) + ':00'
            }

            if (string.substr(0, 2) > 9) {
              newVal = newVal + " PM"
            } else {
              newVal = newVal + " AM"
            }

            return newVal
          },

          from: function (value) {
            return value;
          }
        }
      })

      const snapValues = [
        el.querySelector('.js-lower'),
        el.querySelector('.js-upper'),
     
      ]

      slider.noUiSlider.on('update', function (values, handle) {
        snapValues[handle].innerHTML = values[handle];
       
      })
    })
  }

  function priceRangeSliderInit() {
    const targets = document.querySelectorAll('.js-price-rangeSlider')

    targets.forEach(el => {
      const slider = el.querySelector('.js-slider')

      noUiSlider.create(slider, {
        start: [0, 5000],
        step: 100,
        connect: true,
        range: {
          'min': 0,
          'max': 20000
        },
        format: {
          to: function (value) {
            return  value
          },

          from: function (value) {
            return value;
          }
        }
      })

      const snapValues = [
        el.querySelector('.js-lower'),
        el.querySelector('.js-upper'),
      ]

      slider.noUiSlider.on('update', function (values, handle) {
        snapValues[handle].innerHTML = values[handle];
        
      })
    })
  }

  function parallaxIt() {
    const target = document.querySelectorAll('.js-mouse-move-container')

    target.forEach(container => {
      const $this = container
      const targets = container.querySelectorAll('.js-mouse-move')

      targets.forEach(el => {
        const movement = el.getAttribute('data-move')

        document.addEventListener('mousemove', (e) => {
          const relX = e.pageX - $this.offsetLeft
          const relY = e.pageY - $this.offsetTop

          gsap.to(el, {
            x: (relX - $this.offsetWidth / 2) / $this.offsetWidth * movement,
            y: (relY - $this.offsetHeight / 2) / $this.offsetHeight * movement,
            duration: 0.2,
          })
        })
      })
    })
  }

  function lineChart() {
    const ctx = document.getElementById('lineChart');
    if (!ctx) return;

    const myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          'Jan', 'Feb', 'Marc', 'April', 'May', 'Jun', 'July', 'Agust', 'Sept', 'Oct', 'Now', 'Dec',
        ],
        datasets: [{
          label: '#',
          data: [148, 100, 205, 110, 165, 145, 180, 156, 148, 220, 180, 245],
          tension: 0.4,
          backgroundColor: '#336CFB',
          borderColor: '#336CFB',
          borderWidth: 2,
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: false,
          },
        },
        scales: {
          y: {
            min: 0,
            max: 300,
            ticks: {
              stepSize: 50
            }
          }
        },
      },
    });
  }

  function pinOnScroll() {
    const target = document.querySelectorAll('.js-pin-container');
    if (!target) return;

    target.forEach(el => {
      let itemOffset

      if (el.querySelector('.js-pin-content').getAttribute('data-offset')) {
        itemOffset = el.querySelector('.js-pin-content').getAttribute('data-offset')
      } else {
        itemOffset = 300
      }

      console.log(itemOffset)

      const sceneDuration = el.offsetHeight + parseInt(itemOffset);

      const sceneOffset = el.querySelector('.js-pin-content').offsetHeight + parseInt(itemOffset);

      const scene = new ScrollMagic.Scene({
        duration: sceneDuration - sceneOffset,
        offset: sceneOffset,
        triggerElement: el,
        triggerHook: "onEnter",
      })
        .setPin(".js-pin-content")
        .addTo(App.SMcontroller)

      let width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

      if (width < 992) {
        scene.duration('1px')
        scene.refresh()
      } else {
        scene.duration(sceneDuration - sceneOffset)
        scene.refresh()
      }

      window.addEventListener('resize', () => {
        let width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

        if (width < 992) {
          scene.duration('1px');
          scene.refresh();
        } else {
          scene.duration(sceneDuration - sceneOffset);
          scene.refresh();
        }
      })
    });
  }

  function galleryInit() {
    GLightbox({
      selector: '.js-gallery',
      touchNavigation: true,
      loop: false,
      autoplayVideos: true,
    });
  }

  function calendarInteraction() {
    const target = document.querySelectorAll('.js-calendar')
    if (!target) return

    target.forEach(elTarget => {
      const gridCells = elTarget.querySelectorAll('.table-calendar__grid > *')

      const firstDate = elTarget.querySelector('.js-first-date')
      const lastDate = elTarget.querySelector('.js-last-date')

      let completeState = false
      let firstItem = false
      let lastItem = false

      gridCells.forEach((el, i) => {
        el.addEventListener('click', () => {
          el.classList.add('-is-active')

          if (firstItem && getIndex(firstItem) > getIndex(el)) {
            lastItem = firstItem
            firstItem = el
          }

          if (firstItem && !lastItem) {
            lastItem = el
          }

          if (!firstItem) {
            firstItem = el
          }

          if (completeState) {
            firstItem = false
            lastItem = false

            const array = elTarget.querySelectorAll('.-is-active')
            array.forEach(el2 => {
              el2.classList.remove('-is-active')
            })

            const array2 = elTarget.querySelectorAll('.-is-in-path')
            array2.forEach(el2 => {
              el2.classList.remove('-is-in-path')
            })

            completeState = false

          } else if (firstItem && lastItem) {
            const iterationCount = Math.abs(getIndex(firstItem) - getIndex(lastItem))

            for (let l = 1; l < iterationCount; l++) {
              const item = elTarget.querySelector(`[data-index="${getIndex(firstItem) + l}"]`)
              item.classList.add('-is-in-path')
            }

            firstDate.innerHTML = `${firstItem.getAttribute('data-week')} ${firstItem.querySelector('.js-date').innerHTML} ${firstItem.getAttribute('data-month')}`
            lastDate.innerHTML = `${lastItem.getAttribute('data-week')} ${lastItem.querySelector('.js-date').innerHTML} ${lastItem.getAttribute('data-month')}`

            completeState = true
          }
        })
      })
    })

    function getIndex(element) {
      return parseInt(element.getAttribute('data-index'))
    }
  }

  function singleMenu() {
    const target = document.querySelector('.js-singleMenu')
    if (!target) return

    new ScrollMagic.Scene({ offset: '250px', })
      .setClassToggle(target, '-is-active')
      .addTo(App.SMcontroller);
  }

  function clickElToggle() {
    const target = document.querySelectorAll('[data-el-toggle]')
    if (!target) return

    target.forEach(el => {
      const attr = el.getAttribute('data-el-toggle')
      const openElement = document.querySelector(attr)

      const attrActive = el.getAttribute('data-el-toggle-active')
      const activeElement = document.querySelector(attrActive)

      el.addEventListener('click', () => {
        const allDD = document.querySelectorAll('.js-click-dropdown.-is-el-visible')
        if (allDD) {
          allDD.forEach((el) => el.classList.remove('-is-el-visible'))
        }

        const allActiveDD = document.querySelectorAll('.-is-dd-active')
        if (allActiveDD) {
          allActiveDD.forEach((el) => el.classList.remove('-is-dd-active'))
        }

        openElement.classList.toggle('-is-el-visible')
        if (activeElement)
          activeElement.classList.toggle('-is-dd-active')
      })
    });
  }

  function dropDown() {
    const target = document.querySelectorAll('.js-dropdown')
    if (!target) return;
  
    target.forEach(el => {
      const items = el.querySelectorAll('.js-dropdown-list .js-dropdown-link')
      const title = el.querySelector('.js-dropdown-title')
  
      let isOpen = false;
  
      el.addEventListener('click', () => {
        const toggleEl = el.querySelector('.js-click-dropdown');
        if (isOpen) {
          toggleEl.classList.remove('-is-el-visible');
          el.classList.remove('-is-dd-active');
          isOpen = false;
        } else {
          toggleEl.classList.add('-is-el-visible');
          el.classList.add('-is-dd-active');
          isOpen = true;
        }
      });
  
      items.forEach(el => {
        el.addEventListener('click', (e) => {
          e.preventDefault()
          title.innerHTML = el.innerHTML
  
          const allDD = document.querySelectorAll('.js-click-dropdown.-is-el-visible')
          if (allDD) {
            allDD.forEach((el) => { el.classList.remove('-is-el-visible') })
          }
  
          const allActiveDD = document.querySelectorAll('.js-dropdown.-is-dd-active')
          if (allActiveDD) {
            allActiveDD.forEach((el) => el.classList.remove('-is-dd-active'))
          }
  
          const toggleEl = el.closest('.js-dropdown').querySelector('.js-click-dropdown');
          toggleEl.classList.remove('-is-el-visible');
          el.closest('.js-dropdown').classList.remove('-is-dd-active');
        })
      })
    })
  }

  
  
  

  window.onclick = function (event) {
    if (
      !event.target.closest("[data-x-dd-click]") &&
      !event.target.closest("[data-x-dd]")
    ) {
      Events.closeAllDropdowns()
    }

    if (
      !event.target.classList.contains('dropdown__button') &&
      !event.target.classList.contains('js-dropdown-title')
    ) {
      const allDD = document.querySelectorAll('.js-click-dropdown.-is-el-visible')
      if (allDD) {
        allDD.forEach((el) => { el.classList.remove('-is-el-visible') })
      }

      const allActiveDD = document.querySelectorAll('.-is-dd-active')
      if (allActiveDD) {
        allActiveDD.forEach((el) => el.classList.remove('-is-dd-active'))
      }
    }

    if (!event.target.closest('.js-select')) {
      const targets = document.querySelectorAll('.js-select')
      if (!targets) return

      targets.forEach(el => {
        if (el.querySelector('.-is-visible')) {
          el.querySelector('.-is-visible').classList.remove('-is-visible')
        }
      })
    }

    if (!event.target.closest('.js-multiple-select')) {
      const targets = document.querySelectorAll('.js-multiple-select')
      if (!targets) return

      targets.forEach(el => {
        if (el.querySelector('.-is-visible')) {
          el.querySelector('.-is-visible').classList.remove('-is-visible')
        }
      })
    }
  }

  /*--------------------------------------------------
    ?. Map
  ---------------------------------------------------*/



  const Accordion = (function () {
    function init() {
      const targets = document.querySelectorAll(".js-accordion");
      if (!targets) return;
  
      for (let i = 0; i < targets.length; i++) {
        const items = targets[i].querySelectorAll('.accordion__item');
  
        for (let l = 0; l < items.length; l++) {
          const button = items[l].querySelector('.accordion__button')
          const content = items[l].querySelector('.accordion__content')
          const titleChange = items[l].querySelector('[data-open-change-title]')
          let buttonOrigTitle
          let buttonNewTitle
  
          if (items[l].classList.contains('js-accordion-item-active')) {
            items[l].classList.toggle('is-active')
            content.style.maxHeight = "100%";
          }
  
          if (titleChange) {
            buttonOrigTitle = titleChange.innerHTML
            buttonNewTitle = titleChange.getAttribute('data-open-change-title')
          }
  
          button.addEventListener("click", (e) => {
            items[l].classList.toggle('is-active');
  
            if (titleChange) {
              if (items[l].classList.contains('is-active')) {
                titleChange.innerHTML = buttonNewTitle
              } else {
                titleChange.innerHTML = buttonOrigTitle
              }
            }
  
            if (content.style.maxHeight) {
              content.style.maxHeight = null
            } else {
              content.style.maxHeight = "100%";
            }
          })
        }
      }
    }
  
    return {
      init: init,
    }
  })();
  

  const ShowMore = (function () {
    function init() {
      const targets = document.querySelectorAll(".js-show-more");
      if (!targets) return;

      targets.forEach((el, i) => {
        const button = el.querySelector('.show-more__button')
        const content = el.querySelector('.show-more__content')

        button.addEventListener("click", (e) => {
          el.classList.toggle('is-active')

          if (content.style.maxHeight) {
            content.style.maxHeight = null
          } else {
            content.style.maxHeight = content.scrollHeight + "px"
          }
        })
      })
    }

    return {
      init: init,
    }
  })();

  const Tabs = (function () {
    function init() {
      const targets = document.querySelectorAll(".js-tabs");
      if (!targets) return;

      targets.forEach(el => {
        singleTab(el)
      })
    }

    function singleTab(target) {
      const controls = target.querySelector('.js-tabs-controls');
      const controlsItems = target.querySelectorAll('.js-tabs-controls .js-tabs-button');
      const content = target.querySelector('.js-tabs-content');

      for (let l = 0; l < controlsItems.length; l++) {
        const el = controlsItems[l];

        el.addEventListener("click", (e) => {
          const selector = el.getAttribute('data-tab-target');

          controls.querySelector('.is-tab-el-active').classList.remove('is-tab-el-active')
          content.querySelector('.is-tab-el-active').classList.remove('is-tab-el-active')

          // console.log(controls.querySelector('.is-active'))
          // console.log(content.querySelector('.is-active'))

          el.classList.add('is-tab-el-active')
          content.querySelector(selector).classList.add('is-tab-el-active')
        });
      }
    }

    return {
      init: init,
    }
  })();
  /*--------------------------------------------------
    06. Elements reveal
  ---------------------------------------------------*/

  const RevealAnim = (function () {
    function single() {
      const animationTarget = document.querySelectorAll('[data-anim]');
      if (!animationTarget.length) return;

      for (let i = 0; i < animationTarget.length; i++) {
        const el = animationTarget[i];

        new ScrollMagic.Scene({
          offset: '350px',
          triggerElement: el,
          triggerHook: "onEnter",
          reverse: false,
        })
          .on('enter', function (event) {
            animateElement(el);
          })
          .addTo(App.SMcontroller)
      }
    }

    function container() {

      const animationContainer = document.querySelectorAll('[data-anim-wrap]');

      if (!animationContainer.length) {
        return;
      }

      for (let i = 0; i < animationContainer.length; i++) {
        const el = animationContainer[i];

        new ScrollMagic.Scene({
          offset: '350px',
          triggerElement: el,
          triggerHook: "onEnter",
          reverse: false,
        })
          .on('enter', function (event) {

            const animChilds = el.querySelectorAll('[data-anim-child]');
            el.classList.add('animated');
            animChilds.forEach(el => animateElement(el));

          })
          .addTo(App.SMcontroller)
      }

    }


    function animateElement(target) {

      let attrVal;
      let animDelay;
      let attrDelayPart;

      if (target.getAttribute('data-anim')) {
        attrVal = target.getAttribute('data-anim');
      } else {
        attrVal = target.getAttribute('data-anim-child');
      }

      if (attrVal.includes('delay-')) {
        attrDelayPart = attrVal.split(' ').pop();
        animDelay = attrDelayPart.substr(attrDelayPart.indexOf('-') + 1) / 10;
      }

      if (attrVal.includes('counter')) {
        counter(target, animDelay);
      }
      else if (attrVal.includes('line-chart')) {
        lineChart(target, animDelay);
      }
      else if (attrVal.includes('pie-chart')) {
        pieChart(target, animDelay);
      }
      else if (attrVal.includes('split-lines')) {
        splitLines(target, animDelay);
      }
      else {
        target.classList.add('is-in-view');
      }

    }

    function pieChart(target, animDelay = 0) {

      const counterVal = target.getAttribute('data-percent');
      const chartBar = target.querySelector('.js-chart-bar');

      if (counterVal < 0) { counterVal = 0; }
      if (counterVal > 100) { counterVal = 100; }

      gsap.fromTo(chartBar, {
        drawSVG: `0%`,
      }, {
        delay: 0.3 + animDelay,
        duration: 1.4,
        ease: 'power3.inOut',
        drawSVG: `${counterVal}%`,

        onStart: () => {
          chartBar.classList.remove('bar-stroke-hidden');
        }
      });


      let object = { count: 0 };
      const barPercent = target.querySelector('.js-chart-percent');

      gsap.to(object, {
        count: counterVal,
        delay: 0.45 + animDelay,
        duration: 1,
        ease: 'power3.inOut',

        onUpdate: function () {
          barPercent.innerHTML = Math.round(object.count) + '%';
        },
      });

    }

    function lineChart(target, animDelay = 0) {

      const counterVal = target.getAttribute('data-percent');

      gsap.fromTo(target.querySelector('.js-bar'), {
        scaleX: 0,
      }, {
        delay: 0.45 + animDelay,
        duration: 1,
        ease: 'power3.inOut',
        scaleX: counterVal / 100,
      })


      let object = { count: 0 };
      const barPercent = target.querySelector('.js-number');

      gsap.to(object, {
        count: counterVal,
        delay: 0.45 + animDelay,
        duration: 1,
        ease: 'power3.inOut',

        onUpdate: function () {
          barPercent.innerHTML = Math.round(object.count);
        },
      });

    }

    function counter(target, animDelay = 0) {

      const counterVal = target.getAttribute('data-counter');
      const counterAdd = target.getAttribute('data-counter-add');
      const totalDelay = animDelay;
      let symbols = '';

      let object = { count: 0 };
      const counterNum = target.querySelector('.js-counter-num');

      if (counterAdd) {
        symbols = counterAdd;
      }

      gsap.to(object, {
        count: counterVal,
        delay: totalDelay,
        duration: 1.8,
        ease: 'power3.inOut',

        onUpdate: function () {
          counterNum.innerHTML = Math.round(object.count) + symbols;
        },
      });

    }

    function init() {
      single();
      container();
    }

    return {
      init: init,
    }
  })();

  const Select = (function () {
    function init(selector) {
      document.querySelectorAll(selector).forEach((el) => singleSelect(el))
      document.querySelectorAll('.js-multiple-select').forEach((el) => multipleSelect(el))
    }

    function multipleSelect(target) {
      console.log(target)
      const button = target.querySelector('.js-button')
      const title = button.querySelector('.js-button-title')

      button.addEventListener('click', () => {
        let dropdown = target.querySelector('.js-dropdown')

        if (dropdown.classList.contains('-is-visible')) {
          dropdown.classList.remove('-is-visible')
        } else {
          closeAlldropdowns()
          dropdown.classList.add('-is-visible')
        }
      })

      const dropdown = target.querySelector('.js-dropdown')
      const options = dropdown.querySelectorAll('.js-options > *')

      options.forEach((el) => {
        el.addEventListener('click', () => {
          let selectedValues = []
          el.classList.toggle('-is-choosen')

          const array = dropdown.querySelectorAll('.-is-choosen .js-target-title')
          array.forEach((el2) => {
            selectedValues.push(el2.innerHTML)
          })

          if (!array.length) {
            title.innerHTML = "Default"
            target.setAttribute("data-select-value", "")
          } else {
            title.innerHTML = selectedValues.join(', ')
            target.setAttribute("data-select-value", selectedValues.join(', '))
          }

          const checkbox = el.querySelector('input')
          checkbox.checked = !checkbox.checked
        })
      })
    }

    function singleSelect(target) {
      const button = target.querySelector('.js-button')
      const title = button.querySelector('.js-button-title')

      if (target.classList.contains('js-liveSearch')) {
        liveSearch(target)
      }

      button.addEventListener('click', () => {
        let dropdown = target.querySelector('.js-dropdown')

        if (dropdown.classList.contains('-is-visible')) {
          dropdown.classList.remove('-is-visible')
        } else {
          closeAlldropdowns()
          dropdown.classList.add('-is-visible')
        }

        if (target.classList.contains('js-liveSearch')) {
          target.querySelector('.js-search').focus()
        }
      })

      const dropdown = target.querySelector('.js-dropdown')
      const options = dropdown.querySelectorAll('.js-options > *')

      options.forEach((el) => {
        el.addEventListener('click', () => {
          title.innerHTML = el.innerHTML
          target.setAttribute("data-select-value", el.getAttribute('data-value'))
          dropdown.classList.toggle('-is-visible')
        })
      })
    }

    function liveSearch(target) {
      const search = target.querySelector('.js-search')
      const options = target.querySelectorAll('.js-options > *')

      search.addEventListener('input', (event) => {
        let searchTerm = event.target.value.toLowerCase()

        options.forEach((el) => {
          el.classList.add('d-none')

          if (el.getAttribute('data-value').includes(searchTerm)) {
            el.classList.remove('d-none')
          }
        })
      })
    }

    function closeAlldropdowns() {
      const targets = document.querySelectorAll('.js-select, .js-multiple-select')
      if (!targets) return

      targets.forEach(el => {
        if (el.querySelector('.-is-visible')) {
          el.querySelector('.-is-visible').classList.remove('-is-visible')
        }
      })
    }

    return {
      init: init,
    }
  })()

  /*--------------------------------------------------
    08. Section sliders
  ---------------------------------------------------*/

  function sectionSlider() {
    const sectionSlider = document.querySelectorAll('.js-section-slider');
    if (!sectionSlider.length) return;

    for (let i = 0; i < sectionSlider.length; i++) {
      const el = sectionSlider[i];

      let prevNavElement = el.querySelector('.js-prev')
      let nextNavElement = el.querySelector('.js-next')

      if (el.getAttribute('data-nav-prev'))
        prevNavElement = document.querySelector(`.${el.getAttribute('data-nav-prev')}`)
      if (el.getAttribute('data-nav-next'))
        nextNavElement = document.querySelector(`.${el.getAttribute('data-nav-next')}`)

      let gap = 0;
      let loop = false;
      let centered = false;
      let pagination = false;
      let scrollbar = false;

      if (el.getAttribute('data-gap')) gap = el.getAttribute('data-gap');
      if (el.hasAttribute('data-loop')) loop = true;
      if (el.hasAttribute('data-center')) centered = true;

      if (el.getAttribute('data-pagination')) {
        let paginationElement = document.querySelector(`.${el.getAttribute('data-pagination')}`)

        pagination = {
          el: paginationElement,
          bulletClass: 'pagination__item',
          bulletActiveClass: 'is-active',
          bulletElement: 'div',
          clickable: true
        }
      }

      if (el.hasAttribute('data-scrollbar')) {
        scrollbar = {
          el: '.js-scrollbar',
          draggable: true,
        }
      }

      const colsArray = el.getAttribute('data-slider-cols').split(' ');

      let cols_base = 1;
      let cols_xl = 1;
      let cols_lg = 1;
      let cols_md = 1;
      let cols_sm = 1;

      colsArray.forEach(el => {
        if (el.includes('base')) cols_base = el.slice(-1);
        if (el.includes('xl')) cols_xl = el.slice(-1);
        if (el.includes('lg')) cols_lg = el.slice(-1);
        if (el.includes('md')) cols_md = el.slice(-1);
        if (el.includes('sm')) cols_sm = el.slice(-1);
      });

      new Swiper(el, {
        speed: 600,
        autoHeight: true,

        centeredSlides: centered,
        parallax: true,
        watchSlidesVisibility: true,
        loop: loop,
        loopAdditionalSlides: 1,
        preloadImages: false,
        lazy: true,
        // width: 250,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        scrollbar: scrollbar,
        pagination: pagination,
        spaceBetween: 10,

        slidesPerView: parseInt(cols_base),
        breakpoints: {
          1199: { slidesPerView: parseInt(cols_xl), width: null, spaceBetween: parseInt(gap), },
          991: { slidesPerView: parseInt(cols_lg), width: null, spaceBetween: parseInt(gap), },
          767: { slidesPerView: parseInt(cols_md), width: null, spaceBetween: parseInt(gap), },
          574: { slidesPerView: parseInt(cols_sm), width: null, spaceBetween: parseInt(gap), },
        },

        lazy: {
          loadPrevNext: true,
        },
        navigation: {
          prevEl: prevNavElement,
          nextEl: nextNavElement,
        },
      });
    }
  }

  function testimonialsSlider() {
    const slider = new Swiper('.js-testimonials-slider', {
      speed: 700,
      loop: true,
      lazy: {
        loadPrevNext: true,
      },
    })

    const paginationItems = document.querySelectorAll('.js-testimonials-slider .js-testimonials-pagination > * > *')

    paginationItems.forEach((el, i) => {
      el.addEventListener('click', () => {
        document
          .querySelector('.js-testimonials-slider .js-testimonials-pagination .is-active')
          .classList.remove('is-active')
        el.classList.add('is-active')
        slider.slideTo(i + 1)
      })
    })

    slider.on('slideChangeTransitionEnd', () => {
      document
        .querySelector('.js-testimonials-slider .js-testimonials-pagination .is-active')
        .classList.remove('is-active')
      paginationItems[slider.realIndex].classList.add('is-active')
    })
  }

  function testimonialsSlider2() {
    new Swiper('.js-testimonials-slider-2', {
      speed: 800,
      effect: "cards",
      cardsEffect: {
        slideShadows: true,
      },
      grabCursor: true,
      lazy: {
        loadPrevNext: true,
      },
      navigation: {
        prevEl: '.js-prev',
        nextEl: '.js-next',
      },
      pagination: {
        el: '.js-pagination',
        bulletClass: 'pagination__item',
        bulletActiveClass: 'is-active',
        bulletElement: 'div',
        clickable: true
      }
    });
  }

  function testimonialsSlider3() {
    const slider = new Swiper('.js-testimonials-slider-3', {
      speed: 800,
      cardsEffect: {
        slideShadows: true,
      },
      grabCursor: true,
      lazy: {
        loadPrevNext: true,
      },
      scrollbar: {
        el: '.js-scrollbar',
        draggable: true,
      },
    })

    if (document.querySelector('.js-testimonials-slider-3')) {
      const pagination = document.querySelector('.js-testimonials-slider-pag')
      const current = pagination.querySelector('.js-current')
      const all = pagination.querySelector('.js-all')

      all.innerHTML = `0${slider.slides.length}`
      slider.on('slideChangeTransitionEnd', () => current.innerHTML = `0${slider.realIndex + 1}`)
    }
  }

  function cardImageSlider() {
    new Swiper('.js-cardImage-slider', {
      speed: 400,
      loop: true,
      lazy: {
        loadPrevNext: true,
      },
      navigation: {
        prevEl: '.js-prev',
        nextEl: '.js-next',
      },
      pagination: {
        el: '.js-pagination',
        bulletClass: 'pagination__item',
        bulletActiveClass: 'is-active',
        bulletElement: 'div',
        clickable: true
      }
    })
  }

  function carsSlider() {
    const slider = new Swiper('.js-cars-slider', {
      speed: 600,
      lazy: {
        loadPrevNext: true,
      },
    })

    const paginationItems = document.querySelectorAll('.js-cars-slides > *')

    paginationItems.forEach((el, i) => {
      el.addEventListener('click', () => {
        document
          .querySelector('.js-cars-slides .-is-active')
          .classList.remove('-is-active')
        el.classList.add('-is-active')
        slider.slideTo(i)
      })
    })

    slider.on('slideChangeTransitionEnd', () => {
      document
        .querySelector('.js-cars-slides .-is-active')
        .classList.remove('-is-active')
      paginationItems[slider.realIndex].classList.add('-is-active')
    })
  }

  function cruiseSlider() {
    const slider = new Swiper('.js-cruise-slider', {
      speed: 600,
      navigation: {
        prevEl: '.js-prev',
        nextEl: '.js-next',
      },
    })

    const paginationItems = document.querySelectorAll('.js-cruise-slides .js-item')

    paginationItems.forEach((el, i) => {
      el.addEventListener('click', () => {
        document
          .querySelector('.js-cruise-slides .-is-active')
          .classList.remove('-is-active')
        el.classList.add('-is-active')
        slider.slideTo(i)
      })
    })

    slider.on('slideChangeTransitionEnd', () => {
      document
        .querySelector('.js-cruise-slides .-is-active')
        .classList.remove('-is-active')
      paginationItems[slider.realIndex].classList.add('-is-active')
    })
  }

  function mastheadSlider4() {
    new Swiper('.js-masthead-slider-4', {
      speed: 600,
      navigation: {
        prevEl: '.js-prev',
        nextEl: '.js-next',
      },
    })
  }

  function mastheadSlider7() {
    new Swiper('.js-masthead-slider-7', {
      speed: 600,
      loop: true,
      lazy: {
        loadPrevNext: true,
      },
      navigation: {
        prevEl: '.js-prev',
        nextEl: '.js-next',
      },
    })
  }

  function mastheadSlider8() {
    new Swiper('.js-masthead-slider-8', {
      speed: 600,
      loop: true,
      lazy: {
        loadPrevNext: true,
      },
      navigation: {
        prevEl: '.js-prev',
        nextEl: '.js-next',
      },
    })
  }

  function mastheadSlider9() {
    new Swiper('.js-masthead-slider-9', {
      speed: 600,
      loop: true,
      lazy: {
        loadPrevNext: true,
      },
      navigation: {
        prevEl: '.js-prev',
        nextEl: '.js-next',
      },
    })
  }


  function calendarSlider() {
    new Swiper('.js-calendar-slider', {
      speed: 600,
      autoHeight: true,
      gap: 60,

      slidesPerView: 1,
      breakpoints: {
        991: { slidesPerView: 2 },
      },

      navigation: {
        prevEl: '.js-calendar-prev',
        nextEl: '.js-calendar-next',
      },
    })
  }

  /*--------------------------------------------------
    11. Lazy loading
  ---------------------------------------------------*/

  function lazyLoading() {
    if (!document.querySelector('.js-lazy')) {
      return;
    }

    new LazyLoad({
      elements_selector: ".js-lazy",
    });
  }

  /*--------------------------------------------------
    12. Parallax
  ---------------------------------------------------*/

  function parallaxInit() {
    if (!document.querySelector('[data-parallax]')) return;
    const target = document.querySelectorAll('[data-parallax]')

    target.forEach(el => {
      jarallax(el, {
        speed: el.getAttribute('data-parallax'),
        imgElement: '[data-parallax-target]',
      })
    })
  }

  const Events = (function () {
    function init() {
      const targets = document.querySelectorAll("[data-x-click]")
      if (!targets) return

      targets.forEach((eventTarget) => {
        const attributes = eventTarget.getAttribute('data-x-click').split(', ')

        attributes.forEach((el) => {
          const target = document.querySelector(`[data-x=${el}]`)

          eventTarget.addEventListener('click', () => {
            const toggleClass = target.getAttribute('data-x-toggle')
            target.classList.toggle(toggleClass)
          })
        })
      })
    }

    function ddInit() {
      const targets = document.querySelectorAll(".js-form-dd")
      if (!targets) return

      targets.forEach((el) => {
        const eventTarget = el.querySelector('[data-x-dd-click]')
        const attributes = eventTarget.getAttribute('data-x-dd-click').split(', ')

        attributes.forEach((el2) => {
          const target = el.querySelector(`[data-x-dd=${el2}]`)
          if (target !== null) {
            const toggleClass = target.getAttribute('data-x-dd-toggle')
          }

          eventTarget.addEventListener('click', () => {
            if (eventTarget.querySelector('.js-dd-focus'))
              eventTarget.querySelector('.js-dd-focus').focus()

            if (target.classList.contains(toggleClass)) {
              target.classList.remove(toggleClass)
              el.classList.remove("-is-dd-wrap-active")
            } else {
              closeAllDropdowns()
              target.classList.add(toggleClass)
              el.classList.add("-is-dd-wrap-active")
            }
          })
        })
      })
    }

    function closeAllDropdowns() {
      const classes = document.querySelectorAll(".-is-dd-wrap-active")
      if (classes) {
        classes.forEach(el => {
          el.classList.remove('-is-dd-wrap-active')
        });
      }

      const targets = document.querySelectorAll(".js-form-dd")
      if (!targets) return

      targets.forEach((el) => {
        const eventElement = el.querySelector('[data-x-dd]')
        const eventTarget = el.querySelector('[data-x-dd-click]')
        const attributes = eventTarget.getAttribute('data-x-dd-click').split(', ')

        attributes.forEach((el) => {
          if (eventElement) {
            eventElement.classList.remove('-is-active')
          }
          const target = document.querySelector(`[data-x-dd=${el}]`)
          if (target !== null) {
            const toggleClass = target.getAttribute('data-x-dd-toggle');
            target.classList.remove(toggleClass)
          }
        })
      })
    }

    return {
      ddInit: ddInit,
      closeAllDropdowns: closeAllDropdowns,
      init: init,
    }
  })()

  /*--------------------------------------------------
    03. Header
  ---------------------------------------------------*/

  const Header = (function () {
    let navList;
    let navBtnListBack;
    let menuDeepLevel;
    let timeline = gsap.timeline();

    function updateVars() {
      navList = document.querySelector('.js-navList');
      navBtnListBack = document.querySelectorAll('.js-nav-list-back');
      menuDeepLevel = 0;
    }

    function init() {
      updateVars()
      menuListBindEvents()
    }

    function deepLevelCheck(level) {
      return level;
    }

    function menuListBindEvents() {
      const listItems = document.querySelectorAll('.js-navList .menu-item-has-children');
      if (!listItems.length) return;

      navBtnListBack.forEach(el => {
        el.addEventListener('click', () => {
          const visibleList = navList.querySelector('ul.-is-active');
          const parentList = visibleList.parentElement.parentElement;

          menuDeepLevel--;
          menuListStepAnimate(visibleList, parentList, menuDeepLevel, parentList.parentElement.querySelector('li > a').innerHTML);
        })
      })

      listItems.forEach(el => {
        const parentLink = el.querySelector('li > a');
        parentLink.removeAttribute('href');

        parentLink.addEventListener('click', () => {
          const parent = el.parentElement;
          const subnavList = el.lastElementChild;

          menuDeepLevel++;
          menuListStepAnimate(parent, subnavList, menuDeepLevel, parentLink.innerHTML);
        });
      });
    }

    function menuListStepAnimate(hideList, showList, level) {
      let hideListItems = hideList.children;
      hideListItems = Array.from(hideListItems);
      const hideListLinks = hideListItems.map(item => item.querySelector('li > a'));

      let showListItems = showList.children;
      showListItems = Array.from(showListItems);
      const showListLinks = showListItems.map(item => item.querySelector('li > a'));

      let width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

      if (width < 1199 || document.querySelector('.js-desktopMenu')) {
        timeline
          .clear()

        if (!deepLevelCheck(level)) {
          gsap.to(navBtnListBack, {
            ease: "quart.inOut",
            duration: 0.6,
            opacity: 0,
          })
        }

        timeline.to(hideListLinks, {
          ease: 'quart.out',
          stagger: -0.04,
          duration: 0.8,
          y: '100%',
          onStart: () => {
            showList.classList.add('-is-active');
          },
          onComplete: () => {
            hideList.classList.remove('-is-active');
          },
        })

        if (deepLevelCheck(level)) {
          timeline.to(navBtnListBack, {
            ease: "quart.inOut",
            duration: 0.6,
            y: '0px',
            opacity: 1,
          }, '>-0.5')
        }

        timeline.to(showListLinks, {
          ease: 'quart.out',
          stagger: 0.08,
          duration: 0.9,
          y: '0%',
        }, '>-0.6')
      }
    }

    function headerSticky() {
      const header = document.querySelector('.js-header');
      if (!header) return;

      let classList = ''

      if (header.getAttribute('data-add-bg')) {
        classList = header.getAttribute('data-add-bg')
      }

      new ScrollMagic.Scene({ offset: '6px', })
        .setClassToggle(header, classList)
        .addTo(App.SMcontroller);

      new ScrollMagic.Scene({ offset: '6px', })
        .setClassToggle(header, 'is-sticky')
        .addTo(App.SMcontroller);
    }

    return {
      headerSticky: headerSticky,
      init: init,
    }
  })();


  // custom js start
  var acc = document.getElementsByClassName("custom-accordion--");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }


  // slider js start 
  $(".hero__slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    dots: false,
    nav: true,
    navText: ["<span class='icon-arrow-left'><span/>", "<span class='icon-arrow-right'><span/>"],
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    smartSpeed: 1200,
    autoHeight: false,
    autoplay: true
  });

  $(".transport__slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    dots: false,
    nav: true,
    navText: ["<span class='icon-chevron-left'><span/>", "<span class='icon-chevron-right'><span/>"],
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    smartSpeed: 1200,
    autoHeight: false,
    autoplay: true
  });
  // slider js end 

  // tabs start
  let tabsHotelsBtn = document.querySelector(".overview-tabs-- #tabs-hotels-btn");
  let tabsTransportBtn = document.querySelector(".overview-tabs-- #tabs-transport-btn");
  let tabsHotelscontent = document.querySelector(".overview-tab-content #tab-hotels-content");
  let tabsTransportcontent = document.querySelector(".overview-tab-content #tab-transport-content");

  if (tabsHotelsBtn) {
    tabsHotelsBtn.onclick = () => {
      tabsHotelsBtn.classList.toggle("show")
      tabsHotelscontent.classList.toggle("show")

      tabsTransportBtn.classList.remove("show")
      tabsTransportcontent.classList.remove("show")
    }
  }
  if (tabsTransportBtn) {
    tabsTransportBtn.onclick = () => {
      tabsTransportBtn.classList.toggle("show")
      tabsTransportcontent.classList.toggle("show")

      tabsHotelsBtn.classList.remove("show")
      tabsHotelscontent.classList.remove("show")
    }
  }


  // tabs end 

  // warm destination start 
  function warmDestinySlider() {
    const sectionSlider = document.querySelectorAll('.warmDestiny-slider');
    if (!sectionSlider.length) return;

    for (let i = 0; i < sectionSlider.length; i++) {
      const el = sectionSlider[i];

      let prevNavElement = el.querySelector('.js-prev')
      let nextNavElement = el.querySelector('.js-next')

      if (el.getAttribute('data-nav-prev'))
        prevNavElement = document.querySelector(`.${el.getAttribute('data-nav-prev')}`)
      if (el.getAttribute('data-nav-next'))
        nextNavElement = document.querySelector(`.${el.getAttribute('data-nav-next')}`)

      let gap = 10;
      let loop = false;
      let centered = false;
      let pagination = false;
      let scrollbar = false;

      if (el.getAttribute('data-gap')) gap = el.getAttribute('data-gap');
      if (el.hasAttribute('data-loop')) loop = true;
      if (el.hasAttribute('data-center')) centered = true;

      if (el.getAttribute('data-pagination')) {
        let paginationElement = document.querySelector(`.${el.getAttribute('data-pagination')}`)

        pagination = {
          el: paginationElement,
          bulletClass: 'pagination__item',
          bulletActiveClass: 'is-active',
          bulletElement: 'div',
          clickable: true
        }
      }

      if (el.hasAttribute('data-scrollbar')) {
        scrollbar = {
          el: '.js-scrollbar',
          draggable: true,
        }
      }

      const colsArray = el.getAttribute('data-slider-cols').split(' ');

      let cols_base = 1;
      let cols_xl = 1;
      let cols_lg = 1;
      let cols_md = 1;
      let cols_sm = 1;

      colsArray.forEach(el => {
        if (el.includes('base')) cols_base = el.slice(-1);
        if (el.includes('xl')) cols_xl = el.slice(-1);
        if (el.includes('lg')) cols_lg = el.slice(-1);
        if (el.includes('md')) cols_md = el.slice(-1);
        if (el.includes('sm')) cols_sm = el.slice(-1);
      });

      new Swiper(el, {
        speed: 600,
        // autoHeight: true,

        centeredSlides: centered,
        parallax: true,
        watchSlidesVisibility: true,
        loop: loop,
        loopAdditionalSlides: 1,
        preloadImages: false,
        lazy: true,
        grabCursor: true,

        scrollbar: scrollbar,
        pagination: pagination,
        spaceBetween: 50,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },

        slidesPerView: parseInt(cols_base),
        breakpoints: {
          1024: { slidesPerView: parseInt(6), width: null, spaceBetween: parseInt(gap), },
          768: { slidesPerView: parseInt(3), width: null, spaceBetween: parseInt(gap), },
          0: { slidesPerView: parseInt(1), width: null, spaceBetween: parseInt(gap), },
        },

        lazy: {
          loadPrevNext: true,
        },
        navigation: {
          prevEl: prevNavElement,
          nextEl: nextNavElement,
        },
      });
    }
  }
  // warm destination end 

  // interest in miami start 

  function interestSlider() {
    const sectionSlider = document.querySelectorAll('.interest-section-slider');
    if (!sectionSlider.length) return;

    for (let i = 0; i < sectionSlider.length; i++) {
      const el = sectionSlider[i];

      let prevNavElement = el.querySelector('.js-prev')
      let nextNavElement = el.querySelector('.js-next')

      if (el.getAttribute('data-nav-prev'))
        prevNavElement = document.querySelector(`.${el.getAttribute('data-nav-prev')}`)
      if (el.getAttribute('data-nav-next'))
        nextNavElement = document.querySelector(`.${el.getAttribute('data-nav-next')}`)

      let gap = 10;
      let loop = false;
      let centered = false;
      let pagination = false;
      let scrollbar = false;

      if (el.getAttribute('data-gap')) gap = el.getAttribute('data-gap');
      if (el.hasAttribute('data-loop')) loop = true;
      if (el.hasAttribute('data-center')) centered = true;

      if (el.getAttribute('data-pagination')) {
        let paginationElement = document.querySelector(`.${el.getAttribute('data-pagination')}`)

        pagination = {
          el: paginationElement,
          bulletClass: 'pagination__item',
          bulletActiveClass: 'is-active',
          bulletElement: 'div',
          clickable: true
        }
      }

      if (el.hasAttribute('data-scrollbar')) {
        scrollbar = {
          el: '.js-scrollbar',
          draggable: true,
        }
      }

      const colsArray = el.getAttribute('data-slider-cols').split(' ');

      let cols_base = 1;
      let cols_xl = 1;
      let cols_lg = 1;
      let cols_md = 1;
      let cols_sm = 1;

      colsArray.forEach(el => {
        if (el.includes('base')) cols_base = el.slice(-1);
        if (el.includes('xl')) cols_xl = el.slice(-1);
        if (el.includes('lg')) cols_lg = el.slice(-1);
        if (el.includes('md')) cols_md = el.slice(-1);
        if (el.includes('sm')) cols_sm = el.slice(-1);
      });

      new Swiper(el, {
        speed: 600,
        // autoHeight: true,

        centeredSlides: centered,
        parallax: true,
        watchSlidesVisibility: true,
        loop: loop,
        loopAdditionalSlides: 1,
        preloadImages: false,
        lazy: true,
        grabCursor: true,

        scrollbar: scrollbar,
        pagination: pagination,
        spaceBetween: 50,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },

        slidesPerView: parseInt(cols_base),
        breakpoints: {
          1024: { slidesPerView: parseInt(4), width: null, spaceBetween: parseInt(gap), },
          768: { slidesPerView: parseInt(3), width: null, spaceBetween: parseInt(gap), },
          0: { slidesPerView: parseInt(1), width: null, spaceBetween: parseInt(gap), },
        },

        lazy: {
          loadPrevNext: true,
        },
        navigation: {
          prevEl: prevNavElement,
          nextEl: nextNavElement,
        },
      });
    }
  }
  // interest in miami end

  // inquiry form start 
  document.addEventListener("DOMContentLoaded", function () {
    const modal = document.querySelector('#inquiryForm');

    if (modal) {
      document.querySelector("#modal-close-overlay").onclick = () => {
        modal.classList.add("closed");
      };

      document.querySelector("#modal-close-btn").onclick = () => {
        modal.classList.add("closed");
      };
    }
  });
  // inquiry form end 


  // custom js end 

})();
