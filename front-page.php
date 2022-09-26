<?php
get_header();
?>

<!-- <?php $bgvideo = wp_get_attachment_url(40); ?> -->

<?php $bgvideo = wp_get_attachment_url(39); ?>

<?php $bgvideothumb = wp_get_attachment_url(36); ?>
<?php $logo = wp_get_attachment_url(35); ?>

<div class="front-page">
    <div class="front-page-banner">

        <video autoplay muted poster="<?php echo $bgvideothumb ?>">
            <source src="<?php echo $bgvideo ?>" type="video/mp4">
        </video>

        <div class="banner-content">
            <img src="<?php echo $logo ?>" alt="">
            <p>
                Welcome to Mt Eden Leather Goods. View our selection of the highest quality materials. Hand made by our
                professional craftsmen.
            </p>
            <div class="banner-content-btns">
                <a href="/goods" class="hvr-shutter-out">Our Products</a>
                <a href="/services" class="hvr-shutter-out">Our Services</a>
            </div>
        </div>
    </div>
    <div class="front-page-blocks">
        <?php get_template_part('./templates/content', 'page'); ?>
    </div>

</div>

<?php
get_footer();
?>