<?php
get_header();
?>

<main id="primary" class="site-main">

	<!-- HERO SECTION -->
	<section id="hero" class="section hero-section">
		<div class="container hero-container">
			<div class="hero-content">
				<div class="hero-badge">
					<span class="pulse"></span>
					Available for New Opportunities
				</div>
				<h1 class="hero-title">
					Senior WordPress<br>
					<span class="accent-text">Developer &amp; Architect.</span>
				</h1>
				<p class="hero-description">
					I build and scale custom WordPress: plugins, Gutenberg blocks and WooCommerce stores. 7+ years, 200+ sites, and measurable performance wins for clients in the US, UK and Germany.
				</p>
				
				<div class="hero-cta">
					<a href="#contact" class="btn btn-primary">Start a project</a>
					<a href="<?php echo esc_url( anisur_get_resume_url() ); ?>" class="btn btn-resume" target="_blank" rel="noopener" download>
						<i class="fa-solid fa-download" aria-hidden="true"></i> Download Resume
					</a>
				</div>
			</div>
			
			<div class="hero-visual">
				<!-- Decorative Code Block -->
				<div class="code-block">
					<div class="code-header">
						<div class="dots">
							<span class="dot red"></span>
							<span class="dot yellow"></span>
							<span class="dot green"></span>
						</div>
						<div class="file-label">DEV_WORKFLOW.PHP</div>
					</div>
					<div class="code-content">
						<pre><code><span class="line"><span class="num">01</span> <span class="keyword">class</span> <span class="class">WP_Core_Architect</span> {</span>
<span class="line"><span class="num">02</span>   <span class="keyword">private</span> <span class="variable">$experience</span> = <span class="number">5</span>;</span>
<span class="line"><span class="num">03</span> </span>
<span class="line"><span class="num">04</span>   <span class="keyword">public</span> <span class="keyword">function</span> <span class="function">optimize</span>() {</span>
<span class="line"><span class="num">05</span>     <span class="keyword">return</span> <span class="variable">$this</span>-><span class="function">refactor</span>([</span>
<span class="line"><span class="num">06</span>       <span class="string">'performance'</span></span>
<span class="line"><span class="num">07</span>       <span class="string">'security'</span></span>
<span class="line"><span class="num">08</span>     ]);</span>
<span class="line"><span class="num">09</span>   }</span>
<span class="line"><span class="num">10</span> }</span>
<span class="line"><span class="num">11</span> </span>
<span class="line"><span class="cursor">| -</span></span></code></pre>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CREDIBILITY BAND -->
	<section class="stats-band" aria-label="Key results">
		<div class="container">
			<div class="stats-grid">
				<div class="stat-item">
					<span class="stat-value">7+</span>
					<span class="stat-label">Years in WordPress</span>
				</div>
				<div class="stat-item">
					<span class="stat-value">200+</span>
					<span class="stat-label">Sites Built &amp; Maintained</span>
				</div>
				<div class="stat-item">
					<span class="stat-value">30+</span>
					<span class="stat-label">Gutenberg Blocks Shipped</span>
				</div>
				<div class="stat-item">
					<span class="stat-value">26</span>
					<span class="stat-label">Commercial Divi Modules</span>
				</div>
			</div>
		</div>
	</section>

	<!-- ECOSYSTEM SECTION -->
	<section id="ecosystem" class="ecosystem-section">
		<div class="container">
			<p class="ecosystem-label">
				<i class="fa-solid fa-plug"></i>
				Integrating with the ecosystem
			</p>
			<div class="logo-grid">
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-brands fa-wordpress-simple"></i></span>
					<span class="logo-text">GUTENBERG</span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-brands fa-react"></i></span>
					<span class="logo-text">REACT_JS</span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-solid fa-shapes"></i></span>
					<span class="logo-text">DIVI_NEXT</span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-brands fa-elementor"></i></span>
					<span class="logo-text">ELEMENTOR</span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-brands fa-woocommerce"></i></span>
					<span class="logo-text">WOOCOMMERCE</span>
				</div>
			</div>
		</div>
	</section>

	<!-- PHILOSOPHY SECTION -->
	<section id="philosophy" class="section philosophy-section">
		<div class="container geography-grid">
			<div class="philosophy-header">
				<h2 class="section-badge">PHILOSOPHY</h2>
				<h3 class="philosophy-title">The Philosophy of<br><span class="accent-text">Clean Execution</span></h3>
			</div>
			<div class="philosophy-content">
				<p>I architect WordPress ecosystems that scale. My approach bridges the gap between high-fidelity Figma designs and robust, performance-driven implementations. I specialize in modular architectures that prioritize developer velocity and long-term maintainability.</p>
				<p>I leverage modern standards like PHPCS, Composer, and React.js to ensure every line of code meets enterprise requirements. My goal is simple: extreme performance and invisible stability.</p>
			</div>
		</div>
	</section>

	<!-- EXPERTISE SECTION -->
	<section id="expertise" class="section expertise-section">
		<div class="container">
			<div class="section-info text-center">
				<h2 class="section-badge">EXPERTISE</h2>
				<h3 class="section-title">Core Expertise</h3>
				<p class="section-subtitle">Specializing in solutions for complex WP requirements.</p>
			</div>
			
			<div class="expertise-grid">
				<div class="expertise-card">
					<span class="card-icon">🏗️</span>
					<h4>Plugin & Module Expert</h4>
					<p>Engineering premium commercial modules for Divi, Elementor, and Beaver Builder ecosystems with scalable OOP patterns.</p>
				</div>
				<div class="expertise-card">
					<span class="card-icon">⚛️</span>
					<h4>Gutenberg Engineering</h4>
					<p>Building modern, high-performance Gutenberg blocks and dynamic interfaces with React.js and WP REST API.</p>
				</div>
				<div class="expertise-card">
					<span class="card-icon">🎨</span>
					<h4>Custom Theme Specialist</h4>
					<p>Delivering pixel-perfect Figma-to-WordPress conversions and scalable WooCommerce solutions with a focus on clean-code architecture.</p>
				</div>
				<div class="expertise-card">
					<span class="card-icon">⚡</span>
					<h4>Performance & Strategy</h4>
					<p>Aggressive performance tuning and strategic asset optimization, ensuring enterprise-grade speed and invisible stability.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- STACK SECTION -->
	<section id="stack" class="section stack-section">
		<div class="container">
			<h2 class="section-badge text-center">THE STACK</h2>
			<h3 class="section-title text-center">My Tech Stack</h3>
			
			<div class="stack-grid">
				<div class="stack-group">
					<h5><i class="fa-solid fa-code"></i> LANGUAGES</h5>
					<div class="tag-cloud">
						<span>PHP 8.x (OOP)</span>
						<span>React.js</span>
						<span>ES6+ JavaScript</span>
						<span>SQL</span>
					</div>
				</div>
				<div class="stack-group">
					<h5><i class="fa-solid fa-screwdriver-wrench"></i> TOOLS & WORKFLOW</h5>
					<div class="tag-cloud">
						<span>Tailwind CSS</span>
						<span>Composer / NPM</span>
						<span>PHPCS / Linting</span>
						<span>Git / CI/CD</span>
					</div>
				</div>
				<div class="stack-group">
					<h5><i class="fa-brands fa-wordpress-simple"></i> WP SPECIALTY</h5>
					<div class="tag-cloud">
						<span>Divi / Elementor API</span>
						<span>Gutenberg Blocks</span>
						<span>WP REST API</span>
						<span>WooCommerce</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- HISTORY SECTION -->
	<section id="history" class="section history-section">
		<div class="container container-narrow">
			<h2 class="section-badge text-center">HISTORY</h2>
			<h3 class="section-title text-center">Professional History</h3>

			<div class="timeline-v2">
				<div class="timeline-v2-item">
					<div class="timeline-v2-marker"></div>
					<div class="timeline-v2-content">
						<div class="timeline-v2-header">
							<h4>Freelance WordPress Developer</h4>
							<span class="timeline-v2-date">Apr 2026 - Present</span>
						</div>
						<p class="timeline-v2-company">Self-Employed (Remote)</p>
						<ul class="timeline-v2-details">
							<li>Maintain a custom WooCommerce store with about 5,000 products managed outside default WooCommerce: orders route to one of 3 fulfilment hubs based on product attributes and move through about 15 statuses, with customer emails and internal notifications on each change.</li>
							<li>Cut the store's orders page load from over 3 seconds to about 690ms: traced about 1,289 queries to theme code that joined order data and searched serialized meta, replaced it with cached order IDs in a 12-hour transient, and brought database time from about 2,600ms to 46-97ms and queries to about 267.</li>
							<li>Maintain 4 production WordPress sites after launch: regression-tested core and plugin updates, performance and SEO improvements, security hardening and backlog tasks with clients in the UK, Germany and the US.</li>
							<li>Develop a workflow-driven WordPress CRM with custom PHP and REST APIs, consolidating a long-term US client's separate businesses into one system.</li>
						</ul>
					</div>
				</div>

				<div class="timeline-v2-item">
					<div class="timeline-v2-marker"></div>
					<div class="timeline-v2-content">
						<div class="timeline-v2-header">
							<h4>WordPress Plugin Developer</h4>
							<span class="timeline-v2-date">Mar 2025 – Apr 2026</span>
						</div>
						<p class="timeline-v2-company">Zone7 (Remote)</p>
						<ul class="timeline-v2-details">
							<li>Cut database query time 30% on a client site (90ms to 63ms on the homepage, Query Monitor) by indexing custom WPDB tables, caching repeated queries and cleaning autoloaded options.</li>
							<li>Built 26 Divi modules on reusable PHP 8 and JavaScript OOP patterns for a commercial Divi 5 integration, collaborating with designers and PMs on a 2-week sprint cadence.</li>
							<li>Worked in Gitflow: feature branches merged to develop, then to main after senior review, with my own code reviewed by a senior developer and reviewing others' in return.</li>
							<li>Released commercial plugins with the team lead: built the zip from main after PHPCS, WPCS, Plugin Check and Divi Marketplace standard checks passed, then published it through EDD.</li>
							<li>Troubleshot plugin and theme conflicts and migration failures on live client sites with Query Monitor and WP_DEBUG; covered frontend builds during developer absences.</li>
							<li>Built an AI-assisted Module Factory that generates plugin and theme components from feature specs, reducing full-stack development time by 40% versus the team's prior average, measured across the 26 Divi modules.</li>
						</ul>
					</div>
				</div>

				<div class="timeline-v2-item">
					<div class="timeline-v2-marker"></div>
					<div class="timeline-v2-content">
						<div class="timeline-v2-header">
							<h4>WordPress Developer</h4>
							<span class="timeline-v2-date">Jan 2024 – Feb 2025</span>
						</div>
						<p class="timeline-v2-company">WP Gigs (Remote)</p>
						<ul class="timeline-v2-details">
							<li>Built plugins with 30+ custom Gutenberg blocks, including dynamic blocks with PHP server-side rendering and React editors, plus custom post types and taxonomies with ACF.</li>
							<li>Built the wpgigs.com custom theme, then migrated it to a Full Site Editing block theme using theme.json, templates, patterns and the Interactivity API.</li>
							<li>Integrated Amazon S3 and MemberPress APIs to deliver 20,000+ media assets to 1,200+ active members.</li>
							<li>Built a custom Gutenberg-based page builder on the REST API and block editor APIs; resolved urgent issues on Beaver Builder sites.</li>
						</ul>
					</div>
				</div>

				<div class="timeline-v2-item">
					<div class="timeline-v2-marker"></div>
					<div class="timeline-v2-content">
						<div class="timeline-v2-header">
							<h4>WordPress Theme and Plugin Developer</h4>
							<span class="timeline-v2-date">Feb 2023 – Dec 2023</span>
						</div>
						<p class="timeline-v2-company">ITclan BD</p>
						<ul class="timeline-v2-details">
							<li>Converted 20+ Figma designs into pixel-perfect, responsive, SEO-friendly WooCommerce websites of 15-25 pages each, tested across browsers and devices.</li>
							<li>Built custom WooCommerce features: AJAX search, repair-based add-to-cart by brand, model and repair type, custom order PDFs and customer and owner emails (thesmartphone.nl); a referral points system (vapesprimetime.co.uk); and a custom membership registration on custom database tables (fcclubltd.com).</li>
							<li>Integrated the Aamar Pay payment gateway API. Built a multipurpose theme for the TemplateMonster marketplace in three variations (Corporate, Portfolio, WooCommerce) and added two designs to the Le Resto theme.</li>
						</ul>
					</div>
				</div>

				<div class="timeline-v2-item">
					<div class="timeline-v2-marker"></div>
					<div class="timeline-v2-content">
						<div class="timeline-v2-header">
							<h4>WordPress Developer</h4>
							<span class="timeline-v2-date">Oct 2019 – Feb 2023</span>
						</div>
						<p class="timeline-v2-company">Orange Toolz</p>
						<ul class="timeline-v2-details">
							<li>Built and maintained 200+ corporate and medical WordPress sites for US clients using Elementor Pro and custom PHP, delivering ongoing monthly updates.</li>
							<li>Maintained 40 sites on Pantheon, running theme, plugin and core updates with terminus across dev, multidev and live, using Pantheon backups.</li>
							<li>Integrated GoHighLevel APIs for lead capture and conversion tracking across 10+ client practices.</li>
						</ul>
					</div>
				</div>

				<div class="timeline-v2-item">
					<div class="timeline-v2-marker"></div>
					<div class="timeline-v2-content">
						<div class="timeline-v2-header">
							<h4>Web Developer / Designer</h4>
							<span class="timeline-v2-date">Apr 2016 – Oct 2019</span>
						</div>
						<p class="timeline-v2-company">BeLocal Today (Remote) &amp; Softnio</p>
						<ul class="timeline-v2-details">
							<li>Built and optimized 50+ local-business WordPress sites for Gold Coast, Brisbane and Sunshine Coast clients: SEO, loading speed and Google Maps citations.</li>
							<li>Converted Figma designs into responsive HTML, CSS and WordPress sites with CSS animations and cross-browser consistency.</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- EDUCATION SECTION -->
			<div class="education-section mt-5">
				<h2 class="section-badge text-center">EDUCATION</h2>
				<div class="education-item text-center">
					<h4>Diploma in Computer Technology</h4>
					<p>Naogaon Polytechnic Institute, Naogaon, Bangladesh | 2015</p>

					<h4>Coursework toward B.Sc. in Computer Science and Engineering</h4>
					<p>Bangladesh University, Dhaka</p>
				</div>
			</div>
			</div>
		</div>
	</section>

	<!-- CASE STUDIES SECTION -->
	<section id="projects" class="section projects-section">
		<div class="container">
			<h2 class="section-badge">PORTFOLIO</h2>
			<h3 class="section-title">Selected Case Studies</h3>
			<p class="section-subtitle">A glimpse into work built with precision.</p>
			
			<div class="case-studies-grid">
				<?php
				$portfolio_items = anisur_get_portfolio_items();
				$initial_items = array_slice( $portfolio_items, 0, 6 );

				foreach ( $initial_items as $item ) :
					?>
					<article class="case-study-card">
						<div class="case-study-image" style="background: <?php echo esc_attr( $item['bg_color'] ); ?>;">
							<?php if ( strpos( $item['image'], '.svg' ) !== false || strpos( $item['image'], '.gif' ) !== false ) : ?>
								<img src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" style="width: 100%; height: 100%; object-fit: cover;">
							<?php else : ?>
								<img src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" style="width: 100%; height: 100%; object-fit: cover;">
							<?php endif; ?>
						</div>
						<div class="case-study-content">
							<div class="case-study-meta">
								<?php foreach ( $item['tags'] as $tag ) : ?>
									<span><?php echo esc_html( $tag ); ?></span>
								<?php endforeach; ?>
							</div>
							<h4><?php echo esc_html( $item['title'] ); ?></h4>
							<p><?php echo esc_html( $item['description'] ); ?></p>
							<a href="<?php echo esc_url( $item['link'] ); ?>" target="_blank" class="case-study-link"><?php echo esc_html( $item['link_text'] ); ?></a>
						</div>
					</article>
				<?php endforeach; ?>
			</div>

			<?php if ( count( $portfolio_items ) > 6 ) : ?>
				<div id="load-more-container" class="text-center mt-5">
					<button id="load-more-btn" class="btn btn-secondary">Load More</button>
				</div>
			<?php endif; ?>
		</div>
	</section>


	<!-- OPEN SOURCE SECTION -->
	<section id="open-source" class="section open-source-section">
		<div class="container">
			<div class="open-source-grid">
				<div class="open-source-info">
					<h2 class="section-badge">CONTRIBUTIONS</h2>
					<h3 class="section-title">Open Source Contribution</h3>
					<p>I actively contribute to the WordPress core and maintain several high-traffic plugins on GitHub. I believe in giving back to the community that powers the web. My focus is on creating developer-friendly tools and modular architectures.</p>
					
					<div class="github-stats">
						<div class="stat">
							<span class="stat-value">450+</span>
							<span class="stat-label">GIT COMMITS YTD</span>
						</div>
						<div class="stat">
							<span class="stat-value">12</span>
							<span class="stat-label">ACTIVE PLUGINS</span>
						</div>
					</div>
				</div>
				
				<div class="open-source-visual">
					<!-- Featured Contribution: BootScore -->
					<div class="contribution-card featured">
						<div class="cont-badge">FEATURED CONTRIBUTION</div>
						<div class="cont-header">
							<div class="repo-info">
								<span class="repo-user">bootscore / </span>
								<span class="repo-name accent-text">bootscore</span>
							</div>
							<span class="cont-status">Active Contributor</span>
						</div>
						<p class="cont-desc">A powerful Bootstrap 5 based WordPress starter theme. I actively contribute to the core development and theme ecosystem.</p>
						<div class="cont-action">
							<a href="https://github.com/bootscore/bootscore" target="_blank" class="accent-link">View Source →</a>
						</div>
					</div>

					<!-- Other Plugins -->
					<div class="contribution-cards-stack">
						<div class="contribution-card secondary">
							<div class="cont-header">
								<div class="repo-info">
									<span class="repo-user">anisur2805 / </span>
									<span class="repo-name accent-text">arpc-popup-creator</span>
								</div>
								<span class="cont-status">Active</span>
							</div>
							<div class="cont-bar solo">
								<div class="cont-fill php" style="width: 75%;" title="75% PHP"></div>
								<div class="cont-fill css" style="width: 15%;" title="15% CSS"></div>
								<div class="cont-fill js" style="width: 10%;" title="10% JS"></div>
							</div>
							<div class="cont-footer">
								<span>75% PHP</span>
								<span>15% CSS</span>
								<span>10% JS</span>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- BLOG SECTION -->
	<section id="blog" class="section blog-section">
		<div class="container">
			<div class="blog-header">
				<h3 class="section-title">Technical Insights</h3>
				<p>Deep dives into WordPress engineering.</p>
				<a href="#" class="accent-link">Read all articles →</a>
			</div>
			
			<div class="blog-grid-v2">
				<article class="blog-item">
					<div class="blog-item-image"></div>
					<h4>Scaling WordPress with Redis Object Caching</h4>
					<p>How we handled 10M pageviews on a standard WP installation...</p>
				</article>
				<article class="blog-item">
					<div class="blog-item-image"></div>
					<h4>Unit Testing Custom Plugins with WP_UnitTestCase</h4>
					<p>A guide to ensuring your work stays stable throughout updates...</p>
				</article>
				<article class="blog-item">
					<div class="blog-item-image"></div>
					<h4>The Future of Headless: Next.js + WPGraphql</h4>
					<p>Exploring the next frontier of WordPress performance and experience...</p>
				</article>
			</div>
		</div>
	</section>

	<!-- TESTIMONIALS SECTION -->
	<section id="testimonials" class="section testimonials-section">
		<div class="container">
			<div class="testimonial-grid-v2">
				<div class="testimonial-item">
					<div class="stars">★★★★★</div>
					<p>"Best Wordpress service on Fiverr. Always responsive, quick turnaround. Always very happy with the service."</p>
					<div class="testimonial-user">
						<div class="user-avatar" style="background-image: url('https://i.pravatar.cc/150?u=fiverr'); background-size: cover;"></div>
						<div>
							<h6>Fiverr Client</h6>
							<p>Verified Purchase</p>
						</div>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="stars">★★★★★</div>
					<p>"Wonderful to work with. Highly skilled in updating and maintaining WordPress webpages, theme design, and customization."</p>
					<div class="testimonial-user">
						<div class="user-avatar" style="background-image: url('https://i.pravatar.cc/150?u=upwork'); background-size: cover;"></div>
						<div>
							<h6>Upwork Client</h6>
							<p>Project Review</p>
						</div>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="stars">★★★★★</div>
					<p>"Highly technical and detail-oriented. Successfully delivered a complex WordPress theme design and customization project ahead of schedule."</p>
					<div class="testimonial-user">
						<div class="user-avatar" style="background-image: url('https://i.pravatar.cc/150?u=enterprise'); background-size: cover;"></div>
						<div>
							<h6>Enterprise Partner</h6>
							<p>Technical Lead</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CONTACT SECTION -->
	<section id="contact" class="section contact-section">
		<div class="container">
			<div class="contact-inner">
				<h2 class="section-badge">CONTACT</h2>
				<h3 class="contact-heading">Let's Create Something<br><span class="accent-text">Amazing</span></h3>
				<div class="contact-form-wrapper">
					<form id="contact-form" class="contact-form">
						<div class="form-group">
							<label for="contact-name">Name</label>
							<input type="text" id="contact-name" name="name" placeholder="Your Name" required>
						</div>
						<div class="form-group">
							<label for="contact-email">Email</label>
							<input type="email" id="contact-email" name="email" placeholder="Your@email.com" required>
						</div>
						<div class="form-group">
							<label for="contact-phone">Phone <span style="opacity: 0.7;">(optional)</span></label>
							<input type="tel" id="contact-phone" name="phone" placeholder="+1 555 123 4567">
						</div>
						<div class="form-group">
							<label for="contact-subject">Subject <span style="opacity: 0.7;">(optional)</span></label>
							<input type="text" id="contact-subject" name="subject" placeholder="Project type, topic, or question">
						</div>
						<div class="form-group">
							<label for="contact-message">Message</label>
							<textarea id="contact-message" name="message" rows="5" placeholder="Your Message" required></textarea>
						</div>
						<div class="form-group contact-hp">
							<label for="contact-website">Website</label>
							<input type="text" id="contact-website" name="website" autocomplete="off" tabindex="-1">
						</div>
						<button type="submit" class="btn btn-primary btn-block">Send</button>
					</form>
				</div>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
