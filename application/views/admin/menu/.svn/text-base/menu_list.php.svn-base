<h1><?=$action_title?></h1>
<div style="margin:10px 0;">
<a class="alert-message info" href="<?=base_url()?>admin/menu/add">Добавить меню</a>
</div>
<?php if ($msg) : ?>
<div class="<?=$msg['type']?>">	
	<?=$msg['text']?>
</div>
<?php endif; ?>

<div class="container">	

<table id="tb-1" class="bordered-table">
<thead>
	<tr class="">
	    <th >#</th>
	    <th >Название</th>	    	    
	    <th >Статус</th>	    
	    <th >Действия</th>
	    <th >Сортировка</th>
	</tr>
</thead>
<tbody>
<?php if ($menu_items) : ?>
	<?php $row = 1; ?>
	<?php foreach ($menu_items[0] as $key => $item) : ?>
	<tr>
	    <td class="td-1"><?=$row?></td>
	    <td class="td-3"><?=$item['title_ru']?></td>	    
	    <td class="td-2">
	    	<a href="<?=base_url()?>admin/menu/change_status/<?=$item['id']?>">
			<?php if ($item['status'] == '1') :?>
			<img alt="Активно" class="action_img" src="<?=base_url()?>public/img/admin/preview.png" />
			<?php else : ?>
			<img alt="Неактивно" class="action_img" src="<?=base_url()?>public/img/admin/stop.png" />
			<?php endif; ?>
			</a>
		</td>	      
	    <td class="td-3">			
			<a href="<?=base_url()?>admin/menu/edit/<?=$item['id']?>"><input type="submit" class="btn primary small" name="submit" value="Редактировать" /></a>			
			<input type="submit" class="btn small" name="submit" value="Удалить"  onclick="if (confirm('Вы действительно хотите удалить этот елемент меню?')) {window.location.href='<?=base_url()?>admin/menu/delete/<?=$item['id']?>';}" />  
	    </td>
	     <td class="td-2">	    
		    <?php if ($row > 1) : ?>
		    <a href="<?=base_url()?>admin/menu/move_up/<?=$item['id']?>"><img alt="Вверх" class="action_img" src="<?=base_url()?>public/img/admin/up.png" /></a>
		    <?php endif; ?>
		    <?php if ($row < count($menu_items)) : ?>
		    <a href="<?=base_url()?>admin/menu/move_down/<?=$item['id']?>"><img alt="Вверх" class="action_img" src="<?=base_url()?>public/img/admin/down.png" /></a>
		    <?php endif; ?>
	    </td>
        <?$row++?>
	</tr>
        <!-- Pervaja vlogenost-->
    <? if(isset($menu_items[$key])){?>
       
            <?php foreach ($menu_items[$key] as $key2 => $item) : ?>
	            <tr>
	                <td class="td-1"><?=$row?></td>
	                <td class="td-3"> ------ <?=$item['title_ru']?></td>
	                <td class="td-2">
	    	            <a href="<?=base_url()?>admin/menu/change_status/<?=$item['id']?>">
			            <?php if ($item['status'] == '1') :?>
			                 <img alt="Активно" class="action_img" src="<?=base_url()?>public/img/admin/preview.png" />
			            <?php else : ?>
			                <img alt="Неактивно" class="action_img" src="<?=base_url()?>public/img/admin/stop.png" />
			            <?php endif; ?>
			            </a>
		            </td>
	                <td class="td-3">
			            <a href="<?=base_url()?>admin/menu/edit/<?=$item['id']?>"><input type="submit" class="btn primary small" name="submit" value="Редактировать" /></a>
			            <input type="submit" class="btn small" name="submit" value="Удалить"  onclick="if (confirm('Вы действительно хотите удалить этот елемент меню?')) {window.location.href='<?=base_url()?>admin/menu/delete/<?=$item['id']?>';}" />
	                </td>
	                <td class="td-2">
		                <?php if ($row > 1) : ?>
		                    <a href="<?=base_url()?>admin/menu/move_up/<?=$item['id']?>"><img alt="Вверх" class="action_img" src="<?=base_url()?>public/img/admin/up.png" /></a>
		                <?php endif; ?>
		                <?php if ($row < count($menu_items)) : ?>
		                    <a href="<?=base_url()?>admin/menu/move_down/<?=$item['id']?>"><img alt="Вверх" class="action_img" src="<?=base_url()?>public/img/admin/down.png" /></a>
		                <?php endif; ?>
	                </td>
                    <?$row++?>
	            </tr>
                <!-- Vtoraja vlogenost-->
                <? if(isset($menu_items[$key2])):?>
                    <?php foreach ($menu_items[$key2] as $key3 => $item) : ?>
	                    <tr>
	                        <td class="td-1"><?=$row?></td>
	                        <td class="td-3"> ------------ <?=$item['title_ru']?></td>
	                        <td class="td-2">
	    	                    <a href="<?=base_url()?>admin/menu/change_status/<?=$item['id']?>">
			                    <?php if ($item['status'] == '1') :?>
			                        <img alt="Активно" class="action_img" src="<?=base_url()?>public/img/admin/preview.png" />
			                    <?php else : ?>
			                        <img alt="Неактивно" class="action_img" src="<?=base_url()?>public/img/admin/stop.png" />
			                    <?php endif; ?>
			                    </a>
		                    </td>
	                        <td class="td-3">
			                    <a href="<?=base_url()?>admin/menu/edit/<?=$item['id']?>"><input type="submit" class="btn primary small" name="submit" value="Редактировать" /></a>
			                    <input type="submit" class="btn small" name="submit" value="Удалить"  onclick="if (confirm('Вы действительно хотите удалить этот елемент меню?')) {window.location.href='<?=base_url()?>admin/menu/delete/<?=$item['id']?>';}" />
	                        </td>
	                        <td class="td-2">
		                        <?php if ($row > 1) : ?>
		                            <a href="<?=base_url()?>admin/menu/move_up/<?=$item['id']?>"><img alt="Вверх" class="action_img" src="<?=base_url()?>public/img/admin/up.png" /></a>
		                        <?php endif; ?>
		                        <?php if ($row < count($menu_items)) : ?>
		                            <a href="<?=base_url()?>admin/menu/move_down/<?=$item['id']?>"><img alt="Вверх" class="action_img" src="<?=base_url()?>public/img/admin/down.png" /></a>
		                        <?php endif; ?>
	                        </td>
                            <?$row++?>
	                     </tr>
	                <?php endforeach; ?>
                <? endif;?>
        
	        <?php endforeach; ?>
    <? }?>

	<?php endforeach; ?>	
<?php endif; ?>	                      
</tbody>
</table>