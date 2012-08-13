<div class="g_6 contents_header">
    <h3 class="i_16_forms tab_label">Сегодня</h3>
    <div><span class="label">Внесите какие продукты в сьели</span></div>
</div>
<div class="g_12 separator"><span></span></div>
<div class="g_6">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_checkbox">Что вы сьели сегодня</h4>
    </div>
    <form action="/main/set_product" method="POST">
    <div class="widget_contents noPadding">

        <div class="line_grid">
            <div class="g_3"><span class="label">Продукт</span>
            </div>
            <div class="g_9">
                <select class="simple_form" name="product">

                    <option  value="Выберите продукт" selected="selected" />Выберите продукт
                    <? foreach($products as $product):?>
                        <option value="<?=$product['id']?>" /><?=$product['name']?>
                    <? endforeach; ?>
                </select>
            </div>
        </div>
        <div class="line_grid">
            <div class="g_3"><span class="label">Вес</span>
            </div>
            <div class="g_9">
                <input type="text" class="simple_field" name="weight" />
            </div>
        </div>
        <div class="line_grid">
            <div class="g_3"><span class="label">Дата</span>
            </div>
            <div class="g_9">
                <input type="text" class="simple_field pick_date" name="date" />
            </div>
        </div>
        <input type="submit" class="simple_buttons" value="Сохранить">
    </div>
    </form>
</div>
