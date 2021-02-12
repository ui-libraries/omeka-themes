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
    <link href="//fonts.googleapis.com/css?family=Arvo:400" media="screen" rel="stylesheet" type="text/css" >
    <link href="/morris/application/views/scripts/css/admin-bar.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" media="all" rel="stylesheet" type="text/css" >
    <link href="/morris/themes/lancelot/css/style.css" media="all" rel="stylesheet" type="text/css" >

    <!-- JavaScripts -->
    <?php If (get_theme_option('Use Accessible Mega Menu')):
        queue_js_file(array('globals', 'vendor/jquery-accessibleMegaMenu'));
    endif; ?>
    <?php // see footer for bootstrap-related js...
    echo head_js(); ?>
</head>
<div class="container-fluid hero">
		<div class="container">
			<h1 class="text-center"><a id="wordmark" href="<?php echo WEB_ROOT; ?>">William Morris Archive</a></h1>
		</div>
	</div>
<?php //echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li id="poetry" class="nav-item">
					<a  class="nav-link" href="<?php echo WEB_ROOT; ?>/exhibits/show/poetry">Poetry</a>
				</li>
				<li id="prose" class="nav-item">
					<a class="nav-link" href="<?php echo WEB_ROOT; ?>/exhibits/show/romances">Prose</a>
				</li>
				<li id="nonfiction"class="nav-item">
					<a  class="nav-link" href="<?php echo WEB_ROOT; ?>/exhibits/show/nonfictiondiariesessays">Non-Fiction</a>
				</li>
				<li id="translations" class="nav-item">
					<a class="nav-link" href="<?php echo WEB_ROOT; ?>/exhibits/show/translations">Translations</a>
				</li>
				<li id="drama" class="nav-item">
					<a class="nav-link" href="<?php echo WEB_ROOT; ?>/exhibits/show/drama">Drama</a>
				</li>
				<li id="bookarts" class="nav-item">
					<a class="nav-link" href="<?php echo WEB_ROOT; ?>/exhibits/show/bookarts">Book Arts</a>
				</li>
			</ul>
		</div>
	</nav>
    <div class="container" id="wrapper">
    <div id="content">
        <script>
        let url = window.location.href
        if (url.includes("/exhibits/show/poetry")) {
            let el = document.getElementById('poetry')
            el.style.backgroundColor = '#022742'
        }
        if (url.includes("/exhibits/show/romances")) {
            let el = document.getElementById('prose')
            el.style.backgroundColor = '#022742'
        }
        if (url.includes("/exhibits/show/nonfictiondiariesessays")) {
            let el = document.getElementById('nonfiction')
            el.style.backgroundColor = '#022742'
        }
        if (url.includes("/exhibits/show/translations")) {
            let el = document.getElementById('translations')
            el.style.backgroundColor = '#022742'
        }
        if (url.includes("/exhibits/show/drama")) {
            let el = document.getElementById('drama')
            el.style.backgroundColor = '#022742'
        }
        if (url.includes("/exhibits/show/bookarts")) {
            let el = document.getElementById('bookarts')
            el.style.backgroundColor = '#022742'
        }  

        </script>
