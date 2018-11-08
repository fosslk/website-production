@extends('layouts.front')
@section('class2', 'active')
@section('title', 'Blog')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if($blogs->count() > 0)
                    @foreach($blogs->reverse() as $b)
                <article class="card wow fadeInLeft animation-delay-5 mb-4" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="card-body overflow-hidden overflow-hidden">
                        <div class="row">
                            <div class="col-xl-6">
                                <img src="{{ $b->featured }}" alt="{{ $b->title }}" class="img-fluid mb-4"> </div>
                            <div class="col-xl-6">
                                <h3 class="no-m ms-site-foss-about-title-lg mt-2">
                                    <a href="javascript:void(0)">{{ $b->title }}</a>
                                </h3>
                                <p class="mb-4">{{ str_limit(strip_tags($b->content), 300) }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <img src="{{ $b->user->profile->avatar }}" width="50px" alt="{{ $b->user->name }}" class="rounded-circle mr-1"> by
                                {{ $b->user->name }}
                                <span class="ml-1 d-none d-sm-inline">
                      <i class="zmdi zmdi-time mr-05 color-info"></i>
                      <span class="color-medium-dark">{{ date('M j, Y', strtotime($b->created_at)) }}</span>
                    </span>
                            </div>
                            <div class="col-lg-4 text-right">
                                <a href="{{ route('blog.single', ['slug' => $b->slug ]) }}" class="btn btn-primary btn-raised btn-block animate-icon">Read More
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                    @endforeach
                @endif

            </div>


        </div>
    </div>


@stop