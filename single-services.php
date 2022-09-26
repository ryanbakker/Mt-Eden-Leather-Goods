<?php
get_header();
?>

<?php $guideone = wp_get_attachment_url(242); ?>
<?php $guidetwo = wp_get_attachment_url(250); ?>

<div class="single-product main-content">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="product-heading">
        <h2><?php the_title(); ?></h2>
    </div>

    <div class="product-gutenberg-content">
        <?php the_content() ?>
    </div>


    <?php endwhile; ?>
    <?php endif; ?>

    <div class="product-custom-item-block">
        <div class="product-custom-item-block-text">
            <h3>View our products</h3>
            <p>We offer hand made leather goods for online purchase today.</p>
            <a href="/products">Our Products</a>
        </div>
        <div class="product-custom-item-block-images">
            <img src="<?php echo $guideone ?>" alt="">
            <img src="<?php echo $guidetwo ?>" alt="">
        </div>
    </div>
</div>

<?php
get_footer();
?>