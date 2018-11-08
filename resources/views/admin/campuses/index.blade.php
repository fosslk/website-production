@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
           Campus Clubs
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                   Logo
                </th>
                <th>
                    Name
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
                </thead>

                <tbody>
                @if($campuses->count() > 0)
                    @foreach($campuses as $c)
                        <tr>
                            <td>
                                <img src="{{ $c->featured }}" alt="" width="100px" height="70px">
                            </td>
                            <td>
                                {{ $c->name }}
                            </td>
                            <td>
                                <a href="{{ route('campus.edit', ['id' => $c->id]) }}" class="btn btn-xs btn-info">Edit</a>
                            </td>
                            <td>
                                    <a href="{{ route('campus.delete', ['id' => $c->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No Clubs</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@stop