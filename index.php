<?php include 'header-one.php'; ?>

<!-- Offer Button -->

<!--================= Header Area end =================-->
<!--================= Hero Area =================-->
<section class="z-index-common hero-layout1 overflow-clip">

  <!-- Background Video -->
  <video autoplay muted loop playsinline class="hero-bg-video">
    <source src="home/img/hero/bella-vdo.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Dark Overlay -->
  <div class="hero-overlay"></div>

  <div class="container-fluid p-xl-0">

    <div class="row justify-content-center">
      <div class="col-xl-10 col-xxl-7">
        <div class="hero-content text-center">
          <!-- <img class="fade-anim" data-delay="0.70" src="home/img/icons/hero-sun.png" alt="icon" />
              <div class="title-area text-center">
                <span class="sec-subtitle mb-0 fade-anim" data-delay="0.75" data-direction="bottom">about Bella
                  Vista</span>
                <h1 class="sec-title text-white-color fade-anim" data-delay="0.76" data-direction="top">
                  Find your holiday <br class="d-none d-xxl-block" />
                  with us
                </h1>
              </div> -->
          <div class="search-box fade-anim" data-delay="0.77" data-direction="top">
            <form action="https://html.vecurosoft.com/tripix/tripix-demo/index.php" class="align-items-center">
              <!-- Destination Field -->
              <div class="form-group ps-0">
                <label for="select-division" class="form-label d-flex align-items-center">
                  <i class="fa-sharp fa-light fa-location-dot me-2"></i>
                  Select Room Type
                </label>
                <select id="select-division" name="division" class="form-select" required>
                  <option value="" disabled selected hidden>
                    Select Division
                  </option>
                  <option value="Barishal">Barishal</option>
                  <option value="Chattogram">Chattogram</option>
                  <option value="Dhaka">Dhaka</option>
                  <option value="Khulna">Khulna</option>
                  <option value="Mymensingh">Mymensingh</option>
                  <option value="Rajshahi">Rajshahi</option>
                  <option value="Rangpur">Rangpur</option>
                  <option value="Sylhet">Sylhet</option>
                </select>
              </div>
              <!-- Date Field -->
              <div class="form-group date-form">
                <label for="search-date" class="form-label d-flex align-items-center">
                  <i class="fa-regular fa-calendar-days me-2"></i>
                  Date
                </label>
                <!-- <input type="text" id="search-date" name="searchDate" class="form-select" placeholder="Date from"
                      readonly /> -->
                <input type="text" id="dateRange" class="form-select" placeholder="From – To">

                <div style="margin-top:10px;">
                  <input type="checkbox" id="flexibleDate" onchange="toggleFlexible()">
                  <label for="flexibleDate" class="flexible-dt">Flexible Date</label>
                </div>
              </div>
              
              <!-- Guest Field -->
              <div class="form-group">
                <label for="guest-dropdown" class="form-label d-flex align-items-center">
                  <i class="fa-regular fa-user-hoodie me-2"></i> Guest
                </label>
                <!-- <select id="guest-dropdown" name="guest" class="form-select">
                  <option value="1">Child</option>
                  <option value="2">Adult</option>
                </select> -->
                <div class="custom-select">
  <div class="select-display">Guests: <span id="total-guests">1</span></div>

  <div class="select-dropdown">
    <div class="counter-item">
      <span>Adults</span>
      <div class="counter-controls">
        <button class="minus" data-type="adult">-</button>
        <span id="adult-count">1</span>
        <button class="plus" data-type="adult">+</button>
      </div>
    </div>

    <div class="counter-item">
      <span>Children</span>
      <div class="counter-controls">
        <button class="minus" data-type="child">-</button>
        <span id="child-count">0</span>
        <button class="plus" data-type="child">+</button>
      </div>
    </div>
  </div>
