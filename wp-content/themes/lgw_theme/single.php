<?php get_header(); ?>
	<div id="content" class="container">
    	<div class="row">
        	<?php
				while( have_posts() ) : 
					the_post();
			?>
        	<div class="col-md-24 ">
            	<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); 
					}  
				?>
            </div>
        	<?php endwhile; ?>
        </div>
    </div>
<?php get_footer(); ?>   