@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>{{ $contact->first_name }}  {{ $contact->last_name }}</h3>
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
                            <td>First Name</td>
                            <td>{{ $contact->first_name }}</td>
                        </tr>

                        <tr>
                            <td>Last Name</td>
                            <td>{{ $contact->last_name }}</td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>{{ $contact->email }}</td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>{{ $contact->country }}</td>
                        </tr>

                        <tr>
                            <td>Telephone</td>
                            <td>{{ $contact->telephone }}</td>
                        </tr>
                        <tr>
                            <td>Created At</td>
                            <td><button type="button" class="btn btn-primary btn-xs">{{ $contact->created_at }}</button></td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td>{{ $contact->content }}</td>
                        </tr>


                </tbody>
            </table>
        </div>
    </div>

@stop