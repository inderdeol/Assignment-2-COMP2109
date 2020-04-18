<?php
/**
 * The main template file
 *
 * @package Canada_furniture
 */

get_header('blog'); 
?>

	<div id="primary" class="content-area" style="margin:50px 0px;">
		<main id="main" class="site-main">
        <div class="container">
            <div class="row">
                <!--<div class="col-md-12 col-xs-12">
                    <?php
                        if ( is_home() && ! is_front_page() ) :
                            ?>
                            <header>
                                <h2 class="page-title screen-reader-text blue text-center"><?php single_post_title(); ?></h1>
                            </header>
                            <?php
                        endif;
                    ?>
                </div>-->
               
                <div class="col-md-9 col-lg-9 col-xs-12" style="margin-top:20px">
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
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom:70px !important; ">
                                
                               
                                            <div class="thumbmail-blog">
                                                <?php canada_furniture_post_thumbnail(); ?>
                                            </div>
                                            <a href="<?php the_permalink(); ?>"><?php echo '<h3 class="blue">'.get_the_title().'</h3>';?></a>
                                           
                                           <?php the_excerpt(); ?>
                                        
                                    
                               
                            </article><!-- #post-<?php the_ID(); ?> -->
                        <?php
                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                </div>
                <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top:20px">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
