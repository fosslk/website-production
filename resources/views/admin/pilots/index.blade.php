@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            All FOSS Pilots
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    View
                </th>
                <th>
                    Delete
                </th>
                </thead>

                <tbody>
                @if($pilots->count() > 0)
                    @foreach($pilots as $pilot)
                        <tr>

                            <td>{{ $pilot->name }}</td>

                            <td>
                                {{ $pilot->email }}
                            </td>

                            <td>

                                <a href="{{ route('pilot.single', ['slug' => $pilot->slug ]) }}" class="btn btn-xs btn-info">view</a>
                            </td>

                            <td>

                                <a href="{{ route('pilot.delete', ['id' => $pilot->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No FOSS Pilots</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@stop