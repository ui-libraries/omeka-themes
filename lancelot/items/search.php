<?php
$pageTitle = __('Simple Search');
echo head(array(
    'title' => $pageTitle,
    'bodyclass' => 'items advanced-search',
    'bodyid' => 'items',
));
?>
<div id="primary">
    <div class="row page-header">
        <div class="col-xs-12">
            <h1><span class="glyphicon glyphicon-search"></span> <?php echo $pageTitle; ?></h1>
        </div>
    </div>
    <br />

    <?php echo search_form(array('show_advanced' => true, 'form_attributes'=> array('role'=>'search'))); ?>
    <?php if (isset($title)) : ?>
        <h1 id="content-heading" class="section-title" title="<?php echo $title; ?>"><?php echo $title ?></h1>
    <?php endif; ?>
    <?php echo $this->partial('items/search-form.php', array('formAttributes' => array('id' => 'advanced-search-form'))); ?>
</div><?php // end primary. ?>
<?php echo foot();
