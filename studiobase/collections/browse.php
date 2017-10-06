<?php
    $pageTitle = __('Browse collections');
    echo head(array('title'=>$pageTitle,'bodyclass' => 'collections browse'));
?>
<div id="banner"></div>
<div class="container">
    <h1><?php echo 'Browse all collections'; ?></h1>
    
    <div class="browse-collections">
        <?php if ($total_results > 0): ?>
        
            <?php foreach (loop('collections') as $collection): ?>
                    <div class="row">
                        <div class="col-sm-3">
                            <?php if ($collectionImage = record_image('collection', 'square_thumbnail')): ?>
                                <?php echo link_to_collection($collectionImage, array('class' => 'image')); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-9">
                            <h2><?php echo link_to_collection(); ?></h2>
                            <?php if (metadata('collection', array('Dublin Core', 'Description'))): ?>
                                <?php echo text_to_paragraphs(metadata('collection', array('Dublin Core', 'Description'), array('snippet'=>150))); ?>
                            <?php endif; ?>
                        </div>
                    
                        <?php fire_plugin_hook('public_collections_browse_each', array('view' => $this, 'collection' => $collection)); ?>
                    </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p><?php echo 'No collections added, yet.'; ?></p>
        <?php endif; ?>
    </div>
    <?php echo pagination_links(); ?>        

<?php fire_plugin_hook('public_collections_browse', array('collections'=> $collections, 'view' => $this)); ?>
</div>
<?php echo foot(); ?>
