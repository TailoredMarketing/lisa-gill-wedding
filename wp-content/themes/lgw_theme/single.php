<?php get_header(); ?>
	<div id="content" class="container">
    	<div class="row">
        	<?php
				while( have_posts() ) : 
					the_post();
			?>
        	<div class="col-md-24">
            	<?php 
					if ( has_post_thumbnail() ) {
						echo '<div class="has_thumb">';
							the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); 
							echo '<h1>'.get_the_title().'</h1>';
						echo '</div>';
					}  
				?>
            </div>
        	<?php endwhile; ?>
        </div>
    </div>
<?php get_footer(); ?>   