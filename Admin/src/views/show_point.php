<!-- <div class="card" style="width: 40%;"> -->
<!-- <div clas="card-body"> -->
<?php include './src/models/compare_top_point.php';

while ($obj = mysqli_fetch_assoc($result_fetch_toppoint)) { ?>
    <p>
        </tab><strong><?php echo $obj['firstname_user'] . '&nbsp;&nbsp;' . $obj['lastname_user']; ?> </strong>
        point [
        <?php echo $obj['total_point_user'];
        ?> ] </p>
<?php } ?>
<!-- </div> -->
<!-- </div> -->