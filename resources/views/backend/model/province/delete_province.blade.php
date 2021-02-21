<div class="modal fade" id="delete-province">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header bg-danger">
        <h4 class="modal-title"> Delete Province </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('province.destroy', 'test') }}" method="post">
            {{ method_field('delete') }}
            {{ csrf_field() }}
            <div class="modal-body">

            <div class="card-body text-center">
                <input type="hidden" name="id" class="form-control" id="pid" value="">
                <b> Do You Really Want To Delete This Province ? </b>
            </div>

        </div>
        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-danger"> Yes </button>
            <button type="button" class="btn btn-info" data-dismiss="modal"> No </button>
        </div>
        </form>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