</div>

              </div>
              <!-- Submit Button -->
              <div class="form-group pe-0">
                <button type="submit" class="vs-btn style4 w-100">
                  Search
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--================= Hero Area end =================-->
<!--================= Commitment Area end =================-->
<div class="vs-services-style1 space bg-second-theme-color" data-bg-src="home/img/services/vs-services-style1-bg.png">
  <img src="home/img/icons/cloud.png" alt="icon" class="vs-services-style1-icon-1 animate-parachute" />
  <img src="home/img/icons/ballon.png" alt="icon" class="vs-services-style1-icon-2 animate-parachute" />
  <div class="container">
    <div class="title-area text-center text-md-center">
      <span class="sec-subtitle fade-anim" data-direction="bottom">Commitment Restrengthened</span>
      <h2 class="sec-title text-white-color fade-anim" data-direction="top">
        Stronger Promises,<span> Deeper</span> Connections
      </h2>
    </div>
    <div class="row g-4 align-items-end">
      <div class="col-md-6 text-center text-md-start">
        <div class="row">
          <div class="col-12 col-xl-11">


          </div>
        </div>
        <div class="row g-4 pt-0">

          <div class="col-lg-6 fade-anim">
            <div class="vs-services-box-style1">
              <figure class="services-thumb pt-4">
                <img src="home/img/icons/protocols.png" alt="vs-services-thumb" class="w-100 commit-icon" />
              </figure>
              <div class="services-content">

                <div class="services-content-inner">
                  <h5 class="services-title">
                    <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Safety<br> Protocol</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 fade-anim">
            <div class="vs-services-box-style1">
              <figure class="services-thumb pt-4">
                <img src="home/img/icons/tap-to-pay.png" alt="vs-services-thumb" class="w-100 commit-icon" />
              </figure>
              <div class="services-content">

                <div class="services-content-inner">
                  <h5 class="services-title">
                    <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Contactless Technology</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-4">
          <div class="col-lg-6 fade-anim">
            <div class="vs-services-box-style1">
              <figure class="services-thumb pt-4">
                <img src="home/img/icons/safe (1).png" alt="vs-services-thumb" class="w-100 commit-icon" />
              </figure>
              <div class="services-content">

                <div class="services-content-inner">
                  <h5 class="services-title">
                    <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Trained On<br> Hygiene</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 fade-anim">
            <div class="vs-services-box-style1">
              <figure class="services-thumb pt-4">
                <img src="home/img/icons/bed.png" alt="vs-services-thumb" class="w-100 commit-icon" />
              </figure>
              <div class="services-content">

                <div class="services-content-inner">
                  <h5 class="services-title">
                    <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Safer<br> Rooms</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-50 btn-trigger btn-bounce">
        <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303" class="vs-btn style4">
          <span>view more</span>
        </a>
      </div>
    </div>

  </div>
</div>

<!--================= amenities Area end =================-->
<!--================= Tour Package Area start =================-->
<section class="vs-tour-package space">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-md-6 col-lg-6 col-xxl-5">
        <div class="title-area text-center text-md-start">
          <span class="sec-subtitle fade-anim" data-direction="bottom">Dive Into Endless Experiences</span>
          <h2 class="sec-title fade-anim" data-direction="top">
            What to expect...
          </h2>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-xxl-5">
        <div class="swiper-arrow2 tour-packages-navigation justify-content-center justify-content-md-end">
          <button class="tour-packages-next">
            <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.08984 16.92L1.56984 10.4C0.799843 9.62996 0.799843 8.36996 1.56984 7.59996L8.08984 1.07996"
                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round"></path>
            </svg>
          </button>
          <button class="tour-packages-prev btn-right">
            <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.910156 16.92L7.43016 10.4C8.20016 9.62996 8.20016 8.36996 7.43016 7.59996L0.910156 1.07996"
                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round"></path>
            </svg>
          </button>
        </div>
      </div>
      <div class="col-12 mt-30 mt-md-0 fade-anim" data-direction="right">
        <div class="swiper tour-package-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destination-1-1.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Private Spaces</a>
                    </h4>
                  </div>
                  <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destination-1-3.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Rustic ambience</a>
                    </h4>
                  </div>
                  <a href="#" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destination-1-2.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Resort and Spa</a>
                    </h4>
                  </div>
                  <a href="#" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destination-2-2.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">High-speed internet</a>
                    </h4>
                  </div>
                  <a href="#" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destinations-thumb-2-1.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Convenient location</a>
                    </h4>
                  </div>
                  <a href="#" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destinations-thumb-2-5.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Beautiful views</a>
                    </h4>
                  </div>
                  <a href="#" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destination-1-10.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Homely food</a>
                    </h4>
                  </div>
                  <a href="#" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destination-1-9.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Ample parking</a>
                    </h4>
                  </div>
                  <a href="#" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destination-1-8.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Family-oriented</a>
                    </h4>
                  </div>
                  <a href="#" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destination-1-7.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Play area</a>
                    </h4>
                  </div>
                  <a href="#" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destination-1-6.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Kid friendly</a>
                    </h4>
                  </div>
                  <a href="#" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destination-1-5.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Short city break</a>
                    </h4>
                  </div>
                  <a href="#" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/destination-1-4.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Eclectic experiences</a>
                    </h4>
                  </div>
                  <a href="#" class="icon bg-theme-color text-white-color">
                    <i class="fa-solid fa-location-dot"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--================= Tour Package Area end =================-->
