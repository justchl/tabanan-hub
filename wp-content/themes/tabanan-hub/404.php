<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tabanan-hub
 */

get_header();
?>

<div class="container-fluid mt-4 pt-4">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-8">
			<img src="<?= get_theme_file_uri('assets/images/404.svg') ?>" class="w-100" alt="404 Image not found">
		</div>
	</div>
</div>

<?php
get_footer();
