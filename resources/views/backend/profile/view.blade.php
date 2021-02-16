@extends('backend.layout.master')


@section('title', 'View Profile')
@section('popen', 'menu-open')
@section('main-profile', 'active')
@section('view-profile', 'active')

@section('content')
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                    <img class="img-fluid img-rounded"
                        src="{{ asset('backend/img/user4-128x128.jpg') }}" height="128" width="125"
                        alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center"> Sita Khadka </h3>

                    <p class="text-muted text-center"> Naxal, Kahtmandu Nepal </p>

                    <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b> Total Links </b> <a class="float-right"> 4 </a>
                    </li>
                    <li class="list-group-item">
                        <b> Group </b> <a class="float-right"> 2 </a>
                    </li>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>






            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"> General Info </a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"> Contact </a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"> Links </a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <form class="form-horizontal">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                </label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>


                    <!-- /Contact -->
                    <div class="tab-pane" id="timeline">
                        Contact Info
                    </div>


                    <div class="tab-pane" id="settings">
                        Links
                    </div>
                    <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->

</div>

@endsection
