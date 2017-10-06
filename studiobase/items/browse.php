<?php
    $pageTitle = __('Browse Items');
    echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>
	<div id="banner"></div>
	<div class="container">
    <h1><?php echo 'Browse all items'; ?></h1>
    <?php $subnav = public_nav_items(); echo $subnav->setUlClass('nav nav-pills'); ?>
    <hr>    

    <div class="browse-items clearfix">
        <?php if ($total_results > 0): ?>

            <?php foreach (loop('items') as $item): ?>
                <div class="row">
                    <div class="col-sm-3">
                        <?php echo link_to_item(item_image('square_thumbnail', array('alt' => metadata('item', array('Dublin Core', 'Title'))))); ?>
                    </div>
                    <div class="col-sm-9">
                        <h2><?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?></h2>

                       <?php echo text_to_paragraphs(metadata('item', array('Dublin Core', 'Description'), array('snippet'=>150))); ?>
                    </div>
                
                    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
				</div>

            <?php endforeach; ?>
            <div id="outputs">
                <span class="outputs-label"><?php echo __('Output Formats'); ?></span>
                <?php echo output_format_list(false); ?>
            </div>
        <?php else : ?>
            <p><?php echo 'No items added, yet.'; ?></p>
        <?php endif; ?>
    </div>
    <?php echo pagination_links(); ?>

<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>
	</div>

<?php echo foot(); ?>
