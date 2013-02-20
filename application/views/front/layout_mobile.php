


<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Аминокислоты. Подсчет аминокислот, калорий, белков в вашем рационе</title>
    <link href='http://fonts.googleapis.com/css?family=Andika&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?=base_url()?>public/Javascript/Flot/excanvas.js"></script>
    <![endif]-->
    <!-- The Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700" rel="stylesheet" />
    <!-- The Main CSS File -->
    <link rel="stylesheet" href="<?=base_url()?>public/CSS/style.css" />
    <!-- jQuery -->
    <script src="<?=base_url()?>public/Javascript/jQuery/jquery-1.7.2.min.js"></script>
    <!-- Flot -->
    <script src="<?=base_url()?>public/Javascript/Flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>public/Javascript/Flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>public/Javascript/Flot/jquery.flot.pie.js"></script>
    <!-- DataTables -->
    <script src="<?=base_url()?>public/Javascript/DataTables/jquery.dataTables.min.js"></script>
    <!-- ColResizable -->
    <script src="<?=base_url()?>public/Javascript/ColResizable/colResizable-1.3.js"></script>
    <!-- jQuryUI -->
    <script src="<?=base_url()?>public/Javascript/jQueryUI/jquery-ui-1.8.21.min.js"></script>
    <!-- Uniform -->
    <script src="<?=base_url()?>public/Javascript/Uniform/jquery.uniform.js"></script>
    <!-- Tipsy -->
    <script src="<?=base_url()?>public/Javascript/Tipsy/jquery.tipsy.js"></script>
    <!-- Elastic -->
    <script src="<?=base_url()?>public/Javascript/Elastic/jquery.elastic.js"></script>
    <!-- ColorPicker -->
    <script src="<?=base_url()?>public/Javascript/ColorPicker/colorpicker.js"></script>
    <!-- SuperTextarea -->
    <script src="<?=base_url()?>public/Javascript/SuperTextarea/jquery.supertextarea.min.js"></script>
    <!-- UISpinner -->
    <script src="<?=base_url()?>public/Javascript/UISpinner/ui.spinner.js"></script>
    <!-- MaskedInput -->
    <script src="<?=base_url()?>public/Javascript/MaskedInput/jquery.maskedinput-1.3.js"></script>
    <!-- ClEditor -->
    <script src="<?=base_url()?>public/Javascript/ClEditor/jquery.cleditor.js"></script>
    <!-- Full Calendar -->
    <script src="<?=base_url()?>public/Javascript/FullCalendar/fullcalendar.js"></script>
    <!-- Color Box -->
    <script src="<?=base_url()?>public/Javascript/ColorBox/jquery.colorbox.js"></script>
    <!-- Kanrisha Script -->
    <script src="<?=base_url()?>public/Javascript/kanrisha.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

<!-- Top Panel -->
<div class="top_panel">
    <div class="wrapper">
        <div class="user">
            <img src="<?=base_url()?>public/Images/user_avatar.png" alt="user_avatar" class="user_avatar" />
            <span class="label"><?=$user['username']?></span>
            <!-- Top Tooltip -->
            <div class="top_tooltip">
                <div>
                    <ul class="user_options">
                        <li class="i_16_profile"><a href="#" title="Profile"></a></li>
                        <li class="i_16_tasks"><a href="#" title="Tasks"></a></li>
                        <li class="i_16_notes"><a href="#" title="Notes"></a></li>
                        <li class="i_16_options"><a href="#" title="Options"></a></li>
                        <li class="i_16_logout"><a href="#" title="Log-Out"></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<header class="main_header">
    <div class="wrapper">
        <div class="logo">
            <a href="#" title="Kanrisha Home">
                <img src="<?=base_url()?>public/Images/kanrisha_logo.png" alt="kanrisha_logo" />
            </a>
        </div>

    </div>
</header>

<div class="wrapper small_menu">
    <ul class="menu_small_buttons">
        <li><a title="General Info" class="i_22_dashboard smActive" href="<?=base_url()?>main/mobile"></a></li>
        <li><a title="Your Messages" class="i_22_inbox" href="<?=base_url()?>main/forms"></a></li>
        <li><a title="Visual Data" class="i_22_charts" href="<?=base_url()?>main/info"></a></li>
        <li><a title="Kit elements" class="i_22_ui" href="#"></a></li>
        <li><a title="Some Rows" class="i_22_tables" href="#"></a></li>
        <li><a title="Some Fields" class="i_22_forms" href="#"></a></li>
    </ul>
</div>

<div class="wrapper contents_wrapper">

<aside class="sidebar">
    <ul class="tab_nav">
        <li class="<? if($menu_item == 'tables')echo 'active_tab ';?> i_32_dashboard">
            <a href="/" title="General Info">
                <span class="tab_label">Таблица</span>
                <span class="tab_info">Графики</span>
            </a>
        </li>
        <li class="<? if($menu_item == 'forms')echo 'active_tab ';?> i_32_inbox">
            <a href="<?=base_url()?>main/forms" title="Your Messages">
                <span class="tab_label">Сегодня</span>
                <span class="tab_info">Ваш баланс</span>
            </a>
        </li>
        <li class="<? if($menu_item == 'info')echo 'active_tab ';?> i_32_tables">
            <a href="<?=base_url()?>main/info" title="Visual Data">
                <span class="tab_label">Инфо</span>
                <span class="tab_info">Аминокислоты в продуктах</span>
            </a>
        </li>
        <li class="i_32_ui">
            <a href="#" title="Kit elements">
                <span class="tab_label">Статьи</span>
                <span class="tab_info">Полезное</span>
            </a>
        </li>
        <li class=" <? if($menu_item == 'new_product')echo 'active_tab ';?> i_32_tables">
            <a href="<?=base_url()?>main/new_product" title="Some Rows">
                <span class="tab_label">Внести</span>
                <span class="tab_info">Новый продукт</span>
            </a>
        </li>
        <!--li class="i_32_forms">
            <a href="forms.html" title="Some Fields">
                <span class="tab_label">Forms</span>
                <span class="tab_info">Some Fields</span>
            </a>
        </li-->
    </ul>
</aside>

<div class="contents">
<div class="grid_wrapper">
    <?=$this->load->view($content)?>


</div>
</div>

</div>

<footer>
    <div class="wrapper">
			<span class="copyright">
				COPYRIGHT © 2012 Mahieddine Abd-kader
			</span>
    </div>
</footer>
</body>
</html>