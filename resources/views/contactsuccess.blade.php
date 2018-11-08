@extends('layouts.front')
@section('title', 'Thank you for getting in touch!')
@section('class7', 'active')
@section('content')


    <div class="ms-hero-page-override ms-hero-img-team ms-hero-bg-primary">
        <div class="container">
            <div class="text-center">
                <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Thank you for getting in touch!</h1>

            </div>
        </div>
    </div>




    <div class="container">


        <div class="card card-hero animated fadeInUp animation-delay-7">
                        <div class="card-body overflow-hidden text-center">
                    <span class="ms-icon ms-icon-circle ms-icon-xxlg mb-4 color-info"><i class="glyphicon glyphicon-envelope"></i></span>

                    <h3>Your message has been successfully sent. We will contact you very soon! </h3>
                    <a href="/" class="btn btn-raised btn-info"><i class="zmdi zmdi-airplane"></i> Home</a>
                </div>

        </div>
        @include('layouts.includes.map')
    </div>

@stop