<?php
$fileTitle = metadata('file', 'display_title');

echo head(array(
    'title' => $fileTitle,
    'bodyclass' => 'files show primary-secondary',
)); ?>
<div id="primary">
    <div class="row page-header">
        <div class="col-xs-12">
            <h1><span class="glyphicon glyphicon-file"></span> <?php echo $fileTitle; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p><?php echo __('Attached to item "%s".', link_to_item(null, array(), 'show', $file->getItem())); ?>
            <div id="file-metadata">
                <?php echo all_element_texts('file'); ?>
            </div>           
        </div>
        <div class="col-md-6">
        <a href="<?php echo WEB_ROOT . '/files/original/' . $file->filename; ?>" target="_blank" ><?php echo file_image('original', array('class' => 'img-fluid'), $file); ?></a>        
        </div>
    </div>
    <div class="row">
         <div class="col-sm">
            <ul>
               <!--  <li id="previous-item" class="previous"><a href="<?php //echo WEB_ROOT . '/items/show/' . $file->getItem()->id; ?>">Return to Item</a> -->       
            </ul>
         </div>
         <div class="col-sm">
         </div>
         <div class="col-sm">           
         </div>
         <div class="col-sm">
         </div>
         <div class="col-sm">           
         </div>
      </div>
</div><?php //end primary ?>
<?php echo foot();
