<!-- Add Header -->
<?php get_header('custom'); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/content'); ?>
            <?php endwhile; else: ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </main>
</div>

<!-- Sidebar -->
<?php get_sidebar(); ?>
    
<!-- Add Footer -->
<?php get_footer(); ?>

