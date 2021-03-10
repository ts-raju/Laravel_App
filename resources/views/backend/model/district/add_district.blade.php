<div class="modal fade" id="add-district">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header bg-info">
        <h4 class="modal-title"> Add Province </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('district.store') }}" method="post">

            {{ csrf_field() }}

        <div class="modal-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="districtId"> District ID </label>
                            <input type="number" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="Province">Province</label>
                            <select name="province_id" class="form-control">
                                <option class="form-control"  selected> --Choose Province-- </option>

                                $@foreach ($prov as $province)
                                <option class="form-control" value="{{ $province->pno }}" selected> {{ $province->pName }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">

                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="exampleInputEmail1">District Name</label>
                            <input type="text" name="dName" class="form-control" placeholder="Enter District Name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">

                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="exampleInputEmail1">District Name in नेपालि</label>
                            <input type="text" name="dNameNepali"class="form-control" placeholder="Enter District Name">
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-info" value="Add District">
        </div>
        </form>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
