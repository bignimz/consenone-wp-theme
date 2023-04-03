<?php
    // Template Name: Blog Page
?>

<!-- Add Header -->
<?php get_header('with-breadcrumb'); ?>

<div id="primary" class="content-area container row mx-auto my-5">
    <main id="main" class="site-main col-md-8 " role="main">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/content', 'blog-list'); ?>
            <?php endwhile; else: ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </main>
    <?php echo paginate_links(); ?>
    <!-- Sidebar -->
    <aside class="col-md-4 col-12 mx-auto mb-3">
        <?php get_sidebar(); ?>
    </aside>
</div>

    
<!-- Add Footer -->
<?php get_footer(); ?>
