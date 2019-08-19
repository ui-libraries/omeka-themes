<?php
$pageTitle = metadata($item, array('Dublin Core', 'Title'));
echo head(array(
    'title' => $pageTitle,
    'bodyclass' => 'items show',
));
?>
<div class="container">
	<div class="row pt-5 pb-5 home">
		<div id="item-col-left" class="col-sm-6 col-12 mb-4">
            <div class="row">
                <h2><?php echo $pageTitle; ?></h2>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr />
                    <h4>Bibliographic Citation</h4>
                    <div class="element-text"><?php echo metadata($item,'citation',array('no_escape' => true)); ?></div>
                </div>
            </div>   
            
			
		</div>
		<div id="item-col-right" class="col-sm-6 col-12">
			<div>
            <?php 
                $files = $item->getFiles();
                $type = $files[0]['metadata'];
                if ($type == '{"mime_type":"application\/pdf"}') {
                    echo files_for_item ();                        
                } else {
                    fire_plugin_hook('public_items_show', array('item' => $item));
                }
            ?>
                <?php echo all_element_texts($item); ?>		
			</div>
		</div>
    </div>
    <div class="container">
      <div class="row">         
      </div>
      <div class="row">
         <div class="col-sm-3">
            <ul>
                <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
            </ul>
         </div>
         <div class="col-sm">
         </div>
         <div class="col-sm">           
         </div>
         <div class="col-sm">
         </div>
         <div class="col-sm-3">
            <ul>
               <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
            </ul>
         </div>
      </div>
   </div>
</div>

<?php echo foot();
