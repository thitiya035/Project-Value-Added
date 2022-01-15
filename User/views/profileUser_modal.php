<?php
require './User/models/profileUser.php';
?>

<div>
    <nav class="nav justify-content-end">
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#ModalCenter">
            <span class="fas fa-cog" style="color:black"></span>
        </button>
</div>
<div class="container d-flex justify-content-center">
    <div class="circle-bg">
        <div class="">
            <h1 class="display-1"><?php echo $row['total_point_user'] ?></h1>
        </div>
        <div>
            <h1>Point</h1>
        </div>
    </div>
</div>
<div class="container bg-light">
    <table class="table table-borderless">
        <thead>
            <tr>
                <th>ข้อมูลส่วนตัว</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Name: </td>
                <td class="col-10"><?php echo $row['name_user'] ?></td>
            </tr>
            <tr>
                <td>Address: </td>
                <td><?php echo $row['address_user'] ?></td>
            </tr>
            <tr>
                <td>Phone: </td>
                <td><?php echo $row['tel_user'] ?></td>
            </tr>

        </tbody>
    </table>
</div>
<footer class="page-footer">
    <div>
        <div class="text-center d-flex " style="background-color: rgba(0, 0, 0, 0.2);">
            <a href="reward.php" type="button" class="btn btn-warning col-6 btn-lg">Get Reward</a>
            <a href="./User/models/logout.php" type="button" class="btn btn-danger col-6 btn-lg">Logout</a>
        </div>
    </div>
</footer>