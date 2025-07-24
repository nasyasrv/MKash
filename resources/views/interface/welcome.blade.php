@extends('interface.layouts.app')
@section('content')
    <div data-bs-spy="scroll" class="scrollspy-example">
      <!-- Hero: Start -->
      <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
          <img
            src="{{ asset('assets_admin/img/front-pages/backgrounds/hero-bg.png')}}"
            alt="hero background"
            class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100 h-100"
            data-speed="1" />
          <div class="container">
            <div class="hero-text-box text-center position-relative">
              <h1 class="text-primary hero-title display-6 fw-extrabold">
                One dashboard to manage all your businesses
              </h1>
              <h2 class="hero-sub-title h6 mb-6">
                Production-ready & easy to use Admin Template<br class="d-none d-lg-block" />
                for Reliability and Customizability.
              </h2>
              <div class="landing-hero-btn d-inline-block position-relative">
                <span class="hero-btn-item position-absolute d-none d-md-flex fw-medium"
                  >Join community
                  <img
                    src="{{ asset('assets_admin/img/front-pages/icons/Join-community-arrow.png')}}"
                    alt="Join community arrow"
                    class="scaleX-n1-rtl"
                /></span>
                <a href="#landingPricing" class="btn btn-primary btn-lg">Get early access</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero: End -->

      <!-- Useful features: Start -->
      <section id="landingFeatures" class="section-py landing-features">
        <div class="container">
          <div class="text-center mb-4">
            <span class="badge bg-label-primary">Useful Features</span>
          </div>
          <h4 class="text-center mb-1">
            <span class="position-relative fw-extrabold z-1"
              >Everything you need
              <img
                src="{{ asset('assets_admin/img/front-pages/icons/section-title-icon.png')}}"
                alt="laptop charging"
                class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
            to start your next project
          </h4>
          <p class="text-center mb-12">
            Not just a set of tools, the package includes ready-to-deploy conceptual application.
          </p>
          <div class="features-icon-wrapper row gx-0 gy-6 g-sm-12">
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-4">
                <img src="{{ asset('assets_admin/img/front-pages/icons/laptop.png')}}" alt="laptop charging" />
              </div>
              <h5 class="mb-2">Quality Code</h5>
              <p class="features-icon-description">
                Code structure that all developers will easily understand and fall in love with.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-4">
                <img src="{{ asset('assets_admin/img/front-pages/icons/rocket.png')}}" alt="transition up" />
              </div>
              <h5 class="mb-2">Continuous Updates</h5>
              <p class="features-icon-description">
                Free updates for the next 12 months, including new demos and features.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-4">
                <img src="{{ asset('assets_admin/img/front-pages/icons/paper.png')}}" alt="edit" />
              </div>
              <h5 class="mb-2">Stater-Kit</h5>
              <p class="features-icon-description">
                Start your project quickly without having to remove unnecessary features.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-4">
                <img src="{{ asset('assets_admin/img/front-pages/icons/check.png')}}" alt="3d select solid" />
              </div>
              <h5 class="mb-2">API Ready</h5>
              <p class="features-icon-description">
                Just change the endpoint and see your own data loaded within seconds.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-4">
                <img src="{{ asset('assets_admin/img/front-pages/icons/user.png')}}" alt="lifebelt" />
              </div>
              <h5 class="mb-2">Excellent Support</h5>
              <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-4">
                <img src="{{ asset('assets_admin/img/front-pages/icons/keyboard.png')}}" alt="google docs" />
              </div>
              <h5 class="mb-2">Well Documented</h5>
              <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Useful features: End -->

      <!-- Real customers reviews: Start -->
      <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
        <!-- What people say slider: Start -->
        <div class="container">
          <div class="row align-items-center gx-0 gy-4 g-lg-5 mb-5 pb-md-5">
            <div class="col-md-12">
              <div class="swiper-reviews-carousel overflow-hidden">
                <div class="swiper" id="swiper-reviews">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-4">
                            <img
                              src="{{ asset('assets_admin/img/front-pages/branding/logo-1.png')}}"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “Vuexy is hands down the most useful front end Bootstrap theme I've ever used. I can't wait
                            to use it again for my next project.”
                          </p>
                          <div class="text-warning mb-4">
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3 avatar-sm">
                              <img src="{{ asset('assets_admin/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Cecilia Payne</h6>
                              <p class="small text-muted mb-0">CEO of Airbnb</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-4">
                            <img
                              src="{{ asset('assets_admin/img/front-pages/branding/logo-2.png')}}"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “I've never used a theme as versatile and flexible as Vuexy. It's my go to for building
                            dashboard sites on almost any project.”
                          </p>
                          <div class="text-warning mb-4">
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3 avatar-sm">
                              <img src="{{ asset('assets_admin/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Eugenia Moore</h6>
                              <p class="small text-muted mb-0">Founder of Hubspot</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-4">
                            <img
                              src="{{ asset('assets_admin/img/front-pages/branding/logo-3.png')}}"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            This template is really clean & well documented. The docs are really easy to understand and
                            it's always easy to find a screenshot from their website.
                          </p>
                          <div class="text-warning mb-4">
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3 avatar-sm">
                              <img src="{{ asset('assets_admin/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Curtis Fletcher</h6>
                              <p class="small text-muted mb-0">Design Lead at Dribbble</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-4">
                            <img
                              src="{{ asset('assets_admin/img/front-pages/branding/logo-4.png')}}"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            All the requirements for developers have been taken into consideration, so I’m able to build
                            any interface I want.
                          </p>
                          <div class="text-warning mb-4">
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3 avatar-sm">
                              <img src="{{ asset('assets_admin/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Sara Smith</h6>
                              <p class="small text-muted mb-0">Founder of Continental</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-4">
                            <img
                              src="{{ asset('assets_admin/img/front-pages/branding/logo-5.png')}}"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            “I've never used a theme as versatile and flexible as Vuexy. It's my go to for building
                            dashboard sites on almost any project.”
                          </p>
                          <div class="text-warning mb-4">
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3 avatar-sm">
                              <img src="{{ asset('assets_admin/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Eugenia Moore</h6>
                              <p class="small text-muted mb-0">Founder of Hubspot</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-4">
                            <img
                              src="{{ asset('assets_admin/img/front-pages/branding/logo-6.png')}}"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nemo mollitia, ad eum
                            officia numquam nostrum repellendus consequuntur!
                          </p>
                          <div class="text-warning mb-4">
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star-filled"></i>
                            <i class="ti ti-star"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3 avatar-sm">
                              <img src="{{ asset('assets_admin/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Sara Smith</h6>
                              <p class="small text-muted mb-0">Founder of Continental</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- What people say slider: End -->
        <hr class="m-0 mt-6 mt-md-12" />
        <!-- Logo slider: Start -->
        <div class="container">
          <div class="swiper-logo-carousel py-8">
            <div class="swiper" id="swiper-clients-logos">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img
                    src="{{ asset('assets_admin/img/front-pages/branding/logo_1-light.png')}}"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_1-light.png"
                    data-app-dark-img="front-pages/branding/logo_1-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="{{ asset('assets_admin/img/front-pages/branding/logo_2-light.png')}}"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_2-light.png"
                    data-app-dark-img="front-pages/branding/logo_2-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="{{ asset('assets_admin/img/front-pages/branding/logo_3-light.png')}}"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_3-light.png"
                    data-app-dark-img="front-pages/branding/logo_3-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="{{ asset('assets_admin/img/front-pages/branding/logo_4-light.png')}}"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_4-light.png"
                    data-app-dark-img="front-pages/branding/logo_4-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="{{ asset('assets_admin/img/front-pages/branding/logo_5-light.png')}}"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_5-light.png"
                    data-app-dark-img="front-pages/branding/logo_5-dark.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Logo slider: End -->
      </section>
      <!-- Real customers reviews: End -->

      <!-- Our great team: Start -->
      <section id="landingTeam" class="section-py landing-team">
        <div class="container">
          <div class="text-center mb-4">
            <span class="badge bg-label-primary">Our Great Team</span>
          </div>
          <h4 class="text-center mb-1">
            <span class="position-relative fw-extrabold z-1"
              >Supported
              <img
                src="{{ asset('assets_admin/img/front-pages/icons/section-title-icon.png')}}"
                alt="laptop charging"
                class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
            by Real People
          </h4>
          <p class="text-center mb-md-11 pb-0 pb-xl-12">Who is behind these great-looking interfaces?</p>
          <div class="row gy-12 mt-2">
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div
                  class="bg-label-primary border border-bottom-0 border-label-primary position-relative team-image-box">
                  <img
                    src="{{ asset('assets_admin/img/front-pages/landing-page/team-member-1.png')}}"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="human image" />
                </div>
                <div class="card-body border border-top-0 border-label-primary text-center">
                  <h5 class="card-title mb-0">Sophie Gilbert</h5>
                  <p class="text-muted mb-0">Project Manager</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-info border border-bottom-0 border-label-info position-relative team-image-box">
                  <img
                    src="{{ asset('assets_admin/img/front-pages/landing-page/team-member-2.png')}}"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="human image" />
                </div>
                <div class="card-body border border-top-0 border-label-info text-center">
                  <h5 class="card-title mb-0">Paul Miles</h5>
                  <p class="text-muted mb-0">UI Designer</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div
                  class="bg-label-danger border border-bottom-0 border-label-danger position-relative team-image-box">
                  <img
                    src="{{ asset('assets_admin/img/front-pages/landing-page/team-member-3.png')}}"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="human image" />
                </div>
                <div class="card-body border border-top-0 border-label-danger text-center">
                  <h5 class="card-title mb-0">Nannie Ford</h5>
                  <p class="text-muted mb-0">Development Lead</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div
                  class="bg-label-success border border-bottom-0 border-label-success position-relative team-image-box">
                  <img
                    src="{{ asset('assets_admin/img/front-pages/landing-page/team-member-4.png')}}"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="human image" />
                </div>
                <div class="card-body border border-top-0 border-label-success text-center">
                  <h5 class="card-title mb-0">Chris Watkins</h5>
                  <p class="text-muted mb-0">Marketing Manager</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our great team: End -->

      <!-- CTA: Start -->
      <section id="landingCTA" class="section-py landing-cta position-relative p-lg-0 pb-0">
        <img
          src="{{ asset('assets_admin/img/front-pages/backgrounds/cta-bg-light.png')}}"
          class="position-absolute bottom-0 end-0 scaleX-n1-rtl h-100 w-100 z-n1"
          alt="cta image"
          data-app-light-img="front-pages/backgrounds/cta-bg-light.png"
          data-app-dark-img="front-pages/backgrounds/cta-bg-dark.png" />
        <div class="container">
          <div class="row align-items-center gy-12">
            <div class="col-lg-6 text-start text-sm-center text-lg-start">
              <h3 class="cta-title text-primary fw-bold mb-0">Ready to Get Started?</h3>
              <h5 class="text-body mb-8">Start your project with a 14-day free trial</h5>
              <a href="payment-page.html" class="btn btn-lg btn-primary">Get Started</a>
            </div>
            <div class="col-lg-6 pt-lg-12 text-center text-lg-end">
              <img
                src="{{ asset('assets_admin/img/front-pages/landing-page/cta-dashboard.png')}}"
                alt="cta dashboard"
                class="img-fluid mt-lg-4" />
            </div>
          </div>
        </div>
      </section>
      <!-- CTA: End -->
    </div>
@endsection
