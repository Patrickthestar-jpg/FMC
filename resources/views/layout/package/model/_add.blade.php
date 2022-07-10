<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="sercice_type">Service Type</label>
                        <select class="form-control" id="sercice_type" name="sercice_type">
                            <option value="1">Package</option>
                            <option value="2">Per Plates</option>
                            <option value="3">Service Only</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sub">Sub Title</label>
                        <input type="text" class="form-control" id="sub" name="modal_title">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>

            </form>
        </div>
    </div>
</div>
