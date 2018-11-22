<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>

<div class="post-container" style="background-image:url('/wp-content/uploads/2018/11/www.knobcreek.com-1564585437648699.jpg');background-repeat:no-repeat;background-size:cover;">
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();?>
                    <div class="post-<?php echo get_the_ID();?> post-wrapper">
                        <div class="post-wrapper__image">
                            <img src="<?php echo $image[0]; ?>"/>
                        </div>
                        <div class="post-wrapper__description">
                            <div class="post-wrapper__description__content">
                                <div class="post__description--icon">
                                    <i class="fas fa-file"></i>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="post__description--date">
                                    <button><?php echo get_the_date( 'F j' ); ?></button>
                                </a>
                                <a href="<?php the_permalink(); ?>" class="post__description--title">
                                    <h4><?php the_title(); ?></h4>
                                </a>
                                <span><?php the_excerpt(); ?></span>
                                <a href="<?php the_permalink(); ?>" class="post__description--readmore">									<h4> Read More </h4>
                                </a>
                            </div> <!-- .post-wrapper__description__content -->
                        </div> <!-- .post-wrapper__description -->
                    </div> <!-- .post-wrapper -->
			<?php	endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
</div><!-- .post-container -->

<?php get_footer();
