

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Аминокислоты - калькулято. Вход</title>
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
<div class="changePattern">
    <span id="pattern1"></span>
    <span id="pattern2"></span>
    <span id="pattern3"></span>
    <span id="pattern4"></span>
    <span id="pattern5"></span>
    <span id="pattern6"></span>
</div>
<!-- Top Panel -->
<div class="top_panel">
    <div class="wrapper">
        <div class="user">
            <img src="<?=base_url()?>public/Images/user_avatar.png" alt="user_avatar" class="user_avatar">
            <span class="label"><a href="<?=base_url()?>main/registration">Регистрация</a></span>
        </div>
    </div>
</div>

<div class="wrapper contents_wrapper">

    <div class="login">
        <div class="widget_header">
            <h4 class="widget_header_title wwIcon i_16_login">Форма авторизации</h4>
        </div>
        <div class="widget_contents lgNoPadding">
            <form action="<?=base_url()?>login" method="POST" enctype="multipart/form-data">
                <div class="line_grid">
                    <div class="g_2 g_2M"><span class="label">Логин</span></div>
                    <div class="g_10 g_10M">
                        <input class="simple_field tooltip" title="Your Username" type="text" placeholder="Username" name="login"></div>
                    <div class="clear"></div>
                </div>
                <div class="line_grid">
                    <div class="g_2 g_2M"><span class="label">Пароль</span></div>
                    <div class="g_10 g_10M">
                        <input class="simple_field tooltip" title="Your Password" type="password"  name="password" value="password">
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="line_grid">
                    <div class="g_6"><input class="submitIt simple_buttons" value="Вход" type="submit">
                    </div>
                    <div class="g_6"><a class="submitIt simple_buttons" href="<?=base_url()?>main/registration">Регистрация </a>
                    </div>

                    <div class="clear"></div>
                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>