@extends('layouts.front')
@section('class2', 'active')
@section('title', 'Project')
@section('content')

    <div class="material-background"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card animated fadeInLeftTiny animation-delay-5">
                    <div class="card-body card-body-big">
                        <h1 class="no-mt ms-site-title color-black center-block ms-site-title-lg mt-2 text-center">{{ $project->title }}</h1>
                        <h3>{{ $project->category }}</h3>

                        <img src="{{ $project->featured }}" alt="" width="100%" class="img-fluid mb-6">
                        <p>{!! $project->content  !!}</p>

                    </div>

                </div>

                <nav aria-label="...">
                    <ul class="pager pager-dark d-flex justify-content-between">
                        @if($prev)
                        <li class="page-item">
                            <a class="page-link" href="{{ route('project.single', ['slug' => $prev->slug ]) }}">
                                <span aria-hidden="true">{{ $prev->title }} «</span> Previous </a>
                        </li>
                        @endif

                        @if($next)
                        <li class="page-item">
                            <a class="page-link" href="{{ route('project.single', ['slug' => $next->slug ]) }}">Next
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