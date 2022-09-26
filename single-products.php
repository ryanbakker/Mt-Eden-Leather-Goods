<?php
get_header();
?>

<?php $guideone = wp_get_attachment_url(132); ?>
<?php $guidetwo = wp_get_attachment_url(131); ?>

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
            <h3>Custom items</h3>
            <p>View our customisable products we offer for more specialised leather goods.</p>
            <a href="/services">View Services</a>
        </div>
        <div class="product-custom-item-block-images">
            <img src="<?php echo $guideone ?>" alt="">
            <img src="<?php echo $guidetwo ?>" alt="">
        </div>
    </div>

    <hr />

    <div class="comments-block">

        <?php 
    if (comments_open()) {
        comments_template();
    };
    ?>
        <?php 
     $args =  array(
     'next_text' => '<p class="next">' . '</p><p class="post-title">%title <i class="fa-solid fa-caret-right"></i></p>' . '', 
     'prev_text' => '<p class="prev">' . '</p><p class="post-title"><i class="fa-solid fa-caret-left"></i> %title</p>' . '', 
    ); 

     echo "<div class='next_prev_wrapper'>"; 
     the_post_navigation($args); 
     echo "</div>"; 
     ?>
    </div>
</div>

<?php
get_footer();
?>