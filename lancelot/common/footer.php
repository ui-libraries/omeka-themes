        </div><!-- end content -->
        <footer>
            <div class="row">
                <div id="footer-text" class="col-sm-9">
                <div id="search-container" class="col-sm-6" role="search">
                <?php echo search_form(array(
                    'show_advanced' => get_theme_option('Use Advanced Search'),
                    'submit_value' => __('Search'),
                    'form_attributes' => array('class' => 'form-search navbar-form navbar-right', 'role' => 'form'))); ?>
            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    
                </div>
                <div class="col-sm-3">                
                </div>
            </div>
            <div>
                <?php fire_plugin_hook('public_footer'); ?>
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
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php endif; ?>    

    <?php if (get_theme_option('Use Google Analytics') && $googleAccount = get_theme_option('Google Analytics Account')): ?>
    <?php echo common('analyticstracking.php', array('googleAccount' => $googleAccount)); ?>
    <?php endif; ?>
</body>
</html>
