<?php
/**
 * @package Canada_furniture
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                </div>
            </div>
        </div>
		<div class="site-info">
			<?php dynamic_sidebar( 'footer-copyright' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
    <SCRIPT src="<?php echo get_bloginfo( 'template_directory' );?>/assets/javascript/custom.js"></script>
	<script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/javascript/jquery-ui.js"></script>
  
    <script>
        
        jQuery("#inquiry_form .model-submit").on('click',function(){
            
            if(jQuery("#name").val() == '' && jQuery("#number").val() == '' && jQuery("#email").val() == ''){
                jQuery("#name-req").text('Please enter your name');
                jQuery("#number-req").text('Please enter your Number');
                jQuery("#email-req").text('Please enter your Email');
                return false;
            }
            else if(jQuery("#name").val() == ''){
                jQuery("#name-req").text('Please enter your name');
                return false;
            }
            else if(jQuery("#number").val() == ''){
                jQuery("#number-req").text('Please enter your Number');
                return false;
            }
            else if(jQuery("#email").val() == ''){
                jQuery("#email-req").text('Please enter your Email');
                return false;
            }
            var data = jQuery("#inquiry_form").serialize();
            var url='<?php echo site_url(); ?>';
            jQuery.ajax({
                type : "post",
                url : url+'/wp-admin/admin-ajax.php',
                data : {
                    action: "canada_furniture_enquiry", 
                    name : jQuery("#name").val(),
                    email : jQuery("#email").val(),
                    number : jQuery("#number").val(),
                    product : jQuery("#enq_product").val(),
                    message : jQuery("#message").val(),
                },
                success: function(res) {
                    if(res == 1){
                       alert('Your inquiry has been sent');
                    }else{
                       alert('Your inquiry has been sent');
                    }
                     
                 }
            });
            return false;
        });
        function inquire_modal(title){
            jQuery("#name-req").text('');
            jQuery("#number-req").text('');
            jQuery("#email-req").text('');
            
            jQuery('#enq_product').val(title);
        }
    </script>
</body>
</html>
