<?php
/**
 * Front page template.
 *
 * @package Anisur_Portfolio
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- HERO SECTION -->
	<section id="hero" class="section hero-section">
		<div class="container hero-container">
			<div class="hero-content">
				<div class="hero-badge">
					<span class="pulse"></span>
					<?php esc_html_e( 'Available for New Opportunities', 'anisur-portfolio' ); ?>
				</div>
				<h1 class="hero-title">
					<?php esc_html_e( 'Senior WordPress', 'anisur-portfolio' ); ?><br>
					<span class="accent-text"><?php esc_html_e( 'Developer &amp; Architect.', 'anisur-portfolio' ); ?></span>
				</h1>
				<p class="hero-description">
					<?php esc_html_e( 'I build and scale custom WordPress: plugins, Gutenberg blocks and WooCommerce stores. 7+ years, 200+ sites, and measurable performance wins for clients in the US, UK and Germany.', 'anisur-portfolio' ); ?>
				</p>
				
				<div class="hero-cta">
					<a href="#contact" class="btn btn-primary"><?php esc_html_e( 'Start a project', 'anisur-portfolio' ); ?></a>
					<?php if ( anisur_resume_show( 'hero' ) ) : ?>
						<a href="<?php echo esc_url( anisur_get_resume_url() ); ?>" class="btn btn-resume" target="_blank" rel="noopener" download>
							<i class="fa-solid fa-download" aria-hidden="true"></i> <?php echo esc_html( anisur_resume_label() ); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
			
			<div class="hero-visual" aria-hidden="true">
				<!-- Decorative Code Block -->
				<div class="code-block">
					<div class="code-header">
						<div class="dots">
							<span class="dot red"></span>
							<span class="dot yellow"></span>
							<span class="dot green"></span>
						</div>
						<div class="file-label"><?php esc_html_e( 'DEV_WORKFLOW.PHP', 'anisur-portfolio' ); ?></div>
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
	<section class="stats-band" aria-label="<?php esc_attr_e( 'Key results', 'anisur-portfolio' ); ?>">
		<div class="container">
			<div class="stats-grid">
				<div class="stat-item">
					<span class="stat-value">7+</span>
					<span class="stat-label"><?php esc_html_e( 'Years in WordPress', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="stat-item">
					<span class="stat-value">200+</span>
					<span class="stat-label"><?php esc_html_e( 'Sites Built &amp; Maintained', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="stat-item">
					<span class="stat-value">30+</span>
					<span class="stat-label"><?php esc_html_e( 'Gutenberg Blocks Shipped', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="stat-item">
					<span class="stat-value">26</span>
					<span class="stat-label"><?php esc_html_e( 'Commercial Divi Modules', 'anisur-portfolio' ); ?></span>
				</div>
			</div>
		</div>
	</section>

	<!-- ECOSYSTEM SECTION -->
	<section id="ecosystem" class="ecosystem-section">
		<div class="container">
			<p class="ecosystem-label">
				<i class="fa-solid fa-plug"></i>
				<?php esc_html_e( 'Integrating with the ecosystem', 'anisur-portfolio' ); ?>
			</p>
			<div class="logo-grid">
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-brands fa-wordpress-simple"></i></span>
					<span class="logo-text"><?php esc_html_e( 'GUTENBERG', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-brands fa-react"></i></span>
					<span class="logo-text"><?php esc_html_e( 'REACT_JS', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-solid fa-shapes"></i></span>
					<span class="logo-text"><?php esc_html_e( 'DIVI', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-brands fa-elementor"></i></span>
					<span class="logo-text"><?php esc_html_e( 'ELEMENTOR', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-solid fa-hammer"></i></span>
					<span class="logo-text"><?php esc_html_e( 'BEAVER BUILDER', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-solid fa-puzzle-piece"></i></span>
					<span class="logo-text"><?php esc_html_e( 'ACF PRO', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-solid fa-cart-shopping"></i></span>
					<span class="logo-text"><?php esc_html_e( 'WOOCOMMERCE', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-brands fa-stripe-s"></i></span>
					<span class="logo-text"><?php esc_html_e( 'STRIPE', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-solid fa-id-card"></i></span>
					<span class="logo-text"><?php esc_html_e( 'MEMBERPRESS', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-brands fa-aws"></i></span>
					<span class="logo-text"><?php esc_html_e( 'AMAZON S3', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-solid fa-bullhorn"></i></span>
					<span class="logo-text"><?php esc_html_e( 'GOHIGHLEVEL', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-solid fa-cloud"></i></span>
					<span class="logo-text"><?php esc_html_e( 'PANTHEON', 'anisur-portfolio' ); ?></span>
				</div>
				<div class="logo-item">
					<span class="logo-icon"><i class="fa-solid fa-bug"></i></span>
					<span class="logo-text"><?php esc_html_e( 'QUERY MONITOR', 'anisur-portfolio' ); ?></span>
				</div>
			</div>
		</div>
	</section>

	<!-- PHILOSOPHY SECTION -->
	<section id="philosophy" class="section philosophy-section">
		<div class="container geography-grid">
			<div class="philosophy-header">
				<h2 class="section-badge"><?php esc_html_e( 'PHILOSOPHY', 'anisur-portfolio' ); ?></h2>
				<h3 class="philosophy-title"><?php esc_html_e( 'The Philosophy of', 'anisur-portfolio' ); ?><br><span class="accent-text"><?php esc_html_e( 'Clean Execution', 'anisur-portfolio' ); ?></span></h3>
			</div>
			<div class="philosophy-content">
				<p><?php esc_html_e( 'I architect WordPress ecosystems that scale. My approach bridges the gap between high-fidelity Figma designs and robust, performance-driven implementations. I specialize in modular architectures that prioritize developer velocity and long-term maintainability.', 'anisur-portfolio' ); ?></p>
				<p><?php esc_html_e( 'I leverage modern standards like PHPCS, Composer, and React.js to ensure every line of code meets enterprise requirements. My goal is simple: extreme performance and invisible stability.', 'anisur-portfolio' ); ?></p>
			</div>
		</div>
	</section>

	<!-- EXPERTISE SECTION -->
	<section id="expertise" class="section expertise-section">
		<div class="container">
			<div class="section-info text-center">
				<h2 class="section-badge"><?php esc_html_e( 'EXPERTISE', 'anisur-portfolio' ); ?></h2>
				<h3 class="section-title"><?php esc_html_e( 'Core Expertise', 'anisur-portfolio' ); ?></h3>
				<p class="section-subtitle"><?php esc_html_e( 'Specializing in solutions for complex WP requirements.', 'anisur-portfolio' ); ?></p>
			</div>
			
			<div class="expertise-grid">
				<div class="expertise-card">
					<span class="card-icon">🧩</span>
					<h4><?php esc_html_e( 'Custom Plugin Development', 'anisur-portfolio' ); ?></h4>
					<p><?php esc_html_e( 'Production plugins built from scratch — architecture, REST endpoints, admin UI and release pipelines that pass PHPCS, WPCS and Plugin Check before they ship.', 'anisur-portfolio' ); ?></p>
				</div>
				<div class="expertise-card">
					<span class="card-icon">🧱</span>
					<h4><?php esc_html_e( 'Gutenberg &amp; Block Engineering', 'anisur-portfolio' ); ?></h4>
					<p><?php esc_html_e( 'Dynamic blocks with PHP server-side rendering, React editors and block.json — plus full site editing themes built on theme.json, templates and patterns.', 'anisur-portfolio' ); ?></p>
				</div>
				<div class="expertise-card">
					<span class="card-icon">🛒</span>
					<h4><?php esc_html_e( 'WooCommerce &amp; Performance', 'anisur-portfolio' ); ?></h4>
					<p><?php esc_html_e( 'Store builds and rescues: 5,000-product catalogues, multi-hub fulfilment, and query tuning that took one client\'s orders page from 3 seconds to 690ms.', 'anisur-portfolio' ); ?></p>
				</div>
				<div class="expertise-card">
					<span class="card-icon">⚡</span>
					<h4><?php esc_html_e( 'Debugging &amp; Optimisation', 'anisur-portfolio' ); ?></h4>
					<p><?php esc_html_e( 'Plugin conflicts, migration failures and Core Web Vitals diagnosed with Query Monitor and WP_DEBUG — then fixed at the source instead of papered over.', 'anisur-portfolio' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- STACK SECTION -->
	<section id="stack" class="section stack-section">
		<div class="container">
			<h2 class="section-badge text-center"><?php esc_html_e( 'THE STACK', 'anisur-portfolio' ); ?></h2>
			<h3 class="section-title text-center"><?php esc_html_e( 'My Tech Stack', 'anisur-portfolio' ); ?></h3>
			
			<div class="stack-grid">
				<div class="stack-group">
					<h5><i class="fa-solid fa-code"></i> <?php esc_html_e( 'LANGUAGES', 'anisur-portfolio' ); ?></h5>
					<div class="tag-cloud">
						<span><?php esc_html_e( 'PHP 8.x (OOP)', 'anisur-portfolio' ); ?></span>
						<span><?php esc_html_e( 'React.js', 'anisur-portfolio' ); ?></span>
						<span><?php esc_html_e( 'ES6+ JavaScript', 'anisur-portfolio' ); ?></span>
						<span><?php esc_html_e( 'SQL', 'anisur-portfolio' ); ?></span>
					</div>
				</div>
				<div class="stack-group">
					<h5><i class="fa-solid fa-screwdriver-wrench"></i> <?php esc_html_e( 'TOOLS & WORKFLOW', 'anisur-portfolio' ); ?></h5>
					<div class="tag-cloud">
						<span><?php esc_html_e( 'Tailwind CSS', 'anisur-portfolio' ); ?></span>
						<span><?php esc_html_e( 'Composer / NPM', 'anisur-portfolio' ); ?></span>
						<span><?php esc_html_e( 'PHPCS / Linting', 'anisur-portfolio' ); ?></span>
						<span><?php esc_html_e( 'Git / CI/CD', 'anisur-portfolio' ); ?></span>
					</div>
				</div>
				<div class="stack-group">
					<h5><i class="fa-brands fa-wordpress-simple"></i> <?php esc_html_e( 'WP SPECIALTY', 'anisur-portfolio' ); ?></h5>
					<div class="tag-cloud">
						<span><?php esc_html_e( 'Divi / Elementor API', 'anisur-portfolio' ); ?></span>
						<span><?php esc_html_e( 'Gutenberg Blocks', 'anisur-portfolio' ); ?></span>
						<span><?php esc_html_e( 'WP REST API', 'anisur-portfolio' ); ?></span>
						<span><?php esc_html_e( 'WooCommerce', 'anisur-portfolio' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- HISTORY SECTION -->
	<section id="history" class="section history-section">
		<div class="container container-narrow">
			<h2 class="section-badge text-center"><?php esc_html_e( 'HISTORY', 'anisur-portfolio' ); ?></h2>
			<h3 class="section-title text-center"><?php esc_html_e( 'Professional History', 'anisur-portfolio' ); ?></h3>

			<div class="timeline-v2">
				<div class="timeline-v2-item">
					<div class="timeline-v2-marker"></div>
					<div class="timeline-v2-content">
						<div class="timeline-v2-header">
							<h4><?php esc_html_e( 'Freelance WordPress Developer', 'anisur-portfolio' ); ?></h4>
							<span class="timeline-v2-date"><?php esc_html_e( 'Apr 2026 - Present', 'anisur-portfolio' ); ?></span>
						</div>
						<p class="timeline-v2-company"><?php esc_html_e( 'Self-Employed (Remote)', 'anisur-portfolio' ); ?></p>
						<ul class="timeline-v2-details">
							<li><?php esc_html_e( 'Maintain a custom WooCommerce store with about 5,000 products managed outside default WooCommerce: orders route to one of 3 fulfilment hubs based on product attributes and move through about 15 statuses, with customer emails and internal notifications on each change.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Cut the store\'s orders page load from over 3 seconds to about 690ms: traced about 1,289 queries to theme code that joined order data and searched serialized meta, replaced it with cached order IDs in a 12-hour transient, and brought database time from about 2,600ms to 46-97ms and queries to about 267.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Maintain 4 production WordPress sites after launch: regression-tested core and plugin updates, performance and SEO improvements, security hardening and backlog tasks with clients in the UK, Germany and the US.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Develop a workflow-driven WordPress CRM with custom PHP and REST APIs, consolidating a long-term US client\'s separate businesses into one system.', 'anisur-portfolio' ); ?></li>
						</ul>
					</div>
				</div>

				<div class="timeline-v2-item">
					<div class="timeline-v2-marker"></div>
					<div class="timeline-v2-content">
						<div class="timeline-v2-header">
							<h4><?php esc_html_e( 'WordPress Plugin Developer', 'anisur-portfolio' ); ?></h4>
							<span class="timeline-v2-date"><?php esc_html_e( 'Mar 2025 – Apr 2026', 'anisur-portfolio' ); ?></span>
						</div>
						<p class="timeline-v2-company"><?php esc_html_e( 'Zone7 (Remote)', 'anisur-portfolio' ); ?></p>
						<ul class="timeline-v2-details">
							<li><?php esc_html_e( 'Cut database query time 30% on a client site (90ms to 63ms on the homepage, Query Monitor) by indexing custom WPDB tables, caching repeated queries and cleaning autoloaded options.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Built 26 Divi modules on reusable PHP 8 and JavaScript OOP patterns for a commercial Divi 5 integration, collaborating with designers and PMs on a 2-week sprint cadence.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Worked in Gitflow: feature branches merged to develop, then to main after senior review, with my own code reviewed by a senior developer and reviewing others\' in return.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Released commercial plugins with the team lead: built the zip from main after PHPCS, WPCS, Plugin Check and Divi Marketplace standard checks passed, then published it through EDD.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Troubleshot plugin and theme conflicts and migration failures on live client sites with Query Monitor and WP_DEBUG; covered frontend builds during developer absences.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Built an AI-assisted Module Factory that generates plugin and theme components from feature specs, reducing full-stack development time by 40% versus the team\'s prior average, measured across the 26 Divi modules.', 'anisur-portfolio' ); ?></li>
						</ul>
					</div>
				</div>

				<div class="timeline-v2-item">
					<div class="timeline-v2-marker"></div>
					<div class="timeline-v2-content">
						<div class="timeline-v2-header">
							<h4><?php esc_html_e( 'WordPress Developer', 'anisur-portfolio' ); ?></h4>
							<span class="timeline-v2-date"><?php esc_html_e( 'Jan 2024 – Feb 2025', 'anisur-portfolio' ); ?></span>
						</div>
						<p class="timeline-v2-company"><?php esc_html_e( 'WP Gigs (Remote)', 'anisur-portfolio' ); ?></p>
						<ul class="timeline-v2-details">
							<li><?php esc_html_e( 'Built plugins with 30+ custom Gutenberg blocks, including dynamic blocks with PHP server-side rendering and React editors, plus custom post types and taxonomies with ACF.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Built the wpgigs.com custom theme, then migrated it to a Full Site Editing block theme using theme.json, templates, patterns and the Interactivity API.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Integrated Amazon S3 and MemberPress APIs to deliver 20,000+ media assets to 1,200+ active members.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Built a custom Gutenberg-based page builder on the REST API and block editor APIs; resolved urgent issues on Beaver Builder sites.', 'anisur-portfolio' ); ?></li>
						</ul>
					</div>
				</div>

				<div class="timeline-v2-item">
					<div class="timeline-v2-marker"></div>
					<div class="timeline-v2-content">
						<div class="timeline-v2-header">
							<h4><?php esc_html_e( 'WordPress Theme and Plugin Developer', 'anisur-portfolio' ); ?></h4>
							<span class="timeline-v2-date"><?php esc_html_e( 'Feb 2023 – Dec 2023', 'anisur-portfolio' ); ?></span>
						</div>
						<p class="timeline-v2-company"><?php esc_html_e( 'ITclan BD', 'anisur-portfolio' ); ?></p>
						<ul class="timeline-v2-details">
							<li><?php esc_html_e( 'Converted 20+ Figma designs into pixel-perfect, responsive, SEO-friendly WooCommerce websites of 15-25 pages each, tested across browsers and devices.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Built custom WooCommerce features: AJAX search, repair-based add-to-cart by brand, model and repair type, custom order PDFs and customer and owner emails (thesmartphone.nl); a referral points system (vapesprimetime.co.uk); and a custom membership registration on custom database tables (fcclubltd.com).', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Integrated the Aamar Pay payment gateway API. Built a multipurpose theme for the TemplateMonster marketplace in three variations (Corporate, Portfolio, WooCommerce) and added two designs to the Le Resto theme.', 'anisur-portfolio' ); ?></li>
						</ul>
					</div>
				</div>

				<div class="timeline-v2-item">
					<div class="timeline-v2-marker"></div>
					<div class="timeline-v2-content">
						<div class="timeline-v2-header">
							<h4><?php esc_html_e( 'WordPress Developer', 'anisur-portfolio' ); ?></h4>
							<span class="timeline-v2-date"><?php esc_html_e( 'Oct 2019 – Feb 2023', 'anisur-portfolio' ); ?></span>
						</div>
						<p class="timeline-v2-company"><?php esc_html_e( 'Orange Toolz', 'anisur-portfolio' ); ?></p>
						<ul class="timeline-v2-details">
							<li><?php esc_html_e( 'Built and maintained 200+ corporate and medical WordPress sites for US clients using Elementor Pro and custom PHP, delivering ongoing monthly updates.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Maintained 40 sites on Pantheon, running theme, plugin and core updates with terminus across dev, multidev and live, using Pantheon backups.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Integrated GoHighLevel APIs for lead capture and conversion tracking across 10+ client practices.', 'anisur-portfolio' ); ?></li>
						</ul>
					</div>
				</div>

				<div class="timeline-v2-item">
					<div class="timeline-v2-marker"></div>
					<div class="timeline-v2-content">
						<div class="timeline-v2-header">
							<h4><?php esc_html_e( 'Web Developer / Designer', 'anisur-portfolio' ); ?></h4>
							<span class="timeline-v2-date"><?php esc_html_e( 'Apr 2016 – Oct 2019', 'anisur-portfolio' ); ?></span>
						</div>
						<p class="timeline-v2-company"><?php esc_html_e( 'BeLocal Today (Remote) &amp; Softnio', 'anisur-portfolio' ); ?></p>
						<ul class="timeline-v2-details">
							<li><?php esc_html_e( 'Built and optimized 50+ local-business WordPress sites for Gold Coast, Brisbane and Sunshine Coast clients: SEO, loading speed and Google Maps citations.', 'anisur-portfolio' ); ?></li>
							<li><?php esc_html_e( 'Converted Figma designs into responsive HTML, CSS and WordPress sites with CSS animations and cross-browser consistency.', 'anisur-portfolio' ); ?></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- EDUCATION SECTION -->
			<div class="education-section mt-5">
				<h2 class="section-badge text-center"><?php esc_html_e( 'EDUCATION', 'anisur-portfolio' ); ?></h2>
				<div class="education-item text-center">
					<h4><?php esc_html_e( 'Diploma in Computer Technology', 'anisur-portfolio' ); ?></h4>
					<p><?php esc_html_e( 'Naogaon Polytechnic Institute, Naogaon, Bangladesh | 2015', 'anisur-portfolio' ); ?></p>

					<h4><?php esc_html_e( 'Coursework toward B.Sc. in Computer Science and Engineering', 'anisur-portfolio' ); ?></h4>
					<p><?php esc_html_e( 'Bangladesh University, Dhaka', 'anisur-portfolio' ); ?></p>
				</div>
			</div>
			</div>
		</div>
	</section>

	<!-- WORK SECTION -->
	<section id="work" class="section work-section">
		<div class="container">
			<h2 class="section-badge"><?php esc_html_e( 'WORK', 'anisur-portfolio' ); ?></h2>
			<h3 class="section-title"><?php esc_html_e( 'Things I\'ve built and shipped', 'anisur-portfolio' ); ?></h3>
			<p class="section-subtitle"><?php esc_html_e( 'Live client sites, published plugins and open-source projects.', 'anisur-portfolio' ); ?></p>

			<div class="work-grid">
				<div class="work-card">
					<span class="work-card-label"><?php esc_html_e( 'Client Sites', 'anisur-portfolio' ); ?></span>
					<ul class="work-list">
						<li><i class="fa-solid fa-globe" aria-hidden="true"></i><span><?php esc_html_e( 'Perfect Smiles Are Us', 'anisur-portfolio' ); ?></span></li>
						<li><i class="fa-solid fa-globe" aria-hidden="true"></i><span><?php esc_html_e( 'Valley Home Health Services', 'anisur-portfolio' ); ?></span></li>
						<li><i class="fa-solid fa-globe" aria-hidden="true"></i><span><?php esc_html_e( 'Zone7', 'anisur-portfolio' ); ?></span></li>
					</ul>
				</div>

				<div class="work-card">
					<span class="work-card-label"><?php esc_html_e( 'Published Plugins', 'anisur-portfolio' ); ?></span>
					<ul class="work-list">
						<li>
							<i class="fa-brands fa-wordpress-simple" aria-hidden="true"></i>
							<a href="https://wordpress.org/plugins/ar-back-to-top/" target="_blank" rel="noopener"><?php esc_html_e( 'AR Back to Top', 'anisur-portfolio' ); ?></a>
						</li>
						<li>
							<i class="fa-brands fa-wordpress-simple" aria-hidden="true"></i>
							<a href="https://wordpress.org/plugins/clandevs-smart-catalog-filters/" target="_blank" rel="noopener"><?php esc_html_e( 'ClanDevs Smart Catalog Filters', 'anisur-portfolio' ); ?></a>
						</li>
					</ul>
				</div>

				<div class="work-card">
					<span class="work-card-label"><?php esc_html_e( 'Open Source on GitHub', 'anisur-portfolio' ); ?></span>
					<ul class="work-list">
						<li>
							<i class="fa-brands fa-github" aria-hidden="true"></i>
							<a href="https://github.com/anisur2805/woocommerce-mini-cart-ajax-plus-minus" target="_blank" rel="noopener"><?php esc_html_e( 'WooCommerce Mini Cart AJAX', 'anisur-portfolio' ); ?></a>
							<span class="work-badge">14 &#9733;</span>
						</li>
						<li>
							<i class="fa-brands fa-github" aria-hidden="true"></i>
							<a href="https://github.com/anisur2805/proofpulse" target="_blank" rel="noopener"><?php esc_html_e( 'ProofPulse', 'anisur-portfolio' ); ?></a>
						</li>
						<li>
							<i class="fa-brands fa-github" aria-hidden="true"></i>
							<a href="https://github.com/anisur2805/commerce-blocks" target="_blank" rel="noopener"><?php esc_html_e( 'commerce-blocks', 'anisur-portfolio' ); ?></a>
						</li>
						<li>
							<i class="fa-brands fa-github" aria-hidden="true"></i>
							<a href="https://github.com/anisur2805/tabskit-pro" target="_blank" rel="noopener"><?php esc_html_e( 'tabskit-pro', 'anisur-portfolio' ); ?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- CASE STUDIES SECTION -->
	<section id="projects" class="section projects-section">
		<div class="container">
			<h2 class="section-badge"><?php esc_html_e( 'CASE STUDIES', 'anisur-portfolio' ); ?></h2>
			<h3 class="section-title"><?php esc_html_e( 'Selected Case Studies', 'anisur-portfolio' ); ?></h3>
			<p class="section-subtitle"><?php esc_html_e( 'A glimpse into work built with precision.', 'anisur-portfolio' ); ?></p>
			
			<div class="case-studies-grid">
				<?php
				$portfolio_items = anisur_get_portfolio_items();
				$initial_items   = array_slice( $portfolio_items, 0, 6 );

				foreach ( $initial_items as $item ) :
					?>
					<article class="case-study-card">
						<div class="case-study-image" style="background: <?php echo esc_attr( $item['bg_color'] ); ?>;">
							<?php if ( strpos( $item['image'], '.svg' ) !== false || strpos( $item['image'], '.gif' ) !== false ) : ?>
								<img src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" loading="lazy" decoding="async" style="width: 100%; height: 100%; object-fit: cover;">
							<?php else : ?>
								<img src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" loading="lazy" decoding="async" style="width: 100%; height: 100%; object-fit: cover;">
							<?php endif; ?>
						</div>
						<div class="case-study-content">
							<div class="case-study-meta">
								<?php foreach ( $item['tags'] as $tag_label ) : ?>
									<span><?php echo esc_html( $tag_label ); ?></span>
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
					<button id="load-more-btn" class="btn btn-secondary"><?php esc_html_e( 'Load More', 'anisur-portfolio' ); ?></button>
				</div>
			<?php endif; ?>
		</div>
	</section>


	<!-- OPEN SOURCE SECTION -->
	<section id="open-source" class="section open-source-section">
		<div class="container">
			<div class="open-source-grid">
				<div class="open-source-info">
					<h2 class="section-badge"><?php esc_html_e( 'OPEN SOURCE', 'anisur-portfolio' ); ?></h2>
					<h3 class="section-title"><?php esc_html_e( 'Plugins &amp; tools I publish', 'anisur-portfolio' ); ?></h3>
					<p><?php esc_html_e( 'Since 2015 I have shipped 78 public repositories — WordPress plugins, Gutenberg blocks and TypeScript tooling. The mini-cart plugin below is the one that took off; the rest are what I build with clients every day.', 'anisur-portfolio' ); ?></p>

					<div class="github-stats">
						<div class="stat">
							<span class="stat-value">78</span>
							<span class="stat-label"><?php esc_html_e( 'Public repositories', 'anisur-portfolio' ); ?></span>
						</div>
						<div class="stat">
							<span class="stat-value">23</span>
							<span class="stat-label"><?php esc_html_e( 'Stars earned', 'anisur-portfolio' ); ?></span>
						</div>
						<div class="stat">
							<span class="stat-value">21</span>
							<span class="stat-label"><?php esc_html_e( 'Followers', 'anisur-portfolio' ); ?></span>
						</div>
					</div>

					<p class="github-handle">
						<i class="fa-brands fa-github" aria-hidden="true"></i>
						<a href="https://github.com/anisur2805" target="_blank" rel="noopener">github.com/anisur2805</a>
					</p>
				</div>

				<div class="open-source-visual">
					<div class="contribution-card featured">
						<div class="cont-badge"><?php esc_html_e( 'Most starred · 14 stars', 'anisur-portfolio' ); ?></div>
						<div class="cont-header">
							<div class="repo-info">
								<span class="repo-user"><?php esc_html_e( 'anisur2805 /', 'anisur-portfolio' ); ?> </span>
								<span class="repo-name accent-text">woocommerce-mini-cart-ajax-plus-minus</span>
							</div>
							<span class="cont-status"><?php esc_html_e( 'PHP', 'anisur-portfolio' ); ?></span>
						</div>
						<p class="cont-desc"><?php esc_html_e( 'A WooCommerce mini cart sidebar with AJAX price and amount updates — no page reload, no jQuery dependency.', 'anisur-portfolio' ); ?></p>
						<div class="cont-action">
							<a href="https://github.com/anisur2805/woocommerce-mini-cart-ajax-plus-minus" target="_blank" rel="noopener" class="accent-link"><?php esc_html_e( 'View Source →', 'anisur-portfolio' ); ?></a>
						</div>
					</div>

					<div class="repo-chips">
						<a class="repo-chip" href="https://github.com/anisur2805/ar-back-to-top" target="_blank" rel="noopener">
							<span class="repo-chip-name">ar-back-to-top</span>
							<span class="repo-chip-lang">PHP</span>
						</a>
						<a class="repo-chip" href="https://github.com/anisur2805/clandevs-smart-catalog-filters" target="_blank" rel="noopener">
							<span class="repo-chip-name">clandevs-smart-catalog-filters</span>
							<span class="repo-chip-lang">PHP</span>
						</a>
						<a class="repo-chip" href="https://github.com/anisur2805/proofpulse" target="_blank" rel="noopener">
							<span class="repo-chip-name">proofpulse</span>
							<span class="repo-chip-lang">PHP</span>
						</a>
						<a class="repo-chip" href="https://github.com/anisur2805/commerce-blocks" target="_blank" rel="noopener">
							<span class="repo-chip-name">commerce-blocks</span>
							<span class="repo-chip-lang">PHP</span>
						</a>
						<a class="repo-chip" href="https://github.com/anisur2805/tabskit-pro" target="_blank" rel="noopener">
							<span class="repo-chip-name">tabskit-pro</span>
							<span class="repo-chip-lang">PHP</span>
						</a>
						<a class="repo-chip" href="https://github.com/anisur2805/blockforge" target="_blank" rel="noopener">
							<span class="repo-chip-name">blockforge</span>
							<span class="repo-chip-lang">TypeScript</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- TESTIMONIALS SECTION -->
	<section id="testimonials" class="section testimonials-section">
		<div class="container">
			<div class="testimonial-grid-v2">
				<div class="testimonial-item">
					<div class="stars">★★★★★</div>
					<p><?php esc_html_e( '"Best WordPress service on Fiverr. Always responsive, quick turnaround. Always very happy with the service."', 'anisur-portfolio' ); ?></p>
					<div class="testimonial-user">
						<div class="user-avatar" style="background-image: url('https://i.pravatar.cc/150?u=fiverr'); background-size: cover;"></div>
						<div>
							<h6><?php esc_html_e( 'Fiverr Client', 'anisur-portfolio' ); ?></h6>
							<p><?php esc_html_e( 'Verified Purchase', 'anisur-portfolio' ); ?></p>
						</div>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="stars">★★★★★</div>
					<p><?php esc_html_e( '"Wonderful to work with. Highly skilled in updating and maintaining WordPress webpages, theme design, and customization."', 'anisur-portfolio' ); ?></p>
					<div class="testimonial-user">
						<div class="user-avatar" style="background-image: url('https://i.pravatar.cc/150?u=upwork'); background-size: cover;"></div>
						<div>
							<h6><?php esc_html_e( 'Upwork Client', 'anisur-portfolio' ); ?></h6>
							<p><?php esc_html_e( 'Project Review', 'anisur-portfolio' ); ?></p>
						</div>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="stars">★★★★★</div>
					<p><?php esc_html_e( '"Highly technical and detail-oriented. Successfully delivered a complex WordPress theme design and customization project ahead of schedule."', 'anisur-portfolio' ); ?></p>
					<div class="testimonial-user">
						<div class="user-avatar" style="background-image: url('https://i.pravatar.cc/150?u=enterprise'); background-size: cover;"></div>
						<div>
							<h6><?php esc_html_e( 'Enterprise Partner', 'anisur-portfolio' ); ?></h6>
							<p><?php esc_html_e( 'Technical Lead', 'anisur-portfolio' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CONTACT SECTION -->
	<section id="contact" class="section contact-section">
		<div class="container">
			<div class="contact-grid">
				<div class="contact-intro">
					<h2 class="section-badge"><?php esc_html_e( 'CONTACT', 'anisur-portfolio' ); ?></h2>
					<h3 class="contact-heading"><?php esc_html_e( 'Have a project', 'anisur-portfolio' ); ?><br><span class="accent-text"><?php esc_html_e( 'in mind?', 'anisur-portfolio' ); ?></span></h3>
					<p class="contact-lead">
						<?php
						esc_html_e(
							'Tell me what you\'re building — a custom plugin, a WooCommerce store that needs
						to be faster, or a site that has outgrown its theme. I reply within one business day.',
							'anisur-portfolio'
						);
						?>
					</p>

					<ul class="contact-channels">
						<li>
							<i class="fa-solid fa-envelope" aria-hidden="true"></i>
							<div>
								<span class="channel-label"><?php esc_html_e( 'Email', 'anisur-portfolio' ); ?></span>
								<a href="mailto:anisur2805@gmail.com"><?php esc_html_e( 'anisur2805@gmail.com', 'anisur-portfolio' ); ?></a>
							</div>
						</li>
						<li>
							<i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
							<div>
								<span class="channel-label"><?php esc_html_e( 'Rather talk first?', 'anisur-portfolio' ); ?></span>
								<a href="https://calendly.com/anisur2805/30min" target="_blank" rel="noopener"><?php esc_html_e( 'Book a 30-minute call', 'anisur-portfolio' ); ?></a>
							</div>
						</li>
						<li>
							<i class="fa-solid fa-globe" aria-hidden="true"></i>
							<div>
								<span class="channel-label"><?php esc_html_e( 'Based in', 'anisur-portfolio' ); ?></span>
								<span class="channel-value"><?php esc_html_e( 'Joypurhat, Bangladesh &middot; GMT+6', 'anisur-portfolio' ); ?></span>
							</div>
						</li>
					</ul>

					<div class="contact-socials">
						<a href="https://github.com/anisur2805" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'GitHub', 'anisur-portfolio' ); ?>"><i class="fab fa-github"></i></a>
						<a href="https://www.linkedin.com/in/anisur-anis/" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'LinkedIn', 'anisur-portfolio' ); ?>"><i class="fab fa-linkedin-in"></i></a>
						<a href="https://x.com/anisur2942" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'Twitter', 'anisur-portfolio' ); ?>"><i class="fab fa-twitter"></i></a>
					</div>
				</div>

				<div class="contact-form-wrapper">
					<form id="contact-form" class="contact-form">
						<div class="form-group">
							<label for="contact-name"><?php esc_html_e( 'Name', 'anisur-portfolio' ); ?><span class="req-mark" aria-hidden="true">*</span></label>
							<input type="text" id="contact-name" name="name" placeholder="<?php esc_attr_e( 'Your Name', 'anisur-portfolio' ); ?>" required>
						</div>
						<div class="form-group">
							<label for="contact-email"><?php esc_html_e( 'Email', 'anisur-portfolio' ); ?><span class="req-mark" aria-hidden="true">*</span></label>
							<input type="email" id="contact-email" name="email" placeholder="<?php esc_attr_e( 'Your@email.com', 'anisur-portfolio' ); ?>" required>
						</div>
						<div class="form-group">
							<label for="contact-phone"><?php esc_html_e( 'Phone', 'anisur-portfolio' ); ?> <span style="opacity: 0.7;"><?php esc_html_e( '(optional)', 'anisur-portfolio' ); ?></span></label>
							<input type="tel" id="contact-phone" name="phone" placeholder="+1 555 123 4567">
						</div>
						<div class="form-group">
							<label for="contact-subject"><?php esc_html_e( 'Subject', 'anisur-portfolio' ); ?> <span style="opacity: 0.7;"><?php esc_html_e( '(optional)', 'anisur-portfolio' ); ?></span></label>
							<input type="text" id="contact-subject" name="subject" placeholder="<?php esc_attr_e( 'Project type, topic, or question', 'anisur-portfolio' ); ?>">
						</div>
						<div class="form-group">
							<label for="contact-message"><?php esc_html_e( 'Message', 'anisur-portfolio' ); ?><span class="req-mark" aria-hidden="true">*</span></label>
							<textarea id="contact-message" name="message" rows="5" placeholder="<?php esc_attr_e( 'Your Message', 'anisur-portfolio' ); ?>" required></textarea>
						</div>
						<div class="form-group contact-hp" aria-hidden="true">
							<label for="contact-website"><?php esc_html_e( 'Website', 'anisur-portfolio' ); ?></label>
							<input type="text" id="contact-website" name="website" autocomplete="off" tabindex="-1">
						</div>
						<button type="submit" class="btn btn-primary btn-block"><?php esc_html_e( 'Send', 'anisur-portfolio' ); ?></button>
					</form>
				</div>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
