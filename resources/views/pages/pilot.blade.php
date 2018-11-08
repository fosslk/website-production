@extends('layouts.front')
@section('title', 'Apply')
@section('class4', 'active')
@section('content')


    <div class="ms-hero-page-override ms-hero-img-team ms-hero-bg-primary">
        <div class="container">
            <div class="text-center">
                <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">FOSS PILOT PROGRAMME</h1>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="card card-hero animated fadeInUp animation-delay-7">
            <div class="card-body">
                <div class="alert alert-default alert-light alert-dismissible" role="alert">
                    please fill out all required fields
                </div>
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-light alert-dismissible" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach

                @endif
                <form action="{{ route('pilot.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <fieldset class="container">

                        <div class="form-group row">
                            <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Name*</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="name" placeholder="First Name"> </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Email*</label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" name="email" placeholder="Email"> </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" autocomplete="false" class="col-lg-2 control-label">Mobile Number*</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="mobile" placeholder="(Ex: 076 629 3799)"> </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" autocomplete="false" class="col-lg-2 control-label">Facebook Account Link</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="facebook" placeholder="Facebook Link"> </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" autocomplete="false" class="col-lg-2 control-label">Linkedin Profile Link*</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="linkedin" placeholder="Linkedin Link"> </div>
                        </div>

                        <div class="form-group row">
                            <label for="select112" class="col-lg-2 control-label">Your University*</label>
                            <div class="col-lg-9">
                                <select name="university" class="form-control selectpicker" data-live-search="true" data-dropup-auto="false">
                                    <option value="University of Peradeniya">University of Peradeniya</option>
                                    <option value="University of Colombo">University of Colombo</option>
                                    <option value="University of Ruhuna">University of Ruhuna</option>
                                    <option value="University of Sri Jayewardenepura">University of Sri Jayewardenepura</option>
                                    <option value="University of Kelaniya">University of Kelaniya</option>
                                    <option value="University of Moratuwa">University of Moratuwa</option>
                                    <option value="University of Jaffna">University of Jaffna</option>
                                    <option value="Eastern University, Sri Lanka">Eastern University, Sri Lanka</option>
                                    <option value="South Eastern University of Sri Lanka, Oluvil">South Eastern University of Sri Lanka, Oluvil</option>
                                    <option value="Rajarata University">Rajarata University</option>
                                    <option value="Sabaragamuwa University of Sri Lanka">Sabaragamuwa University of Sri Lanka</option>
                                    <option value="Wayamba University of Sri Lanka">Wayamba University of Sri Lanka</option>
                                    <option value="Uva Wellassa University">Uva Wellassa University</option>
                                    <option value="University of the Visual & Performing Arts">University of the Visual & Performing Arts</option>
                                    <option value="Open University of Sri Lanka">Open University of Sri Lanka</option>
                                    <option value="Sri Lanka Institute of Advanced Technological Education(SLIATE)">Sri Lanka Institute of Advanced Technological Education(SLIATE)</option>
                                    <option value="Sri Lanka Institute of Information Technology">Sri Lanka Institute of Information Technology</option>
                                    <option value="NSBM Green University">NSBM Green University</option>
                                    <option value="Sri Lanka International Buddhist Academy (SIBA Campus)">Sri Lanka International Buddhist Academy (SIBA Campus)</option>
                                    <option value="Kothalawala Defence University">Kothalawala Defence University</option>
                                    <option value="National School of Business Management">National School of Business Management</option>
                                    <option value="The Open University of Sri Lanka">The Open University of Sri Lanka</option>
                                    <option value="International College of Business and Technology">International College of Business and Technology</option>
                                    <option value="National Institute of Business Management(NIBM)">National Institute of Business Management(NIBM)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-lg-2 control-label">Why you need to join as a foss pilot?</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" name="about" rows="3" placeholder="Write here..."></textarea>
                            </div>
                        </div>


                        <div class="form-group row justify-content-end">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-raised btn-primary">Apply</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>



@stop