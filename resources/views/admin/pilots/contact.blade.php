@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>{{ $pilot->name }}</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>

                </th>
                <th>
                    Details
                </th>

                </thead>

                <tbody>
                        <tr>
                            <td>Full Name</td>
                            <td>{{ $pilot->name }}</td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>{{ $pilot->email }}</td>
                        </tr>
                        <tr>
                            <td>Mobile Number</td>
                            <td>{{ $pilot->mobile }}</td>
                        </tr>

                        <tr>
                            <td>University</td>
                            <td>{{ $pilot->university }}</td>
                        </tr>

                        <tr>
                            <td>Facebook Link</td>
                            <td>
                                <a href="{{ $pilot->facebook }}" target="_blank">
                                <button class="btn btn-primary btn-xs">Facebook</button>
                                </a>
                                <br>
                                {{ $pilot->facebook }}
                            </td>

                        </tr>
                        <tr>
                            <td>Linkedin Link</td>
                            <td>
                                <a href="{{ $pilot->linkedin }}" target="_blank">
                                    <button class="btn btn-primary btn-xs">Linkedin</button>
                                </a>
                                <br>
                                {{ $pilot->linkedin }}
                            </td>
                        </tr>
                        <tr>
                            <td>About</td>
                            <td>{{ $pilot->about }}</td>
                        </tr>


                </tbody>
            </table>
        </div>
    </div>

@stop