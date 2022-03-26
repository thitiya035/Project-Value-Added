  <!-- img -->

  <div class="modal fade" id="modal-user-edit-profile" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLongTitle">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <label for="inputfullname" class="form-label">Full Name</label>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control firstname" name="firstname" value="<?php echo ($detail_user['firstname_user']) ?>" aria-label="First name">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control lastname" name="lastname" value="<?php echo ($detail_user['lastname_user']) ?>" aria-label="Last name">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputemail" class="form-label">Email</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control email" name="email" value="<?php echo ($detail_user['email_user']) ?>" aria-label="Email">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputpassword" class="form-label">Address</label>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-home"></i>
                                    </span>
                                </div>
                                <textarea class="form-control address" rows="3" cols="30" name="address" aria-label="Address"><?php echo ($detail_user['address_user']) ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="formsubmit" name="submit" class="btn btn-primary edit_user">Save changes</button>
            </div>
        </div>
    </div>
</div>