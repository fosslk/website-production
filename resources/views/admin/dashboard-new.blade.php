@extends('layouts.admin')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="text-center">
                <img src="/assets/logo/nav-logo.png" width="300px">
                <h2>WellCome To FOSS Sri lanka</h2>
            </div>

        </div>
        <div class="panel-body">

            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                        <h3>NEWS - {{ $posts_count }}</h3>
                    </div>
                    <div class="panel-body text-center">
                        <a class="btn btn-primary btn-block" href="{{ route('post.create') }}" role="button">Create</a>
                        <a class="btn btn-primary btn-block" href="{{ route('posts') }}" role="button">Published</a>
                        <a class="btn btn-primary btn-block" href="{{ route('posts.trashed') }}" role="button">Trashed</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-danger">
                    <div class="panel-heading text-center">
                        <h3>CONTRIBUTORS - {{ $contributors_count }}</h3>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-primary btn-block" href="{{ route('contributor.create') }}" role="button">Add</a>
                        <a class="btn btn-primary btn-block" href="{{ route('contributors') }}" role="button">Contributors</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                        <h3>USERS - {{ $users_count }}</h3>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-primary btn-block" href="{{ route('users') }}" role="button">Add user</a>
                        <a class="btn btn-primary btn-block" href="{{ route('user.create') }}" role="button">Users</a>
                        <a class="btn btn-primary btn-block" href="{{ route('user.profile') }}" role="button">My Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                        <h3>CONTACTS - {{ $contacts_count }} </h3>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-primary btn-block" href="{{ route('contacts') }}" role="button">Contacts</a>
                    </div>
                </div>
            </div>



    </div>
        <div class="panel-body">

            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                        <h3>EVENTS - {{ $events_count }}</h3>
                    </div>
                    <div class="panel-body text-center">
                        <a class="btn btn-primary btn-block" href="{{ route('event.create') }}" role="button">Create</a>
                        <a class="btn btn-primary btn-block" href="{{ route('events') }}" role="button">Published</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-danger">
                    <div class="panel-heading text-center">
                        <h3>PROJECTS - {{ $projects_count }}</h3>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-primary btn-block" href="{{ route('project.create') }}" role="button">Create</a>
                        <a class="btn btn-primary btn-block" href="{{ route('projects') }}" role="button">published</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                            <h3>FOSS PILOT - {{ $pilots_count }}</h3>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-primary btn-block" href="{{ route('pilots') }}" role="button">FOSS Pilots</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                        <h3>CAMPUS CLUBS - {{ $campuses_count }}</h3>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-primary btn-block" href="{{ route('campus.create') }}" role="button">Add</a>
                        <a class="btn btn-primary btn-block" href="{{ route('campuses') }}" role="button">Clubs</a>
                    </div>
                </div>
            </div>


        </div>
        <div class="panel-body">

            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                        <h3>Blog</h3>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-primary btn-block" href="{{ route('blog.create') }}" role="button">Create</a>
                        <a class="btn btn-primary btn-block" href="{{ route('blogs') }}" role="button">Published</a>
                        <a class="btn btn-primary btn-block" href="{{ route('blogs.trashed') }}" role="button">Trashed</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-danger">
                    <div class="panel-heading text-center">
                        <h3>SETTINGS</h3>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-primary btn-block" href="{{ route('settings') }}" role="button">Site Settings</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
