<?php get_header('404'); ?>
<div class="error">
    <div class="container">
        <div class="text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404-img.jpg" alt="" class="img-fluid">
        </div>
        <h2 class="error-title text-center mb-3"><span class="highlight">Sorry!</span> Page Not Found</h2>
        <p class="error-text text-center mb-5">We can't find that Page! The page you are looking for does not exists.</p>
        <div class="text-center">
            <a href="<?php bloginfo('url'); ?>" class="consen-btn mt-4">Back To Home</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>