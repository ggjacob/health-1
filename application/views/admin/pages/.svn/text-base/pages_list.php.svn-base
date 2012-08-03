
<div style="margin:10px 0;">
<a class="alert-message info" href="<?=base_url()?>admin/pages/add">Добавить страницу</a>
</div>
<?php if ($msg) : ?>
<div class="<?=$msg['type']?>">	
	<?=$msg['text']?>
</div>
<?php endif; ?>

<table id="tb-1" class="bordered-table">
<thead>
	<tr class="row">
	    <th class="th-1">#</th>
	    <th class="th-3">Название</th>
		<th class="th-3">URL</th>	    	    
	    <th class="th-2">Статус</th>	    
	    <th class="th-2">Действия</th>
	</tr>
</thead>
<tbody>
<?php if ($pages) : ?>
	<?php $row = 0; $n = 1; ?>
	<?php foreach ($pages as $page) : ?>
	<tr class="row" <?php //if ($row == 1) echo 'class="row"'; ?>>
	    <td class="td-1"><?=$n++?></td>
	    <td class="td-3"><?=$page['title_ru']?></td>
		<td class="td-3">page/<?=$page['name']?></td>	    
	    <td class="td-2">
	    	<a href="<?=base_url()?>admin/pages/change_status/<?=$page['id']?>">
			<?php if ($page['status'] == '1') :?>
			<img alt="Активно" class="action_img" src="<?=base_url()?>public/img/admin/preview.png" />
			<?php else : ?>
			<img alt="Неактивно" class="action_img" src="<?=base_url()?>public/img/admin/stop.png" />
			<?php endif; ?>
			</a>
		</td>	    
	    <td class="td-2">			
			<a href="<?=base_url()?>admin/pages/edit/<?=$page['id']?>"><img alt="Редактировать" class="action_img" src="<?=base_url()?>public/img/admin/sticky.png" /></a>			
			<img alt="Удалить" class="action_img" src="<?=base_url()?>public/img/admin/delete.png" onclick="if (confirm('Вы действительно хотите удалить эту страницу?')) {window.location.href='<?=base_url()?>admin/pages/delete/<?=$page['id']?>';}" />						  
	    </td>
	</tr>
	<?php $row = 1 - $row; ?>
	<?php endforeach; ?>
<?php endif; ?>			                      
</tbody>
</table>