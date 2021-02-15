@extends('backend.layout.master')


@section('add-profile', 'active')


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
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Middle Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Last Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Gender </label>
                                        <br>
                                        <input class="" type="radio" name="radio1"> Male &nbsp; &nbsp;
                                        <input class="" type="radio" name="radio1"> Female
                                    </div>

                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Age </label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Age" max="100" min="1">
                                    </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Phone </label>
                                    <br>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Email </label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Photo </label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                    </div>

                </div>





            </div>

            <div class="card-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
        </div>
    </div>
</div>

@endsection
