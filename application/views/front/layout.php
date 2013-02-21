


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
<!-- Change Pattern -->
<!--div class="changePattern">
    <span id="pattern1"></span>
    <span id="pattern2"></span>
    <span id="pattern3"></span>
    <span id="pattern4"></span>
    <span id="pattern5"></span>
    <span id="pattern6"></span>
</div-->
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
        <div class="top_links">
            <ul>
                <li class="i_22_search search_icon">
                    <div class="top_tooltip right_direction">
                        <div>
                            <form class="top_search_form" />
                            <input type="text" class="top_search_input" />
                            <input type="submit" class="top_search_submit" value="" />
                            </form>
                        </div>
                    </div>
                </li>
                <li class="i_22_settings">
                    <a href="#" title="Settings">
                        <span class="label">Settings</span>
                    </a>
                </li>
                <li class="i_22_upload">
                    <a href="#" title="Upload">
                        <span class="label">Upload</span>
                    </a>
                    <!-- Drop Menu -->
                    <ul class="drop_menu menu_with_icons right_direction">
                        <li>
                            <a class="i_16_add" href="#" title="New Flie">
                                <span class="label">New File</span>
                            </a>
                        </li>
                        <li>
                            <a class="i_16_progress" href="#" title="2 Files Left">
                                <span class="label">Files Left</span>
                                <span class="small_count">2</span>
                            </a>
                        </li>
                        <li>
                            <a class="i_16_files" href="#" title="Browse Files">
                                <span class="label">Browse Files</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="i_22_inbox top_inbox">
                    <a href="#" title="Inbox">
                        <span class="label lasCount">Inbox</span>
                        <span class="small_count">3</span>
                    </a>
                </li>
                <li class="i_22_pages">
                    <a href="#" title="Pages">
                        <span class="label">Pages</span>
                    </a>
                    <!-- Drop Menu -->
                    <ul class="drop_menu menu_without_icons">
                        <li>
                            <a title="403 Page" href="403.html">
                                <span class="label">403 Forbidden</span>
                            </a>
                        </li>
                        <li>
                            <a href="404.html" title="404 Page">
                                <span class="label">404 Not Found</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
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
        <nav class="top_buttons">
            <ul>
                <li class="big_button">
                    <div class="out_border">
                        <div class="button_wrapper">
                            <div class="in_border">
                                <a href="#" title="Analytics" class="the_button">
                                    <span class="i_32_statistic"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="big_button">
                    <div class="big_count">
                        <span>7</span>
                    </div>
                    <div class="out_border">
                        <div class="button_wrapper">
                            <div class="in_border">
                                <a href="#" title="Support" class="the_button">
                                    <span class="i_32_support"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="big_button">
                    <div class="out_border">
                        <div class="button_wrapper">
                            <div class="in_border">
                                <a href="#" title="Delivery" class="the_button">
                                    <span class="i_32_delivery"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="big_button">
                    <div class="out_border">
                        <div class="button_wrapper">
                            <div class="in_border">
                                <a href="#" title="Earning" class="the_button">
                                    <span class="i_32_dollar"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="wrapper small_menu">
    <ul class="menu_small_buttons">
        <li><a title="General Info" class="i_22_dashboard smActive" href="index.html"></a></li>
        <li><a title="Your Messages" class="i_22_inbox" href="inbox.html"></a></li>
        <li><a title="Visual Data" class="i_22_charts" href="charts.html"></a></li>
        <li><a title="Kit elements" class="i_22_ui" href="ui.html"></a></li>
        <li><a title="Some Rows" class="i_22_tables" href="tables.html"></a></li>
        <li><a title="Some Fields" class="i_22_forms" href="forms.html"></a></li>
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
            <a href="ui.html" title="Kit elements">
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
				COPYRIGHT © 2012
			</span>
    </div>
</footer>
</body>
</html>