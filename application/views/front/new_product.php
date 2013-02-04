<div class="g_12 contents_header">
    <h3 class="i_16_forms tab_label">Внесение нового продукта в базу</h3>
    <div><span class="label">Вместимость белков, аминокислот, калорий в продуктах</span></div>
</div>
<div class="g_12" id="table_wTabs">
<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_tabs">Внесение нового продукта</h4>
						<ul class="w_Tabs">
							<li><a href="#table_wTabs-1" title="Tab 1">Список всех продуктов</a></li>
							<li><a href="#table_wTabs-2" title="Tab 2">Внесение продукта в базу</a></li>
						</ul>
					</div>
					<div class="widget_contents noPadding">
                        <div class="g_12" id="table_wTabs-1">
                            
    <table class="tables">
        <thead>
            <th>Название</th>
            <th>Действие</th>
        </thead>
        <tbody>
        <? foreach($products as $product):?>
        <tr>
            <td><?=$product['name']?></td>
            <td>
                <a href="<?=base_url()?>main/new_product/<?=$product['id']?>">
                    <div class="simple_buttons">
                        <div>Редактировать</div>
                    </div>
                    </a>
                <a href="<?=base_url()?>main/delete_product/<?=$product['id']?>">
                        <div class="simple_buttons">
                            <div>Удалить</div>
                        </div>
                </a>
                <a href="<?=base_url()?>main/duplicate_product/<?=$product['id']?>">
                    <div class="simple_buttons">
                        <div>Дублировать</div>
                    </div>
                </a>
            </td>

        </tr>
            <? endforeach; ?>
        </tbody>
    </table>

                        </div>
                        <div class="g_12" id="table_wTabs-2">
                             <div class="widget_header">
        <h4 class="widget_header_title wwIcon i_16_checkbox">Новый продукт</h4>
    </div>
    <form action="/main/new_product" method="POST">
        <div class="widget_contents noPadding">

            <div class="line_grid">
                <div class="g_3"><span class="label">Название</span>
                </div>
                <div class="g_9">
                    <input type="text" class="simple_field" name="name" value="<?if(isset($edit_product))echo $edit_product['name'];?>" />
                </div>
            </div>
            <div class="line_grid">
                <div class="g_3"><span class="label">Калории</span>
                </div>
                <div class="g_9">
                    <input type="text" class="simple_field" name="calories" value="<?if(isset($edit_product))echo $edit_product['calories'];?>" />
                </div>
            </div>
            <div class="line_grid">
                <div class="g_3"><span class="label">Белки</span>
                </div>
                <div class="g_9">
                    <input type="text" class="simple_field" name="belki" value="<?if(isset($edit_product))echo $edit_product['belki'];?>" />
                </div>
            </div>
            <div class="line_grid">
                <div class="g_3"><span class="label">Треонин</span>
                </div>
                <div class="g_9">
                    <input type="text" class="simple_field" name="treonin" value="<?if(isset($edit_product))echo $edit_product['treonin'];?>" />
                </div>
            </div>
            <div class="line_grid">
                <div class="g_3"><span class="label">Изолейцин</span>
                </div>
                <div class="g_9">
                    <input type="text" class="simple_field" name="izolicin" value="<?if(isset($edit_product))echo $edit_product['izolicin'];?>" />
                </div>
            </div>
            <div class="line_grid">
                <div class="g_3"><span class="label">Лейцин</span>
                </div>
                <div class="g_9">
                    <input type="text" class="simple_field" name="leycin" value="<?if(isset($edit_product))echo $edit_product['leycin'];?>" />
                </div>
            </div>
            <div class="line_grid">
                <div class="g_3"><span class="label">Лизин</span>
                </div>
                <div class="g_9">
                    <input type="text" class="simple_field" name="lizin" value="<?if(isset($edit_product))echo $edit_product['lizin'];?>" />
                </div>
            </div><div class="line_grid">
            <div class="g_3"><span class="label">Фенил-аланин</span>
            </div>
            <div class="g_9">
                <input type="text" class="simple_field" name="fenil" value="<?if(isset($edit_product))echo $edit_product['fenil'];?>" />
            </div>
        </div>
            <div class="line_grid">
                <div class="g_3"><span class="label">Валин</span>
                </div>
                <div class="g_9">
                    <input type="text" class="simple_field" name="valin"  value="<?if(isset($edit_product))echo $edit_product['valin'];?>" />
                </div>
            </div>
            <div class="line_grid">
                <div class="g_3"><span class="label">Метионин</span>
                </div>
                <div class="g_9">
                    <input type="text" class="simple_field" name="metonin" value="<?if(isset($edit_product))echo $edit_product['metonin'];?>" />
                </div>
            </div>
            <div class="line_grid">
                <div class="g_3"><span class="label">Гистидин</span>
                </div>
                <div class="g_9">
                    <input type="text" class="simple_field" name="gistidin" value="<?if(isset($edit_product))echo $edit_product['gistidin'];?>" />
                </div>
            </div>
            <div class="line_grid">
                <div class="g_3"><span class="label">Триптофан</span>
                </div>
                <div class="g_9">
                    <input type="text" class="simple_field" name="triptofan" value="<?if(isset($edit_product))echo $edit_product['triptofan'];?>" />
                </div>
            </div>
            <input type="hidden" value="<?if(isset($edit_product))echo $edit_product['id'];?>"  name="id">


            <input type="submit" class="simple_buttons bttn_margin" value="Сохранить">
        </div>
    </form>
                        </div>

                    </div>
<div class="g_12">



    <div class="g_12 separator"><span></span></div>

</div>
</div>