<!--================= Services Area end =================-->
<div class="vs-services-style1 space bg-second-theme-color" data-bg-src="home/img/services/vs-services-style1-bg.png">
  <img src="home/img/icons/cloud.png" alt="icon" class="vs-services-style1-icon-1 animate-parachute" />
  <img src="home/img/icons/ballon.png" alt="icon" class="vs-services-style1-icon-2 animate-parachute" />
  <div class="container">
    <div class="row g-4 align-items-end">
      <div class="col-md-6 text-center text-md-start">
        <div class="row">
          <div class="col-12 col-xl-11">
            <div class="title-area text-center text-md-start">
              <span class="sec-subtitle fade-anim" data-direction="bottom">Book Direct & Enjoy Exclusive
                Services</span>
              <h2 class="sec-title text-white-color fade-anim" data-direction="top">
                Book Direct for <span>the Best </span> Prices
              </h2>
            </div>
            <a class="vs-btn style-4 fade-anim" target="_blank" data-direction="top"
              href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303">Book Direct</a>
          </div>
        </div>
        <div class="row g-4 pt-120">

          <div class="col-lg-6 fade-anim">
            <div class="vs-services-box-style1">
              <figure class="services-thumb">
                <img src="home/img/services/services-thumb-1-3.png" alt="vs-services-thumb" class="w-100" />
              </figure>
              <div class="services-content">

                <div class="services-content-inner">
                  <h5 class="services-title">
                    <a href="javascript:void(0)">Best Rates</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 fade-anim">
            <div class="vs-services-box-style1">
              <figure class="services-thumb">
                <img src="home/img/services/services-thumb-1-4.png" alt="vs-services-thumb" class="w-100" />
              </figure>
              <div class="services-content">

                <div class="services-content-inner">
                  <h5 class="services-title">
                    <a href="javascript:void(0)">No Hidden Charges</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-4">
          <div class="col-lg-6 fade-anim">
            <div class="vs-services-box-style1">
              <figure class="services-thumb">
                <img src="home/img/services/services-thumb-1-1.png" alt="vs-services-thumb" class="w-100" />
              </figure>
              <div class="services-content">

                <div class="services-content-inner">
                  <h5 class="services-title">
                    <a href="javascript:void(0)">Exclusive Offers</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 fade-anim">
            <div class="vs-services-box-style1">
              <figure class="services-thumb">
                <img src="home/img/services/services-thumb-1-2.png" alt="vs-services-thumb" class="w-100" />
              </figure>
              <div class="services-content">

                <div class="services-content-inner">
                  <h5 class="services-title">
                    <a href="javascript:void(0)">Wifi Access</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 fade-anim">
            <img src="home/img/activities/act.png" alt="act">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--================= Services Area end =================-->
