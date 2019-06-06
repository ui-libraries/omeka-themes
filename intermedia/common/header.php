<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>">
    <?php endif; ?>
    <?php /* <link rel="shortcut icon" href="<?php echo img('favicon.ico'); ?>" type="image/x-icon" /> */ ?>
    <?php /* <link rel="apple-touch-icon" href="<?php echo img('favicon.svg'); ?>" type="image/svg+xml" /> */ ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view' => $this)); ?>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
    <?php
    queue_css_file('style');
    $displayCornerBanner = get_theme_option('Display Corner Banner');
    if ($displayCornerBanner) {
        queue_css_file('corner-banner');
    }
    if (get_theme_option('Display Grid Rotator') && is_current_url('/')):
        queue_css_file('grid-rotator-style');
    ?>
        <noscript>
        <link rel="stylesheet" type="text/css" href="<?php echo css_src('grid-rotator-fallback'); ?>" />
        </noscript>
        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="<?php echo css_src('grid-rotator-fallback'); ?>" />
        <![endif]-->
    <?php
    endif;

    echo head_css();
    ?>

    <!-- JavaScripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php If (get_theme_option('Use Accessible Mega Menu')):
        queue_js_file(array('globals', 'vendor/jquery-accessibleMegaMenu'));
    endif; ?>
    <?php // see footer for bootstrap-related js...
    echo head_js(); ?>
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <!-- <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a> -->
    <?php fire_plugin_hook('public_body', array('view' => $this)); ?>
    <?php if ($displayCornerBanner): ?>
    <span id="corner-banner">
        <em><?php echo $displayCornerBanner; ?></em>
    </span>
    <?php endif; ?>
    <?php // Eventually remove the container to set the menu through screen. ?>
    
    <nav class="navbar navbar-expand-md">
         <div class="container">
            <div id="navbarCollapse">
               <div class="row">
                  <div class="col">
                     <img id="iri-logo" src="<?php echo img('logo.png'); ?>">
                  </div>
                  <div class="col">
                     <div id="searchbox" class="col-sm-6" role="search">
                        <?php echo search_form(array(
                           'show_advanced' => get_theme_option('Use Advanced Search'),
                           'submit_value' => __('Search'),
                           'form_attributes' => array('class' => 'input-group navbar-form navbar-right', 'role' => 'form'))); 
                        ?>
                     </div>
                  </div>
               </div>
               <ul class="navbar-nav mr-auto">
                  <div class="col">
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                           <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>/history">History</a>
                           <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>/project">Project</a>
                           <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>/team">Team</a>
                           <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>/partners">Partners</a>
                        </div>
                     </li>
                  </div>
                  <div class="col">
                     <li class="nav-item">
                        <a class="nav-link" href="#">Artists</a>
                     </li>
                  </div>
                  <div class="col">
                     <li class="nav-item">
                        <a class="nav-link" href="#">Collection</a>
                     </li>
                  </div>
                  <div class="col">
                     <li class="nav-item">
                        <a class="nav-link" href="#">Maps</a>
                     </li>
                  </div>
               </ul>
            </div>
         </div>
      </nav>
    <?php if ($breadcrumb = get_theme_option('Display Breadcrumb Trail')):
        echo common('breadcrumb', array('title' => @$title, 'mode' => $breadcrumb));
    endif; ?>
    </div>
    <div class="container" id="wrapper">
        <div id="content">
