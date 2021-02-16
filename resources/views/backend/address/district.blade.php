@extends('backend.layout.master')

@section('title', 'Add District')
@section('aopen', 'menu-open')
@section('address', 'active')
@section('district', 'active')


@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection



@section('content')
<div class="row">
    <div class="col-12 mb-2">

        <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title"> Add District </h3>
            </div>

              <div class="card-body d-flex justify-content-center">

                <div class="d-flex justify-content-center">
                    <a href="" class="btn bg-success" data-toggle="modal"  data-backdrop="false" data-target="#add-district">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
              </div>


              {{--  MOdel   --}}
                @include('backend.model.district.add_district')
              {{--  End of Model  --}}


        </div>

        <div class="col-12">
            <section class="content">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>District ID</th>
                                    <th>District Name</th>
                                    <th> Action </th>
                                </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> Kathmandu </td>
                                        <td style="text-align:center;">

                                            <a href="#" class="btn btn-warning" data-toggle="modal"  data-backdrop="false" data-target="#edit-district">
                                                <i class="fas fa-user-edit"> </i>
                                            </a> &nbsp;


                                            <button class="btn btn-danger" data-toggle="modal" data-target="#delete-district">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                        </td>
                                    </tr>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>District ID</th>
                                        <th>District Name</th>
                                        <th> Action </th>
                                    </tr>
                              </tfoot>
                              </table>

                            {{--  MOdel   --}}
                            @include('backend.model.district.edit_district')
                            {{--  End of Model  --}}


                            {{--  MOdel   --}}
                            @include('backend.model.district.delete_district')
                            {{--  End of Model  --}}

                        </div>
                </div>
            </section>
        </div>




    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
