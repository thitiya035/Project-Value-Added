<!doctype html>
<html lang="en">
<head>
    <title>History Of Day | Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../Admin/src/css/admin.css"> -->
</head>
<body>
    <a href="../../history.php" type="button" class="btn btn-danger btn-lg float-right mr-5 mt-3 ">Back</a>
    <div class="container pt-4">
        <div class="row">
            <div class="col-12 text-center">
                <div class="jumbotron">
                    <h1 class="display-4">History Exchange product</h1>
                </div>
            </div>
        </div>

        <?php
        // @session_start();
        $path = $_SERVER['DOCUMENT_ROOT'];

        // include($path . "/Project-Value-Added/Admin/src/component/nev.php");
        include($path . "/Project-Value-Added/Mysql/Connect.php");
        // $path .= "/Project-Value-Added/Mysql/Connect.php";

        // $date_en = $_POST['date_1'];

        // $day = substr($date_en, 8, 2);
        // $mouth = substr($date_en, 5, 2);
        // $year = substr($date_en, 0, 4);
        // echo  $_GET['day_ex'];
        if (isset($_GET['day'])) {
            $date_en = $_GET['day'];
            // echo  $date_en . '<br>';
            $day = substr($date_en, 8, 2);
            $mouth = substr($date_en, 5, 2);
            $year = substr($date_en, 0, 4);

            // $date_de = "$day . '/' . $mouth . '/' . $year";
            // echo $date_de;
            $sql_search = "SELECT * FROM `log_exchange_point` WHERE `date_exchange_point`LIKE '$day/$mouth/$year'";
            $search_data = mysqli_query($dbcon, $sql_search);
            $search_data_ex = mysqli_query($dbcon, $sql_search);
            ?>
            <h4 class="text-left mt-5 pt-4 mt-md-0 pt-md-0 mb-4">
                ผลการค้นหา
            </h4>
            <div class="container">
                <div class="col-12">
                    <table class="table table-bordered shadow">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">ID User</th>
                                <th scope="col">Funtion</th>
                                <th scope="col">Id Product</th>
                                <th scope="col">Name Product</th>
                                <th scope="col">Type</th>
                                <th scope="col">Point</th>
                                <th scope="col">Date & Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_fetch_object($search_data_ex)) {
                                $no = 0;
                                while ($row = mysqli_fetch_object($search_data)){
                                    $no++;
                            ?>            
                                <tr class="text-center">
                                    <td> <?php echo $no  ?>   </td>
                                    <td> <?php echo $row->id_user  ?>   </td>
                                    <td> <?php echo $row->group_step ?> </td>
                                    <td> <?php echo $row->id_product  ?>  </td>
                                    <td> <?php echo $row->name_product ?> </td>
                                    <td> <?php echo $row->type_product ?> </td>
                                    <td> <?php echo $row->point_product ?> </td>
                                    <td> <?php echo $row->date_exchange_point ."'&nbsp;&nbsp;". $row->time_exchange_point	?> </td>
                                </tr>
                        <?php   } 
                            } else { ?>
                            <tr class="text-center">
                                <td colspan="8"> <h4><strong><?php echo "<br> Not Found <br><br>"; ?> </strong></h4></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
    <?php } ?>                        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <script src="./src/js/admin.js"></script> -->
</body>
</html>
