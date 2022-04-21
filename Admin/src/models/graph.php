<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/Project-Value-Added/Mysql/Connect.php";
include($path);

$year_ex = $_GET["select_year"];
$year = substr($year_ex, 1, 4);

// echo $year;
$total_year_clear = search_year('clear', $year);
$total_year_can = search_year('can', $year);
$total_year_opaque = search_year('opaque', $year);
// echo "total_year_can".$total_year_can;

for ($mouth = 1; $mouth < 13; $mouth++) {
    // $time = '%%/' . $mouth_num . '/' . $year_local;
    if ($mouth <= 9) {
        $mouth_num = '0' . $mouth;
    } else {
        $mouth_num = $mouth;
    }
    // echo $mouth_num;
    // $time = '%%/' . $mouth_num . '/' . $year_local . '<br>';
    // echo $time;
    // $time = '%%/03/' . $year_local;
    $q_count_mouth_can = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'can' AND `date_exchange_point` LIKE '%%/$mouth_num/$year'";
    $result_count_mouth_can = mysqli_query($dbcon, $q_count_mouth_can);
    $temp = mysqli_fetch_assoc($result_count_mouth_can);
    $mouth_can[$mouth] = $temp['count'];

    $q_count_mouth_clear = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'clear' AND `date_exchange_point` LIKE '%%/$mouth_num/$year'";
    $result_count_mouth_clear = mysqli_query($dbcon, $q_count_mouth_clear);
    $temp = mysqli_fetch_assoc($result_count_mouth_clear);
    $mouth_clear[$mouth] = $temp['count'];

    $q_count_mouth_opaque = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'opaque' AND `date_exchange_point` LIKE '%%/$mouth_num/$year'";
    $result_count_mouth_opaque = mysqli_query($dbcon, $q_count_mouth_opaque);
    $temp = mysqli_fetch_assoc($result_count_mouth_opaque);
    $mouth_opaque[$mouth] = $temp['count'];
}

function search_year($type_search, $year_search1)
{
    $q_count_mouth_of_year_opaque = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = '$type_search' AND `date_exchange_point` LIKE '%%/%%/$year_search1'";
    // echo  $q_count_mouth_of_year_opaque.'<br>';
    $result_count_mouth_of_year_opaque = mysqli_query($GLOBALS['dbcon'], $q_count_mouth_of_year_opaque);
    $result = mysqli_fetch_assoc($result_count_mouth_of_year_opaque);
    return $result['count'];
}
?>

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
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <a href="../../Home.php" type="button" class="btn btn-danger btn-lg float-right mr-5 mt-3 ">Back</a>
    <div class="container pt-4">
        <div class="row">
            <div class="col-12 text-center">
                <div class="jumbotron">
                    <h1 class="display-4">Graph Exchange product</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>
        <div id="container222" class="mt-5 center" style="height: 500px; width: 500px;"></div>
        <script type="text/javascript">
            var dom222 = document.getElementById("container222");
            var myChart222 = echarts.init(dom222);
            var app222 = {};
            var option222;
            option222 = {
                title: {
                    text: 'Graph of Year',
                    subtext: '<?php echo $year ?>',
                    left: 'center'
                },
                tooltip: {
                    trigger: 'item'
                },
                legend: {
                    orient: 'vertical',
                    right: 'right'
                },
                series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: '55%',
                    data: [{
                            value: <?php echo $total_year_clear ?>,
                            name: 'Clear'
                        },
                        {
                            value: <?php echo $total_year_can ?>,
                            name: 'Can'
                        },
                        {
                            value: <?php echo $total_year_opaque ?>,
                            name: 'Opaque'
                        }
                    ],
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }]
            };
            if (option222 && typeof option222 === 'object') {
                myChart222.setOption(option222);
            }
        </script>
        <div id="container111" class="mt-5 center" style="height: 500px; width: 800px;"></div>
        <script type="text/javascript">
            var dom111 = document.getElementById("container111");
            var myChart111 = echarts.init(dom111);
            var app111 = {};
            var option111;
            option111 = {
                title: {
                    text: 'Clear',
                    subtext: '<?php echo $year ?>',
                    left: 'center'
                },
                xAxis: {
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                },
                yAxis: {
                    type: 'value',
                    // data: [10, 20, 30, 40, 50, 60],
                },
                series: [{
                    // data: [5, 6, 21, 11, 15, 14, 25],
                    data: [
                        <?php for ($i = 1; $i <= 12; $i++) {
                            echo $mouth_clear[$i] . ',';
                        }
                        ?>
                    ],
                    type: 'bar'
                }]
            };

            if (option111 && typeof option111 === 'object') {
                myChart111.setOption(option111);
            }
        </script>
        <div id="container33" class="mt-5 center" style="height: 500px; width: 800px;"></div>
        <script type="text/javascript">
            var dom = document.getElementById("container33");
            var myChart = echarts.init(dom);
            var app = {};
            var option2;
            option2 = {
                title: {
                    text: 'Opaque',
                    subtext: '<?php echo $year ?>',
                    left: 'center'
                },
                xAxis: {
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                },
                yAxis: {
                    type: 'value',
                    // data: [10, 20, 30, 40, 50, 60],
                },
                series: [{
                    // data: [5, 6, 21, 11, 15, 14, 25],
                    data: [<?php for ($i = 1; $i <= 12; $i++) {
                                echo $mouth_opaque[$i] . ',';
                            } ?>],
                    type: 'bar'
                }]
            };

            if (option2 && typeof option2 === 'object') {
                myChart.setOption(option2);
            }
        </script>
        <div id="container44" class="mt-5 center" style="height: 500px; width: 800px;"></div>
        <script type="text/javascript">
            var dom3 = document.getElementById("container44");
            var myChart = echarts.init(dom3);
            var app = {};
            var option3;
            option3 = {
                title: {
                    text: 'Can',
                    subtext: '<?php echo $year ?>',
                    left: 'center'
                },
                xAxis: {
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                },
                yAxis: {
                    type: 'value',
                    // data: [10, 20, 30, 40, 50, 60],
                },
                series: [{
                    data: [<?php for ($i = 1; $i <= 12; $i++) {
                                echo $mouth_can[$i] . ',';
                            } ?>],
                    type: 'bar'
                }]
            };

            if (option3 && typeof option3 === 'object') {
                myChart.setOption(option3);
            }
        </script>
    </div>


    <!-- ข้างล่าง -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>