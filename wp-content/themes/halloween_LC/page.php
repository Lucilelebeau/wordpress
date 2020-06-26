<?php get_header(); ?>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<div id="page_page">
		
			<h1 class="h1_page"><?php the_title(); ?></h1>
			<?php the_content(); ?>


			<?php if (is_page('poser-une-question')) { ?>
				<embed src="http://localhost/wordpress/wp-content/uploads/2020/06/footsteps1.mp3" height="1" width="1">
				<div class="site__sidebar__pose_question">
					<?php dynamic_sidebar( 'question-sidebar' ); ?>
				</div>
			<?php } ?>


			<?php if (is_page('theme')) { ?>
				<embed src="http://localhost/wordpress/wp-content/uploads/2020/06/witches_house.mp3" height="1" width="1">
				<div id="theme_div" class="container w-25">
					<h2 id="titre_theme">Je te laisse choisir ton destin</h2>
					<ul class="list-group">
						<?php
							global $wpdb;
							$result = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}theme");
							foreach ($result as $print) {
						?>
						<a id="list_theme" href="repondre?id=<?php echo $print->id; ?>">
							<li class="list-group-item d-flex justify-content-between align-items-center btn_theme">
								<?php echo $print->title; ?>
    							<span class="badge badge-danger badge-pill"><?php echo $print->nb_question; ?></span>
  							</li>
						</a>

						<?php } ?>

					</ul>
				</div>
			<?php } ?>


			<?php if (is_page('repondre')) { ?>
				<div id="questionnaire_style" class="container w-50">
				<embed src="http://localhost/wordpress/wp-content/uploads/2020/06/04-petit_pantin_au_coeur_de_glace-eponyme_I-laei-copyleft-1.mp3" height="1" width="1">
				
					<?php
						$id_theme = $_GET["id"];
						$resultats = $wpdb->get_row(
							$wpdb->prepare("SELECT title FROM {$wpdb->prefix}theme WHERE id=$id_theme")
						);
						$title_theme = $resultats->title;
						?>
						<h2>Questionnaire : <?php echo $title_theme; ?></h2><br>
					
						<ul class="list-group">
							<form action="" method="post">
								
								<?php
									$result = $wpdb->get_results("SELECT * FROM wp_questions WHERE id_theme=$id_theme");
									foreach ($result as $key=>$print) {
								?>

								<div class="form-group">
									<label for="question<?php echo $print->id; ?>"><?php echo $print->question; ?></label>
									<input type="text" class="form-control" name="<?php echo $key; ?>" required>

									<input type="hidden" name="id_question<?php echo $key; ?>" value="<?php echo $print->id; ?>">
								</div>
								<?php } ?>

								<button type="submit" class="btn btn-dark">Valider</button>
							</form>
						</ul>
				</div>
			<?php } ?>

		<div>
		
	<?php endwhile; endif; ?>

<?php get_footer(); ?>