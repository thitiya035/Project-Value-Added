<!-- <div class="modal fade" id="modal-graph" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLongTitle">Edit Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container ">
                    <div id="container222" class="mt-5 center" style="height: 500px; width: 500px;"></div>
                    <script type="text/javascript">
                        var dom222 = document.getElementById("container222");
                        var myChart222 = echarts.init(dom222);
                        var app222 = {};
                        var option222;
                        option222 = {
                            title: {
                                text: 'Graph of Year',
                                subtext: '',
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
                                        value: total_year_clear1 ,
                                        name: 'Clear'
                                    },
                                    {
                                        value: 30,
                                        name: 'Can'
                                    },
                                    {
                                        value: 40,
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


                    <div id="container11" class="mt-5 center" style="height: 300px; width: 500px;"></div>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>
                    <script type="text/javascript">
                        var dom11 = document.getElementById("container11");
                        var myChart11 = echarts.init(dom11);
                        var app11 = {};
                        var option11;
                        option11 = {
                            title: {
                                text: 'Clear',
                                subtext: '<?php echo $year1 ?>',
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
                                            echo $mouth_clear1[$i] . ',';
                                        } ?>],
                                type: 'bar'
                            }]
                        };

                        if (option11 && typeof option11 === 'object') {
                            myChart11.setOption(option11);
                        }
                    </script>


                    <div class="row">

                        <div id="container33" class="mt-5 center" style="height: 300px; width: 500px;"></div>
                        <script type="text/javascript">
                            var dom = document.getElementById("container33");
                            var myChart = echarts.init(dom);
                            var app = {};
                            var option2;
                            option2 = {
                                title: {
                                    text: 'Opaque',
                                    subtext: '<?php echo $year1 ?>',
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
                                                echo $mouth_opaque1[$i] . ',';
                                            } ?>],
                                    type: 'bar'
                                }]
                            };

                            if (option2 && typeof option2 === 'object') {
                                myChart.setOption(option2);
                            }
                        </script>


                        <div id="container44" class="mt-5 center" style="height: 300px; width: 500px;"></div>
                        <script type="text/javascript">
                            var dom3 = document.getElementById("container44");
                            var myChart = echarts.init(dom3);
                            var app = {};
                            var option3;
                            option3 = {
                                title: {
                                    text: 'Can',
                                    subtext: '<?php echo $year1 ?>',
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
                                                echo $mouth_can1[$i] . ',';
                                            } ?>],
                                    type: 'bar'
                                }]
                            };

                            if (option3 && typeof option3 === 'object') {
                                myChart.setOption(option3);
                            }
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div> -->