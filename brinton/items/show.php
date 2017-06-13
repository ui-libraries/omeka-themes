<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?><?php 
$itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title')));
$itemDescription = strip_formatting(metadata('item', array('Dublin Core', 'Description')));
$itemCreator = strip_formatting(metadata('item', array('Dublin Core', 'Creator')));
$itemContributor = strip_formatting(metadata('item', array('Dublin Core', 'Contributor')));
$item = get_current_record('item');
$collection_id = $item->collection_id;
$collection = get_record_by_id('Collection', $collection_id);
$collectionTitleElement = $collection->getElementTexts('Dublin Core', 'Title');
$collectionTitle = $collectionTitleElement[0];
$title = $collectionTitle . ' | ' . $itemTitle;
?>

<div id="main">
		
		<div class="container">
		
			<div class="sixteen columns">
		
				<section id="single-project">
				
			    	<?php set_loop_records('files', get_current_record('item')->Files); ?>
					<?php foreach (loop('files') as $file): ?>
						<?php $fileTitle = strip_formatting(metadata('file', array('Dublin Core', 'Title')));                       
						$itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title'))); ?>

						<?php echo '<a href="">' . file_image('fullsize', array('alt' => $fileTitle)) .'</a>'; ?>

					<?php endforeach; ?>
					
					<div class="row">
					
						<div class="eleven columns alpha">
					
							<h1><span><?php echo $itemTitle; ?></span></h1>
						
							<p><span><?php echo $itemDescription; ?></span></p>
					
						</div>

					</div><!-- end .row -->
				
				</section><!-- end #single-project -->
			
			</div><!-- end .sixteen columns -->
					
		</div><!-- end .container -->
		
	</div><!-- end #main -->

<?php echo foot(); ?>
