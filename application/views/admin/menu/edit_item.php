<h1><?=$action_title?></h1>

<form method="post" action="<?=base_url()?>admin/menu/submit">			
	<label class="label notice" for="title_ru">Название (рус)</label>
	<div><input type="text" value="<?=$menu['title_ru']?>" class="text medium" id="title_ru" name="title_ru" /></div>
	<br />

	<label class="label notice" for="title_ua">Название (укр)</label>
	<div><input type="text" value="<?=$menu['title_ua']?>" class="text medium" id="title_ua" name="title_ua" /></div>
	<br />				
	
	<label class="label notice"  for="url">Ссылка (url)</label>
	<div><input type="text" value="<?=$menu['url']?>" class="text medium" id="url" name="url" /></div>
	<br />

    <label class="label notice"  for="url">Родительская категория</label>
	<div>
        <select  name="parent">

            <option value="0">Выберите категорию</option>
            <?php foreach ($menu_items[0] as $key => $item) : ?>
                <option <?if($key ==$menu['parent']) echo 'selected';?>  value="<?=$key?>"><?=$item['title_ru']?></option>
                <? if(isset($menu_items[$key])){?>
                    <?php foreach ($menu_items[$key] as $key2 => $item) : ?>
                        <option <?if($key2 ==$menu['parent']) echo 'selected';?> value="<?=$key2?>"> --- <?=$item['title_ru']?></option>
                        <? if(isset($menu_items[$key2])){?>
                            <?php foreach ($menu_items[$key2] as $key3 => $item) : ?>
                                <option <?if($key3 ==$menu['parent']) echo 'selected';?> value="<?=$key3?>"> ------ <?=$item['title_ru']?></option>
                            <? endforeach;?>
                        <?}?>
                    <? endforeach;?>
                <?}?>
            <? endforeach;?>
           
        </select>
	</div>

	<br />
	
	<input type="hidden" name="id" value="<?=$menu['id']?>" />		
	<input type="submit" name="submit"  class="btn large primary"  value="Сохранить" />
	<br />
</form>

