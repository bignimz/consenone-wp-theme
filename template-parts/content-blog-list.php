<div class="container">
    <div class="post-card card shadow-sm mb-4">
        <div class="card-image">
            <?php $post_image = wp_get_attachment_url( get_post_thumbnail_id(), 'thumbnail' ); ?>
            <img src="<?php echo $post_image; ?>" class="card-img-top mb-4" alt="...">
            <div class="post-date"><?php echo get_the_date(); ?></div>
        </div>
        <div class="card-body">
            <h3 class="card-title mb-3">
                <a href="<?php the_permalink($post); ?>" class="nav-link"><?php the_title(); ?></a>
            </h3>
            <p class="card-text"><?php the_excerpt(); ?></p>
        </div>
        <div class="card-footer">
            <span class="cf-text">
                <i class="fa fa-user" aria-hidden="true"></i> By: <?php the_author(); ?>
            </span> 
            <span class="cf-text">
                <i class="fa fa-comment" aria-hidden="true"></i> Comments: 
                <?php if(have_comments() || comments_open()) : ?>
                    <?php echo get_comments_number(); ?> 
                <?php else: ?>
                    0 comments
                <?php endif;?>
            </span>
            <!-- <span class="cf-text">Categories: <?php echo the_category();?></span> -->
        </div>
    </div>
    
</div>