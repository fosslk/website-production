@extends('layouts.app')

@section('content')

      <div class="panel panel-default">
            <div class="panel-heading">
                  Published Projects
            </div>
            <div class="panel-body">
                  <table class="table table-hover">
                        <thead>
                              <th>
                                    Featured Image
                              </th>
                              <th>
                                    Project Title
                              </th>
                              <th>
                                    Edit
                              </th>

                              <th>
                                    Delete
                              </th>

                        </thead>

                        <tbody>
                              @if($projects->count() > 0)
                                    @foreach($projects as $project)
                                          <tr>
                                                <td><img src="{{ $project->featured }}" alt="{{ $project->title }}" width="90px" height="50px"></td>

                                                <td>{{ $project->title }}</td>

                                                <td>
                                                      <a href="{{ route('project.edit', ['id' => $project->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                                </td>
                                                <td>
                                                      <a href="{{ route('project.delete', ['id' => $project->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                                                </td>
                                          </tr>
                                    @endforeach
                              @else
                                    <tr>
                                          <th colspan="5" class="text-center">No published Projects</th>
                                    </tr>
                              @endif
                        </tbody>
                  </table>
            </div>
      </div>

@stop