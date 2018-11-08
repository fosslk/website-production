@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
           Add New Campus
        </div>



        <div class="panel-body">
            <form action="{{ route('campus.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Campus Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="logo">Club Banner (Size 768*512px -W x H)</label>
                    <input type="file" name="featured" class="form-control">
                </div>

                <div class="form-group">
                    <label for="about">Campus club Short Description<code id="charNum">300</code></label>

                    <textarea id="field" onkeyup="countChar(this)" name="about" cols="3" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook URL</label>
                    <input type="text" name="facebook" class="form-control">
                </div>

                <div class="form-group">
                    <label for="twitter">Twitter URL</label>
                    <input type="text" name="twitter" class="form-control">
                </div>

                <div class="form-group">
                    <label for="linkedin">Linkedin URL</label>
                    <input type="text" name="linkedin" class="form-control">
                </div>

                <div class="form-group">
                    <label for="github">Github URL</label>
                    <input type="text" name="github" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content">Campus club Details</label>
                    <textarea name="content" id="content" cols="5" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Add Campus
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.5.js"></script>
@stop


@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote();
        });
    </script>
    <script>
        function countChar(val) {
            var len = val.value.length;
            if (len >= 300) {
                val.value = val.value.substring(0, 300);
            } else {
                $('#charNum').text(300 - len);
            }
        };
    </script>
@stop