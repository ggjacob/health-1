<script type="text/javascript">
    $(function () {
        var data = [];
        var tzOffset = new Date();
        tzOffset = tzOffset.getTimezoneOffset()*60*1000;
        //data.push([(new Date("2012/02/20").getTime()-tzOffset), 1]);
        //data.push([(new Date("2012/02/21").getTime()-tzOffset), 1]);
        //data.push([(new Date("2012/02/23").getTime()-tzOffset), 1]);
        var sin2 = [];
        var cos2 = [];
    <? foreach($calories as $key => $val):?>
        data.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        // cos2.push(['<?=$key?>', <?=$val?>]);
    <? endforeach;?>
       // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_cal"), [ { label: "Cos", data: data }, { label: "Sin", data: data } ],
            {
                colors: ["#00AADD", "#FF6347"],

                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                    },
                    points: {show: true},
                    shadowSize: 2,
                },

                grid: {
                    hoverable: true,
                    show: true,
                    borderWidth: 0,
                    tickColor: "#d2d2d2",
                    labelMargin: 12,
                },

                legend: {
                    show: true,
                    margin: [0,-24],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                },

                yaxis: { },
                xaxis: {mode: "time",
                    minTickSize: [1, "day"],
                    monthNames:['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                },
            });
        // Tooltip Show
        var previousPoint = null;
        $(".charts_cal").bind("plothover", function (event, pos, item) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    $(".charts_tooltip").fadeOut("fast").promise().done(function(){
                        $(this).remove();
                    });
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);
                    km.showTooltip(item.pageX, item.pageY, item.series.label + " of " + x + " = " + y);
                }
            }
            else {
                $(".charts_tooltip").fadeOut("fast").promise().done(function(){
                    $(this).remove();
                });
                previousPoint = null;
            }
        });
        var treonin = [];
        <? foreach($treonin as $key => $val):?>
        treonin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        // cos2.push(['<?=$key?>', <?=$val?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_treonin"), [ { label: "Cos", data: treonin }, { label: "Sin", data: treonin    } ],
            {
                colors: ["#00AADD", "#FF6347"],

                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                    },
                    points: {show: true},
                    shadowSize: 2,
                },

                grid: {
                    hoverable: true,
                    show: true,
                    borderWidth: 0,
                    tickColor: "#d2d2d2",
                    labelMargin: 12,
                },

                legend: {
                    show: true,
                    margin: [0,-24],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                },

                yaxis: { },
                xaxis: {mode: "time",
                    minTickSize: [1, "day"],
                    monthNames:['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                },
            });
        var izolicin = [];
        <? foreach($izolicin as $key => $val):?>
        izolicin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        // cos2.push(['<?=$key?>', <?=$val?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_izolicin"), [ { label: "Cos", data: izolicin }, { label: "Sin", data: izolicin    } ],
            {
                colors: ["#00AADD", "#FF6347"],

                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                    },
                    points: {show: true},
                    shadowSize: 2,
                },

                grid: {
                    hoverable: true,
                    show: true,
                    borderWidth: 0,
                    tickColor: "#d2d2d2",
                    labelMargin: 12,
                },

                legend: {
                    show: true,
                    margin: [0,-24],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                },

                yaxis: { },
                xaxis: {mode: "time",
                    minTickSize: [1, "day"],
                    monthNames:['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                },
            });
        var leycin = [];
    <? foreach($leycin as $key => $val):?>
        leycin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        // cos2.push(['<?=$key?>', <?=$val?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_leycin"), [ { label: "Cos", data: leycin }, { label: "Sin", data: leycin    } ],
            {
                colors: ["#00AADD", "#FF6347"],

                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                    },
                    points: {show: true},
                    shadowSize: 2,
                },

                grid: {
                    hoverable: true,
                    show: true,
                    borderWidth: 0,
                    tickColor: "#d2d2d2",
                    labelMargin: 12,
                },

                legend: {
                    show: true,
                    margin: [0,-24],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                },

                yaxis: { },
                xaxis: {mode: "time",
                    minTickSize: [1, "day"],
                    monthNames:['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                },
            });
        var lizin = [];
    <? foreach($lizin as $key => $val):?>
        lizin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        // cos2.push(['<?=$key?>', <?=$val?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_lizin"), [ { label: "Cos", data: lizin }, { label: "Sin", data: lizin    } ],
            {
                colors: ["#00AADD", "#FF6347"],

                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                    },
                    points: {show: true},
                    shadowSize: 2,
                },

                grid: {
                    hoverable: true,
                    show: true,
                    borderWidth: 0,
                    tickColor: "#d2d2d2",
                    labelMargin: 12,
                },

                legend: {
                    show: true,
                    margin: [0,-24],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                },

                yaxis: { },
                xaxis: {mode: "time",
                    minTickSize: [1, "day"],
                    monthNames:['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                },
            });
        var fenil = [];
    <? foreach($fenil as $key => $val):?>
        fenil.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        // cos2.push(['<?=$key?>', <?=$val?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_fenil"), [ { label: "Cos", data: fenil }, { label: "Sin", data: fenil    } ],
            {
                colors: ["#00AADD", "#FF6347"],

                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                    },
                    points: {show: true},
                    shadowSize: 2,
                },

                grid: {
                    hoverable: true,
                    show: true,
                    borderWidth: 0,
                    tickColor: "#d2d2d2",
                    labelMargin: 12,
                },

                legend: {
                    show: true,
                    margin: [0,-24],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                },

                yaxis: { },
                xaxis: {mode: "time",
                    minTickSize: [1, "day"],
                    monthNames:['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                },
            });
        var valin = [];
    <? foreach($valin as $key => $val):?>
        valin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        // cos2.push(['<?=$key?>', <?=$val?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_valin"), [ { label: "Cos", data: valin }, { label: "Sin", data: valin    } ],
            {
                colors: ["#00AADD", "#FF6347"],

                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                    },
                    points: {show: true},
                    shadowSize: 2,
                },

                grid: {
                    hoverable: true,
                    show: true,
                    borderWidth: 0,
                    tickColor: "#d2d2d2",
                    labelMargin: 12,
                },

                legend: {
                    show: true,
                    margin: [0,-24],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                },

                yaxis: { },
                xaxis: {mode: "time",
                    minTickSize: [1, "day"],
                    monthNames:['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                },
            });
        var metonin = [];
    <? foreach($metonin as $key => $val):?>
        metonin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        // cos2.push(['<?=$key?>', <?=$val?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_metonin"), [ { label: "Cos", data: metonin }, { label: "Sin", data: metonin    } ],
            {
                colors: ["#00AADD", "#FF6347"],

                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                    },
                    points: {show: true},
                    shadowSize: 2,
                },

                grid: {
                    hoverable: true,
                    show: true,
                    borderWidth: 0,
                    tickColor: "#d2d2d2",
                    labelMargin: 12,
                },

                legend: {
                    show: true,
                    margin: [0,-24],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                },

                yaxis: { },
                xaxis: {mode: "time",
                    minTickSize: [1, "day"],
                    monthNames:['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                },
            });
        var gistidin = [];
    <? foreach($gistidin as $key => $val):?>
        gistidin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        // cos2.push(['<?=$key?>', <?=$val?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_gistidin"), [ { label: "Cos", data: gistidin }, { label: "Sin", data: gistidin    } ],
            {
                colors: ["#00AADD", "#FF6347"],

                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                    },
                    points: {show: true},
                    shadowSize: 2,
                },

                grid: {
                    hoverable: true,
                    show: true,
                    borderWidth: 0,
                    tickColor: "#d2d2d2",
                    labelMargin: 12,
                },

                legend: {
                    show: true,
                    margin: [0,-24],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                },

                yaxis: { },
                xaxis: {mode: "time",
                    minTickSize: [1, "day"],
                    monthNames:['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                },
            });
        var triptofan = [];
    <? foreach($triptofan as $key => $val):?>
        triptofan.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        // cos2.push(['<?=$key?>', <?=$val?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_triptofan"), [ { label: "Cos", data: triptofan }, { label: "Sin", data: triptofan    } ],
            {
                colors: ["#00AADD", "#FF6347"],

                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                    },
                    points: {show: true},
                    shadowSize: 2,
                },

                grid: {
                    hoverable: true,
                    show: true,
                    borderWidth: 0,
                    tickColor: "#d2d2d2",
                    labelMargin: 12,
                },

                legend: {
                    show: true,
                    margin: [0,-24],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                },

                yaxis: { },
                xaxis: {mode: "time",
                    minTickSize: [1, "day"],
                    monthNames:['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                },
            });

    });
