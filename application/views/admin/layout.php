<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Admin panel</title>
	<!--link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css"-->

   
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/admin.css" />
    <!--[if lte IE 6]><script type="text/javascript" src="<?=base_url()?>public/js/DD_belatedPNG_0.0.8a-min.js"></script><script type="text/javascript">DD_belatedPNG.fix('.index-img01 a, .content-contacts, .map-cornerlt, .map-cornerrt, .map-cornerlb, .map-cornerrb, .topheading, .topheading span, .index-botbanner, .show_video, .show_video_en, .hide_video');</script><![endif]-->
	<script type="text/javascript" src="<?=base_url()?>public/js/jquery-1.3.2.min.js"></script>	
   

	<script type="text/javascript" src="<?=base_url()?>public/js/admin.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/main.js"></script>
    <script type="text/javascript">var base_url = '<?=base_url()?>';</script>


    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>public/admin/images/favicon.ico">
    <!--Stylesheets-->
    <link rel="stylesheet" href="<?=base_url()?>public/admin/css/reset.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/admin/css/main.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/admin/css/typography.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/admin/css/tipsy.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/admin/js/cl_editor/jquery.cleditor.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/admin/uploadify/uploadify.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/admin/css/jquery.ui.all.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/admin/css/fullcalendar.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/admin/css/bootstrap.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/admin/js/fancybox/jquery.fancybox-1.3.4.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/admin/css/highlight.css" />
    <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
    <![endif]-->
    <!--Javascript-->
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/jquery.min.js"> </script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/highcharts.js"> </script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/exporting.js"> </script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/jquery.quicksand.js"> </script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/jquery.easing.1.3.js"> </script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/jquery.tipsy.js"> </script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/cl_editor/jquery.cleditor.min.js"> </script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/uploadify/swfobject.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/jquery.autogrowtextarea.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/form_elements.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/jquery.ui.core.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/jquery.ui.mouse.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/jquery.ui.slider.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/jquery.ui.progressbar.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/jquery.ui.datepicker.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/jquery.ui.tabs.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/fullcalendar.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/gcal.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/highlight.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/admin/js/main.js"> </script>


	<?php if (isset($extra_head_content)) echo $extra_head_content; ?>
</head>
<body <? if (isset($body_onload)) echo $body_onload; ?>>
<!--Header-->
<header>
    <!--Logo-->
    <div id="logo"><a href="#"><img src="<?=base_url()?>public/admin/images/logo.png" alt="" /></a></div>
   
</header>
<div id="dreamworks_container">
    <!--Primary Navigation-->
    <nav id="primary_nav">
        <ul>
            <li class="nav_dashboard active"><a href="./index.html">События</a></li>
            <li class="nav_graphs"><a href="./charts.html">Блог</a></li>
            <!--li class="nav_forms"><a href="./forms.html">Новости</a></li>
            <li class="nav_typography"><a href="./typography.html">Страницы</a></li>
            <li class="nav_uielements"><a href="./ui_elements.html">Настройки</a></li>
            <li class="nav_pages"><a href="./pages.html">Pages</a></li-->
        </ul>
    </nav>
    <!--Main Content-->
<section id="main_content">
<!--Secondary Navigation-->
<nav id="secondary_nav">
<!--UserInfo-->
<dl class="user_info">
	<dt><a href="#"><img src="<?=base_url()?>public/admin/images/avatar.png" alt="" /></a></dt>
    <dd>
    <a class="welcome_user" href="#">Welcome,<strong>Admin</strong></a>
    <span class="log_data">Last sign in : 16:11 Feb 27th 2012</span>
    <a class="logout" href="#">Logout</a>
    <a class="user_messages" href="#"><span>12</span></a>
    </dd>
</dl>
<h2>Разделы</h2>
<ul>
	<li><a href="<?=base_url()?>admin/events"><span class="iconsweet">C</span>Список событий</a></li>
    <li><a href="<?=base_url()?>admin/comments"><span class="iconsweet">}</span>Новые комментарии</a></li>
    <li><a href="<?=base_url()?>admin/promo"><span class="iconsweet">R</span>Акции</a></li>
    <!--li><a href="#"><span class="iconsweet">S</span>Worklog</a></li-->
</ul>
</nav>
<!--Content Wrap-->
<div id="content_wrap">	<!--Activity Stats-->

             <?=$this->load->view($body);?>
     
</div>    
</div>
	
</body>
</html>