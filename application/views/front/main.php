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
        //for (var i = 0; i <= 20; i += 0.5){
         //   sin2.push([i, Math.sin(i)]);
          //  cos2.push([i, Math.cos(i)]);
       // }
        console.log(data);
        // Display the Sin and Cos Functions
        $.plot($(".charts2"), [ { label: "Cos", data: data }, { label: "Sin", data: data } ],
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
        $(".charts2").bind("plothover", function (event, pos, item) {
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

    });
</script>
<div class="g_6 contents_header">
    <h3 class="i_16_dashboard tab_label">Dashboard</h3>
    <div><span class="label">General Informations and Resume</span></div>
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
        <div class="charts2"></div>
    </div>
</div>

<div class="g_12 separator under_stat"><span></span></div>

<!-- Charts -->
<!--div class="g_12">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_charts">Charts</h4>
    </div>
    <div class="widget_contents">
        <div class="charts2"></div>
    </div>
</div-->
<!-- Separator -->
<div class="g_12 separator"><span></span></div>
<!-- Chats -->
