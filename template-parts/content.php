<div class="container my-5">
    <?php $post_image = wp_get_attachment_url( get_post_thumbnail_id(), 'thumbnail' ); ?>
    <img src="<?php echo $post_image; ?>" class="card-img-top mb-4" alt="...">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <hr>
     <!-- Include Comments Template -->
     <?php if(comments_open()) : ?>
        <?php comments_template(); ?>
    <?php endif; ?>
</div>