<br />

<?php if ($msg) : ?>
<div class="<?=$msg['type']?>">	
	<?=$msg['text']?>
</div>
<?php endif; ?>

<form method="post" action="<?=base_url()?>admin/settings/submit">
	<label class="label notice">Логин администратора</label>
	<div сlass="input"><input type="text" value="<?=$settings['admin_login']?>" class="text medium" name="admin_login" /></div>
	<br />
	
	<label class="label notice">Старый пароль</label>
	<div сlass="input"><input type="password" value="" class="text medium" name="old_pass" /></div>
	<br />
	
	<label class="label notice">Новый пароль</label>
	<div сlass="input"><input type="password" value="" class="text medium" name="new_pass" /></div>
	<br />
	
	<label class="label notice">Подтвердить пароль</label>
	<div сlass="input" ><input type="password" value="" class="text medium" name="new_pass_confirm" /></div>
	<br />
	
	<input type="submit" class="btn large primary"  name="submit" value="Сохранить" />
</form>