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
        var treonin_norma = [];
        <? foreach($treonin as $key => $val):?>
        treonin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        treonin_norma.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$norma['treonin']*$user_info['weight']?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_treonin"), [ { label: "Норма", data: treonin_norma }, { label: "Ваш уровень", data: treonin    } ],
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
        var izolicin_norma = [];
        <? foreach($izolicin as $key => $val):?>
        izolicin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        izolicin_norma.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$norma['izolicin']*$user_info['weight']?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_izolicin"), [ { label: "Норма", data: izolicin_norma }, { label: "Ваш уровень", data: izolicin    } ],
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
        var leycin_norma = [];
        <? foreach($leycin as $key => $val):?>
        leycin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        leycin_norma.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$norma['leycin']*$user_info['weight']?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_leycin"), [ { label: "Норма", data: leycin_norma }, { label: "Ваш уровень", data: leycin    } ],
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
        var lizin_norma = [];
        <? foreach($lizin as $key => $val):?>
        lizin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        lizin_norma.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$norma['lizin']*$user_info['weight']?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_lizin"), [ { label: "Норма", data: lizin_norma }, { label: "Ваш уровень", data: lizin    } ],
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
        var fenil_norma = [];
        <? foreach($fenil as $key => $val):?>
        fenil.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        fenil_norma.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$norma['fenil']*$user_info['weight']?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_fenil"), [ { label: "Норма", data: fenil_norma }, { label: "Ваш уровень", data: fenil    } ],
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
        var valin_norma = [];
        <? foreach($valin as $key => $val):?>
        valin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        valin_norma.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$norma['valin']*$user_info['weight']?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_valin"), [ { label: "Норма", data: valin_norma }, { label: "Ваш уровень", data: valin    } ],
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
          var metonin_norma = [];
    <? foreach($metonin as $key => $val):?>
        metonin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
            metonin_norma.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$norma['metonin']*$user_info['weight']?>]);
        // cos2.push(['<?=$key?>', <?=$val?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_metonin"), [ { label: "Норма", data: metonin_norma }, { label: "Ваш уровень", data: metonin    } ],
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
        var gistidin_norma = [];
        <? foreach($gistidin as $key => $val):?>
        gistidin.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        gistidin_norma.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$norma['gistidin']*$user_info['weight']?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_gistidin"), [ { label: "Норма", data: gistidin_norma }, { label: "Ваш уровень", data: gistidin    } ],
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
        var triptofan_norma = [];
        <? foreach($triptofan as $key => $val):?>
        triptofan.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        triptofan_norma.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$norma['triptofan']*$user_info['weight']?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_triptofan"), [ { label: "Норма", data: triptofan_norma }, { label: "Ваш уровень", data: triptofan    } ],
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
         var belki = [];
        var belki_norma = [];
        <? foreach($belki as $key => $val):?>
        belki.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        belki_norma.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$norma['belki']?>]);
        <? endforeach;?>
        // console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts_belki"), [ { label: "Норма", data: belki_norma }, { label: "Ваш уровень", data: belki    } ],
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
                }
            });
        var zelezo = [];
        var zelezo_norma = [];
    <? foreach($zelezo as $key => $val):?>
        zelezo.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        zelezo_norma.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$norma['zelezo']?>]);
        <? endforeach;?>
         console.log(zelezo);
        // Display the Sin and Cos Functions
        $.plot($(".charts_zelezo"), [ { label: "Норма", data: zelezo_norma }, { label: "Ваш уровень", data: zelezo    } ],
            {
                colors: ["#00AADD", "#FF6347"],

                series: {
                    lines: {
                        show: true,
                        lineWidth: 2
                    },
                    points: {show: true},
                    shadowSize: 2
                },

                grid: {
                    hoverable: true,
                    show: true,
                    borderWidth: 0,
                    tickColor: "#d2d2d2",
                    labelMargin: 12
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
                    monthNames:['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь']
                }
            });
        var vitaminc = [];
        var vitaminc_norma = [];
    <? foreach($vitaminc as $key => $val):?>
        vitaminc.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$val?>]);
        vitaminc_norma.push([(new Date('<?=$key?>').getTime()-tzOffset), <?=$norma['vitaminc']?>]);
        <? endforeach;?>
        console.log(vitaminc);
        // Display the Sin and Cos Functions
        $.plot($(".charts_vitaminc"), [ { label: "Норма", data: vitaminc_norma }, { label: "Ваш уровень", data: vitaminc    } ],
            {
                colors: ["#00AADD", "#FF6347"],

                series: {
                    lines: {
                        show: true,
                        lineWidth: 2
                    },
                    points: {show: true},
                    shadowSize: 2
                },

                grid: {
                    hoverable: true,
                    show: true,
                    borderWidth: 0,
                    tickColor: "#d2d2d2",
                    labelMargin: 12
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
                    monthNames:['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь']
                }
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
<div class="g_12">
					<div class="widget_header cwhToggle">
						<h4 class="widget_header_title wwIcon i_16_downT "> Калории</h4>
					</div>
					<div class="widget_contents noPadding" >
						<!-- Charts -->
                        <div class="widget_contents">
                            <div class="charts_cal"></div>
                        </div>
					</div>
</div>
<div class="g_12 separator under_stat"><span></span></div>
<div class="g_12">
					<div class="widget_header cwhToggle">
						<h4 class="widget_header_title wwIcon i_16_downT "> Белки</h4>
					</div>
					<div class="widget_contents noPadding" >
						<!-- Charts -->
                        <div class="widget_contents">
                            <div class="charts_belki"></div>
                        </div>
					</div>
</div>
<div class="g_12 separator under_stat"><span></span></div>
<div class="g_12">
    <div class="widget_header cwhToggle">
        <h4 class="widget_header_title wwIcon i_16_downT "> Железо</h4>
    </div>
    <div class="widget_contents noPadding" >
        <!-- Charts -->
        <div class="widget_contents">
            <div class="charts_zelezo"></div>
        </div>
    </div>
</div>
<div class="g_12 separator under_stat"><span></span></div>
<div class="g_12">
    <div class="widget_header cwhToggle">
        <h4 class="widget_header_title wwIcon i_16_downT "> Витамин С</h4>
    </div>
    <div class="widget_contents noPadding" >
        <!-- Charts -->
        <div class="widget_contents">
            <div class="charts_vitaminc"></div>
        </div>
    </div>
</div>
<div class="g_12 separator under_stat"><span></span></div>
<div class="g_12">
	<div class="widget_header cwhToggle">
		<h4 class="widget_header_title wwIcon i_16_downT "> Аминокислоты</h4>
	</div>
	<div class="widget_contents noPadding" style="height: 0px;">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Треонин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_treonin"></div>
    </div>



<div style="margin-top:10px">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Изолейцин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_izolicin"></div>
    </div>
</div>



    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Лейцин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_leycin"></div>
    </div>




    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Лизин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_lizin"></div>
    </div>




    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Фенил-аланин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_fenil"></div>
    </div>




    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Валин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_valin"></div>
    </div>




    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Метионин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_metonin"></div>
    </div>




    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Гистидин</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_gistidin"></div>
    </div>



    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Триптофан</h4>
    </div>
    <div class="widget_contents">
        <div class="charts_triptofan"></div>
    </div>

					</div>
</div>

<div class="g_12 separator under_stat"><span></span></div>


<!-- Separator -->
<div class="g_12 separator"><span></span></div>