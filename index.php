<?php
/**
 * Main template file.
 *
 * @package Custom_Mobile_Nav_Theme
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

get_header();
?>

<main>
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			the_content();
		}
	} else {
		// If no content, include the "No posts found" template.
		get_template_part( 'template-parts/content', 'none' );
	}
	?>
</main>

<?php
get_footer();
