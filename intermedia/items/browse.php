<?php
   $pageTitle = __('Browse Items');
   echo head(array(
       'title' => $pageTitle,
       'bodyclass' => 'items browse',
   ));
   ?>
<div class="container">
   <div class="row">
      <?php foreach(loop('items') as $item): ?>
      <div class="row">
         <div class="col-lg-4 col-6 "><?php echo link_to_item(item_image('square_thumbnail'), array('class' => 'img-thumbnail img-fluid')); ?></div>
      </div>
      <?php endforeach; ?>
   </div>
</div>
<?php echo foot();