<!--================= Destination Area start =================-->
<section class="vs-destination-style1 bg-third-theme-12 overflow-hidden space"
  data-bg-src="home/img/bg/destination.png">
  <img class="des-icon-1 animate-parachute" src="home/img/icons/destination-icon-1.png" alt="icon" />
  <img class="des-icon-2 animate-tree" src="home/img/icons/destination-icon-2.png" alt="icon" />
  <div class="container">
    <div class="row">

    </div>
    <div class="row justify-content-between align-items-center">
      <div class="col-md-6 col-lg-6 col-xxl-5">
        <div class="title-area text-center text-md-start">
          <span class="sec-subtitle fade-anim" data-direction="bottom">Choose Your Perfect Retreat</span>
          <h2 class="sec-title fade-anim" data-direction="top">
            Explore The Room Type
          </h2>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-xxl-5">
        <div class="swiper-arrow2 tour-packages-navigation justify-content-center justify-content-md-end">
          <button class="room-type-next">
            <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.08984 16.92L1.56984 10.4C0.799843 9.62996 0.799843 8.36996 1.56984 7.59996L8.08984 1.07996"
                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round"></path>
            </svg>
          </button>
          <button class="room-type-prev btn-right">
            <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.910156 16.92L7.43016 10.4C8.20016 9.62996 8.20016 8.36996 7.43016 7.59996L0.910156 1.07996"
                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round"></path>
            </svg>
          </button>
        </div>
      </div>
      <div class="col-12 mt-30 mt-md-0 fade-anim" data-direction="right">
        <div class="swiper room-type-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/forest-wing.jpg" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="javascript:void(0)">The Forest Wing</a>
                    </h4>
                    <p class="hover-description">
                      The Forest Wing has the distinguished advantage of being a ‘drive-in’ zone, which practically
                      enables you to drive your car to your door-step.
                    </p>
                    <span class="text-theme-color d-block"><a href="javascript:void(0)">Explore Now</a></span>

                  </div>

                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/redstone-wing.jpg" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="javascript:void(0)">Red Stone Wing</a>
                    </h4>
                    <p class="hover-description">
                      The Red stone Wing offers panoramic views of the valley or the town side. There are stairs to
                      negotiate and the building does not have an elevator service.
                    </p>
                    <span class="text-theme-color d-block"><a href="javascript:void(0)">Explore Now</a></span>
                  </div>

                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/orchard-wing.jpg" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="javascript:void(0)">The Orchid Wing</a>
                    </h4>
                    <p class="hover-description">
                      The freshly renovated Orchid Wing has modernized rooms offering scenic views of the valley or
                      the
                      backyard. Home of the suites, it boasts proximity to the parking area, children’s park, and
                      swimming pool.
                    </p>
                    <span class="text-theme-color d-block"><a href="javascript:void(0)">Explore Now</a></span>
                  </div>

                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/forest-central-wing.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="javascript:void(0)">Forest Central Wing</a>
                    </h4>
                    <p class="hover-description">
                      Well appointed rooms overlooking the Forest Cafe with an option to choose from 'One Queen bed'
                      layout for a couple or 'Two Queen beds' room suitable for a family. Situated in the drive-in
                      zone
                      of the Forest Wing for easy accessibility.
                    </p>
                    <span class="text-theme-color d-block"><a href="javascript:void(0)">Explore Now</a></span>
                  </div>

                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="https://www.bellavistaresort.com/images/forest-executive-room/forest-executive-room-05.jpg"
                    alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="javascript:void(0)">Apartment Wing</a>
                    </h4>
                    <p class="hover-description">
                      Enjoy the privacy of your own private space with a layout of 2 private bedrooms with balconies
                      and
                      a living room apartment. The apartment on the first floor has an additional vestibule area.
                    </p>
                    <span class="text-theme-color d-block"><a href="javascript:void(0)">Explore Now</a></span>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-50 btn-trigger btn-bounce">
        <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303" class="vs-btn style4">
          <span>view more</span>
        </a>
      </div>
      <!-- <div class="col-md-12">
            <div class="destination-box-wrapper">
              <div class="destination-box active">
                <div class="destination-thumb">
                  <img src="home/img/destination/forest-wing.jpg" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="javascript:void(0)">The Forest Wing</a>
                    </h4>
                    <p class="hover-description">
                      The Forest Wing has the distinguished advantage of being a ‘drive-in’ zone, which practically
                      enables you to drive your car to your door-step.
                    </p>
                    <span class="text-theme-color d-block"><a href="javascript:void(0)">Explore Now</a></span>

                  </div>

                </div>
              </div>
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/redstone-wing.jpg" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="javascript:void(0)">Red Stone Wing</a>
                    </h4>
                    <p class="hover-description">
                      The Red stone Wing offers panoramic views of the valley or the town side. There are stairs to
                      negotiate and the building does not have an elevator service.
                    </p>
                    <span class="text-theme-color d-block"><a href="javascript:void(0)">Explore Now</a></span>
                  </div>

                </div>
              </div>
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/orchard-wing.jpg" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="javascript:void(0)">The Orchid Wing</a>
                    </h4>
                    <p class="hover-description">
                      The freshly renovated Orchid Wing has modernized rooms offering scenic views of the valley or the
                      backyard. Home of the suites, it boasts proximity to the parking area, children’s park, and
                      swimming pool.
                    </p>
                    <span class="text-theme-color d-block"><a href="javascript:void(0)">Explore Now</a></span>
                  </div>

                </div>
              </div>
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/forest-central-wing.png" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="javascript:void(0)">Forest Central Wing</a>
                    </h4>
                    <p class="hover-description">
                      Well appointed rooms overlooking the Forest Cafe with an option to choose from 'One Queen bed'
                      layout for a couple or 'Two Queen beds' room suitable for a family. Situated in the drive-in zone
                      of the Forest Wing for easy accessibility.
                    </p>
                    <span class="text-theme-color d-block"><a href="javascript:void(0)">Explore Now</a></span>
                  </div>

                </div>
              </div>
              <div class="destination-box">
                <div class="destination-thumb">
                  <img src="home/img/destination/orchard-wing.jpg" alt="destination" class="w-100" />
                </div>
                <div class="destination-content">
                  <div class="info">
                    <h4 class="text-white text-capitalize">
                      <a href="javascript:void(0)">Apartment Wing</a>
                    </h4>
                    <p class="hover-description">
                      Enjoy the privacy of your own private space with a layout of 2 private bedrooms with balconies and
                      a living room apartment. The apartment on the first floor has an additional vestibule area.
                    </p>
                    <span class="text-theme-color d-block"><a href="javascript:void(0)">Explore Now</a></span>
                  </div>

                </div>
              </div>

            </div>
            <div class="text-center mt-50 btn-trigger btn-bounce">
              <a href="https://bookings.resavenue.com/resBooking/availsearch?regCode=IGIA0303" class="vs-btn style4">
                <span>view more</span>
              </a>
            </div>
          </div> -->
    </div>
  </div>
