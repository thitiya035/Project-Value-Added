<div class="container pt-4">
    <div class="row">
        <div class="col-12 text-center">
            <div class="jumbotron">
                <h1 class="display-4">DashBoard</h1>
            </div>
        </div>
    </div>
    <?php
    require_once './src/models/update_stock.php';
    ?>
    <!-- <h1 class="badge bg-secondary" style="font-size: 1.25em;">Detail</h1> -->
    <div class="row text-center">
        <div class="col-4 mx-auto">
            <div class="card shadow rounded">
                <div class="card-header bg-secondary">
                    <strong>Clear plastic bottles</strong>
                </div>
                <div class="card-body">
                    <h1><?php echo $numbers[0] ?></h1>
                </div>
            </div>
        </div>
        <div class="col-4 mx-auto">
            <div class="card shadow rounded">
                <div class="card-header bg-secondary">
                    <strong>Opaque plastic bottles</strong>
                </div>
                <div class="card-body">
                    <h1><?php echo $numbers[1] ?></h1>
                </div>
            </div>
        </div>
        <div class="col-4 mx-auto">
            <div class="card shadow rounded ">
                <div class="card-header bg-secondary">
                    <strong>Cans</strong>
                </div>
                <div class="card-body">
                    <h1><?php echo $numbers[2] ?></h1>
                </div>
            </div>
        </div>
    </div>
 
    <br>
    <div class="row text-center">
        <div class="col-4 mx-auto">
            <div class="card shadow rounded">
                <div class="card-header bg-secondary">
                    <strong>TOP POINT</strong>
                </div>
                <div class="card-body text-left">
                   <?php include './src/views/show_point.php' ?>
                </div>
            </div>
        </div>
        <div class="col-4 mx-auto">
            <div class="card shadow rounded">
                <div class="card-header bg-secondary">
                    <strong>TOP POINT OF TO DAY</strong>
                </div>
                <div class="card-body">
                    <?php include './src/views/show_point_today.php' ?>
                </div>
            </div>
        </div>
        <div class="col-4 mx-auto">
            <div class="card shadow rounded">
                <div class="card-header bg-secondary">
                    <strong>TOP POINT OF MOUTH</strong>
                </div>
                <div class="card-body">
                    <?php include './src/views/show_point_mouth.php'  ?>
                </div>
            </div>
        </div>
    </div>