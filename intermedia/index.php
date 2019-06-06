<?php
$carousel = get_theme_option('display_homepage_carousel');
if ($carousel) {
    queue_css_file(array(
        'vendor/owl-carousel/owl.carousel',
        'vendor/owl-carousel/owl.transitions',
        'owl.theme',
    ));
    queue_js_file('vendor/owl-carousel/owl.carousel.min');

    // Prepare the carousel with a dir inside images/carousel.
    $imagesDir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'carousel' . DIRECTORY_SEPARATOR;
    $images = is_dir($imagesDir) ? glob($imagesDir . '*.{png,jpg,gif}', GLOB_BRACE) : array();
    $images = array_map('basename', $images);
    if (empty($images)) {
        $carousel = false;
    }
}

echo head(array(
    'bodyid' => 'home',
));
?>
<?php if ($carousel): ?>
<div id="owl-carousel" class="owl-carousel">
    <?php foreach ($images as $image): ?>
    <div>
       <img src="<?php echo src($image, 'images/carousel'); ?>" class="img-responsive" alt="slide">
    </div>
    <?php endforeach; ?>
</div>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#owl-carousel").owlCarousel( {
            items: <?php echo count($images); ?>,
            singleItem: true,
            autoPlay: true,
            slideSpeed: 400,
            paginationSpeed: 1000,
            stopOnHover: false,
            transitionStyle: "fade"
        });
    });
</script>
<?php endif; ?>

<?php
if (get_theme_option('Display Grid Rotator')):
    $items = get_random_featured_items('100', true);
    displayGridRotator($items);
endif;
?>

<?php $homepageText = get_theme_option('Homepage Text'); ?>
<?php if ($homepageText): ?>
<div class="row home-features home-text" id="home-tagline"> <?php // start tagline ?>
    <div class="col-xs-12 col-sm-10">
        <?php /* <h1 id="tagline"><?php echo option('site_title'); ?></h1> */ ?>
        <?php echo $homepageText; ?>
    </div>
</div>
<?php endif; ?>

<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot();
