        </article>

        <footer role="contentinfo">
		
			<div id="ui-brand">
				<a href="http://lib.uiowa.edu"><img src="/waverly/themes/waverly/images/ui-logo.png" alt="University of Iowa Libraries" title="University of Iowa Libraries"/></a>
			</div>

            <nav id="bottom-nav">
                <?php echo public_nav_main(); ?>
            </nav>

            <div id="footer-text">
                <?php echo get_theme_option('Footer Text'); ?>
                <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                    <p><?php echo $copyright; ?></p>
                <?php endif; ?>
            </div>

            <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

        </footer>

    </div><!-- end wrap -->

    <script>
    
    jQuery(document).ready(function() {
        
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu('#top-nav');
    });
    </script>
</body>
</html>
