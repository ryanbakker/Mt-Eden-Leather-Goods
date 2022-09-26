<?php
get_header();
?>

<div class="main-content">
    <?php get_template_part('./templates/content', 'page'); ?>
    <?php
    $args = array( 
        'post_type' => 'products', 
        'post_status' => 'publish', 
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    ); 

    $query = new WP_Query($args); 
    // var_dump($query) 
    ?>

    <section class="products-list term-collection-wrap">
        <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) :  $query->the_post(); ?>
        <div class="product">
            <a href="<?php echo the_permalink(); ?>">
                <?php echo the_post_thumbnail(); ?>
                <h3><?php the_title(); ?></h3>
                <h5>$<?php echo the_field('price'); ?></h5>
            </a>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    </section>
</div>

<?php
get_footer();
?>