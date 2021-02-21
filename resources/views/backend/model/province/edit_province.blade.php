<div class="modal fade" id="edit-province">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header bg-info">
        <h4 class="modal-title"> Update Province </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('province.update','test' ) }}" method="post" id="editForm">

            {{ csrf_field('patch') }}
            {{ method_field('PUT') }}

        <div class="modal-body">
            <div class="card-body">
                <div class="row">

                    <input type="hidden" name="pid" id="pid">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="provinceNo">Province No.</label>
                            <input type="number" name="pno" class="form-control" min="1" id="province_no" placeholder="P No."  required>

                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="provinceName">Province Name</label>
                            <input type="text" name="pName" class="form-control" id="prov_name" placeholder="Enter Province Name" required>
                        </div>
                    </div>
                    <div class="col-md-3">

                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="provinceName">Province Name in Nepali</label>
                            <input type="text" name="pNameNepali" class="form-control" id="pnepali" placeholder="Enter Province Name" id="pNameNepali" required>
                        </div>
                    </div>


                </div>

            </div>

        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-info" value="Update Province">
        </div>
        </form>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
