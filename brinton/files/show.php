<?php $fileTitle = metadata('file', array('Dublin Core', 'Title')); ?>
<?php $fileDescription = metadata('file', array('Dublin Core', 'Description')); ?>
<?php echo head(array('title' => $fileTitle, 'bodyclass'=>'files show primary-secondary')); ?>

<div id="main">
		
		<div class="container">
		
			<div class="sixteen columns">
		
				<section id="single-project">
				
			    	<?php echo file_markup($file, array('imageSize'=>'fullsize')); ?>
					
					<div class="row">
					
						<div class="eleven columns alpha">                            
                            <?php //$fileDescription = metadata('file', 'display_description'); ?>
					
							<h1><span><?php echo $fileTitle; ?></span></h1>
						
							<p><span><?php echo $fileDescription; ?></span></p>
					
						</div>

					</div><!-- end .row -->
				
				</section><!-- end #single-project -->
			
			</div><!-- end .sixteen columns -->
					
		</div><!-- end .container -->
		
	</div><!-- end #main -->


<?php echo foot();?>
