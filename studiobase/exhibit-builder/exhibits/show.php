<?php
$slug = metadata('exhibit', 'slug'); 

echo head(array(
    'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
    'bodyclass' => 'exhibits show '.$slug));
?>

<div id="banner">
</div>
<h1 class="exhibit-page"><?php echo metadata('exhibit_page', 'title'); ?></h1>

<div class="container">
<div id="exhibit-blocks" class="col-sm-8">
<?php exhibit_builder_render_exhibit_page(); ?>
</div>

<nav id="exhibit-pages" class="col-sm-4">
    <h4><?php echo exhibit_builder_link_to_exhibit($exhibit); ?></h4>
    <?php echo exhibit_builder_page_tree($exhibit, $exhibit_page); ?>
</nav>


</div>
<div id="exhibit-pager-navigation" class="container-fluid pager-nav">
    <?php if ($prevLink = studiobase_exhibit_builder_link_to_previous_page()): ?>
    <div id="nav-prev" class="col-sm-4 pager-arrow">
    <?php echo $prevLink; ?>
    </div>
    <?php endif; ?>
    <?php if ($nextLink = studiobase_exhibit_builder_link_to_next_page()): ?>
    <div id="nav-next" class="col-sm-4 pager-arrow">
    <?php echo $nextLink; ?>
    </div>
    <?php endif; ?>
    <div id="nav-up" class="col-sm-4 pager-arrow">
    <?php echo exhibit_builder_page_trail(); ?>
    </div>
</div>
<?php echo foot(); ?>
