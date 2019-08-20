<?php
$pageTitle = __('Search') . ' ' . __('(%s total)', $total_results);
echo head(array(
    'title' => $pageTitle,
    'bodyclass' => 'search',
));
$searchRecordTypes = get_search_record_types();
?>
<div id="primary">
<h1><?php echo $pageTitle; ?></h1>

<?php if ($total_results): ?>
<?php if ($paginationLinks = pagination_links()): ?>
    <div id="pagination-top">
        <?php echo $paginationLinks; ?>
    </div>
<?php endif; ?>

<div id="search-results">
    <?php $filter = new Zend_Filter_Word_CamelCaseToDash;
    foreach (loop('search_texts') as $searchText):
    $record = get_record_by_id($searchText['record_type'], $searchText['record_id']);
    $recordType = $searchText['record_type'];
    set_current_record($recordType, $record);
    $recordTypeAttrib = strtolower($filter->filter($recordType));
    ?>
    <div class="row">
        <div id="search-left-col" class="col-sm-6 col-12 mb-4">
        <p class="help-block"><?php echo $searchRecordTypes[$recordType]; ?></p>
            <a href="<?php echo record_url($record, 'show'); ?>"><?php echo $searchText['title'] ? $searchText['title'] : __('[Unknown]'); ?></a>
            <?php if (in_array(get_class($record), array('Collection', 'Item', 'File')) && $description = metadata($record, array('Dublin Core', 'Description'), array('snippet' => 250))): ?>
            <div class="<?php echo $recordTypeAttrib; ?>-description">
                <?php echo $description; ?>
            </div>
            <?php endif; ?>
        </div>
        <div id="search-right-col" class="col-sm-6 col-12">
            <?php if ($recordImage = record_image($recordType, 'square_thumbnail', array('class' => 'image img-responsive'))): ?>
                <?php echo link_to($record, 'show', $recordImage, array('class' => $recordTypeAttrib . '-img')); ?>
            <?php else: ?>
            <div class="<?php echo $recordTypeAttrib; ?>-img">
                <div class="image none"></div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <hr />
    <?php endforeach; ?>
</div>
<?php if ($paginationLinks): ?>
    <div id="pagination-bottom">
        <?php echo $paginationLinks; ?>
    </div>
<?php endif; ?>
<?php else: ?>
<div id="no-results">
    <p><?php echo __('Your query returned no results.');?></p>
</div>
<?php endif; ?>
</div>
<?php echo foot();
