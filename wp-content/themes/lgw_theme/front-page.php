<?php get_header(); ?>
	<div id="home-top" class="container">
    	<div class="row">
        	<div class="col-md-17 inner-box">
            	<div class="match">
                    <?php 
						if( have_posts() ) : while( have_posts() ) : the_post();
					 		the_content(); 
						endwhile;
						endif;
						?>
                </div>
            </div>
        	<div class="col-md-7 inner-box">
            	<form class="match home-contact">
                	<h2>Contact Us</h2>
                    <p>Use the simple form below to send me your details and I will be in touch to discuss <strong>your</strong> needs</p>
                    <input type="text" required placeholder="name" class="form-control">
                    <input type="email" required placeholder="email" class="form-control">
                    <input type="tel" required placeholder="phone" class="form-control">
                    <textarea class="form-control" placeholder="message" rows="3"></textarea>
                    <button type="submit" class="btn btn-primary btn-block">Send Your Enquiry</button>
                </form>
            </div>
        </div>
    </div>
    <div class="featured gallery container">
    	<?php 
			global $post;
			$args = array(
				'post_type' 		=> 'home-slide',
				'posts_per_page' 	=> -1,
				'orderby'			=> 'menuorder',
				'order'				=> 'asc'
			);
			$posts = get_posts( $args );
		?>
    	<div class="gallery-head"><h2>Featured</h2></div>
    	<div class="carousel slide" data-ride="carousel" id="carousel-example-generic">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
           <div class="carousel-inner" role="listbox">
        	<?php
				$i = 0;
				foreach( $posts as $slide ) {
				$post = $slide;
				setup_postdata( $post );
				$thumb_id = get_post_thumbnail_id( $blog->ID ); 
				$image = wp_get_attachment_url( $thumb_id );
			?>
             
                <div class="item <?php echo ( $i == 0 ? 'active' : '' ); $i ++; ?>">
                	<?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ) ); ?>
                </div>
             
        	<?php 
				}
				wp_reset_postdata();
			?>
             </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
    </div>
    <div class="container padding">
    	<div class="row three-boxes">
        	<div class="col-md-8 box">
            	<div class="match">
                	<h3>Testimonials</h3>
                    <p>Lisa you and your team are amazing. You felt like part of the wedding party right from the start. Gorgeous pictures but without the formalities! Would recommend you to anyone in a heartbeat and we both want to thank you so very much…</p>
                </div>
            </div>
            <div class="col-md-8 box">
            	<div class="match">
                	<h3>Request a Brochure</h3>
                    <a href="#" class="btn btn-default">Request a Brochure</a>
                </div>
            </div>
            <div class="col-md-8 box">
            	<div class="match">
                	<h3>Wedding Photography Packages</h3>
                    <a href="#" class="btn btn-default">Check Our Prices</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container padding">
    	<div class="row">
        		<?php 
					global $post;
					$args = array(
						'post_type' 		=> 'post',
						'posts_per_page' 	=> 1,
						'orderby'			=> 'date',
						'order'				=> 'desc'
					);
					$posts = get_posts( $args );
					foreach( $posts as $blog ) {
						$post = $blog;
						setup_postdata( $post );
						$thumb_id = get_post_thumbnail_id( $blog->ID ); 
						$image = wp_get_attachment_url( $thumb_id );
				?>
        	<div class="col-md-14">
            	<div class="match" style="background-image: url(<?php echo $image; ?>); background-size: cover;">
                </div>
            </div>
            <div class="col-md-10 home-blog match">
            	<time>February 26, 2015</time>
                <h3><?php the_title(); ?></h3>
                <div class="excerpt">
                	<?php the_excerpt(); ?>
                </div>					
                	<a href="<?php the_permalink(); ?>" class="btn btn-default">OPEN POST</a>
            </div>
            <?php 
				} 
				wp_reset_postdata();
			?>
        </div>
    </div>
    <div class="container padding">
    	<div class="row home-gallery">
        	<?php 
				global $post;
				$args = array(
					'post_type' 		=> 'galleries',
					'posts_per_page' 	=> 2,
					'orderby'			=> 'date',
					'order'				=> 'desc'
				);
				$posts = get_posts( $args );
				foreach( $posts as $gallery ) {
					$post = $gallery;
					setup_postdata( $post );
			?>
        	<div class="col-md-8">
            	<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'blog-home', array( 'class' => 'img-responsive' ) ); ?>
                    <?php the_title(); ?>
                </a>
            </div>
            <?php
				}
				wp_reset_postdata();
			?>
            <div class="col-md-8 allgall-link">
            	<a href="/galleries/">Recent Galleries</a>
            </div>
        </div>
    </div>
    <div class="container padding">
   	  <p>We believe that preparation is key and therefore visit the wedding venue before the day to ensure we capture the best possible images. Having done lots of reportage wedding photography in Buckinghamshire, we're already familiar with many venues in the area. We don't just work in Buckinghamshire though, we're happy to travel all over the UK and abroad for our wedding clients.</p>
    	<p>As a rule, we'll be in attendance from the bridal preparation through to the first dance (around 8 hours) although we're happy to stay longer, just call us to discuss your specific requirements.</p>
    	<p>If you'd like to chat to some of our past wedding clients, please do give the studio a call on 01494 680811 or complete the contact form and we'll be happy to pass on contact details.</p>
    </div>
<?php get_footer(); ?>   