<div class="modal fade" id="modal-reward-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit-reward-label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLongTitle">Edit Reward</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-9">
                        <label for="inputfullname" class="form-label">Name Product Reward</label>
                    </div>
                    <div class="col-3">
                        <label for="inputfullname" class="form-label">Point to exchange</label>
                    </div>
                    <div class="form-group col-md-9 mt-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-clipboard"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control name_reward_edit" name="name_reward_edit" >
                        </div>
                    </div>
                    <div class="form-group col-md-3 mt-2">
                        <div class="input-group ">
                            <input type="number" class="form-control point_ex_reward_edit" name="point_ex_reward_edit" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="formsubmit" name="submit" class="btn btn-primary reward_edit">Save changes</button>
            </div>
        </div>
    </div>
</div>