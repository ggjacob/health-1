<script type="text/javascript">
    $(function () {
    /* Tables ============================================ */
    // Set the DataTables
    $(".datatable").dataTable({
        "sDom": "<'dtTop'<'dtShowPer'l><'dtFilter'f>><'dtTables't><'dtBottom'<'dtInfo'i><'dtPagination'p>>",
        "oLanguage": {
            "sLengthMenu": "Show entries _MENU_",
        },
        "sPaginationType": "full_numbers",
        "fnInitComplete": function(){
            $(".dtShowPer select").uniform();
            $(".dtFilter input").addClass("simple_field").css({
                "width": "auto",
                "margin-left": "15px",
            });
        }
    });

    // Table Resize-able
    $(".resizeable_tables").colResizable({
        liveDrag: true,
        minWidth: 40,
    });

    // Table with Tabs
    $( "#table_wTabs" ).tabs();

    // Check All Checkbox
    $(".tMainC").click(function(){
        var checked = $(this).prop("checked");
        var parent = $(this).closest(".twCheckbox");

        parent.find(".checker").each(function(){
            if (checked){
                $(this).find("span").addClass("checked");
                $(this).find("input").prop("checked", true);
            }else{
                $(this).find("span").removeClass("checked");
                $(this).find("input").prop("checked", false);
            }
        })
    });
    });
</script>
<div class="g_12 separator"><span></span></div>
<div class="g_12">
<div class="widget_header wwOptions">
    <h4 class="widget_header_title wwIcon i_16_data">Аминокислоты в продуктах</h4>
</div>
<div class="widget_contents noPadding">
<table class="datatable tables">
<thead>
<tr>
    <th>Название</th>
    <th>Треонин</th>
    <th>Изолейцин</th>
    <th>Лейцин</th>
    <th>Лизин</th>
    <th>Фенилалан</th>
    <th>Валин</th>
    <th>Метионин</th>
    <th>Гистидин</th>
</tr>
</thead>
<tbody>
<? foreach($products as $product):?>
<tr>
    <td><?=$product['name']?></td>
    <td><?=$product['treonin']?></td>
    <td><?=$product['izolicin']?></td>
    <td><?=$product['leycin']?></td>
    <td><?=$product['lizin']?></td>
    <td><?=$product['fenil']?></td>
    <td><?=$product['valin']?></td>
    <td><?=$product['metonin']?></td>
    <td><?=$product['gistidin']?></td>
</tr>
<? endforeach; ?>

</tbody>
</table>
</div>
</div>