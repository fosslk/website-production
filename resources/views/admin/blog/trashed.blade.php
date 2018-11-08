@extends('layouts.app')

@section('content')

      <div class="panel panel-default">
            <div class="panel-heading">
                  Trashed Blogposts
            </div>
            <div class="panel-body">
                  <table class="table table-hover">
                        <thead>
                              <th>
                                    Image
                              </th>
                              <th>
                                    Title 
                              </th>
                              <th>
                                    Edit
                              </th>
                              <th>
                                    Restore
                              </th>
                               <th>
                                    Destroy
                              </th>
                        </thead>

                        <tbody>
                              @if($blogs->count() > 0)
                                    @foreach($blogs as $b)
                                          <tr>
                                                <td><img src="{{ $b->featured }}" alt="{{ $b->title }}" width="90px" height="50px"></td>

                                                <td>{{ $b->title }}</td>

                                                <td>
                                                      <a href="{{ route('blog.edit', ['id' => $b->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                                </td>

                                                <td>
                                                      <a href="{{ route('blog.restore', ['id' => $b->id]) }}" class="btn btn-xs btn-success">Restore</a>
                                                </td>
                                                 <td>
                                                      <a href="{{ route('blog.kill', ['id' => $b->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                                                </td>
                                          </tr>
                                    @endforeach
                              @else
                                    <tr>
                                          <th colspan="5" class="text-center">No trashed blogpost</th>
                                    </tr>
                              @endif
                        </tbody>
                  </table>
            </div>
      </div>

@stop