@extends('layouts.front')
@section('class2', 'active')
@section('title', 'Event')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card animated fadeInLeftTiny animation-delay-5">
                    <div class="card-body card-body-big">
                        <h3 class="text-center no-mt ms-site-title color-black center-block ms-site-title-lg mt-12">{{ $event->title }}</h3>

                        <img src="{{ $event->featured }}" alt="" width="100%" class="img-fluid mb-12">
                        <table class="table table-no-border table-striped">
                            <tbody>
                            <h4>
                                <th><h4><i class="mr-2 fa fa-map-marker mr-1 color-info"></i> Location</h4></th>
                                <td><h4>{{ $event->location }}</h4></td>
                            </tr>

                            <tr>
                                <th><h4><i class="zmdi zmdi-calendar mr-1 color-info"></i> Date</h4></th>
                                <td><h4>{{ $event->date }}</h4></td>
                            </tr>
                            </tbody></table>

                        <h3 class="card-title card card-primary">Event Details</h3>

                        <p>{!! $event->description  !!}</p>

                    </div>

                </div>
            </div>

            <nav aria-label="...">
                <ul class="pager pager-dark d-flex justify-content-between">
                    @if($prev)
                        <li class="page-item">
                            <a class="page-link" href="{{ route('event.single', ['slug' => $prev->slug ]) }}">
                                <span aria-hidden="true">{{ $prev->title }} «</span> Previous </a>
                        </li>
                    @endif

                    @if($next)
                        <li class="page-item">
                            <a class="page-link" href="{{ route('event.single', ['slug' => $next->slug ]) }}">Next
                                <span aria-hidden="true">» {{ $next->title }}</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>

        </div>
    </div>




@stop