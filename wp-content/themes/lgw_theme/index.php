<?php get_header(); ?>
	<div id="content" class="container">
    	<?php 
			$i=0;
			while( have_posts() ) : 
				the_post();
		?>
            <?php if( $i == 0 || $i == 2 || $i == 6 ) { ?>
            	<div class="row">
            <?php } ?>
            <?php if( $i<2 ) { ?>
                <div class="col-md-12 blog-feat">
                	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );  ?></a>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
            <?php } else {?>
            	<div class="col-md-6 blog-small">
                	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-home', array( 'class' => 'img-responsive' ) );  ?></a>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
            <?php } ?>
            <?php if( $i == 1 || $i == 5 || $i == 9 ) { ?>
            	</div>
                <hr>
            <?php } ?>
        <?php  	
			$i++;
			endwhile;
		?>
         <?php wp_pagenavi(); ?>
    </div>
<?php get_footer(); ?>   