<?php

/**
 * Main Content Template File
 */
?>

<?php $container_classes = $args['container_classes']; ?>
<div <?php post_class($container_classes); ?>>
    <h2><?php the_title(); ?></h2>
    <?php
    the_content();
    ?>
    <?php if (in_array("content-single", explode(" ",$container_classes))) {
    ?> <p><?php the_excerpt(); ?></p>
    <?php } ?>

</div>