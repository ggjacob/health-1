<script type="text/javascript" src="<?=base_url()?>public/js/datetime_picker/datetimepicker_css.js"></script>
<div id="activity_stats">
  	<h3>Публикации - <?=$action_title?></h3>
</div>
<div class="one_wrap">
    <div class="widget">
            <div class="widget_title"><span class="iconsweet">f</span><h5><?=$action_title?></h5></div>
    </div>
    <div class="widget_body">
        <form method="post" action="<?=base_url()?>admin/articles/submit" enctype="multipart/form-data" >
            <ul class="form_fields_container">
                <li>
	                <label class="label notice" for="pub_date">Дата публикации</label>

                        <div class="form_input">
		                    <input type="text" value="<?=$page['pub_date']?>" class="text medium" id="pub_date" name="pub_date" />
		                </div>
                        <a href="javascript:NewCssCal('pub_date','mmddyyyy','dropdown',true)" class="calendar_img">
			                <img src="<?=base_url()?>public/js/datetime_picker/images/cal.gif" width="16" height="16" alt="Pick a date" />
		                </a>        
                </li>
                <li>
                    <label class="label notice" for="title_ru">Название </label>
	                <div class="form_input"><input type="text" value="<?=htmlspecialchars($page['title_ru'])?>" class="text medium" id="title_ru" name="title_ru" /></div>
                </li>

                <li>
                    <label class="label notice" for="anons_ru">Анонс </label>
	                <div class="form_input"><textarea  class="xxlarge"  tabindex="1" cols="60" rows="6" name="anons_ru"><?=$page['anons_ru']?></textarea></div>    
                </li>
                <li>
                    <label class="label notice">Видео </label>
	                <div class="form_input"><input type="text" value="<?=$page['video']?>" class="text medium"  name="video" /></div>
                    <div style="margin-right:25px; float:right; width: 75%;">(URL - https://www.youtube.com/watch?v=QSJudzPaVTY&feature=related)</div>

                     <? if($page['video'] != ''):?>
                        <div style="margin-top:100px;">
                        <object class="video">
								<param name="movie" value="<?=$page['video']?>">
								<param name="allowFullScreen" value="true">
								<param name="allowscriptaccess" value="always">
								<embed src="<?=$page['video']?>" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" height="200" width="200">
					    </object>
					    <span class="data_actions iconsweet del_top">
							<a class="tip_north" onclick="if (confirm('Вы действительно хотите удалить это видео?')) {window.location.href='http://elfresco/admin/articles/delete_video/<?=$page[id]?>';}" href="#" original-title="Delete">X</a>
						</span>
                        </div>
                    <? endif;?>

                </li>
                <li>
                    <label class="label notice">Фото</label>
	                <div id="file_uploader">
                	    <input id="file_upload" type="file" name="file_upload" />
                    </div>
                    <? if($page['image'] != ''):?>
                        <img src="<?=base_url()?>uploads/<?=$page['image']?>" alt="" style="width:250px; margin:0 auto;"/>
                        <span class="data_actions iconsweet" >
							<a class="tip_north" onclick="if (confirm('Вы действительно хотите удалить это изображение?')) {window.location.href='http://elfresco/admin/articles/delete_img/<?=$page[id]?>/<?=$page[image]?>';}" href="#" original-title="Delete">X</a>
						</span>
                    <? endif;?>
                </li>
                <li>
                    <label class="label notice">Содержание</label>
                    <textarea  id="wyswig" name="text_ru"><?=$page['text_ru']?></textarea>
                   
                </li>
                <li>
                    <input type="hidden" name="id" value="<?=$page['id']?>" />
                    <input type="submit"  class="button_small"  name="submit" value="Сохранить" />                    
                </li>
	        </ul>
</form>