</section>
<!--================= Destination Area end =================-->
<div class="vs-services-style1 space bg-second-theme-color" data-bg-src="home/img/services/vs-services-style1-bg.png">
  <img src="home/img/icons/cloud.png" alt="icon" class="vs-services-style1-icon-1 animate-parachute" />
  <img src="home/img/icons/ballon.png" alt="icon" class="vs-services-style1-icon-2 animate-parachute" />
  <div class="container">
    <div class="title-area text-center text-md-center">
      <span class="sec-subtitle fade-anim" data-direction="bottom">Everything You Need, All in One Place</span>
      <h2 class="sec-title text-white-color fade-anim" data-direction="top">
        Amenities <span>Designed </span> for Your Perfect Stay
      </h2>
    </div>
    <div class="commitment-container">
      <div class="swiper commitment-swiper">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <img src="home/img/icons/hot-water.png" alt="water" class="commitment-icon">
            <h3>Hot & Cold Water</h3>
            <p>24x7 running hot & cold water is available at the resort.</p>
          </div>
          <!-- Slide 2 -->
          <div class="swiper-slide">
            <img src="home/img/icons/coffee-machine.png" alt="water" class="commitment-icon">
            <h3>Tea/Coffee Maker</h3>
            <p>Tea/coffee makers are provided in each Select Room Type.</p>
          </div>
          <!-- Slide 3 -->
          <div class="swiper-slide">
            <img src="home/img/icons/hotel-service.png" alt="water" class="commitment-icon">
            <h3>Room Service</h3>
            <p>Impeccable room service is provided around the clock.</p>
          </div>
          <!-- Slide 4 -->
          <div class="swiper-slide">
            <img src="home/img/icons/news.png" alt="water" class="commitment-icon">
            <h3>Daily Newspaper</h3>
            <p>Keep abreast of the latest from around the world with our regional and national newspapers.</p>
          </div>
          <!-- Slide 5 -->
          <div class="swiper-slide">
            <img src="home/img/icons/safebox.png" alt="water" class="commitment-icon">
            <h3>Electronic Locker</h3>
            <p>An electronic safe is provided in most rooms.</p>
          </div>
        </div>

        <!-- Add Controls -->

        <div class="swiper-pagination"></div>
      </div>

    </div>
    <div class="swiper-button-next amt-card"></div>
    <div class="swiper-button-prev amt-card"></div>

  </div>
