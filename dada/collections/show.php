<?php
$collectionTitle = strip_formatting(metadata('collection', array('Dublin Core', 'Title')));
$collectionDescription = strip_formatting(metadata('collection', array('Dublin Core', 'Description')));
$collectionCreator = strip_formatting(metadata('collection', array('Dublin Core', 'Creator')));
?>

<?php echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show')); ?>

<div class="author-head">
    <div class="container">
        <h1><?php echo $collectionTitle; ?></h1>
        <h4><?php echo $collectionCreator; ?></h4>        
        <div class="image">
            <img srcset="<?php echo WEB_ROOT; ?>/themes/dada/images/bg_red.png 1x, <?php echo WEB_ROOT; ?>/themes/dada/images/bg_red@2x.png 2x" alt="">
        </div>
        <div class="desc">
            <p><?php echo $collectionDescription; ?></p>
        </div>
    </div>
</div>
<div class="covers">
    <div class="container">        
        <section>
            <?php foreach (loop('items') as $item): ?>                       
            <?php $itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title'))); ?>
                <article>
                    <?php echo link_to_item(item_image('square_thumbnail', array('alt' => $itemTitle))); ?>
                    <div class="text">
                        <h4><?php echo $itemTitle; ?></h4>
                        <h6><?php echo link_to_item("View"); ?></h6>
                    </div>
                </article>
            <?php endforeach; ?>            
        </section>        
    </div>
</div>

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

<?php echo foot(); ?>
