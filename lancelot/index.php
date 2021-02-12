<?php

echo head(array(
    'bodyid' => 'home',
));
?>

<div class="container max-width-900">
	<div class="row pt-5 pb-5 home">
		<div class="col-sm-6 col-12 mb-4">
			<h2><em>Welcome</em></h2>
			<p>Welcome to the official database for the William Morris Archive, a text-searchable scholarly edition of the poetry and selected prose of William Morris.</p>
			<a href="<?php echo WEB_ROOT; ?>/exhibits/show/titles" class="button1">Titles</a>
			<a href="<?php echo WEB_ROOT; ?>/items/search" class="button2">Advanced Search</a>
			<a href="<?php echo WEB_ROOT; ?>/exhibits/show/resources" class="button3">Resources</a>
			<a href="<?php echo WEB_ROOT; ?>/exhibits/show/featured-exhibits" class="button4">Featured Exhibit</a>
		</div>
		<div class="col-sm-6 col-12">
			<div>
				<img src="<?php echo img('william-morris.jpg'); ?>" class="img-fluid" alt="William Morris, portrait by G.F. Watts, 1870"/>
				<p class="caption">William Morris, portrait by G.F. Watts, 1870</p>
			</div>
		</div>
	</div>
</div>

<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot();