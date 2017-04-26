<?php
    $fileTitle = metadata('file', array('Dublin Core', 'Title'));
    

    $item_id = metadata('file', 'item_id');
    $item = get_record_by_id('item', $item_id);
    set_current_record('item', $item);
    $fileId = metadata('file', 'id');

    $paginationUrls = array();
    $paginationUrls['prev'] = '';
    $paginationUrls['next'] = ''; 
    $files = get_records('file', array('item_id'=>$item_id), 999);
    foreach ($files as $filez) {
        
        $fileID = $filez->id;
        if (isset($current)) {
            $paginationUrls['next'] = WEB_ROOT . '/files/show/' . $fileID;
            break;
        }
        if ($fileID == $fileId) {
            $current = true;
        } else {
            $paginationUrls['prev'] = WEB_ROOT . '/files/show/' . $fileID;
        }
    }
?>


<?php echo head(array('title' => $fileTitle, 'bodyclass'=>'files show primary-secondary')); ?>

<div class="author-head">
    <div class="container">
        <h1><?php echo $fileTitle; ?></h1>        
        <div class="image">
            <img srcset="<?php echo WEB_ROOT; ?>/themes/dada/images/bg_red.png 1x, <?php echo WEB_ROOT; ?>/themes/dada/images/bg_red@2x.png 2x" alt="">
        </div>        
    </div>
</div>
<div class="covers-details">
    <div class="container">
        <div class="pagination">
            <ul>
                <li class="active"><a href="<?php echo $paginationUrls['prev']; ?>">previous page</a></li>
                <li><a href="<?php echo $paginationUrls['next']; ?>">NEXT PAGE</a></li>
                <li class="active"><?php echo link_to_item("FULL ISSUE"); ?></li>                
            </ul>
        </div>
        <div class="image">
            <?php echo file_markup($file, array('imageSize'=>'fullsize')); ?>
        </div>
        <div class="pagination">
            <ul>
                <?php echo $this->id; ?>                
                <li class="active"><a href="<?php echo $paginationUrls['prev']; ?>">previous page</a></li>
                <li><a href="<?php echo $paginationUrls['next']; ?>">NEXT PAGE</a></li>
                <li class="active"><?php echo link_to_item("FULL ISSUE"); ?></li>
            </ul>
        </div>
    </div>
</div>
</div>

<?php echo foot();?>
