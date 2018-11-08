@extends('layouts.front')
@section('class2', 'active')
@section('title', 'Tours')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row text-center">
                    @foreach($tourcategory->tours as $tour)
                            <div class="col-lg-4 col-md-6">
                                <div class="card width-auto">
                                    <figure class="ms-thumbnail ms-thumbnail-horizontal">
                                        <img src="{{ $tour->featured }}" alt="{{ $tour->title }}" alt="{{ $tour->title }}" class="img-fluid">
                                        <figcaption class="ms-thumbnail-caption text-center">
                                            <div class="ms-thumbnail-caption-content">
                                                <h3 class="ms-thumbnail-caption-title mb-2">{{ $tour->title }}</h3>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body overflow-hidden text-center">
                                        <a href="{{ route('tour.single', ['slug' => $tour->slug ]) }}" class="btn-circle btn-circle-royal btn-circle-raised btn-card-float right wow zoomInDown index-2">
                                            <i class="fa fa-send-o"></i>
                                        </a>
                                        <h4 class="color-royal">{{ $tour->title }}</h4>
                                        <p>{!! $tour->content !!}</p>

                                        <a href="{{ route('tour.single', ['slug' => $tour->slug ]) }}" class="btn btn-royal btn-raised">
                                            <i class="zmdi zmdi-globe"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>




@stop