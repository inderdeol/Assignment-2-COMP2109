<?php

 /*template name: Canada Furniture */
 

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            
            <div class="container" style="margin-bottom:50px;">
                <h2 style="margin:50px 0px;color:#e57200;text-align:center">Canada Furniture</h2>
                <?php echo do_shortcode('[showcanadafurniture]');?>
            </div>
        </main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();