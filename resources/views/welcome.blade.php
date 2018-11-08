
@extends('layouts.front')
@section('class1', 'active')
@section('title', 'Home')
@section('content')

    @include('layouts.includes.header')
    @include('layouts.welcome')


<div class="wrap ms-hero-img-road ms-hero-bg-royal ms-bg-fixe mt-6">
    <div class="container mt-6">
        <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 typed-title">FOSS NEWS</h1>
       <p class="lead color-primary">— Intelligent apps that help you do your best work. </p>
        <div class="owl-carousel owl-theme">
            @foreach($posts as $p)
            <div class="card animation-delay-6">
                <div class="withripple zoom-img">
                    <a href="{{ route('post.single', ['slug' => $p->slug ]) }}">
                        <img src="{{ $p->featured }}" alt="--" class="img-fluid">
                    </a>
                </div>
                <div class="card-body">
                    <a href="{{ route('post.single', ['slug' => $p->slug ]) }}">
                    <h3 class="color-black">{{ $p->title }}</h3>
                    </a>
                    <P></P>
                    <p class="text-right">
                        <a href="{{ route('post.single', ['slug' => $p->slug ]) }}" class="btn btn-primary btn-raised text-right" role="button">
                            <i class="zmdi zmdi-collection-image-o"></i> Read More</a>
                    </p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>



    <div class="container mt-6">
        <div class="owl-carousel owl-theme">
            @foreach($blogs as $b)

                <div class="card animation-delay-6">
                    <div class="withripple zoom-img">
                        <a href="{{ route('blog.single', ['slug' => $b->slug ]) }}">
                            <img src="{{ $b->featured }}" alt="--" class="img-fluid">
                        </a>
                        <a href="{{ route('blog.single', ['slug' => $b->slug ]) }}">
                            <h3 class="color-black text-center">{{ $b->title }}</h3>
                        </a>
                    </div>

                </div>
            @endforeach

        </div>

    </div>

@stop