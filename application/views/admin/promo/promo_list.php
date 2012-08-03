    <div id="activity_stats">
        	<h3>Акции</h3>
    </div>
    <!--Quick Actions-->
    <div id="quick_actions">
            <? if($promo_active == '1'){?>
        	    <a class="button_big" href="<?=base_url()?>admin/promo/deactive"> <span class="iconsweet">-</span>Выключить </a>
                <?}else{?>
                    <a class="button_big" href="<?=base_url()?>admin/promo/active"><span class="iconsweet">+</span>Включить </a>
                <?}?>

    </div>

    