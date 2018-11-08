@extends('layouts.app')

@section('content')

      @include('admin.includes.errors')

      <div class="panel panel-default">
            <div class="panel-heading">
                  Edit Tutorial: {{ $event->title }}
            </div>

            <div class="panel-body">
                  <form action="{{ route('event.update', ['id' => $event->id]) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="title">Event Title</label>
                              <input type="text" name="title" class="form-control" value="{{ $event->title }}">
                        </div>
                        <div class="form-group">
                              <label for="featured">Featured image</label>
                              <input type="file" name="featured" class="form-control">
                        </div>
                       
                         <div class="form-group">
                              <label for="location">Event Location</label>
                              <input type="text" name="location" class="form-control" value="{{ $event->location }}">
                        </div>
                        <div class="form-group">
                              <label for="date">Event Date : </label>
                              <input type="date" name="date" value="{{ $event->date }}">
                        </div>                

                        <div class="form-group">
                              <label for="description">Event Description</label>
                              <textarea name="description" id="description" cols="5" rows="10" class="form-control">{{ $event->description }}</textarea>
                        </div>

                        <div class="form-group">
                              <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                          Update Event
                                    </button>
                              </div>
                        </div>
                  </form>
            </div>
      </div>
@stop

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script>
      $(document).ready(function() {
            $('#description').summernote();
      });
</script>
@stop