<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Canada_furniture
 */

get_header('blog'); 
?>

	<div id="primary" class="content-area" style="margin-bottom:50px">
		<main id="main" class="site-main">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9 col-xs-12" style="margin-top:50px">
                    <?php
                    if ( have_posts() ) :

                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                             ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bttom:50px; ">
                                
                               
                                            <div class="thumbmail-blog">
                                                <?php canada_furniture_post_thumbnail(); ?>
                                            </div>
                                           <h3 class="blue"><?php the_title() ?></h3>
                                           
                                           <?php the_content(); ?>
                                        
                                    
                               
                            </article><!-- #post-<?php the_ID(); ?> -->
                        <?php
                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                </div>
                <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top:50px">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();