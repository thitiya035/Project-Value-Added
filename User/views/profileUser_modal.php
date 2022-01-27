<?php
require './User/models/profileUser.php';
require './User/views/edit_profile_modal.php';
?>

<!-- <div>
    <nav class="nav justify-content-end">
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#ModalCenter">
            <span class="fas fa-cog" style="color:black"></span>
        </button>
</div> -->
<div class="container d-flex justify-content-center">
    <div class="circle-bg">
        <div class="h1" style="font-size: 4rem;">
            <?php echo $detail_user['total_point_user'] ?> 
        </div>
        <h2  style="font-size: 2rem;" >Point</h2>
    </div>
</div>

<div class="container card mt-3 shadow">
    <div class="card-body">
        <div class="col-12">
            <div class="alert alert-dark text-center text-uppercase mb-3">
                <h3>Information <button class="btn btn-secondary  btn-clipboard float-right " data-toggle="modal" data-target="#modal-user-edit-profile">Edit</button></h3>
            </div>
            <table class="table table-bordered ">
                <tbody>
                    <tr class="text-uppercase">
                        <th scope="col">Name</th>
                        <td><?php echo ($detail_user['firstname_user']) .'&nbsp;&nbsp;&nbsp;'. ($detail_user['lastname_user'] ); ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Address</th>
                        <td><?php echo $detail_user['address_user']; ?></td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td><?php echo $detail_user['email_user']; ?></td>
                    </tr>
                    <tr>
                        <th>Tel</th>
                        <td><?php echo $detail_user['phone_user']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<footer class="page-footer">
    <div>
        <div class="text-center d-flex " style="background-color: rgba(0, 0, 0, 0.2);">
            <a href="reward.php" type="button" class="btn btn-warning col-6 btn-lg">Get Reward</a>
            <a href="./User/models/logout.php" type="button" class="btn btn-danger col-6 btn-lg">Logout</a>
        </div>
    </div>
</footer>