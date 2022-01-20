<!-- <div class="card" style="width: 40%;">
    <div clas="card-body"> -->
        <!-- <strong>POINT OF TO DAY</strong> -->
        <?php include './src/models/compare_today_point.php';
        if(!mysqli_fetch_object($result_fetch_topToDay)){
            echo 'NOT MOVEMENT';
        }
        while ($lists_user = mysqli_fetch_assoc($result_fetch_topToDay)) { ?>
            <p></tab><strong> ID : <?php echo $lists_user['id_user'];?> </strong>
            point [
                <?php echo $lists_user['SUM(point_product)'];
            ?> ] </p>
            <?php } ?>
    <!-- </div>
</div> -->