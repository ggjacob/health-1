<h1><?=$action_title?></h1>

<?php if ($msg) : ?>
<div class="<?=$msg['type']?>">	
	<?=$msg['text']?>
</div>
<?php endif; ?>

<form method="post" action="<?=base_url()?>admin/main_page/submit" enctype="multipart/form-data" >
	<table class="bordered-table">
        <thead>
            <th>Название</th>
            <th>Загрузка</th>
            <th>Баннер</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <label for="banner1">Баннер 1</label>
                </td>
                <td>
                    <input type="file" name="banner1" id="banner1"/>
                </td>
                <td>
                    <? if(!empty($main_page_config['banner1'])):?>
                        <img src="<?=base_url()?><?=$main_page_config['banner1']?>" alt="" class="admin_img"/>
                    <? endif;?>
                </td>
            </tr>
            <tr>
                <td>
                   <label for="banner2">Баннер 2</label>
                </td>
                <td>
                   <input type="file" name="banner2" id="banner2"/>
                </td>
                <td>
                    <? if(!empty($main_page_config['banner2'])):?>
                        <img src="<?=base_url()?><?=$main_page_config['banner2']?>" alt="" class="admin_img"/>
                    <? endif;?>
                </td>
            </tr>
            <tr>
                <td>
                   <label for="banner3">Баннер 3</label>
                </td>
                <td>
                   <input type="file" name="banner3" id="banner3"/>
                </td>
                <td>
                    <? if(!empty($main_page_config['banner3'])):?>
                        <img src="<?=base_url()?><?=$main_page_config['banner3']?>" alt="" class="admin_img" />
                    <? endif;?>
                </td>
            </tr>
            <tr>
                <td>
                  Банер-переход на страницу описания депозитных программ
                </td>
                <td>
                   <input type="file" name="banner_deposit" id="banner_deposit"/>
                </td>
                <td>
                    <? if(!empty($main_page_config['banner_deposit'])):?>
                        <img src="<?=base_url()?><?=$main_page_config['banner_deposit']?>" alt="" class="admin_img" />
                    <? endif;?>
                </td>
            </tr>
            <tr>
                <td>
                 Ссылка на баннер
                </td>
                <td>
                   <input type="text" value="<?=$main_page_config['banner_deposit_link']?>" name="banner_deposit_link"/>
                </td>
                <td>

                </td>
            </tr>
             <tr>
                <td>
                  Банер-переход на галерею с монетами
                </td>
                <td>
                    <input type="file" name="banner_galery" id="banner_galery"/>
                </td>
                <td>
                   <? if(!empty($main_page_config['banner_galery'])):?>
                        <img src="<?=base_url()?><?=$main_page_config['banner_galery']?>" alt="" class="admin_img"/>
                    <? endif;?>
                </td>
            </tr>
            <tr>
                <td>
                 Ссылка на баннер
                </td>
                <td>
                   <input type="text" value="<?=$main_page_config['banner_galery_link']?>" name="banner_galery_link"/>
                </td>
                <td>

                </td>
            </tr>
        </tbody>
	</table>

	<br />

	<br />
    <br />
	<input  type="submit" class="btn large primary"  name="submit" value="Сохранить изменения" />
</form>