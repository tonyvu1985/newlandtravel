<?php
/**
 * Template Name: Landing Page
 *
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <?php echo do_shortcode("[metaslider id=119]") ?>
            <div style="clear:both; height: 60px"></div>
            <!-- category=X&numberposts=X -->
            <?php $posts = get_posts("numberposts=12"); ?>
            <?php $i = 1;?>
            <?php if($posts) : ?>
                <?php foreach( $posts as $post ) : setup_postdata($post); ?>
                    <div class="latestpost">
                        <?php the_post_thumbnail();  ?>
                        <h6><a href="<?php echo get_permalink($post->ID); ?>" ><?php echo $post->post_title; ?></a></h6>
                    </div>
                    <?php if($i % 3 == 0): ?>
                            <div style="clear:both"></div>
                    <?php endif;?>
                    <?php $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>	

        <div class="special-offer">
        </div>
                            
        </div><!-- #content -->
        
        
        
    </div><!-- #primary -->
    
   
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
