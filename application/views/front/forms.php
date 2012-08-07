<div class="g_6 contents_header">
    <h3 class="i_16_forms tab_label">Forms</h3>
    <div><span class="label">Some Fields and Inputs</span></div>
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
<div class="g_6">
    <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_spinner">Spinner Buttons</h4>
    </div>
    <div class="widget_contents noPadding">
        <div class="line_grid">
            <div class="g_6"><span class="label">Simple Spinner</span></div>
            <div class="g_6">
                <input type="text" class="simple_field spinner1" />
            </div>
        </div>
        <div class="line_grid">
            <div class="g_6"><span class="label">Spinner Range</span></div>
            <div class="g_6">
                <input type="text" class="simple_field spinner2" />
                <div class="field_notice">Min: 0 | Max: 30</div>
            </div>
        </div>
        <div class="line_grid">
            <div class="g_6"><span class="label">Spinner Prefix</span></div>
            <div class="g_6">
                <input type="text" class="simple_field spinner3" />
                <div class="field_notice">Here We have the $ as well :)</div>
            </div>
        </div>
        <div class="line_grid">
            <div class="g_6"><span class="label">Spinner Disabled</span></div>
            <div class="g_6">
                <input type="text" class="simple_field spinner4" />
                <div class="field_notice">It's Off!</div>
            </div>
        </div>
        <div class="line_grid">
            <div class="g_6"><span class="label">Spinner Step 5</span></div>
            <div class="g_6">
                <input type="text" class="simple_field spinner5" />
                <div class="field_notice">The step is 5</div>
            </div>
        </div>
    </div>
</div>