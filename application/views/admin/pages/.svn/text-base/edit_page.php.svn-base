<h1><?=$action_title?></h1>
<script type="text/javascript ">
    $(document).ready(function() {
        $("#mysubmit").click(function(){
            $('form').attr('action', '<?=base_url()?>admin/pages/submit_test');
            $("#submit").trigger("click");
        });
        $("#mysubmit_publish").click(function(){
            $('form').attr('action', '<?=base_url()?>admin/pages/submit_publish');
            $("#submit").trigger("click");
        });
        $("#mysubmit_cancel").click(function(){
            $('form').attr('action', '<?=base_url()?>admin/pages/submit_cancel');
            $("#submit").trigger("click");
        });

    });
</script>
<script language="javascript">
var XMLHttpRequestObject = false;

if (window.XMLHttpRequest) {
XMLHttpRequestObject = new XMLHttpRequest();
} else if (window.ActiveXObject) {
XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHttp");
}


function validate(keyEvent)
{
keyEvent = (keyEvent) ? keyEvent : window.event;
input = (keyEvent.target) ? keyEvent.target : keyEvent.srcElement;

if (keyEvent.type == "keyup" ) {
var targetDiv = document.getElementById("targetDiv");
targetDiv.innerHTML = "<div></div>";

if (input.value) {
getData("<?=base_url()?>admin/pages/validate_name?name=" + input.value );
}
}
}

function getData(dataSource)
{
var targetDiv = document.getElementById("targetDiv");
if (XMLHttpRequestObject) {
XMLHttpRequestObject.open ("GET", dataSource);

XMLHttpRequestObject.onreadystatechange = function()
{
if (XMLHttpRequestObject.readyState ==4 && XMLHttpRequestObject.status ==200) {
if (XMLHttpRequestObject.responseText =="taken") {

targetDiv.innerHTML = "<div>The username is not available</div>";
} else {
targetDiv.innerHTML = XMLHttpRequestObject.responseText;
}

}
}
XMLHttpRequestObject.send(null);
}
}
</script>
<form method="post" action="<?=base_url()?>admin/pages/submit" enctype="multipart/form-data" id="edit_page">
    <label for="page_name">ID страницы (часть URL; используется в ссылках на эту страницу)</label>
	<div><input type="text" value="<?if($page['draft'] == '1'){echo $page['draft_name'];}else{echo $page['name'];}?>" class="text medium" id="page_name" name="name" onkeyup="validate(event)" /></div>
	<div class="val_error" id="targetDiv"></div>

    <br />
    <br /><br /><br /><br />
	<label for="title_ru">Название (рус)</label>
	<div><input type="text" value="<?if($page['draft'] == '1'){echo htmlspecialchars($page['draft_title_ru']);}else{echo htmlspecialchars($page['title_ru']);}?>" class="text medium" id="title_ru" name="title_ru" /></div>
	<br />

	<label for="title_ua">Название (укр)</label>
	<div><input type="text" value="<?if($page['draft'] == '1'){echo htmlspecialchars($page['draft_title_ua']);}else{echo htmlspecialchars($page['title_ua']);}?>" class="text medium" id="title_ua" name="title_ua" /></div>
	<br />		

    


	<?php include("spaw/spaw.inc.php");?>

	<label>Содержание (рус)</label>
	<?php
    if($page['draft'] == '1'){
        $text_ru = new SpawEditor('text_ru', $page['draft_text_ru']);
    }else{
        $text_ru = new SpawEditor('text_ru', $page['text_ru']);
    }
	$text_ru->show();
	?>
	<br />

	<label>Содержание (укр)</label>
	<?php
    if($page['draft'] == '1'){
        $text_ua = new SpawEditor('text_ua', $page['draft_text_ua']);
    }else{
        $text_ua = new SpawEditor('text_ua', $page['text_ua']);
    }

	$text_ua->show();
	?>
    <? if($page['draft'] == '1'):?>
	    <label >Черновик</label>
        <div><input type="text" value="<? if(!empty($page['name']))echo base_url().'page_test/'.$page['name'];?>" class="text medium"  name="test_url" /></div>
	    <br />

    <? endif;?>
	<br />
    <input type="hidden" name="id" value="<?=$page['id']?>" />

    <? if(!isset($page['create'])){?>
        <a href="javascript:void(0);" class="btn primary small" id="mysubmit">Как черновик</a>
        <a href="javascript:void(0);" class="btn primary small" id="mysubmit_publish">Опубликовать</a>
        <a href="javascript:void(0);" class="btn primary small" id="mysubmit_cancel">Отменить</a>
        <input type="submit" name="submit" value="Сохранить" id="submit" style="display:none;"/>
    <? }else{?>
        <input type="submit" name="submit" value="Сохранить" id="submit"/>
    <? }?>
	<br /><br />
</form>