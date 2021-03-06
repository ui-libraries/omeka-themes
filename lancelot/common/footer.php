        </div><!-- end content -->
    </div>
    
    <div class="container-fluid footer-decoration"></div>
	<footer class="container-fluid">
	    <div class="container">
    	    <ul class="nav footer-nav mb-4 justify-content-center">
    	        <li class="nav-item"><a class="nav-link" href="<?php echo WEB_ROOT; ?>/exhibits/show/resources/manuscripts">Manuscripts</a></li>
    	        <li class="nav-item"><a class="nav-link" href="<?php echo WEB_ROOT; ?>/exhibits/show/resources/periodicals">Periodicals</a></li>
    	        <li class="nav-item"><a class="nav-link" href="<?php echo WEB_ROOT; ?>/exhibits/show/resources/criticism">Criticism</a></li>
    	        <li class="nav-item"><a class="nav-link" href="<?php echo WEB_ROOT; ?>/exhibits/show/resources/indices">Indices</a></li>
    	        <li class="nav-item"><a class="nav-link" href="<?php echo WEB_ROOT; ?>/aboutmorrisarchive">About the Archive</a></li>
    	        <li class="nav-item"><a class="nav-link" href="<?php echo WEB_ROOT; ?>/life">Morris’s Life</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo WEB_ROOT; ?>/items/search">Advanced Search</a></li>
                <!--
                <div id="searchbox" class="" role="search">

                    <?php /* echo search_form(array(
                        'show_advanced' => get_theme_option('Use Advanced Search'),
                        'submit_value' => __('Search'),
                        'form_attributes' => array('class' => 'form-inline ml-auto search-footer', 'role' => 'form'))); */
                    ?>
                </div> -->
    	    </ul>
    	    <div class="row">
        	    <div class="mx-auto">
                    <a href="https://williammorrissociety.org/"><img src="<?php echo img('william-morris-society.png'); ?>" alt="William Morris Society" width="87"></a>
            	    <a href="http://www.lib.uiowa.edu/"><img src="<?php echo img('univ-iowa-libraries.png'); ?>" alt="The University of Iowa Libraries" width="150"></a>
            	    <a href="http://www.lib.uiowa.edu/studio/"><img src="<?php echo img('studio.png'); ?>" alt="The Studio" width="171"></a>
        	    </div>
    	    </div>
	    </div>
    </footer>


    <?php
    // Omeka 2.4 and Bootstrap 3.3.7 use the same jQuery (1.12), so it is not
    // recalled.
    ?>    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

    <?php if (get_theme_option('Use Google Analytics') && $googleAccount = get_theme_option('Google Analytics Account')): ?>
    <?php echo common('analyticstracking.php', array('googleAccount' => $googleAccount)); ?>
    <?php endif; ?>
    <script>
        $('ul').click(function(e) {
            e.stopPropagation();
            $(this).children().slideToggle();
        })
    </script>
</body>
</html>
