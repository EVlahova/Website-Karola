@extends('layouts.main')

@section('title', '404')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>404 Not Found</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>404</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6">
                        <h2>404</h2>
                        <p>
                            Opps, sorry we can’t find this page!
                        </p>
                    </div>
                    <a href="/" class="btn tp-btn-rounded tp-btn-dark">Go to Home page </a>
                </div>
            </div>
        </section><!-- End About Section -->

    </main><!-- End #main -->
@stop