</script>
<div class="g_6 contents_header">
    <h3 class="i_16_dashboard tab_label">Графики</h3>
    <div><span class="label">Ваше употребление полезных виществ</span></div>
</div>
<div class="g_6 contents_options">
    <div class="simple_buttons">
        <div class="bwIcon i_16_help">Help</div>
    </div>
    <div class="simple_buttons">
        <div class="bwIcon i_16_settings">Settings</div>
        <div class="buttons_arrow">
            <!-- Drop Menu -->
            <ul class="drop_menu menu_with_icons right_direction">
                <li>
                    <a class="i_16_add" href="#" title="New Flie">
                        <span class="label">New File</span>
                    </a>
                </li>
                <li>
                    <a class="i_16_progress" href="#" title="2 Files Left">
                        <span class="label">Files Left</span>
                        <span class="small_count">2</span>
                    </a>
                </li>
                <li>
                    <a class="i_16_files" href="#" title="Browse Files">
                        <span class="label">Browse Files</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>





<div class="g_12 separator under_stat"><span></span></div>

<!-- Charts -->
<div class="g_12">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Калории</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_cal"></div>
    </div>
</div>

<div class="g_12 separator under_stat"><span></span></div>


<div class="g_12">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Треонин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_treonin"></div>
    </div>
</div>
<!-- Separator -->
<div class="g_12 separator"><span></span></div>

<div class="g_12">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Изолейцин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_izolicin"></div>
    </div>
</div>
<!-- Separator -->
<div class="g_12 separator"><span></span></div>

<div class="g_12">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Лейцин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_leycin"></div>
    </div>
</div>
<!-- Separator -->
<div class="g_12 separator"><span></span></div>

<div class="g_12">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Лизин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_lizin"></div>
    </div>
</div>
<!-- Separator -->
<div class="g_12 separator"><span></span></div>

<div class="g_12">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Фенил-аланин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_fenil"></div>
    </div>
</div>
<!-- Separator -->
<div class="g_12 separator"><span></span></div>

<div class="g_12">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Валин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_valin"></div>
    </div>
</div>
<!-- Separator -->
<div class="g_12 separator"><span></span></div>

<div class="g_12">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Метионин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_metonin"></div>
    </div>
</div>
<!-- Separator -->
<div class="g_12 separator"><span></span></div>

<div class="g_12">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Гистидин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_gistidin"></div>
    </div>
</div>
<!-- Separator -->
<div class="g_12 separator"><span></span></div>

<div class="g_12">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Триптофан</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_triptofan"></div>
    </div>
</div>
<!-- Separator -->
<div class="g_12 separator"><span></span></div>