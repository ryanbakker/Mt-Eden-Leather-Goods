<?php
get_header();
?>

<div class="main-content">

    <div class="services-heading">
        <h2>Our Services</h2>
        <p>We offer custom, high quality products. Hand-made in our Mt Eden work shop. Make an enquiry with your
            specifications, and we’ll come back to you with the available options. Or come in-store to for an in person
            consultation.</p>
    </div>

    <?php
    $args = array( 
        'post_type' => 'services', 
        'post_status' => 'publish', 
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'DSC', 
    ); 

    $query = new WP_Query($args); 
    // var_dump($query) 
    ?>

    <section class="services-list term-collection-wrap">
        <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) :  $query->the_post(); ?>
        <div class="service-post">
            <?php echo the_post_thumbnail(); ?>
            <div class="service-post-text">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php echo the_permalink(); ?>">Find Out More</a>
            </div>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    </section>
    <?php get_template_part('./templates/content', 'page'); ?>

</div>

<?php
get_footer();
?>