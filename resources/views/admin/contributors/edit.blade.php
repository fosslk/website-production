@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Update Contributor : {{ $contributor->name }}
        </div>



        <div class="panel-body">
            <form action="{{ route('contributor.update', ['id' => $contributor->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Full Name</label>
                    <input type="text" name="name" value="{{ $contributor->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar (250*250px)</label>
                    <input type="file" name="avatar" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Facebook URL</label>
                    <input type="text" name="facebook" value="{{ $contributor->facebook }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Twitter URL</label>
                    <input type="text" name="twitter" value="{{ $contributor->twitter }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Linkedin URL</label>
                    <input type="text" name="linkedin" value="{{ $contributor->linkedin }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Github URL</label>
                    <input type="text" name="github" value="{{ $contributor->github }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content">About</label>
                    <textarea name="about" cols="5" rows="10" class="form-control">{{ $contributor->about }}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update Contributor
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop