@extends('layouts.app')

@section('content')

      @include('admin.includes.errors')
      
      <div class="panel panel-default">
            <div class="panel-heading">
                  Create a new blogpost
            </div>
            


            <div class="panel-body">
                  <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="featured">Featured image (Size Width-800px X Height -500px)</label>
                              <input type="file" name="featured" class="form-control">
                        </div>

                        <div class="form-group">
                              <label for="content">Content</label>
                              <textarea name="content" id="content" cols="5" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                              <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                          Store Blogpost
                                    </button>
                              </div>
                        </div>
                  </form>
            </div>
      </div>
@stop

@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
@stop

@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script>
      $(document).ready(function() {
            $('#content').summernote();
      });
</script>
@stop