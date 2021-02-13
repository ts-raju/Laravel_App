@extends('backend.layout.master')

@section('view_profile', 'active')

@section('styles')

@section('content')

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

