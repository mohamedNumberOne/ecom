@extends('layouts.template')

@section('content_page')
    @include('layouts.nav')

    <!-- ***** About Area Starts ***** -->
    <div class="about-us ">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="{{ asset('assets/images/about-left-image.jpg') }}" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4> {{ $companies_info->nom_entreprise }} </h4>
                        <span>
                           À propos de nous 
                        </span>
                        <div class="quote">

                            <p>
                                {!!   nl2br(e($companies_info->text_about_us)) !!}
                            </p>

                            <ul>
                                <li><a href="{{  $companies_info->lien_fb }}"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="{{  $companies_info->lien_insta }}"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** About Area Ends ***** -->

        @include('layouts.footer')
    @endsection
