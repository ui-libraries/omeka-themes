<?php

echo head(array(
    'bodyid' => 'home',
));
?>

<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot();