    <div id="activity_stats">
        	<h3>Публикации - Список публикаций</h3>
    </div>
    <!--Quick Actions-->
    <div id="quick_actions">
        	<a class="button_big" href="<?=base_url()?>admin/articles/add"><span class="iconsweet">+</span>Добавить публикацию</a>
    </div>
    <div class="one_wrap">
        <div class="widget">
            <div class="widget_title"><span class="iconsweet">f</span><h5>Список публикаций</h5></div>
        </div>
         <div class="widget_body">
            <!--Activity Table-->
            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
                    <tr>
                        <th width="8%">ID</th>
                        <th width="15%">Название</th>
                        <th width="32%">URL</th>
                        <th width="12%">Статус</th>
                        <th width="20%">Действия</th>
                        
                    </tr>
                    <?php if ($articles) : ?>
	<?php $row = 0; $n = 1; ?>
	<?php foreach ($articles as $article) : ?>
	<tr <?php if ($row % 2 == 0) echo 'class=""'; ?>>
	    <td class="td-1"><?=$n++?></td>
	    <td class="td-3"><?=$article['title_ru']?></td>
		<td class="td-2">article/<?=$article['id']?></td>
	    <td class="td-2">
	    	<a href="<?=base_url()?>admin/articles/change_status/<?=$article['id']?>">
			<?php if ($article['status'] == '1') :?>
			<img alt="Активно" class="action_img" src="<?=base_url()?>public/img/admin/preview.png" />
			<?php else : ?>
			<img alt="Неактивно" class="action_img" src="<?=base_url()?>public/img/admin/stop.png" />
			<?php endif; ?>
			</a>
		</td>
	    <td class="td-3">
            <span class="data_actions iconsweet">
                <a class="tip_north" original-title="Edit" href="<?=base_url()?>admin/articles/edit/<?=$article['id']?>">C</a>
                <a class="tip_north" original-title="Delete" href="#" onclick="if (confirm('Вы действительно хотите удалить эту статью?')) {window.location.href='<?=base_url()?>admin/articles/delete/<?=$article['id']?>';}">X</a>
			</span>
	    </td>
	</tr>
	<?php $row = 1 - $row; ?>
	<?php endforeach; ?>
<?php endif; ?>	      
                </table>
         </div>
    </div>

