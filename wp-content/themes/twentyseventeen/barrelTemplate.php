<?php
/* Template Name: Barrel Template Page */

get_header(); ?>
<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="post">
                <h2 class="post__header">
                    Recent Articles
                </h2>
                <?php
                // the query
                $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                <?php if ( $wpb_all_query->have_posts() ) : ?>
                    <ul>
                        <!-- the loop -->
                        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                            <li id="card" onmouseover="addClass(this,'post--hover');" onmouseout="removeClass(this,'post--hover');">
                                <a href="<?php the_permalink(); ?>" class="post__link">
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <img class="lazy" src="/wp-content/uploads/2018/11/loader.gif" data-src='<?php echo $image[0]; ?>' style='background-position:right center;'/>
                                    <!-- 								<span style="background-image:url('<?php echo $image[0]; ?>');background-position:right center">
								</span> -->
                                </a>
                                <div class="post__description">
                                    <div class="post__description--icon">
                                        <i class="fas fa-file"></i>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="post__description--date">
                                        <button><?php echo get_the_date( 'F j' ); ?></button>
                                    </a>
                                    <a href="<?php the_permalink(); ?>" class="post__description--title">
                                        <h4><?php the_title(); ?></h4>
                                    </a>
                                    <a href="<?php the_permalink(); ?>" class="post__description--readmore">								<h4> Read More </h4>
                                    </a>
                                </div>
                            </li>
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                    </ul>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div> <!-- #post -->
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();

?>
