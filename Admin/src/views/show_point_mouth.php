<?php require './src/models/compare_mouth_point.php';

if (!mysqli_fetch_object($result_fetch_topToMouth_ex)) {
  echo 'NOT MOVEMENT';
}
while ($lists_user_mouth = mysqli_fetch_assoc($result_fetch_topToMouth)) { ?>
  <p>
    </tab><strong> ID : <?php echo $lists_user_mouth['id_user']; ?> </strong> &nbsp;&nbsp;
    point [
    <?php echo $lists_user_mouth['SUM(point_product)'];
    ?> ] </p>
<?php } ?>