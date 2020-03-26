<?php
$fileTitle = metadata('file', 'display_title');

if ($fileTitle != '') {
    $fileTitle = '&quot;' . $fileTitle . '&quot; ';
} else {
    $fileTitle = '';
}
//$fileTitle = __('File #%s', metadata('file', 'id')) . $fileTitle;
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
            <?php echo file_markup($file, array('imageSize' => 'fullsize', 'class' => 'img-responsive')); ?>
        </div>
    </div>
</div><?php //end primary ?>
<?php echo foot();
