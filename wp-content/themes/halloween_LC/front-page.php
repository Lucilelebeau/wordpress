<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<div id="login_page">
		<embed src="http://localhost/wordpress/wp-content/uploads/2020/06/Ona_Poison.mp3" height="1" width="1">
			<h1><?php the_title(); ?></h1>
		
			<div class="login_content">
				<?php the_content(); ?>
				<div class="site__sidebar__login">
					<ul>
						<?php dynamic_sidebar( 'login-sidebar' ); ?>
					</ul>
				</div>
			</div>

		</div>

	<?php endwhile; endif; ?>


<?php get_footer(); ?>