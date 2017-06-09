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
<?php echo '<i>'.metadata('item', array('Dublin Core','Source')).'</i>, '.metadata('item', array('Dublin Core','Coverage')); ?>
<br/>
<?php echo metadata('item', array('Dublin Core','Date')); ?>
<br/> <?php echo 'Theme:  '.metadata('item', array('Dublin Core','Subject')); ?>
</p>

<hr/>

<div class="feature-container">
<!-- Files. -->
	<div class="feature-image">
<?php if (metadata('item', 'has files')): ?>
  <?php echo item_image('fullsize'); ?>
<?php endif; ?>
	</div>
	<div class="feature-translation">
<?php echo metadata('item', array('Dublin Core','Description')); ?>
	</div>
</div>


