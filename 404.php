<?php
/**
 * Branded 404 page.
 *
 * @package Anisur_Portfolio
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="section error-section">
		<div class="container error-inner">
			<span class="section-badge"><?php esc_html_e( 'ERROR 404', 'anisur-portfolio' ); ?></span>
			<h1 class="error-code">404</h1>
			<h2 class="error-title"><?php esc_html_e( 'This page took a wrong turn.', 'anisur-portfolio' ); ?></h2>
			<p class="error-lead">
				<?php esc_html_e( 'The link may be outdated, or the page may have moved. Everything else is still exactly where you left it.', 'anisur-portfolio' ); ?>
			</p>
			<div class="error-actions">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Back to home', 'anisur-portfolio' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-resume"><?php esc_html_e( 'Tell me what you were looking for', 'anisur-portfolio' ); ?></a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
