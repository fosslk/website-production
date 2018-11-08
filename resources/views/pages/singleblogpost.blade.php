@extends('layouts.front')
@section('class2', 'active')
@section('title', 'Blogpost')
@section('content')

    <div class="material-background"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card animated fadeInLeftTiny animation-delay-5">
                    <div class="card-body card-body-big">
                        <h1 class="no-mt ms-site-title color-black center-block ms-site-title-lg mt-2 text-center">{{ $blog->title }}</h1>

                        <div class="mb-4">
                            <img src="{{ asset($blog->user->profile->avatar) }}" width="70px" class="rounded-circle mr-1"> by
                            <a href="javascript:void(0)">{{  $blog->user->name }}</a>
                            <span class="ml-1 d-none d-sm-inline">
                    <i class="zmdi zmdi-time mr-05 color-info"></i>
                    <span class="color-medium-dark">{{ $blog->created_at->toFormattedDateString() }}</span>
                  </span>

                        </div>


                        <img src="{{ $blog->featured }}" alt="" width="100%" class="img-fluid mb-6">

                        <p>{!! $blog->content  !!}</p>


                    </div>

                </div>

                <nav aria-label="...">
                    <ul class="pager pager-dark d-flex justify-content-between">
                        @if($prev)
                            <li class="page-item">
                                <a class="page-link" href="{{ route('blog.single', ['slug' => $prev->slug ]) }}">
                                    <span aria-hidden="true">{{ $prev->title }} «</span> Previous </a>
                            </li>
                        @endif

                        @if($next)
                            <li class="page-item">
                                <a class="page-link" href="{{ route('blog.single', ['slug' => $next->slug ]) }}">Next
                                    <span aria-hidden="true">» {{ $next->title }}</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>

            </div>

        </div>
    </div>




@stop