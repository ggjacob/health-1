<div id="header" class="page-header" style="background-color: #AFEEEE">
	

    <div><img src="<?=base_url()?>public/img/admin/logo.jpg" alt="" class="logo" /></div>    
	<div id="topmenu">
        <ul class="pills">                        
			<li <?php if ($menu_section == 'menu') echo 'class="active"'; ?>><a href="<?=base_url()?>admin/menu">Управление меню</a></li>
        	<li <?php if ($menu_section == 'main_page') echo 'class="active"'; ?>><a href="<?=base_url()?>admin/main_page">Главная страница</a></li>  
        	<li <?php if ($menu_section == 'news') echo 'class="active"'; ?>><a href="<?=base_url()?>admin/content">Новости</a></li>
            <li <?php if ($menu_section == 'pages') echo 'class="active"'; ?>><a href="<?=base_url()?>admin/pages">Страницы</a></li>
            
           	<li <?php if ($menu_section == 'settings') echo 'class="active"'; ?>><a href="<?=base_url()?>admin/settings">Настройки</a></li>

        </ul>
    </div>
</div>
