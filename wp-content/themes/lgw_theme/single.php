<?php get_header(); ?>
	<div id="content" class="container">
    	<div class="row">
        	<?php
				while( have_posts() ) : 
					the_post();
			?>
        	<div class="col-md-24 single_header match">
            	<?php 
					if ( has_post_thumbnail() ) {
						echo '<div class="has_thumb">';
							the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); 
							echo '<h1>'.get_the_title().'</h1>';
						echo '</div>';
					}  else {
						echo '<h1>'.get_the_title().'</h1>';	
					}
				?>
            </div>
            <div class="col-md-14">
            	<article>
                	<header>
                    	<?php tailored_post_meta(); ?>
                    </header>
					<?php the_content(); ?>
                </article>
            </div>
            <div class="col-md-1 col-md-offset-1 match divider"></div>
            <div class="col-md-8 match">
            	<?php get_sidebar(); ?>
            </div>
        	<?php endwhile; ?>
        </div>
    </div>
<?php get_footer(); ?>   