      </div>
    </main>
    <footer role="contentinfo">
        <hr>
        <div class="container-fluid">
			<div class="col-sm-4 ui-logo">
			<a href="http://lib.uiowa.edu"><img src="<?php echo img('uidome-black.png'); ?>" alt="University of Iowa Libraries"/></a>
			</div>
			<div class="col-sm-4">
            <p class="text-center">
                <?php echo __('Copyright &copy; ') . date('Y') . ' ' . link_to_home_page() ?>
            </p>
			</div>
			<div class="col-sm-4 footer-menu">
			<?php echo public_nav_footer(); ?>
			</div>
        </div>
        <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>
    </footer>
</body>
</html>
