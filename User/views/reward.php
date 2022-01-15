<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reward</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/reward.css" />
</head>

<body>
    <?php
    // require '../Mysql/Connect.php';
    require 'reward_model.php';

    // $usr = "SELECT total_point_user FROM user where tel_user='".$_SESSION['tel']."'";
    // $point = $dbcon->query($usr);

    ?>

    <div class="container">
        <h1 class="text-white text-center"> Point = <?php echo  $point ?></h1>
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card col-sm-6 col-lg-6 " style="width: 18rem;">
                    <img src="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name_reward']; ?></h5>
                        <p class="card-text"><?php echo $row['point_exchange_reward']; ?></p>
                        <a href="#" class="btn btn-primary">Reward</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

<footer class="page-footer">
    <div>
        <div class="text-center d-flex " style="background-color: rgba(0, 0, 0, 0.2);">
            <a href="user_page.php" type="button" class="btn btn-warning col-12 btn-lg">Back</a>
        </div>
    </div>
</footer>

<?php
require '../Mysql/Disconnect.php';
?>

</html>