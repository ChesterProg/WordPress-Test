<?php
/*
Template Name: Archive
*/
get_header();
?>

<div class="team-container">
	<?php
	$args = array(
		'post_type' => 'team',
		'posts_per_page' => -1
	);
	$the_query = new WP_Query($args);

	if ($the_query->have_posts()) :
		while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<div class="team-member">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_post_thumbnail(); ?>
				<?php the_content(); ?>
			</div>
		<?php endwhile;
	else :
		echo '<p>No team members found.</p>';
	endif;

	wp_reset_postdata();
	?>
</div>

<?php get_footer(); ?>
