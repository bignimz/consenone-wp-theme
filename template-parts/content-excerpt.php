<div class="container my-5">
    <?php $post_image = wp_get_attachment_url( get_post_thumbnail_id(), 'thumbnail' ); ?>
    <img src="<?php echo $post_image; ?>" class="card-img-top mb-4" alt="...">
    <h2><a href="<?php echo get_the_permalink($post); ?>" class="nav-link"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    <hr>
</div>