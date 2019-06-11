<?php
   $pageTitle = metadata($item, array('Dublin Core', 'Title'));
   echo head(array(
       'title' => $pageTitle,
       'bodyclass' => 'items show',
   ));
   ?>
<div id="primary">
   <div class="row page-header">
      <div class="col-xs-12">
         <h1><span class="glyphicon glyphicon-book"></span> <?php echo $pageTitle; ?></h1>
      </div>
   </div>
   <?php if ($selectedMetadata = get_theme_option('Display Preselected Metadata')):
      echo common('show-selected-metadata', array('item' => $item));
      else:
      // TODO Limit fields to display.
      // $fieldsToDisplay = get_theme_option('Display Dublin Core Fields');
      ?>
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-xs-12">
               <?php echo all_element_texts($item); ?>
            </div>
         </div>
         <!-- The following prints a citation for this item. -->
         <div class="row">
            <div class="col-xs-12 citation-block">
               <hr />
               <h4><span class="fa fa-retweet fa-lg"></span> <?php echo __('Citation'); ?></h4>
               <div class="element-text"><?php echo metadata($item,'citation',array('no_escape' => true)); ?></div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12">
               <hr />
               <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
            </div>
         </div>
      </div>
      <!-- The following returns all of the files associated with an item. -->
      <div id="itemfiles" class="col-md-6">
         <?php if (metadata($item, 'has files')): ?>           
         <div class="element-text"><?php echo custom_files_for_item(
            // This might be easier for future customization: https://omeka.org/codex/Display_Specific_Metadata_for_an_Item_File
            //options
            array(
                'imageSize' => 'fullsize',
                'linkToFile' => false,
                'linkToMetadata' => true,
                'imgAttributes' => array('class' => 'img-responsive', 'caption' => false),
            ),
            // wrapper
            array('class' => 'file-image'),
            null);
            ?></div>
         <?php endif; ?>
      </div>
   </div>
   <?php endif; ?>
   <br />
   <div class="container">
      <div class="row">         
      </div>
      <div class="row">
         <div class="col-sm">
            <ul>
                <li id="previous-item" class="previous"><?php echo link_to_previous_item_show('<img class="arrows" src="/iri/themes/intermedia/images/prev_yellow.png"> Previous'); ?></li>
            </ul>
         </div>
         <div class="col-sm">
         </div>
         <div class="col-sm">           
         </div>
         <div class="col-sm">
         </div>
         <div class="col-sm">
            <ul>
               <li id="next-item" class="next"><?php echo link_to_next_item_show('Next <img class="arrows" src="/iri/themes/intermedia/images/next_yellow.png">'); ?></li>
            </ul>
         </div>
      </div>
   </div>
</div>
<?php //end primary ?>
<?php echo foot();