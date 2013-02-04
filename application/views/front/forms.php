  <div class="g_6 contents_header">
                            <h3 class="i_16_forms tab_label">Сегодня</h3>
                            <div><span class="label">Внесите какие продукты в сьели</span></div>
                        </div>
                        <div class="g_12 separator"><span></span></div>
<div class="g_12" id="table_wTabs">
					<div class="widget_header wwOptions">
						<h4 class="widget_header_title wwIcon i_16_tabs">Ваш рацион</h4>
						<ul class="w_Tabs">
							<li><a href="#table_wTabs-1" title="Tab 1">Внесение продукта</a></li>
							<li><a href="#table_wTabs-2" title="Tab 2">Продукты по днях</a></li>
						</ul>
					</div>
					<div class="widget_contents noPadding">


                        <div class="g_12" id="table_wTabs-1" >
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
                                <input type="submit" class="simple_buttons bttn_margin" value="Сохранить">
                            </div>
                            </form>
                        </div>
                        <div class="g_12" id="table_wTabs-2" >
                            <div class="widget_header">
                                <h4 class="widget_header_title wwIcon i_16_checkbox">Ваш рацион</h4>
                            </div>
                             <div class="widget_contents noPadding">
                                 <table class="tables">
                                     <thead>
                                     <tr>
                                         <th>№</th>
                                         <th>Название</th>
                                         <th>Вес</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                <? foreach($user_products as $date=>$prod):?>
                                          
                                    <tr><td colspan="3"><?=$date?></td></tr>
                                        <?$i = 1;?>
                                    <? foreach($prod as $prod_item):?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$prod_item['product']?></td>
                                            <td><?=$prod_item['weight']?></td>
                                            <?$i++;?>
                                        </tr>
                                    <? endforeach;?>


                                <? endforeach;?>
                                     </tbody>
                                </table>
                             </div>
                        </div>


					</div>
				</div>
