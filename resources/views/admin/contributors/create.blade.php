@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
           Add Contributor
        </div>



        <div class="panel-body">
            <form action="{{ route('contributor.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Full Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar (Size 250*250px)</label>
                    <input type="file" name="avatar" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Facebook URL</label>
                    <input type="text" name="facebook" class="form-control" value="#">
                </div>

                <div class="form-group">
                    <label for="title">Twitter URL</label>
                    <input type="text" name="twitter" class="form-control" value="#">
                </div>

                <div class="form-group">
                    <label for="title">Linkedin URL</label>
                    <input type="text" name="linkedin" class="form-control" value="#">
                </div>

                <div class="form-group">
                    <label for="title">Github URL</label>
                    <input type="text" name="github" class="form-control" value="#">
                </div>

                <div class="form-group">
                    <label for="content">About</label>
                    <textarea name="about" cols="5" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Add Contributor
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop