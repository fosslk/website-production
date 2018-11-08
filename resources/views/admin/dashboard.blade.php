@extends('layouts.app')

@section('content')

  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="text-center"><h2>WellCome To FOSS Sri lanka</h2></div>

    </div>
    <div class="panel-body">
      <div class="col-lg-3">
        <div class="panel panel-info">
          <div class="panel-heading text-center">
            ALL ARTICLES
          </div>
          <div class="panel-body">
            <h1 class="text-center">{{ $posts_count }}</h1>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="panel panel-danger">
          <div class="panel-heading text-center">
            TOP CONTRIBUTORS
          </div>
          <div class="panel-body">
            <h1 class="text-center">001</h1>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="panel panel-success">
          <div class="panel-heading text-center">
            USERS
          </div>
          <div class="panel-body">
            <h1 class="text-center">{{ $users_count }}</h1>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="panel panel-info">
          <div class="panel-heading text-center">
            All Contacts
          </div>
          <div class="panel-body">
            <h1 class="text-center">{{ $contacts_count }}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
