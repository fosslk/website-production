@extends('layouts.app')

@section('content')

      @include('admin.includes.errors')
      
      <div class="panel panel-default">
            <div class="panel-heading">
                  Create a new Event
            </div>
            


            <div class="panel-body">
                  <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="title">Event Title</label>
                              <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="featured">Featured image (Size Width-800px X Height -500px)</label>
                              <input type="file" name="featured" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="location">Event Location</label>
                              <input type="text" name="location" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="date">Event Date : </label>
                              {!! Form::input('date','date', date('Y-m-d'), ['class' => 'form-control']) !!}
                        </div>                

                        <div class="form-group">
                              <label for="description"> Event Description</label>
                              <textarea name="description" id="description" cols="5" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                              <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                          Store Event
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