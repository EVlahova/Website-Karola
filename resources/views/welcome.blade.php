@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
            @foreach($slides as $slide)
                <!-- Slide 3 -->
                    <div class="carousel-item {{ $loop->index == 0 ? 'active': ''}}"
                         style="background-image: url({{ \Illuminate\Support\Facades\Storage::disk("public")->url($slide->slide_image) }})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">{{ $slide->title }}</h2>
                                <p class="animate__animated animate__fadeInUp">{{ $slide->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6">
                        <h2>Welcome to<br/> our business</h2>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            The company was established in 2017. Some of the services that the company offers are:
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Trades and Commissions with ferrous and non-ferrous
                                metals and metal products. Through our aluminum trade business, we supply
                                high-value-added aluminum raw materials to non-ferrous metal manufacturers in Europe
                                countries.
                            </li>
                            <li><i class="ri-check-double-line"></i> Karola LTD has helped a large number of clients
                                trading and commissioning with ferrous and non-ferrous. By partnering with such a
                                companies, potential opportunities in commodities trade can be converted into profits,
                                and many of the risks inherent in the sector can be mitigated.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/logo-iron.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/logo-ehg.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/logo-maxxstahl.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="row">
                    @foreach($services as $service)
                        <div class="col-md-6">
                            <div class="icon-box">
                                <i class="{{ $service->icon }}"></i>
                                <h4><a href="/service/{{ $service->slug }}">{{ $service->title }}</a></h4>
                                <p>{{ $service->short_description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->
@stop
