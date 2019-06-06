</div><!-- end content -->
<footer>
   <div class="container">
      <div class="row">
      </div>
      <div class="row">
        <div class="col-sm">
           
         </div>
         <div class="col-sm">
           
         </div>
         <div class="col-sm">
            <img id="footer-logo" src="<?php echo img('ui-logo.png'); ?>">
            <br>
            Copyright 2019, University of Iowa Libraries
         </div>
         <div class="col-sm">
            
         </div>
         <div class="col-sm">
           
         </div>
      </div>
   </div>
</footer>
</div><!--end wrap-->
<?php
   // Omeka 2.4 and Bootstrap 3.3.7 use the same jQuery (1.12), so it is not
   // recalled.
   ?>
<?php if (get_theme_option('Use Internal Bootstrap')) :?>
<script src="<?php echo src('bootstrap.min', 'javascripts', 'js'); ?>"></script>
<?php else: ?>
<?php endif; ?>
<?php
   if (is_current_url('/')):
       $displayGridRotator = (boolean) get_theme_option('Display Grid Rotator');
       if ($displayGridRotator):
           echo js_tag('modernizr-custom');
           echo js_tag('jquery.gridrotator');
       endif;
   else:
       $displayGridRotator = false;
   endif;
   ?>
<script type="text/javascript">
   jQuery(document).ready(function () {
       <?php if (get_theme_option('Use Advanced Search')): ?>
       Omeka.showAdvancedForm();
       <?php endif; ?>
       Omeka.dropDown();
       <?php if ($displayGridRotator): ?>
       Omeka.displayGridRotator();
       <?php endif; ?>
   });
</script>
<?php if (get_theme_option('Use Google Analytics') && $googleAccount = get_theme_option('Google Analytics Account')): ?>
<?php echo common('analyticstracking.php', array('googleAccount' => $googleAccount)); ?>
<?php endif; ?>
</body>
</html>