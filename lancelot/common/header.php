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
    <?php
    if (get_theme_option('Use Internal Bootstrap')) {
        queue_css_file('bootstrap.min');
        queue_css_file('font-awesome.min');
    } else {
        queue_css_url('//https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
        queue_css_url('//https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
    }
    queue_css_file('style');  

    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php If (get_theme_option('Use Accessible Mega Menu')):
        queue_js_file(array('globals', 'vendor/jquery-accessibleMegaMenu'));
    endif; ?>
    <?php // see footer for bootstrap-related js...
    echo head_js(); ?>
</head>
<div class="container-fluid hero">
		<div class="container">
			<h1 class="text-center">William Morris Archive</h1>
		</div>
	</div>
	
	<nav class="navbar navbar-expand-lg navbar-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo WEB_ROOT ?>/exhibits/show/poetry">Poetry</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo WEB_ROOT ?>/exhibits/show/prose">Prose</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo WEB_ROOT ?>/exhibits/show/nonfiction">Non-Fiction</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo WEB_ROOT ?>/exhibits/show/translations">Translations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo WEB_ROOT ?>/exhibits/show/drama">Drama</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo WEB_ROOT ?>/exhibits/show/bookarts">Book Arts</a>
				</li>
			</ul>
		</div>
	</nav>
    <div class="container" id="wrapper">
        <div id="content">
