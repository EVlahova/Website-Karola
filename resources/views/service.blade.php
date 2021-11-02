@extends('layouts.main')
@section('title', 'Services')
@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ $service->menu_title }}</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li>{{ $service->menu_title }}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider">
                            <img
                                src="{{ \Illuminate\Support\Facades\Storage::disk("public")->url($service->service_image) }}"
                                alt="{{ $service->title }}">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>{{ $service->title }}</h3>
                            <p>
                                {{ $service->short_description }}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@stop
