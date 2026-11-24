document.addEventListener('DOMContentLoaded', () => {
	// Sticky Header
	const header = document.querySelector('.site-header');
	window.addEventListener('scroll', () => {
		if (window.scrollY > 50) {
			header.classList.add('scrolled');
		} else {
			header.classList.remove('scrolled');
		}
	});

	// Mobile navigation toggle
	const navToggle = document.querySelector('.nav-toggle');
	const primaryNav = document.getElementById('site-navigation');

	if (navToggle && primaryNav) {
		const setNavOpen = (open) => {
			navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
			navToggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
			primaryNav.classList.toggle('is-open', open);
		};

		navToggle.addEventListener('click', () => {
			setNavOpen(navToggle.getAttribute('aria-expanded') !== 'true');
		});

		// Close the panel after tapping a link.
		primaryNav.querySelectorAll('a').forEach((link) => {
			link.addEventListener('click', () => setNavOpen(false));
		});

		document.addEventListener('keydown', (event) => {
			if (event.key === 'Escape') {
				setNavOpen(false);
			}
		});

		// Reset when growing back to the desktop layout.
		window.addEventListener('resize', () => {
			if (window.innerWidth > 900) {
				setNavOpen(false);
			}
		});
	}

	// Reveal Animations on Scroll
	const revealElements = document.querySelectorAll('.section, .card, .expertise-card, .case-study-card');
	const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	// CSS for revealed state (defined before any element is hidden, so a later
	// failure can never leave content stuck at opacity 0).
	const style = document.createElement('style');
	style.textContent = `
		.revealed {
			opacity: 1 !important;
			transform: translateY(0) !important;
		}
	`;
	document.head.appendChild(style);

	if (!prefersReducedMotion && 'IntersectionObserver' in window) {
		const revealObserver = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					entry.target.classList.add('revealed');
					revealObserver.unobserve(entry.target);
				}
			});
		}, { threshold: 0.1 });

		revealElements.forEach(el => {
			el.style.opacity = '0';
			el.style.transform = 'translateY(20px)';
			el.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
			revealObserver.observe(el);
		});

		// Fail-safe: if anything goes wrong, never leave content hidden.
		window.setTimeout(() => {
			revealElements.forEach(el => el.classList.add('revealed'));
		}, 3000);
	}

	// Smooth Scroll for Navigation
	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener('click', function (e) {
			const href = this.getAttribute('href');
			if (href === '#') return;
			
			e.preventDefault();
			const target = document.querySelector(href);
			if (target) {
				const headerHeight = header.offsetHeight;
				window.scrollTo({
					top: target.offsetTop - headerHeight,
					behavior: 'smooth'
				});
			}
		});
	});
});
