<?php 
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

<?php echo head(array('title' => $title, 'bodyclass' => 'items show')); ?>

<div class="author-head">
    <div class="container">
        <h1><?php echo $itemTitle; ?></h1>
        <h4><?php echo $itemCreator; ?></h4>              
        <div class="image">
            <img srcset="<?php echo WEB_ROOT; ?>/themes/dada/images/bg_red.png 1x, <?php echo WEB_ROOT; ?>/themes/dada/images/bg_red@2x.png 2x" alt="">
        </div>
        <div class="desc">
            <p><?php echo $itemDescription; ?></p>
            <p><?php echo $itemContributor; ?></p>  
        </div>
    </div>
</div>
<div class="covers">
    <div class="container">        
        <section>
            <?php set_loop_records('files', get_current_record('item')->Files); ?>
            <?php foreach (loop('files') as $file): ?>
                <?php $fileTitle = strip_formatting(metadata('file', array('Dublin Core', 'Title')));                       
                $itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title'))); ?>
                <article>
                    <?php echo '<a href="' . WEB_ROOT . '/files/show/' . $file->id . '">' . file_image('square_thumbnail', array('alt' => $fileTitle)) .'</a>'; ?>
                    <div class="text">
                        <h4><?php echo $fileTitle; ?></h4>
                        <h6><?php echo '<a href="' . WEB_ROOT . '/files/show/' . $file->id . '">View</a>' ?></h6>
                    </div>
                </article>
            <?php endforeach; ?>            
        </section>        
    </div>
</div>


