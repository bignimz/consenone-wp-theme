<?php
    // Template Name: Front Page
?>

<!-- Add Header -->
<?php get_header(); ?>

<div id="primary" class="content-area home-content">
    <main id="main" class="site-main" role="main">
        <?php echo get_template_part('template-parts/content', 'values-cards'); ?>
        <?php echo get_template_part('template-parts/content', 'intro'); ?>
        <?php echo get_template_part('template-parts/content', 'what-wedo'); ?>
        <?php echo get_template_part('template-parts/content', 'choose-us'); ?>

    </main>
</div>

    
<!-- Add Footer -->
<?php get_footer(); ?>
