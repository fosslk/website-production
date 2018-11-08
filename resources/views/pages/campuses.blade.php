@extends('layouts.front')
@section('class2', 'active')
@section('title', 'Campus Clubs')
@section('content')

    <div class="ms-hero-page-override ms-hero-img-city2 ms-hero-bg-primary">
        <div class="container">
            <div class="text-center">

                <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">
                    CAMPUS CLUBS</h1>

                <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">As a volunteer leader, it’s you who can change this. You can encourage your volunteers, engage and motivate them to grow, and become a source of inspiration!</p>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row d-flex justify-content-center card-top">
            @if($campuses->count() > 0)
                @foreach($campuses->reverse() as $c)
            <div class="col-lg-6 col-md-12">
                <div class="card card-info wow zoomInUp mb-4 animation-delay-5" style="visibility: visible; animation-name: zoomInUp;">
                    <div class="withripple zoom-img">
                        <a href="javascript:void()" class="">
                            <img src="{{ $c->featured }}" alt="{{ $c->name }}" class="img-fluid">
                        </a>
                    </div>
                    <div class="card-body">
                        <h3 class="color-info">{{ $c->name }}</h3>
                        <p>{{ $c->about }}</p>
                        <div class="row">
                            <div class="col">
                                <a href="{{ $c->facebook }}" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                                <a href="{{ $c->twitter }}" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>
                                <a href="{{ $c->github }}" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-github">
                                    <i class="zmdi zmdi-github"></i>
                                </a>
                                <a href="{{ $c->linkedin }}" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-linkedin">
                                    <i class="zmdi zmdi-linkedin"></i>
                                </a>
                            </div>
                            <div class="col text-right">
                                <button type="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#content{{$c->slug}}"> More Details <div class="ripple-container"></div></button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
            @endif
        </div>
    </div>

    @foreach ($campuses as $cam)
        <div class="modal" id="content{{$cam->slug}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg animated zoomIn animated-3x" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title color-primary" id="myModalLabel">{{ $cam->name }}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                              <i class="zmdi zmdi-close"></i>
                            </span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! $cam->content !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: 56.2813px; top: 7px; background-color: rgb(244, 67, 54); transform: scale(12.8496);"></div></div></button>

                </div>
            </div>
        </div>
    </div>
    @endforeach

@stop