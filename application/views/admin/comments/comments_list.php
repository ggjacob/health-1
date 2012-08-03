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
            	 <form method="post" class="valid_form" action="<?=base_url()?>admin/comments/delete_all_comments" enctype="multipart/form-data">
            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
                    <tr>
                        <th width="8%">ID</th>
                        <th width="15%">Имя юзера</th>
                        <th width="15%">Текст комментария</th>
                        <th width="32%">Публикация</th>
                        <th width="12%">Дата</th>
                        <th width="20%">Действия</th>
                        
                    </tr>	         
                    <?php if ($comments) : ?>
	<?php $row = 0; $n = 1; ?>
	<?php foreach ($comments as $comment) : ?>
	<tr <?php if ($row % 2 == 0) echo 'class=""'; ?>>
	    <td class="td-1"><?=$n++?></td>
        <td class="td-3"><?=$comment['user_name']?></td>
	    <td class="td-3"><?=$comment['comment']?></td>
		<td class="td-2"><?=$comment['title_ru']?></td>
	    <td class="td-2"><?=$comment['date']?></td>
	    <td class="td-3">
            <span class="data_actions iconsweet">
                <a class="tip_north" original-title="Edit" href="<?=base_url()?>admin/comments/edit/<?=$comment['id']?>">C</a>
                <a class="tip_north" original-title="Delete" href="#" onclick="if (confirm('Вы действительно хотите удалить этот комментарий?')) {window.location.href='<?=base_url()?>admin/comments/delete/<?=$comment['id']?>/<?=$comment['post_id']?>';}">X</a>
                <input name="comment<?=$comment['id']?>" value="<?=$comment['id']?>" type="checkbox">
			</span>
	    </td>
	</tr>
	<?php $row = 1 - $row; ?>
	<?php endforeach; ?>
	<?php endif; ?>	     
    			</table>
     <input type="submit" name="submit" class="button_send"  value="Удалить комментарии" id="del_all"/>
     </form>  
         </div>
    </div>

