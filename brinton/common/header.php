<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
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

    <!-- Plugin Stuff -->

    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald">

    <!-- Stylesheets -->
    <?php
    queue_css_file(array('flexslider'));
    queue_css_file(array('fancybox'));
    queue_css_file(array('style'));    
    echo head_css();


    ?>
    <!-- JavaScripts -->
    <?php
    queue_js_file('vendor/jquery.isotope.min');
    queue_js_file('vendor/jquery.easing.min');
    queue_js_file('vendor/jquery.quote.rotator.min');
    queue_js_file('vendor/jquery.quote.rotator.min');
    queue_js_file('vendor/jquery.flexslider.min');
    queue_js_file('vendor/jquery.fancybox.min');
    queue_js_file('vendor/jquery.fitvids');
    queue_js_file('vendor/selectnav.min');
    queue_js_file('vendor/respond.min');

    queue_js_file('default');
    echo head_js();
    ?>
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>    
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

    <header id="header-global" role="banner">
	
		<div class="container">
			
			<div class="row">
				
				<div class="header-logo three columns">
					
					<div id="logo"><a href="https://lib.uiowa.edu" title="University of Iowa Libraries"><img src="<?php echo WEB_ROOT; ?>/themes/brinton/images/uidome-uiwordmark-libraries-stacked.png" width="318" height="94" alt="Header Logo" /></a></div>
				  	
				</div>
				
				<nav id="header-navigation" class="thirteen columns" role="navigation">
					
					<ul id="navigation">
						<li class="current"><a href="<?php echo WEB_ROOT; ?>" title="Home">Home</a></li>
						<li><a href="<?php echo WEB_ROOT; ?>/collections/show/1">Films</a></li>
						<li><a href="<?php echo WEB_ROOT; ?>/collections/show/2">Gallery</a></li>
						<li><a href="<?php echo WEB_ROOT; ?>/collections/show/3">Documents</a></li>						
					</ul><!-- end #navigation -->
				
				</nav><!-- end #header-navigation -->
				
			</div><!-- end .row -->
		
		</div><!-- end .container -->
	
	</header><!-- end #header-global -->

    <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
