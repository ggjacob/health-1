<script type="text/javascript" src="<?=base_url()?>public/js/datetime_picker/datetimepicker_css.js"></script>
<div id="activity_stats">
  	<h3>События - <?=$action_title?></h3>
</div>
<div class="one_wrap">
    <div class="widget">
            <div class="widget_title"><span class="iconsweet">f</span><h5><?=$action_title?></h5></div>
    </div>
    <div class="widget_body">
        <?if(!empty($msg['text'])):?><div class="msgbar msg_Success hide_onC"><?=$msg['text']?></div><?endif;?>

        <form method="post" action="<?=base_url()?>admin/events/submit" enctype="multipart/form-data" >
            <ul class="form_fields_container">
                <li>
                    <label class="label notice" >Место проведения</label>
                    <div class="form_input">
                        <select name="owner_id">
                            <? foreach($owners as $owner):?>
                            <option value="<?=$owner['id']?>" <?if($owner['id'] == $event['id_owner'])echo 'selected'?>><?=$owner['name']?></option>
                            <? endforeach;?>
                        </select>
                    </div>
                </li>
                <li>
	                <label class="label notice" >Дата события</label>

                        <div class="form_input">
		                    <input type="text" value="<?=$event['date']?>" class="text medium" id="date" name="date" />
		                </div>
                        <a href="javascript:NewCssCal('date','mmddyyyy','dropdown',true)" class="calendar_img">
			                <img src="<?=base_url()?>public/js/datetime_picker/images/cal.gif" width="16" height="16" alt="Pick a date" />
		                </a>        
                </li>
                <li>
                    <label class="label notice" >Время </label>
                    <div class="form_input"><input type="text" value="<?=$event['time']?>" class="text medium"  name="time" /></div>
                </li>
                <li>
                    <label class="label notice" >Периодичность</label>
                    <div class="form_input">
                        <select name="every_day">
                            <option value="1" <? if($event['every_day'] == '1')echo 'selected'?>>Ежедневно</option>
                            <option value="0" <? if($event['every_day'] == '0')echo 'selected'?>>Однажді</option>
                        </select>
                    </div>
                </li>
                <li>
                    <label class="label notice" for="title_ru">Название </label>
	                <div class="form_input"><input type="text" value="<?=htmlspecialchars($event['title'])?>" class="text medium" id="title" name="title" /></div>
                </li>
                <li>
                    <label class="label notice" for="title_ru">Ссылка на источник </label>
                    <div class="form_input"><input type="text" value="<?=htmlspecialchars($event['link'])?>" class="text medium" id="title_ru" name="link" /></div>
                </li>
                <li>
                    <label class="label notice" for="anons_ru">Категория </label>
                    <div class="form_input">
                    <select name="category">
                        <option value="1" <? if($event['category'] == '1')echo 'selected'?>>Кино</option>
                        <option value="2" <? if($event['category'] == '2')echo 'selected'?>>Концетр</option>
                    </select>
                    </div>
                </li>

                <li>
                    <label class="label notice">Картинка</label>
                    <br/>
	                <div id="file_uploader" class="form_input">
                	    <input id="file_upload" type="file" name="file_upload" />
                    </div>
                    <? if($event['main_img'] != ''):?>
                        <img src="<?=$event['main_img']?>" alt="" style="width:250px; margin:0 auto;"/>

                    <? endif;?>
                </li>
                <li>
                    <label class="label notice">Содержание</label>
                    <textarea  id="wyswig" name="description"><?=$event['description']?></textarea>
                   
                </li>
                <li>
                    <input type="hidden" name="id" value="<?=$event['id']?>" />
                    <input type="submit"  class="button_small"  name="submit" value="Сохранить" />                    
                </li>
	        </ul>
</form>