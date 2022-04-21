<?php
require "../Mysql/Connect.php";

$q_fetch = "SELECT * FROM stock";
$result_detail = mysqli_query($dbcon, $q_fetch);
$i = 0;

while ($obj = mysqli_fetch_object($result_detail)) {
    $numbers[] =  $obj->number;
}

$q_year = "SELECT DISTINCT RIGHT(`date_exchange_point`,4) As `year` FROM `log_exchange_point`;";
$result_year = mysqli_query($dbcon, $q_year);

$q_type = "SELECT name_eng_type_product, `name_th_type_product` FROM `type_product`;";
$result_type = mysqli_query($dbcon, $q_type);

date_default_timezone_set('Asia/Bangkok');
$year = date("Y");
// echo $year;

// statistics (clear)
for ($q = 1; $q <= 12; $q++) {
    if ($q <= 9) {
        $mouth = '0' . $q;
    } else {
        $mouth = $q;
    }
    $q_count_mouth_clear = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'clear' AND `date_exchange_point` LIKE '%%/$mouth/$year'";
    $result_count_mouth_clear = mysqli_query($dbcon, $q_count_mouth_clear);
    if ($result_count_mouth_clear == '0') {
        $mouth_clear[$q] = 0;
    } else {
        $re_mouth_clear = mysqli_fetch_assoc($result_count_mouth_clear);
        $mouth_clear[$q] = $re_mouth_clear['count'];
    }
    // echo $mouth_clear[$q];
}

$q_count_mouth_of_year_clear = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'clear' AND `date_exchange_point` LIKE '%%/%%/$year'";
$result_count_mouth_of_year_clear = mysqli_query($dbcon, $q_count_mouth_of_year_clear);
$total_clear = mysqli_fetch_assoc($result_count_mouth_of_year_clear);

$q_count_mouth_of_year_can = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'can' AND `date_exchange_point` LIKE '%%/%%/$year'";
$result_count_mouth_of_year_can = mysqli_query($dbcon, $q_count_mouth_of_year_can);
$total_can = mysqli_fetch_assoc($result_count_mouth_of_year_can);

$q_count_mouth_of_year_opaque = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'opaque' AND `date_exchange_point` LIKE '%%/%%/$year'";
$result_count_mouth_of_year_opaque = mysqli_query($dbcon, $q_count_mouth_of_year_opaque);
$total_opaque = mysqli_fetch_assoc($result_count_mouth_of_year_opaque);
?>



<div class="container pt-4">
    <h1 class="text-center mb-4 alert alert-secondary" style="font-size: 2em; ">Volume contained in the tank</h1>
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
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div id="container" class="mt-5" style="height: 450px; width: 700px;"></div>
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>
                <script type="text/javascript">
                    var dom = document.getElementById("container");
                    var myChart = echarts.init(dom);
                    // var app = {};
                    var option;
                    option = {
                        // title: {
                        //     text: '<?php #echo $type_show ?>',
                        //     subtext: '<?php #echo $year ?>',
                        //     left: 'center'
                        // },
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
                                <?php
                                // while ($row = mysqli_fetch_array($result_search))
                                for ($i = 1; $i <= 12; $i++) {
                                    echo $mouth_clear[$i] . ',';
                                }
                                ?>
                            ],
                            type: 'bar'
                        }]
                    };

                    if (option && typeof option === 'object') {
                        myChart.setOption(option);
                    }
                </script>
            </div>
            <div class="col-md-5 ">
                <div class=" float-right">
                    <label for="Type">Type : </label>
                    <select id="mySelectType" class="select_type">
                        <?php while ($q_type = mysqli_fetch_assoc($result_type)) { ?>
                            <option value=" <?php echo $q_type['name_eng_type_product'] ?>"><?php echo $q_type['name_th_type_product'] ?>
                            <?php } ?>
                    </select>
                    &nbsp;&nbsp;
                    <label for="Year" class="text ">Year : </label>
                    <select id="mySelectYear" class="select_year">
                        <?php while ($q_year = mysqli_fetch_assoc($result_year)) { ?>
                            <option value=" <?php echo $q_year['year'] ?>"><?php echo $q_year['year'] ?>
                            <?php } ?>
                    </select>
                    &nbsp;&nbsp;
                    <button type="button" class="btn btn-primary btn_graph" style="font-size: 12px;border-radius: 12px;">Submit</button>
                </div>
                <div id="container1" class="mt-5" style="height: 450px; width: 400px;"></div>
                <script type="text/javascript">
                    var dom1 = document.getElementById("container1");
                    var myChart1 = echarts.init(dom1);
                    var app1 = {};
                    var option1;
                    option1 = {
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
                                    value: <?php echo $total_clear['count'] ?>,
                                    name: 'Clear'
                                },
                                {
                                    value: <?php echo $total_can['count'] ?>,
                                    name: 'Can'
                                },
                                {
                                    value: <?php echo $total_opaque['count'] ?>,
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

                    if (option1 && typeof option1 === 'object') {
                        myChart1.setOption(option1);
                    }
                </script>
            </div>
        </div>
    </div>
</div>