</div>
<!--================= Testimonial Section Start =================-->
<section class="testimonial position-relative space" data-bg-src="home/img/bg/testimonial-bg.png">
  <img src="home/img/icons/eiffel-tower-dark.png" alt="testimonial-icon" class="testimonial-icon" />
  <div class="container">
    <div class="row">
      <div class="col-lg-auto mx-auto">
        <div class="title-area text-center">
          <span class="sec-subtitle fade-anim" data-direction="bottom">Our Testimonials</span>
          <h2 class="sec-title fade-anim" data-direction="top">
            What Customers Say About Us
          </h2>
        </div>
      </div>
    </div>
    <div class="row fade-anim">
      <div class="col-xl-10 mx-auto">
        <!-- <div class="testimonial-sliders-wrapper"> -->
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="swiper testimonial-thumbnail-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial-thumbnail">
                    <img src="home/img/testimonial/testimonial-thumb-1-1.png" alt="Person 1" class="w-100" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-thumbnail">
                    <img src="home/img/testimonial/testimonial-thumb-1-1.png" alt="Person 2" class="w-100" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-thumbnail">
                    <img src="home/img/testimonial/testimonial-thumb-1-1.png" alt="Person 3" class="w-100" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-thumbnail">
                    <img src="home/img/testimonial/testimonial-thumb-1-1.png" alt="Person 3" class="w-100" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 d-lg-flex align-items-lg-center">
            <!-- Swiper Content Slider -->
            <div class="swiper testimonial-content-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial-content">
                    <i class="fa-solid fa-quote-left"></i>
                    <div class="rating">
                      <ul class="custom-ul">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                    </div>
                    <p class="revew">
                      “Had a wonderful experience....The hotel and the staff was very good....Vidhi welcomes the
                      guests very affectionately . The food quality and the cook was excellent....the staff were
                      friendly and caring...it is a great place to stay Special thanks to restaurant staff Captain
                      Ramesh, Ankita, Bhagyashri, kavita and ram.”
                    </p>
                    <div class="author">
                      <h5 class="author-name">Anand Naik</h5>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-content">
                    <i class="fa-solid fa-quote-left"></i>
                    <div class="rating">
                      <ul class="custom-ul">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                    </div>
                    <p class="revew">
                      “A Great place to stay for families, friends and couples I've stayed here multiple times in
                      the past few years. Each time the stay has been extremely pleasant and relaxing - just what we
                      need. The staff is very helpful, courteous and friendly. The property is located in the middle
                      of Panchghani and Mahabaleshwar so access to both towns is reasonable. The resort itself is
                      very clean and well maintained - never had a complaint about this either. Kids can enjoy the
                      various amenities too. We'll keep coming here again and again as frequently as possible.”
                    </p>
                    <div class="author">
                      <h5 class="author-name">Rajiv</h5>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-content">
                    <i class="fa-solid fa-quote-left"></i>
                    <div class="rating">
                      <ul class="custom-ul">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                    </div>
                    <p class="revew">
                      “Beautiful place. Been here 6 times.Superb hospitality . Great staff. The restaurant staff is
                      particularly superb and efficient. The rooms are very clean and have a very good vibe
                      especially the valley view room on the 2nd floor.”
                    </p>
                    <div class="author">
                      <h5 class="author-name">Sapan Goel</h5>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-content">
                    <i class="fa-solid fa-quote-left"></i>
                    <div class="rating">
                      <ul class="custom-ul">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                    </div>
                    <p class="revew">
                      “Value for money : Excellent service: Must visit This was our Third visit to Bella Vista
                      resort since 2016. This is one of the best resort in Panchgani & Mahableshwar. Support staff
                      is attentive and courteous. Thanks to your hospitality. The ambience and atmosphere was very
                      nice. Food was delicious. I would definitely recommend for families and couples.”
                    </p>
                    <div class="author">
                      <h5 class="author-name">Sonal</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>

        <!-- </div> -->
      </div>
    </div>
  </div>
</section>
<!--================= Testimonial Section End =================-->


