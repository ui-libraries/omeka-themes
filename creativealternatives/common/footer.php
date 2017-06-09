</div><!-- end content -->

<footer>

    <div id="footer-content" class="center-div">
        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>
        <a href="http://lib.uiowa.edu/studio"><img src="/creativealternatives/files/theme/DSPS.png"/></a>
		<p class="credits"><?php echo __('<a class="designed" href="http://emedara.com">Parent theme designed by Emedara Studio</a> <a class="powered" href="http://omeka.org">Proudly powered by Omeka</a>'); ?></p>

    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
               Omeka.dropDown();
    });
</script>

</body>

</html>
