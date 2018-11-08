@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Top Contributors
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Avatar
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
                @if($contributors->count() > 0)
                    @foreach($contributors as $contributor)
                        <tr>
                            <td>
                                <img src="{{ $contributor->avatar }}" alt="" width="60px" height="60px" style="border-radius: 50%;">
                            </td>
                            <td>
                                {{ $contributor->name }}
                            </td>
                            <td>
                                <a href="{{ route('contributor.edit', ['id' => $contributor->id]) }}" class="btn btn-xs btn-info">Edit</a>
                            </td>
                            <td>
                                    <a href="{{ route('contributor.delete', ['id' => $contributor->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No Contributors</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@stop