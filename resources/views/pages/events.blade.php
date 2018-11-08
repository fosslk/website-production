@extends('layouts.front')
@section('class2', 'active')
@section('title', 'All EVENTS')
@section('content')

    <div class="ms-hero-page-override ms-hero-img-city2 ms-hero-bg-primary">
        <div class="container">
            <div class="text-center">

                <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">
                    FOSS EVENTS</h1>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center card-top">
            <div class="row">
                <div class="col-md-12">
                    <div class="row text-center">
                        @if($events->count() > 0)
                            @foreach($events->reverse() as $event)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card width-auto">
                                        <figure class="ms-thumbnail ms-thumbnail-horizontal">
                                            <img src="{{ $event->featured }}" alt="{{ $event->title }}" class="img-fluid">
                                            <figcaption class="ms-thumbnail-caption text-center">
                                                <div class="ms-thumbnail-caption-content">
                                                    <h3 class="ms-thumbnail-caption-title mb-2">{{ $event->title }}</h3>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body overflow-hidden text-center">
                                            <a href="{{ route('event.single', ['slug' => $event->slug ]) }}" class="btn-circle btn-circle-royal btn-circle-raised btn-card-float right wow zoomInDown index-2">
                                                <i class="fa fa-send-o"></i>
                                            </a>
                                            <h4 class="color-royal">{{ $event->title }}</h4>

                                            <a href="{{ route('event.single', ['slug' => $event->slug ]) }}" class="btn btn-info btn-raised">
                                                <i class="zmdi zmdi-globe"></i> Read More</a>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>




@stop