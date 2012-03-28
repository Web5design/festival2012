<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="twelvecol clearfix" role="main">

						<?php 
							$featured_posts = new WP_Query('category_name=featured');

							$featured_posts->rewind_posts();
						?>
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							
							<header>
								
								<h1><?php the_title(); ?></h1>
							
							</header> <!-- end article header -->
						
							<section class="post-content">
								<?php the_content(); ?>
						
							</section> <!-- end article section -->
							
							<footer>
					
								<p class="clearfix">footer stuff goes here</p>
								
							</footer> <!-- end article footer -->
						
						</article> <!-- end article -->
												
						<?php endwhile; ?>	
						
						<?php else : ?>
						
						<article id="post-not-found">
						    <header>
						    	<h1>Not Found</h1>
						    </header>
						    <section class="post-content">
						    	<p>Sorry, but the requested resource was not found on this site.</p>
						    </section>
						    <footer>
						    </footer>
						</article>
						
						<?php endif; ?>
					
					</div> <!-- end #main -->
    									
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>