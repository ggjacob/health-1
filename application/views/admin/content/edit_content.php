<h1><?=$action_title?></h1>
	
<script type="text/javascript" src="<?=base_url()?>public/js/datetime_picker/datetimepicker_css.js"></script>

<form method="post" action="<?=base_url()?>admin/content/submit">	
	<label class="label notice" for="pub_date">Дата публикации</label>
	<div>
		<input type="text" value="<?=$page['pub_date']?>" class="text medium" id="pub_date" name="pub_date" />
		<a href="javascript:NewCssCal('pub_date','mmddyyyy','dropdown',true)" class="calendar_img">
			<img src="<?=base_url()?>public/js/datetime_picker/images/cal.gif" width="16" height="16" alt="Pick a date" />
		</a>
	</div>
	<br />
	
	<label class="label notice" for="title_ru">Название (рус)</label>
	<div><input type="text" value="<?=htmlspecialchars($page['title_ru'])?>" class="text medium" id="title_ru" name="title_ru" /></div>
	<br />

	<label class="label notice" for="title_ua">Название (укр)</label>
	<div><input type="text" value="<?=htmlspecialchars($page['title_ua'])?>" class="text medium" id="title_ua" name="title_ua" /></div>
	<br />
	
	<label class="label notice" for="anons_ru">Анонс (рус)</label>
	<div><textarea  class="xxlarge"  tabindex="1" cols="60" rows="6" name="anons_ru"><?=$page['anons_ru']?></textarea></div>
	<br />		
	
	<label class="label notice" for="anons_ua">Анонс (укр)</label>
	<div><textarea  class="xxlarge"  tabindex="1" cols="60" rows="6" name="anons_ua"><?=$page['anons_ua']?></textarea></div>
	<br />

	<?php include("spaw/spaw.inc.php");
	
	?>
	

	<label class="label notice">Содержание (рус)</label>
	<?php		
	$text_ru = new SpawEditor('text_ru', $page['text_ru']);
	$text_ru->show();				
	?>
	<br />
	
	<label class="label notice">Содержание (укр)</label>
	<?php		
	$text_ua = new SpawEditor('text_ua', $page['text_ua']);
	$text_ua->show();
	?>
	
	
	
	
	<input type="hidden" name="id" value="<?=$page['id']?>" />	
	<br />
	<input type="submit"  class="btn large primary"  name="submit" value="Сохранить" />
	<br /><br />
</form>