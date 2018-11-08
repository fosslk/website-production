@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            All Contacts
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
                @if($contacts->count() > 0)
                    @foreach($contacts as $contact)
                        <tr>

                            <td>{{ $contact->first_name }}</td>

                            <td>
                                {{ $contact->email }}
                            </td>

                            <td>

                                <a href="{{ route('contact.single', ['slug' => $contact->slug ]) }}" class="btn btn-xs btn-info">view</a>
                            </td>

                            <td>

                                <a href="{{ route('contact.delete', ['id' => $contact->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No published Contacts</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@stop