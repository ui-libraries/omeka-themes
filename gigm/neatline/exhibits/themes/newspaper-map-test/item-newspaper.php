<?php

/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<!-- Texts. -->
<p>
<?php echo 'City: '.metadata('item', array('Item Type Metadata', 'Town')); ?><br/>
<?php echo 'County: '.metadata('item', array('Item Type Metadata', 'County')); ?><br/>
<?php echo 'Language: '.metadata('item', array('Dublin Core','Language')); ?><br/>
<?php echo 'Published: '.metadata('item', array('Dublin Core','Date')); ?><br/>
<?php echo 'Circulation(1904): '.metadata('item', array('Item Type Metadata', 'Circulation')); ?><br/>
<?php echo 'Holdings: '.metadata('item', array('Item Type Metadata', 'Holdings')); ?><br/>
<?php echo 'Surviving Issues: '.metadata('item', array('Item Type Metadata', 'Surviving')); ?><br/>
<?php echo 'Notes: '.metadata('item', array('Dublin Core','Description')); ?><br/>
</p>
<!-- Files. -->

<?php if (metadata('item', 'has files')): ?>
  <?php echo item_image('fullsize', array('class'=>'masthead')); ?>
<?php endif; ?>





