<?php $exhibitSlug = metadata('exhibit', 'slug'); ?>


<?php
echo head(array(
    'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
    'bodyclass' => 'exhibits show '.$exhibitSlug));
    $exhibitNavOption = get_theme_option('exhibits_nav');
?>

<div id="exhibit-banner">

	<div class="panel centered">
	<h1 id="exhibit-title">
	<?php echo metadata('exhibit', 'title'); ?>
	</h1>


		<div id="exhibit-page-navigation">
			<?php if ($prevLink = exhibit_builder_link_to_previous_page()): ?>
			<div id="exhibit-nav-prev" class="exhibit-nav-item">
			<img src="/waverly/themes/waverly/images/prev.png"/>
			<?php echo $prevLink; ?>
			</div>
			<?php endif; ?>
			<div id="exhibit-current-page" class="exhibit-nav-item">
				<p>
			<?php echo metadata('exhibit_page', 'title'); ?>
				</p>
			</div>
			<?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
			<div id="exhibit-nav-next" class="exhibit-nav-item">
			<?php echo $nextLink; ?>
			<img src="/waverly/themes/waverly/images/next.png"/>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<div id="exhibit-blocks">
    <?php exhibit_builder_render_exhibit_page(); ?>
</div>

<div class="navigation-bottom">
<div id="exhibit-page-navigation-bottom">
    <?php if ($prevLink = exhibit_builder_link_to_previous_page()): ?>
    <div id="exhibit-nav-prev">
	<img src="/waverly/themes/waverly/images/prev-white.png"/>
    <?php echo $prevLink; ?>
    </div>
    <?php endif; ?>
    <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
    <div id="exhibit-nav-next">
    <?php echo $nextLink; ?>
	<img src="/waverly/themes/waverly/images/next-white.png"/>
    </div>
    <?php endif; ?>
    <div id="exhibit-nav-up">
    <?php echo exhibit_builder_page_trail(); ?>
    </div>
</div>
</div>

<?php echo foot(); ?>
