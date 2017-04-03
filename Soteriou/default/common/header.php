<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61639511-10', 'auto');
  ga('send', 'pageview');

</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>
    <link rel="icon" href="favicon.ico" type="image" sizes="32x32">

    <!-- Plugin Stuff -->

    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>


    <!-- Stylesheets -->
    <?php
    queue_css_file(array('iconfonts','style', 'bootstrap.min'));
    queue_css_url('//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic');

    echo head_css();

    echo theme_header_background();
    ?>


    <?php
    ($backgroundColor = get_theme_option('background_color')) || ($backgroundColor = "#FFFFFF");
    ($textColor = get_theme_option('text_color')) || ($textColor = "#444444");
    ($linkColor = get_theme_option('link_color')) || ($linkColor = "#888888");
    ($buttonColor = get_theme_option('button_color')) || ($buttonColor = "#000000");
    ($buttonTextColor = get_theme_option('button_text_color')) || ($buttonTextColor = "#FFFFFF");
    ($titleColor = get_theme_option('header_title_color')) || ($titleColor = "#000000");
    ?>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: <?php echo $textColor; ?>;
        }
        #site-title a:link, #site-title a:visited,
        #site-title a:active, #site-title a:hover {
            color: <?php echo $titleColor; ?>;
            <?php if (get_theme_option('header_background')): ?>
            text-shadow: 0px 0px 20px #000;
            <?php endif; ?>
        }
        a:link {
            color: <?php echo $linkColor; ?>;
        }
        a:visited {
            color: <?php echo thanksroy_brighten($linkColor, 40); ?>;
        }
        a:hover, a:active, a:focus {
            color: <?php echo thanksroy_brighten($linkColor, -40); ?>;
        }

        .button, button,
        input[type="reset"],
        input[type="submit"],
        input[type="button"],
        .pagination_next a,
        .pagination_previous a {
          background-color: <?php echo $buttonColor; ?>;
          color: <?php echo $buttonTextColor; ?> !important;
        }

        #search-form input[type="text"] {
            border-color: <?php echo $buttonColor; ?>
        }

        .mobile li {
            background-color: <?php echo thanksroy_brighten($buttonColor, 40); ?>;
        }

        .mobile li ul li {
            background-color: <?php echo thanksroy_brighten($buttonColor, 20); ?>;
        }

        .mobile li li li {
            background-color: <?php echo thanksroy_brighten($buttonColor, -20); ?>;
        }
    </style>
    <!-- JavaScripts -->
    <?php
    queue_js_file('vendor/modernizr');
    queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)'));
    queue_js_file('vendor/respond');
    queue_js_file('vendor/jquery-accessibleMegaMenu');
    queue_js_file('globals');
    queue_js_file('default');
    queue_js_file('bootstrap');
    queue_js_file('bootstrap.min');


    echo head_js();
    ?>









</head>


<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

        <header role="banner">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-title"><?php echo link_to_home_page(theme_logo()); ?></div>
        </header>
        <div id="header-image" align="center"></div>

        <!--<div class="menu-button button">Menu</div>-->

        <div id="wrap">




          <body>


          <a href="<?php echo WEB_ROOT;?>"><div id="header-title" align="center"><h2>soteriou papermaking archive</h2></div></a>
          <div id="header-subtitle" align="center"><h3><i>Indian and Islamic Craft Traditions</i></h3></div>

          <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul>
                      <li><a href="<?php echo WEB_ROOT;?>">home</a></li>
                      <li><a href="<?php echo WEB_ROOT;?>/soteriou-story">soteriou story</a></li>
                      <li><a href="<?php echo WEB_ROOT;?>/history">history map bibliography</a></li>
                      <li><a href="<?php echo WEB_ROOT;?>/terms">terms of use</a></li>
                  </ul>
                </div>
            </div>
        </nav>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>


          </body>
          <!-- Featured Collection -->


            <nav id="primary-nav" role="navigation">
              <div id="search-container" role="search">

                  <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
                  <?php echo search_form(array('show_advanced' => true)); ?>
                  <?php else: ?>
                  <?php echo search_form(); ?>
                  <?php endif; ?>
              </div>
                <div id="item-1" class="side-item" align="left" float="left"><img src="<?php echo WEB_ROOT; ?>/themes/default/images/location.png"><h5><a href="<?php echo WEB_ROOT; ?>/items/browse?tags=Archaeology,%20environment,%20history,%20location">Location<br>Archaeology<br>Enviornment<br>History</a></h5></div>

                <div id="item-2"class="side-item" align="left"><img src="<?php echo WEB_ROOT; ?>/themes/default/images/fibers.png"><h5><a href="<?php echo WEB_ROOT; ?>/items/browse?tags=Fibers,%20Materials,%20Preparation">Fibers<br>Materials<br>Preparation</h5></a></div>

                <div id="item-3" class="side-item" align="left"><img src="<?php echo WEB_ROOT; ?>/themes/default/images/tools.png"><h5><a href="<?php echo WEB_ROOT; ?>/items/browse?tags=Tools">Tools</a></h5></div>

                <div id="item-4" class="side-item" align="left"><img src="<?php echo WEB_ROOT; ?>/themes/default/images/sheetmaking.png"><h5><a href="<?php echo WEB_ROOT; ?>/items/browse?tags=Sheetmaking">Sheetmaking</a></h5></div>

                <div id="item-5" class="side-item" align="left"><img src="<?php echo WEB_ROOT; ?>/themes/default/images/sheet.png"><h5><a href="<?php echo WEB_ROOT; ?>/items/browse?tags=Sheet+Drying,%20Finishing">Sheet Drying<br>Finishing</a></h5></div>

                <div id="item-6" class="side-item" align="left"><img src="<?php echo WEB_ROOT; ?>/themes/default/images/paper.png"><h5><a href="<?php echo WEB_ROOT; ?>/items/browse?tags=Paper+Creations">Paper Creations</a></h5></div>

                <div id="item-7" class="side-item" align="left"><img src="<?php echo WEB_ROOT; ?>/themes/default/images/artisans.png"><h5><a href="<?php echo WEB_ROOT; ?>/items/browse?tags=Artisans">Artisans</a></h5></div>

            </nav>
            <div id="content" role="main" tabindex="-1">
                <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>

<!-- script that identifies the current page, so the nav-bar can have the current item highlighted -->
            <script>
            $( document ).ready(function() {
              $(function(){
                $('a').each(function() {
                  if ($(this).prop('href') == window.location.href) {
                    $(this).addClass('current');
                  }
                });
              });
            });
            </script>
