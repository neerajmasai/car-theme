<?php

/**
 * Single Post Template File
 * @package cartheme
 */

get_header();

?>
<!-- Display single car -->

<div class="container-single-post">
    <?php


    while (have_posts()) {

        the_post();
        // content template
        get_template_part("template-parts/content/content", '', [ 'container_classes' => 'content-single' ]);
    } ?>
</div>

<?php get_footer(); ?>