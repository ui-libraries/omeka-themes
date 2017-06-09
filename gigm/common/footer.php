</div><!-- end content -->

<footer role="contentinfo">

        <div id="custom-footer-text">
            <?php if ( $footerText = get_theme_option('Footer Text') ): ?>
            <p><?php echo $footerText; ?></p>
            <?php endif; ?>
            <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                <p><?php echo $copyright; ?></p>
            <?php endif; ?>
        </div>
<div id="custom-footer-image">
  <a href="https://outreach.uiowa.edu/"><img src="/germansiniowa/files/theme_uploads/logo1.png" alt="" width="20%"></a>
  <a href="https://obermann.uiowa.edu/"><img src="/germansiniowa/files/theme_uploads/logo2.png" alt="" width="20%"></a>
  <a href="https://international.uiowa.edu/"><img src="/germansiniowa/files/theme_uploads/logo3.png" alt="" width="20%"></a>
  <a href="http://www.humanitiesiowa.org/"><img src="/germansiniowa/files/theme_uploads/logo4.png" alt="" width="20%"></a>
  <a href="http://research.uiowa.edu/"><img src="/germansiniowa/files/theme_uploads/logo5.png" alt="" width="20%"></a>
  <a href="https://uima.uiowa.edu/"><img src="/germansiniowa/files/theme_uploads/logo7.png" alt="" width="20%"></a> 
  <a href="https://www.lib.uiowa.edu/studio"><img src="/germansiniowa/files/theme_uploads/logo8.png" alt="" width="20%"></a>
  <a href="https://oldcap.uiowa.edu/"><img src="/germansiniowa/files/theme_uploads/logo9.png" alt="" width="20%"></a>
 <!-- <a href="https://oldcap.uiowa.edu/"><img src="/germansiniowa/files/theme_uploads/logo10.eps" alt="" width="20%"></a>-->
</div>


    <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>

</footer>

</div><!--end wrap-->

<script type="text/javascript">
jQuery(document).ready(function () {
    Omeka.showAdvancedForm();
    Omeka.skipNav();
    Omeka.megaMenu("#top-nav");
    Seasons.mobileSelectNav();
});
</script>

</body>

</html>
