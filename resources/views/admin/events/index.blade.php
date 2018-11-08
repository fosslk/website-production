@extends('layouts.app')

@section('content')

      <div class="panel panel-default">
            <div class="panel-heading">
                  All Events
            </div>
            <div class="panel-body">
                  <table class="table table-hover">
                        <thead>
                              <th>
                                    Image
                              </th>
                              <th>
                                    Event Title 
                              </th>

                               <th>
                                    Event Date
                              </th>

                              <th>
                                    Edit
                              </th>
                              <th>
                                    Trash
                              </th>
                        </thead>

                        <tbody>
                              @if($events->count() > 0)
                                    @foreach($events as $event)
                                          <tr>
                                                <td><img src="{{ $event->featured }}" alt="{{ $event->title }}" width="90px" height="50px"></td>

                                                <td>{{ $event->title }}</td>

                                                <td>{{ $event->date }} </td>

                                                <td>
                                                      <a href="{{ route('event.edit', ['id' => $event->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                                </td>

                                                <td>
                                                      <a href="{{ route('event.delete', ['id' => $event->id]) }}" class="btn btn-xs btn-danger">Trash</a>
                                                </td>
                                          </tr>
                                    @endforeach
                              @else
                                    <tr>
                                          <th colspan="5" class="text-center">No published Events</th>
                                    </tr>
                              @endif
                        </tbody>
                  </table>
            </div>
      </div>

@stop