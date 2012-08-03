
<div style="margin:10px 0;">
<a class="alert-message info" href="<?=base_url()?>admin/content/add">Добавить статью</a>
</div>


<div class="container" >	


<table id="tb-1" class="bordered-table">
<thead>
	<tr class="">
	    <th class="th-1">#</th>
	    <th class="th-3">Название</th>	    	    
	    <th class="th-2">URL</th>
	    <th class="th-2">Статус</th>	    
	    <th class="th-2">Действия</th>
	</tr>
</thead>
<tbody>
<?php if ($contents) : ?>
	<?php $row = 0; $n = 1; ?>
	<?php foreach ($contents as $content) : ?>
	<tr <?php if ($row % 2 == 0) echo 'class=""'; ?>>
	    <td class="td-1"><?=$n++?></td>
	    <td class="td-3"><?=$content['title_ru']?></td>
		<td class="td-2">content/<?=$content['id']?></td>
	    <td class="td-2">
	    	<a href="<?=base_url()?>admin/contents/change_status/<?=$content['id']?>">
			<?php if ($content['status'] == '1') :?>
			<img alt="Активно" class="action_img" src="<?=base_url()?>public/img/admin/preview.png" />
			<?php else : ?>
			<img alt="Неактивно" class="action_img" src="<?=base_url()?>public/img/admin/stop.png" />
			<?php endif; ?>
			</a>
		</td>	    
	    <td class="td-3">			
			<a href="<?=base_url()?>admin/content/edit/<?=$content['id']?>"><input class="btn primary small" type="submit" value="Редактировать" name="submit"/></a>
			<input class="btn small" type="submit"  onclick="if (confirm('Вы действительно хотите удалить эту статью?')) {window.location.href='<?=base_url()?>admin/content/delete/<?=$content['id']?>';}" value="Удалить" name="submit" />
	    </td>
	</tr>
	<?php $row = 1 - $row; ?>
	<?php endforeach; ?>	
<?php endif; ?>	                      
</tbody>
</table>
    