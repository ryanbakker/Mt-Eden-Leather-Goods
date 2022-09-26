<!doctype html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;400;500&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="VBmthGRrQk3vLAuC07gDevjkcHvPECXcEMP2K7f3mL0" />

</head>

<?php $logo = wp_get_attachment_url(35); ?>

<!-- Start of web page body -->

<body <?php body_class() ?>>

    <div class="app">

        <!-- Webpage header -->
        <header>

            <nav class="desktop-navbar">
                <a href="/"><img src="<?php echo $logo ?>" alt=""></a>
                <ul>
                    <?php wp_nav_menu([
                    'theme_location' => 'menu-header',
                    'container' => false,
                    'items_wrap' => '%3$s',
                ]); ?>
                </ul>
            </nav>

        </header>