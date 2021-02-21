@extends('backend.layout.master')

@section('title', 'Add Province')
@section('aopen', 'menu-open')
@section('address', 'active')
@section('state', 'active')


@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection



@section('content')
<div class="row">
    <div class="col-12 mb-2">

        <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title"> Add Profiles </h3>
            </div>

              <div class="card-body d-flex justify-content-center">

                <div class="d-flex justify-content-center">
                    <a href="" class="btn bg-success" data-toggle="modal"  data-backdrop="false" data-target="#add-province">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
              </div>


              {{--  MOdel   --}}
                @include('backend.model.province.add_province')
              {{--  End of Model  --}}
        </div>

        <div class="col-12">
            <section class="content">
                        <div class="card">
                            <!-- /.card-header -->

                            {{-- flash sms --}}
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    {{session()->get('success')}}
                                </div>
                            @endif
                            {{--  --}}

                            {{-- flash sms --}}
                                @if (session()->has('error'))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        {{session()->get('error')}}
                                    </div>
                                @endif
                            {{--  --}}

                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>State Name</th>
                                    <th>प्रदेशको नाम </th>
                                    <th style="text-align: center;"> Action </th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach($prv as $province)
                                    <tr>
                                        <td> {{ $province->pno }} </td>
                                        <td> {{ $province->pName }} </td>
                                        <td> {{ $province->pNameNepali }} </td>
                                        <td style="text-align:center;">

                                            <a href="#" class="btn btn-warning" data-toggle="modal" data-id="{{ $province->id }}" data-pno="{{ $province->pno }}" data-statename="{{ $province->pName }}" data-pnepaliname="{{ $province->pNameNepali }}" data-backdrop="false" data-target="#edit-province">
                                                <i class="fas fa-edit"> </i>
                                            </a> &nbsp;


                                            <button class="btn btn-danger" data-toggle="modal" data-id="{{ $province->id }}" data-target="#delete-province">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>State Name</th>
                                        <th>प्रदेशको नाम </th>
                                        <th style="text-align: center;"> Action </th>
                                    </tr>
                                </tfoot>
                              </table>


                            {{--  MOdel   --}}
                            @include('backend.model.province.edit_province')
                            {{--  End of Model  --}}


                            {{--  MOdel   --}}
                            @include('backend.model.province.delete_province')
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


    // Edit Modal
    $('#edit-province').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget)
      var pid = button.data('id')
      var province_no = button.data('pno')
      var province_Name = button.data('statename')
      var pNameNepali = button.data('pnepaliname')
      var modal = $(this)

      modal.find('.modal-body #pid').val(pid);
      modal.find('.modal-body #province_no').val(province_no);
      modal.find('.modal-body #prov_name').val(province_Name);
      modal.find('.modal-body #pnepali').val(pNameNepali);
    })

    // Delete Province
    $('#delete-province').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var prv_id = button.data('id')
      var modal = $(this)
      modal.find('.modal-body #pid').val(prv_id);
})


  </script>
@endsection
