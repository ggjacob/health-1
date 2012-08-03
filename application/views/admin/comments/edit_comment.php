<script type="text/javascript" src="<?=base_url()?>public/js/datetime_picker/datetimepicker_css.js"></script>
<div id="activity_stats">
  	<h3>Публикации - <?=$action_title?></h3>
</div>

<div class="one_wrap">
    <div class="widget">
            <div class="widget_title"><span class="iconsweet">f</span><h5><?=$action_title?></h5></div>
    </div>
    <div class="widget_body">
        <form method="post" action="<?=base_url()?>admin/comments/submit" enctype="multipart/form-data" >
            <ul class="form_fields_container">


                <li>
                    <label class="label notice" >Текст комментария </label>
	                <div class="form_input"><textarea  class="xxlarge"  tabindex="1" cols="60" rows="6" name="comment"><?=$comment['comment']?></textarea></div>    
                </li>

                <li>
                    <input type="hidden" name="id" value="<?=$comment['id']?>" />
                    <input type="submit"  class="button_small"  name="submit" value="Сохранить" />                    
                </li>
	        </ul>
</form>