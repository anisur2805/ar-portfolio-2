<?php
/**
 * Site header and primary navigation.
 *
 * @package Anisur_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script>
	/* Resolve the colour theme before first paint, otherwise the page flashes
		the wrong background while the stylesheet loads. */
	(function () {
		try {
			var stored = window.localStorage.getItem('anisur-theme');
			if (stored === 'light' || stored === 'dark') {
				document.documentElement.setAttribute('data-theme', stored);
			} else if (window.matchMedia('(prefers-color-scheme: light)').matches) {
				document.documentElement.setAttribute('data-theme', 'light');
			}
		} catch (e) {}
	}());
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php // Keyboard users can jump straight past the navigation. ?>
<a class="skip-link" href="#primary"><?php esc_html_e( 'Skip to content', 'anisur-portfolio' ); ?></a>

<div id="page">
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="container header-container">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
				<?php esc_html_e( 'Anisur', 'anisur-portfolio' ); ?><span class="accent-text"> <?php esc_html_e( 'Rahman.', 'anisur-portfolio' ); ?></span>
			</a>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<ul class="nav-list">
				<li><a href="#hero"><?php esc_html_e( 'HOME', 'anisur-portfolio' ); ?></a></li>
				<li><a href="#work"><?php esc_html_e( 'WORK', 'anisur-portfolio' ); ?></a></li>
				<li><a href="#projects"><?php esc_html_e( 'CASES', 'anisur-portfolio' ); ?></a></li>
				<li><a href="#expertise"><?php esc_html_e( 'EXPERTISE', 'anisur-portfolio' ); ?></a></li>
				<li><a href="#history"><?php esc_html_e( 'HISTORY', 'anisur-portfolio' ); ?></a></li>
			</ul>
			<?php if ( anisur_resume_show( 'header' ) ) : ?>
				<a href="<?php echo esc_url( anisur_get_resume_url() ); ?>" class="btn btn-resume btn-sm nav-resume-link" target="_blank" rel="noopener" download>
					<i class="fa-solid fa-download" aria-hidden="true"></i> <?php echo esc_html( anisur_resume_label() ); ?>
				</a>
			<?php endif; ?>
		</nav>

		<div class="header-cta">
			<?php if ( anisur_resume_show( 'header' ) ) : ?>
				<a href="<?php echo esc_url( anisur_get_resume_url() ); ?>" class="btn btn-resume btn-sm header-resume-btn" target="_blank" rel="noopener" download>
					<i class="fa-solid fa-download" aria-hidden="true"></i> <?php echo esc_html( anisur_resume_label() ); ?>
				</a>
			<?php endif; ?>
			<a href="https://calendly.com/anisur2805/30min" target="_blank" class="btn btn-primary btn-sm"><?php esc_html_e( 'BOOK A CALL', 'anisur-portfolio' ); ?></a>
		</div>

		<button class="theme-toggle" type="button" aria-label="<?php esc_attr_e( 'Toggle colour theme', 'anisur-portfolio' ); ?>">
			<i class="fa-solid fa-sun theme-icon-light" aria-hidden="true"></i>
			<i class="fa-solid fa-moon theme-icon-dark" aria-hidden="true"></i>
		</button>

		<button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-navigation" aria-label="<?php esc_attr_e( 'Open menu', 'anisur-portfolio' ); ?>">
			<span class="nav-toggle-bar"></span>
			<span class="nav-toggle-bar"></span>
			<span class="nav-toggle-bar"></span>
		</button>
	</div>
</header>
