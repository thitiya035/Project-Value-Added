<?php
require_once './User/views/register_modal.php';
require_once './User/models/show_point.php';
?>
<!-- <div class="container h-100"> -->
<div class="row">
    <div class="col-md-7 col-lg-7" style="padding-right: 15px; padding-left: 30px;">
        <div class="container h-100 mt-3">
            <!-- <div class="container h-100 justify-content-center"> -->
            <div class="logo">
                <img id="img" class="img-fu" src="" width="100%" height="100%">
            </div>
            <div class="col-centered ">
                <div class="form-group">
                    <label for="userphone" class="text">Phone</label>
                    <input type="tel" class="form-control userphone" id="userphone" placeholder="Enter your phone number" name="userphone" pattern="[0-9]{10}" maxlength="10" required>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Your Phone number must be 10 number.
                    </small>
                </div>
                <div class="form-group">
                    <label for="password" class="text">Password:</label>
                    <input type="password" class="form-control password" id="password" placeholder="Enter password" name="password" required>
                </div>
                <div class="pt-4 d-flex justify-content-center " style="margin: auto; width: 30%;">
                    <button type="submit" class="btn btn-warning btn-block login">Submit</button>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal-register">
                        <u><strong>Register</strong></u>
                    </button>
                </div>
                <footer class="">
                    <p style="font-size: 15px; color:white;"> หากลืม Password สามารถติดต่อ Admin ได้ที่ Email : Thitiya035.7@gmail.com </p>
                </footer>
            </div>
            <!-- </div> -->
        </div>
    </div>
    <div class="col-md-5 col-lg-5">
        <div class="container h-100 mt-3">
            <div class="mx-auto mt-5">
                <div class="card shadow rounded h-80  modal-1" style="height: 600px;">
                    <div class="card-header bg-success text-center">
                        <h3><strong>TOP POINT OF USERS</strong></h3>
                    </div>
                    <div class="card-body text-left">
                        <?php $no = 0;
                        while ($obj = mysqli_fetch_assoc($result_fetch_toppoint)) {
                            $no = $no + 1;
                        ?>
                            <tr>
                                <p>
                                <h5>
                                    </tab><strong><?php echo $no . '.' . '&nbsp;&nbsp;' . $obj['firstname_user'] . '&nbsp;&nbsp;' . $obj['lastname_user']; ?> </strong>
                                    &rarr;
                                    point [
                                    <?php echo $obj['total_point_user'];
                                    ?> ]
                                </h5>
                                </p>
                                <hr>
                            <tr>
                            <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>