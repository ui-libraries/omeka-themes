<?php
$collectionTitle = strip_formatting(metadata('collection', array('Dublin Core', 'Title')));
$collectionDescription = strip_formatting(metadata('collection', array('Dublin Core', 'Description')));
$collectionCreator = strip_formatting(metadata('collection', array('Dublin Core', 'Creator')));

?>

<?php echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show')); ?>

	<div id="main">
	
		<section id="page-feature-image">
		
			<div class="row">
				
				<a href=""><img src="<?php echo WEB_ROOT; ?>/themes/brinton/images/brinton_negative.jpg" alt="" /></a>				
		
			</div><!-- end .row -->
		
		</section><!-- end #page-feature-image -->
		
		<div class="container">			
		
			<section id="portfolio-items">
				
				<?php foreach (loop('items') as $item): ?>                       
                    <?php $itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title'))); ?>
                    <?php $itemSource = metadata('item', array('Dublin Core', 'Source')); ?>
                    <?php $itemFormat = metadata('item', array('Dublin Core', 'Format')); ?>
                    <div class="four columns">					
                        <div class="project-item">
                            <?php // echo link_to_item(item_image('square_thumbnail', array('alt' => $itemTitle))); ?>
                            <?php echo item_image('square_thumbnail'); ?>
                            <div class="overlay">
                                <div class="details">                                    
                                    <h2><?php echo $itemTitle; ?></h2>
                                    <h6>
                                    <?php if ($collectionTitle == "Films" || $itemFormat == "pdf") {
                                        echo $itemSource;
                                    } else {
                                        echo link_to_item("View", array('class'=>'read-more-btn'));
                                    } ?>
                                    </h6>                                    
                                </div>
                            </div>
                        </div><!-- end .project-item -->				
                    </div><!-- end .four columns -->
                <?php endforeach; ?>    				
									
			</section><!-- end #portfolio-items -->
		
		</div><!-- end .container -->
		
	</div><!-- end #main -->

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

<?php echo foot(); ?>