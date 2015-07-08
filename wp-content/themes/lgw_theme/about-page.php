<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>
	<div id="content" class="container">
    <?php
		while( have_posts() ) : 
			the_post();
	?>
    	<h1><?php the_title(); ?></h1>
    	<div class="row">
        	<div class="col-md-9">
            	<?php 
					the_content(); 
				?>
            </div>
        	<div class="col-md-6">
            	<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive about_portrait' ) ); ?>
            </div>
            <div class="col-md-7 col-md-offset-1">
            	<?php dynamic_sidebar( 'contact_sidebar' ); ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
<?php get_footer(); ?>   