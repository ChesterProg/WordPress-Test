<?php
/*
Template Name: Archieve
*/
?>

<?php
get_header();

if (have_posts()) :
	while (have_posts()) : the_post();
		// Display post content here
		the_title('<h2>', '</h2>');
		the_content();
	endwhile;
else :
	echo '<p>No team members found.</p>';
endif;

get_footer();