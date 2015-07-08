<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
	<div id="content" class="container">
    	<div class="row">
        	<div class="col-md-16 ">
            	<?php 
					while( have_posts() ) : 
						the_post();
						the_content(); 
					endwhile;
				?>
            </div>
        	<div class="col-md-7 col-md-offset-1 ">
            
            </div>
        </div>
    </div>
<?php get_footer(); ?>   