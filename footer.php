<?php
/**
 * Site footer.
 *
 * @package Anisur_Portfolio
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="container footer-container">
			<div class="footer-grid">
				<!-- Column 1: Branding -->
				<div class="footer-col branding-col">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
						<?php esc_html_e( 'Anisur', 'anisur-portfolio' ); ?><span class="accent-text"> <?php esc_html_e( 'Rahman.', 'anisur-portfolio' ); ?></span>
					</a>
					<p class="footer-tagline"><?php esc_html_e( 'Crafting high-performance WordPress systems and enterprise-grade plugin architectures.', 'anisur-portfolio' ); ?></p>
					<div class="footer-socials">
						<a href="https://github.com/anisur2805" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'GitHub', 'anisur-portfolio' ); ?>"><i class="fab fa-github"></i></a>
						<a href="https://www.linkedin.com/in/anisur-anis/" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'LinkedIn', 'anisur-portfolio' ); ?>"><i class="fab fa-linkedin-in"></i></a>
						<a href="https://x.com/anisur2942" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'Twitter', 'anisur-portfolio' ); ?>"><i class="fab fa-twitter"></i></a>
					</div>
				</div>

				<!-- Column 2: Quick Links -->
				<div class="footer-col links-col">
					<h5 class="footer-title"><?php esc_html_e( 'NAVIGATE', 'anisur-portfolio' ); ?></h5>
					<ul class="footer-nav">
						<li><a href="#hero"><?php esc_html_e( 'Home', 'anisur-portfolio' ); ?></a></li>
						<li><a href="#work"><?php esc_html_e( 'Work', 'anisur-portfolio' ); ?></a></li>
						<li><a href="#projects"><?php esc_html_e( 'Case Studies', 'anisur-portfolio' ); ?></a></li>
						<li><a href="#expertise"><?php esc_html_e( 'Expertise', 'anisur-portfolio' ); ?></a></li>
						<li><a href="#history"><?php esc_html_e( 'History', 'anisur-portfolio' ); ?></a></li>
					</ul>
				</div>

				<!-- Column 3: Contact -->
				<div class="footer-col contact-col">
					<h5 class="footer-title"><?php esc_html_e( 'CONTACT', 'anisur-portfolio' ); ?></h5>
					<div class="contact-info">
						<a href="mailto:anisur2805@gmail.com" class="contact-link"><?php esc_html_e( 'anisur2805@gmail.com', 'anisur-portfolio' ); ?></a>
						<p class="location"><?php esc_html_e( 'Joypurhat, Bangladesh (GMT+6)', 'anisur-portfolio' ); ?></p>
					</div>
					<?php if ( anisur_resume_show( 'footer' ) ) : ?>
						<a href="<?php echo esc_url( anisur_get_resume_url() ); ?>" class="btn btn-resume btn-sm footer-resume-btn" target="_blank" rel="noopener" download>
							<i class="fa-solid fa-download" aria-hidden="true"></i> <?php echo esc_html( anisur_resume_label() ); ?>
						</a>
					<?php endif; ?>
				</div>

				<!-- Column 4: Status -->
				<div class="footer-col status-col">
					<h5 class="footer-title"><?php esc_html_e( 'STATUS', 'anisur-portfolio' ); ?></h5>
					<div class="availability-card">
						<div class="status-indicator">
							<span class="pulse"></span>
							<span class="status-text"><?php esc_html_e( 'Available for new projects', 'anisur-portfolio' ); ?></span>
						</div>
						<p class="status-desc"><?php esc_html_e( 'Currently accepting selected enterprise WordPress inquiries.', 'anisur-portfolio' ); ?></p>
					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="copyright">
					&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <span><?php esc_html_e( 'Anisur Rahman.', 'anisur-portfolio' ); ?></span> <?php esc_html_e( 'All rights reserved.', 'anisur-portfolio' ); ?>
				</div>
				<div class="footer-meta">
					<span class="meta-item"><?php esc_html_e( 'Built with WordPress', 'anisur-portfolio' ); ?></span>
					<span class="meta-item"><?php esc_html_e( 'Senior WordPress Developer', 'anisur-portfolio' ); ?></span>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
