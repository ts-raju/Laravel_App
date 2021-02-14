@extends('backend.layout.master')

@section('view_profile', 'active')

@section('styles')

@section('content')


<div class="row">
        <div class="col-12">
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"> View Profile </h3>
            </div>


            <!-- form start -->
            <form role="form">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
        </div>
</div>



<div class="row">
    <div class="col-lg-4">
        <div class="card" style="width:350px">
            <div class="text-center">
                <img class="card-img-top" src="{{ asset('backend/img/user7-128x128.jpg') }}" alt="Card image" style="width:98%; padding: 10px;">
            </div>

            <div class="card-body">
                <table cellpadding="4">
                    <thead>
                        <tr>
                            <td align="right"> <b> Name :: </b></td>
                            <td> Persons Name</td>
                        </tr>
                        <tr>
                            <td align="right"> <b> Age :: </b></td>
                            <td> 25 Years </td>
                        </tr>
                        <tr>
                            <td align="right"> <b> Gender :: </b></td>
                            <td> Female </td>
                        </tr>
                        <tr>
                            <td align="right"> <b> Nationality :: </b></td>
                            <td> Nepali </td>
                        </tr>
                    </thead>
                </table>
            </div>
          </div>
    </div>
</div>

@endsection
