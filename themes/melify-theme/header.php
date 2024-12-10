<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <nav class="navbar">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/melify-logo.png" alt="Melify Logo">
        </div>
        <ul class="nav-list">
            <li class="nav-item"><a class="nav-link nav-active" href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(home_url('/services')); ?>">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(home_url('/projects')); ?>">Projects</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(home_url('/connect')); ?>">Let's Connect</a></li>
        </ul>
    </nav>
</header>
