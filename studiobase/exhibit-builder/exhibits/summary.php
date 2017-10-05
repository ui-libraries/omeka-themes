<?php $slug = metadata('exhibit', 'slug'); ?>
<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary '.$slug)); ?>



<div id="banner">
</div>

<h1 class="exhibit-title"><?php echo metadata('exhibit', 'title'); ?></h1>

<?php echo exhibit_builder_page_nav(); ?>

<div id="primary" class="container">

	<div class="col-sm-8">
		<?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
		<div class="exhibit-description">
			<?php echo $exhibitDescription; ?>
		</div>
		<?php endif; ?>

		<?php if (($exhibitCredits = metadata('exhibit', 'credits'))): ?>
		<div class="exhibit-credits">
			<h3><?php echo __('Credits'); ?></h3>
			<p><?php echo $exhibitCredits; ?></p>
		</div>
		<?php endif; ?>
	</div>

	<div class="col-sm-4">
		<?php
		$pageTree = exhibit_builder_page_tree();
		if ($pageTree):
		?>
		<nav id="exhibit-pages">
			<?php echo $pageTree; ?>
		</nav>
		<?php endif; ?>
	</div>

</div>

<?php echo foot(); ?>
