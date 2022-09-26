<!-- End of webpage body -->

<?php $logo = wp_get_attachment_url(35); ?>

<footer>
    <div class="footer-logo">
        <a href="/"><img src="<?php echo $logo ?>" alt=""></a>
    </div>
    <div class="footer-content">
        <ul>
            <?php wp_nav_menu([
                'theme_location' => 'menu-footer',
                'container' => false,
                'items_wrap' => '%3$s',
            ]); ?>
            <?php echo do_shortcode('[ivory-search id="285" title="Default Search Form"]'); ?>
        </ul>

    </div>
</footer>

</div>
<script src="https://kit.fontawesome.com/39a96d46b8.js" crossorigin="anonymous"></script>
<!-- End of app rapper -->
<?php wp_footer(); ?>
</body>

</html>