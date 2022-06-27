<?php

/**
 * Front Page Template File
 * @package cartheme
 */

get_header();

?>
<!-- Display all cars -->

<div class="container">
    <h1 class="site-title">Cars</h1>
    <?php

    $cars = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'car'
    ));

    while ($cars->have_posts()) {

        $cars->the_post();

        // content template
    ?>
        <a href="<?php the_permalink() ?>"><?php get_template_part("template-parts/content/content", '', [ 'container_classes' => 'content-all' ]); ?></a>

    <?php } ?>
</div>

<?php get_footer(); ?>