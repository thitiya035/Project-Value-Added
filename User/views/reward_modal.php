<?php
require './User/models/reward.php';
?>

<div class="container">
    <div class="container d-flex justify-content-center">
        <div class="circle-bg">
            <div class="h1" style="font-size: 4.5rem;">
                <?php echo $total_point['total_point_user'] ?>
            </div>
            <h2>Point</h2>
        </div>
    </div>
    <!-- <h1 class="text-white text-center"> Point = <?php #echo $total_point['total_point_user'] 
                                                        ?></h1> -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="caed">
                    <div class="card-block">
                        <div class="card-title">
                            <h4>Title 1 </h4>
                        </div>
                        <div class="card-text"> Hi
                            ++++
                        </div>
                        <a href="#" class="btn btn-primary ">Reward</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="row" style="margin:auto;">
        <?php while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="card col-sm-5 col-lg-5 mt-3 ml-3">
                <img src="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name_reward'];
                                            ?></h5>
                    <p class="card-text"><?php echo $row['point_exchange_reward'];
                                            ?></p>
                    <button class="btn btn-primary "> Reward</button>
                    <!-- <a href="#" class="btn btn-primary ">Reward</a> -->
                </div>
            </div>
        <?php }
        ?>
    </div>
</div>
<div class="text-center d-flex mt-4" style="background-color: rgba(0, 0, 0, 0.2);">
    <a href="profile.php" type="button" class="btn btn-danger col-12 btn-lg">Back</a>
</div>
<!-- <footer class="page-footer">
    <div>
        <div class="text-center d-flex " style="background-color: rgba(0, 0, 0, 0.2);">
            <a href="profile.php" type="button" class="btn btn-danger col-12 btn-lg">Back</a>
        </div>
    </div>
</footer> -->