<!--================= Awards Area start =================-->
<section class="awards-style1 space" data-bg-src="home/img/awards/awards-style1-bg.png">
  <img class="awards-icon-1" src="home/img/icons/award-icon-1.png" alt="icon" />
  <img class="awards-icon-2 move-item" src="home/img/icons/award-icon-2.png" alt="icon" />
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-md-6 col-lg-6 col-xxl-5">
        <div class="title-area text-center text-md-start">
          <span class="sec-subtitle fade-anim" data-direction="bottom">Awards</span>
          <h2 class="sec-title fade-anim" data-direction="top">
            Excellence, Recognized Worldwide
          </h2>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 col-xxl-5">
        <div class="google-reviewed mx-auto overflow-hidden">
          <div class="left bg-white-color d-flex align-items-center gap-2">
            <img src="home/img/icons/awards-google.png" alt="google" />
            <div class="info">
              <strong class="d-block">Google</strong>
              <span class="d-block fs-xxs text-uppercase">Reviewed by</span>
            </div>
          </div>
          <div class="right bg-second-theme-color">
            <div class="rating d-flex align-items-baseline gap-2">
              <h4 class="fs-32 fw-semibold ff-rubik text-white-color">
                4.5
              </h4>
              <div class="stars">
                <ul class="custom-ul d-flex align-items-center text-theme-color fs-xxs">
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
              </div>
            </div>
            <span class="review fs-xxs d-block">8.5k reviews</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-2 g-lg-4 award-box-style1__row">
      <div class="line-Shape"></div>
      <div class="col-md-6 col-lg-4 fade-anim" data-delay="0.30" data-direction="right">
        <div class="award-box-style1">
          <div class="award-box-style1-wrapper">
            <figure class="award-box-icon">
              <img src="home/img/awards/awd-2024.png" alt="award" width="132" height="103" class="awd-icon">
            </figure>
            <div class="award-box-header d-flex align-items-end justify-content-between gap-xl-4 text-center">
              <img src="home/img/awards/award-box-left-wings.png" alt="award-box-left-wings" />
              <h6 class="text-capitalize ff-rubik fw-semibold">
                Traveler's Choice Award
              </h6>
              <img src="home/img/awards/award-box-right-wings.png" alt="award-box-right-wings" />
            </div>
            <div class="award-box-body text-center">
              <a href="awards.php"> <span class="text-third-theme-color bg-white-color">View More</span></a>
            </div>
            <div class="award-box-footer text-capitalize text-center">
              <p class="line1">
                recived in happy award in <strong>2024</strong>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-anim" data-delay="0.45" data-direction="right">
        <div class="award-box-style1">
          <div class="award-box-style1-wrapper">
            <figure class="award-box-icon text-center">
              <img src="home/img/awards/awd-2023.png" alt="award" width="132" height="103" class="awd-icon">
            </figure>
            <div class="award-box-header d-flex align-items-end justify-content-between gap-xl-4 text-center">
              <img src="home/img/awards/award-box-left-wings.png" alt="award-box-left-wings" />
              <h6 class="text-capitalize ff-rubik fw-semibold">
                Traveler's Choice Award
              </h6>
              <img src="home/img/awards/award-box-right-wings.png" alt="award-box-right-wings" />
            </div>
            <div class="award-box-body text-center">
              <a href="awards.php"> <span class="text-third-theme-color bg-white-color">View More</span></a>
            </div>
            <div class="award-box-footer text-capitalize text-center">
              <p class="line1">
                recived in happy award in <strong>2023</strong>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-anim" data-delay="0.60" data-direction="right">
        <div class="award-box-style1">
          <div class="award-box-style1-wrapper">
            <figure class="award-box-icon text-center">
              <img src="home/img/awards/awd-2022.png" alt="award" width="132" height="103" class="awd-icon">
            </figure>
            <div class="award-box-header d-flex align-items-end justify-content-between gap-xl-4 text-center">
              <img src="home/img/awards/award-box-left-wings.png" alt="award-box-left-wings" />
              <h6 class="text-capitalize ff-rubik fw-semibold">
                Traveler's Choice Award
              </h6>
              <img src="home/img/awards/award-box-right-wings.png" alt="award-box-right-wings" />
            </div>
            <div class="award-box-body text-center">
              <a href="awards.php"> <span class="text-third-theme-color bg-white-color">View More</span></a>
            </div>
            <div class="award-box-footer text-capitalize text-center">
              <p class="line1">
                recived in happy award in <strong>2022</strong>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-50 btn-trigger btn-bounce">
        <a href="awards.php" class="vs-btn style4">
          <span>view more</span>
        </a>
      </div>
    </div>

  </div>

</section>
<!--================= Awards Area end =================-->


<?php include 'footer-one.php'; ?>