<div class="modal fade" id="modal-input-track" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ml-4" id="ModalLongTitle">Input tracking number</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row ml-5">
                    <div class="col-10 ">
                        <label for="input-tracking-number" class="form-label">Name User</label>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend ">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control name_user_ex" name="name_user" aria-label="Name User" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-5">
                    <div class="col-10 ">
                        <label for="show-name-reward-item" class="form-label">Name reward item</label>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend ">
                                <span class="input-group-text">
                                    <i class="fas fa-clipboard"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control name_reward_ex" name="name_reward_ex" aria-label="Name reward item" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-5">
                    <div class="col-10">
                        <label for="input-tracking-number" class="form-label">Address user</label>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-home"></i>
                                </span>
                            </div>
                            <textarea class="form-control address_user_ex" rows="3" cols="30" name="address_user_ex" aria-label="Address user" disabled></textarea>
                        </div>
                    </div>
                </div>
                <div class="row ml-5">
                    <div class="col-4">
                        <label for="input-tracking-number" class="form-label">Time reward</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-clipboard"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control date_ex" name="time_reward" aria-label="Time reward" disabled> <!-- This -->
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="input-tracking-number" class="form-label">Status</label>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-clipboard"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control status_ex" name="status_ex" aria-label="Status" disabled> <!-- This -->
                        </div>
                    </div>
                </div>
                <div class="row ml-5">
                    <div class="col-10 ">
                        <label for="input-tracking-number" class="form-label">Tracking number</label>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-clipboard"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control tracking" name="tracking" aria-label="Tracking"> <!-- This -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer ">
                <button type="button" class="btn btn-secondary col-2" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-info col-2 add_tracking">Add</button>
            </div>
        </div>
    </div>
</div>