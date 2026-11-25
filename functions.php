<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once get_template_directory() . '/inc/portfolio-data.php';

/**
 * URL of the downloadable resume PDF.
 *
 * Kept in one place so every "Download Resume" button stays in sync and can be
 * repointed from the Customizer (Appearance > Customize > Contact Information).
 */
function anisur_get_resume_url() {
	$url = get_theme_mod( 'resume_url', 'https://tinyurl.com/n3yauxh6' );

	return $url ? $url : 'https://tinyurl.com/n3yauxh6';
}

/**
 * Enqueue scripts and styles.
 */
function anisur_portfolio_scripts() {
	// Main Stylesheet (version from file mtime so CSS edits bust the browser cache)
	wp_enqueue_style( 'anisur-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), (string) filemtime( get_template_directory() . '/assets/css/main.css' ) );

	// Google Fonts: Outfit (Headings), Inter (Body), JetBrains Mono (Code)
	wp_enqueue_style( 'anisur-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&family=Outfit:wght@400;500;700;800&display=swap', array(), null );

	// Font Awesome for Social Icons
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0' );

	// Theme interactions: sticky header, mobile menu toggle, smooth scroll.
	wp_enqueue_script(
		'anisur-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		(string) filemtime( get_template_directory() . '/assets/js/main.js' ),
		true
	);

	// Load More & Contact Scripts
	if ( is_front_page() ) {
		wp_enqueue_script( 'anisur-load-more', get_template_directory_uri() . '/assets/js/load-more.js', array( 'jquery' ), '1.0.0', true );

		$recaptcha_site_key = get_theme_mod( 'recaptcha_site_key', '' );

		if ( ! empty( $recaptcha_site_key ) ) {
			wp_enqueue_script(
				'google-recaptcha',
				'https://www.google.com/recaptcha/api.js?render=' . rawurlencode( $recaptcha_site_key ),
				array(),
				null,
				true
			);
		}

		wp_enqueue_script(
			'anisur-contact',
			get_template_directory_uri() . '/assets/js/contact.js',
			! empty( $recaptcha_site_key ) ? array( 'jquery', 'google-recaptcha' ) : array( 'jquery' ),
			'1.0.0',
			true
		);

		wp_localize_script(
			'anisur-contact',
			'anisur_ajax',
			array(
				'ajax_url'           => admin_url( 'admin-ajax.php' ),
				'nonce'              => wp_create_nonce( 'anisur_load_more_nonce' ),
				'recaptcha_site_key' => $recaptcha_site_key,
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'anisur_portfolio_scripts' );

/**
 * Theme Support & Menus
 */
function anisur_portfolio_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Register Menus
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'anisur-portfolio' ),
	) );
}
add_action( 'after_setup_theme', 'anisur_portfolio_setup' );

/**
 * Remove Gutenberg Block Library CSS from loading on the front end
 * (We want pure custom CSS for this portfolio, unless specific blocks are used)
 */
function anisur_remove_wp_block_library_css() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-blocks-style' );
}
// Uncomment the line below if we really want to go "raw HTML" feel inside WP
// add_action( 'wp_enqueue_scripts', 'anisur_remove_wp_block_library_css', 100 );

/**
 * Register WordPress Customizer settings.
 */
function anisur_portfolio_customize_register( $wp_customize ) {
	// Add Panel for Seera Theme
	$wp_customize->add_panel( 'seera_theme_panel', array(
		'title'       => __( 'Seera Theme Settings', 'anisur-portfolio' ),
		'priority'    => 30,
		'description' => __( 'Customize your Seera portfolio theme.', 'anisur-portfolio' ),
	) );

	// Section: Hero
	$wp_customize->add_section( 'seera_hero_section', array(
		'title' => __( 'Hero Section', 'anisur-portfolio' ),
		'panel' => 'seera_theme_panel',
	) );

	$wp_customize->add_setting( 'hero_intro', array( 'default' => 'WordPress Developer & Architect', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'hero_intro', array( 'label' => 'Intro Text', 'section' => 'seera_hero_section', 'type' => 'text' ) );

	$wp_customize->add_setting( 'hero_name_top', array( 'default' => 'Transforming Your', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'hero_name_top', array( 'label' => 'Name Top Line', 'section' => 'seera_hero_section', 'type' => 'text' ) );

	$wp_customize->add_setting( 'hero_name_bottom', array( 'default' => 'Ideas into Reality', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'hero_name_bottom', array( 'label' => 'Name Bottom Line', 'section' => 'seera_hero_section', 'type' => 'text' ) );

	$wp_customize->add_setting( 'hero_description', array( 'default' => 'Passionate about creating intuitive and engaging user experiences. I specialize in transforming ideas into beautifully crafted WordPress solutions.', 'sanitize_callback' => 'textarea_field' ) );
	$wp_customize->add_control( 'hero_description', array( 'label' => 'Description', 'section' => 'seera_hero_section', 'type' => 'textarea' ) );

	// Section: Stats
	$wp_customize->add_section( 'seera_stats_section', array(
		'title' => __( 'Statistics', 'anisur-portfolio' ),
		'panel' => 'seera_theme_panel',
	) );

	for ( $i = 1; $i <= 3; $i++ ) {
		$wp_customize->add_setting( "stat_number_$i", array( 'default' => '0', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( "stat_number_$i", array( 'label' => "Stat $i Number", 'section' => 'seera_stats_section', 'type' => 'text' ) );
		$wp_customize->add_setting( "stat_label_$i", array( 'default' => 'Label', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( "stat_label_$i", array( 'label' => "Stat $i Label", 'section' => 'seera_stats_section', 'type' => 'text' ) );
	}

	// Section: Contact
	$wp_customize->add_section( 'seera_contact_section', array(
		'title' => __( 'Contact Information', 'anisur-portfolio' ),
		'panel' => 'seera_theme_panel',
	) );

	$wp_customize->add_setting( 'contact_email', array( 'default' => 'anisur2805@gmail.com', 'sanitize_callback' => 'sanitize_email' ) );
	$wp_customize->add_control( 'contact_email', array( 'label' => 'Email Address', 'section' => 'seera_contact_section', 'type' => 'email' ) );

	$wp_customize->add_setting( 'github_url', array( 'default' => 'https://github.com/anisur2805', 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( 'github_url', array( 'label' => 'GitHub URL', 'section' => 'seera_contact_section', 'type' => 'url' ) );

	// Resume download link (used by the hero, history and footer buttons).
	$wp_customize->add_setting( 'resume_url', array( 'default' => 'https://tinyurl.com/n3yauxh6', 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( 'resume_url', array( 'label' => 'Resume URL', 'description' => 'Link behind every "Download Resume" button.', 'section' => 'seera_contact_section', 'type' => 'url' ) );

	// reCAPTCHA v3 settings
	$wp_customize->add_setting(
		'recaptcha_site_key',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'recaptcha_site_key',
		array(
			'label'       => __( 'reCAPTCHA v3 Site Key', 'anisur-portfolio' ),
			'description' => __( 'Get keys from Google reCAPTCHA admin console and paste the site key here.', 'anisur-portfolio' ),
			'section'     => 'seera_contact_section',
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'recaptcha_secret_key',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'recaptcha_secret_key',
		array(
			'label'       => __( 'reCAPTCHA v3 Secret Key', 'anisur-portfolio' ),
			'description' => __( 'Secret key used on the server to verify reCAPTCHA tokens.', 'anisur-portfolio' ),
			'section'     => 'seera_contact_section',
			'type'        => 'text',
		)
	);
}
add_action( 'customize_register', 'anisur_portfolio_customize_register' );

/**
 * AJAX Load More Portfolio
 */
function anisur_load_more_portfolio() {
	check_ajax_referer( 'anisur_load_more_nonce', 'nonce' );

	$page = isset( $_POST['page'] ) ? intval( $_POST['page'] ) : 1;
	$posts_per_page = 6;
	$offset = $page * $posts_per_page;

	$items = anisur_get_portfolio_items();
	$total_items = count( $items );
	$sliced_items = array_slice( $items, $offset, $posts_per_page );

	ob_start();

	if ( ! empty( $sliced_items ) ) {
		foreach ( $sliced_items as $item ) {
			?>
			<article class="case-study-card revealed" style="opacity: 1; transform: translateY(0);">
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
			<?php
		}
	}

	$content = ob_get_clean();
	$has_more = ( $offset + $posts_per_page ) < $total_items;

	wp_send_json_success( array(
		'html'     => $content,
		'has_more' => $has_more,
	) );
}
add_action( 'wp_ajax_load_more_portfolio', 'anisur_load_more_portfolio' );
add_action( 'wp_ajax_nopriv_load_more_portfolio', 'anisur_load_more_portfolio' );

/**
 * AJAX Contact Form Handler
 */
function anisur_send_contact_email() {
	check_ajax_referer( 'anisur_load_more_nonce', 'nonce' ); // Using the same nonce action for simplicity

	$name          = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email         = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$message       = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';
	$phone         = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$user_subject  = isset( $_POST['subject'] ) ? sanitize_text_field( wp_unslash( $_POST['subject'] ) ) : '';
	$honeypot      = isset( $_POST['website'] ) ? trim( wp_unslash( $_POST['website'] ) ) : '';
	$recaptcha     = isset( $_POST['recaptcha_token'] ) ? sanitize_text_field( wp_unslash( $_POST['recaptcha_token'] ) ) : '';

	// Honeypot check: real users never see/fill this field.
	if ( ! empty( $honeypot ) ) {
		// Pretend success to avoid giving bots feedback.
		wp_send_json_success();
	}

	// Basic validation.
	if ( empty( $name ) || empty( $email ) || empty( $message ) || ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => 'Please provide a valid name, email, and message.' ) );
	}

	// Time trap: no human can focus three fields and type a message this soon
	// after the page loads. Bots driving the real form submit instantly, so
	// they are caught here with no third-party service involved.
	//
	// A missing `elapsed` is allowed rather than blocked: a visitor with cached
	// markup, or one who posts directly, must not be locked out, and the
	// honeypot plus the rate limit below still cover that case.
	$elapsed = isset( $_POST['elapsed'] ) ? (int) $_POST['elapsed'] : -1;
	if ( $elapsed >= 0 && $elapsed < 3 ) {
		// Pretend success so the bot learns nothing.
		wp_send_json_success();
	}

	// reCAPTCHA v3 verification (only when a key AND a token are present).
	//
	// This must never take the form down. Keys get deprecated, hostname-locked
	// to another domain, or Google can be unreachable — failing closed in any
	// of those cases locks out every real visitor. So only an actual low score
	// or a malformed/replayed token is rejected; configuration problems are
	// logged loudly and allowed through. An absent token (an ad blocker, or a
	// script that failed to load) skips this block entirely for the same reason.
	$recaptcha_secret = get_theme_mod( 'recaptcha_secret_key', '' );

	if ( ! empty( $recaptcha_secret ) && ! empty( $recaptcha ) ) {
		$verify_response = wp_remote_post(
			'https://www.google.com/recaptcha/api/siteverify',
			array(
				'timeout' => 10,
				'body'    => array(
					'secret'   => $recaptcha_secret,
					'response' => $recaptcha,
					'remoteip' => isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '',
				),
			)
		);

		if ( is_wp_error( $verify_response ) ) {
			error_log( 'reCAPTCHA unreachable, allowing submission: ' . $verify_response->get_error_message() );
		} else {
			$verify_body = json_decode( wp_remote_retrieve_body( $verify_response ), true );
			$verify_body = is_array( $verify_body ) ? $verify_body : array();
			$error_codes = ! empty( $verify_body['error-codes'] ) && is_array( $verify_body['error-codes'] ) ? $verify_body['error-codes'] : array();
			$score       = isset( $verify_body['score'] ) ? (float) $verify_body['score'] : -1;

			// Problems with the setup itself, not with the visitor: a
			// deprecated key, a wrong secret, an unregistered hostname.
			$config_markers = array( 'invalid-input-secret', 'missing-input-secret', 'invalid-keys', 'hostname-mismatch', 'recaptcha-not-enabled' );
			$is_config      = array_intersect( $error_codes, $config_markers ) || (bool) preg_grep( '/migrate your key/i', $error_codes );

			if ( empty( $verify_body['success'] ) && $is_config ) {
				error_log( 'reCAPTCHA config problem, allowing submission: ' . implode( ', ', $error_codes ) );
			} elseif ( empty( $verify_body['success'] ) || $score < 0.5 ) {
				wp_send_json_error( array( 'message' => 'reCAPTCHA verification failed. Please try again.' ) );
			}
		}
	}

	// Very simple rate limiting: block excessive submits from same IP.
	$ip_address = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '';
	if ( ! empty( $ip_address ) ) {
		$rate_key = 'anisur_contact_rate_' . md5( $ip_address );
		$count    = (int) get_transient( $rate_key );

		if ( $count >= 5 ) {
			wp_send_json_error( array( 'message' => 'Too many submissions detected from your IP. Please try again later.' ) );
		}

		set_transient( $rate_key, $count + 1, 10 * MINUTE_IN_SECONDS );
	}

	$to      = get_option( 'admin_email' );
	$subject = 'New Portfolio Inquiry from ' . $name;

	if ( ! empty( $user_subject ) ) {
		$subject .= ' – ' . $user_subject;
	}

	$submitted_at = current_time( 'F j, Y g:i a' );
	$site_url     = home_url();

	// ---- Plain-text alternative -------------------------------------------
	// Every HTML mail should ship a text twin: clients that block HTML can
	// still read it, and spam filters penalise HTML-only messages.
	$text_lines = array(
		'New portfolio inquiry',
		'',
		'Name:    ' . $name,
		'Email:   ' . $email,
	);

	if ( '' !== $phone ) {
		$text_lines[] = 'Phone:   ' . $phone;
	}

	if ( '' !== $user_subject ) {
		$text_lines[] = 'Subject: ' . $user_subject;
	}

	$text_lines[] = '';
	$text_lines[] = 'Message:';
	$text_lines[] = $message;
	$text_lines[] = '';
	$text_lines[] = '---';
	$text_lines[] = 'Submitted from: ' . $site_url;
	$text_lines[] = 'Date: ' . $submitted_at;

	$body_text = implode( "\n", $text_lines );

	// ---- HTML body --------------------------------------------------------
	// The visitor controls name/email/subject/message, so anything interpolated
	// into this markup is escaped — otherwise a crafted submission could inject
	// HTML into the notification (and into any mail client that renders it).
	$font      = "-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif";
	$label_css = "padding:11px 0;border-bottom:1px solid #eceff3;width:104px;vertical-align:top;font:600 11px/1.4 {$font};letter-spacing:.08em;text-transform:uppercase;color:#7b8794;";
	$value_css = "padding:11px 0;border-bottom:1px solid #eceff3;vertical-align:top;font:400 15px/1.5 {$font};color:#111a22;";

	$rows = array(
		array( 'Name', esc_html( $name ) ),
		array(
			'Email',
			'<a href="mailto:' . esc_attr( $email ) . '" style="color:#0d7a63;text-decoration:none;">' . esc_html( $email ) . '</a>',
		),
	);

	if ( '' !== $phone ) {
		$rows[] = array( 'Phone', esc_html( $phone ) );
	}

	if ( '' !== $user_subject ) {
		$rows[] = array( 'Subject', esc_html( $user_subject ) );
	}

	$rows_html = '';
	foreach ( $rows as $row ) {
		$rows_html .= '<tr>'
			. '<td style="' . $label_css . '">' . $row[0] . '</td>'
			. '<td style="' . $value_css . '">' . $row[1] . '</td>'
			. '</tr>';
	}

	$body_html = '<!DOCTYPE html><html><head><meta charset="utf-8">'
		. '<meta name="viewport" content="width=device-width,initial-scale=1">'
		. '<title>New portfolio inquiry</title></head>'
		. '<body style="margin:0;padding:0;background:#f2f5f7;">'
		. '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f2f5f7;padding:28px 12px;">'
		. '<tr><td align="center">'
		. '<table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background:#ffffff;border:1px solid #e4e9ee;border-radius:10px;">'
		. '<tr><td style="background:#050a0f;padding:22px 28px;border-radius:9px 9px 0 0;">'
		. '<div style="font:700 12px/1 ' . $font . ';letter-spacing:.18em;text-transform:uppercase;color:#00d1a0;">New Portfolio Inquiry</div>'
		. '<div style="margin-top:9px;font:400 13px/1.4 ' . $font . ';color:#9fb0be;">' . esc_html( $site_url ) . '</div>'
		. '</td></tr>'
		. '<tr><td style="padding:8px 28px 0;">'
		. '<table role="presentation" width="100%" cellpadding="0" cellspacing="0">' . $rows_html . '</table>'
		. '</td></tr>'
		. '<tr><td style="padding:26px 28px 0;">'
		. '<div style="font:600 11px/1.4 ' . $font . ';letter-spacing:.08em;text-transform:uppercase;color:#7b8794;margin-bottom:10px;">Message</div>'
		. '<div style="border-left:3px solid #00d1a0;background:#f7fafb;border-radius:0 6px 6px 0;padding:16px 18px;font:400 15px/1.65 ' . $font . ';color:#111a22;">' . nl2br( esc_html( $message ) ) . '</div>'
		. '</td></tr>'
		. '<tr><td style="padding:26px 28px 4px;">'
		. '<a href="mailto:' . esc_attr( $email ) . '?subject=' . rawurlencode( 'Re: ' . $subject ) . '" style="display:inline-block;background:#00d1a0;color:#04121a;font:700 13px/1 ' . $font . ';letter-spacing:.06em;text-transform:uppercase;text-decoration:none;padding:14px 24px;border-radius:4px;">Reply to ' . esc_html( $name ) . '</a>'
		. '</td></tr>'
		. '<tr><td style="padding:20px 28px 26px;">'
		. '<div style="border-top:1px solid #eceff3;padding-top:16px;font:400 12px/1.7 ' . $font . ';color:#98a4b0;">'
		. 'Submitted from ' . esc_html( $site_url ) . '<br>Date: ' . esc_html( $submitted_at )
		. '</div></td></tr>'
		. '</table>'
		. '</td></tr></table></body></html>';

	// Always send from the site's own address so SPF/DKIM pass. The visitor's
	// address belongs in Reply-To, never in From (that would look like spoofing
	// and Gmail/Hotmail would reject or spam-folder the message).
	$from_email = get_option( 'admin_email' );
	if ( ! $from_email || ! is_email( $from_email ) ) {
		$from_email = 'anisur2805@gmail.com';
	}

	// Hand the text twin to the phpmailer_init hook below.
	$GLOBALS['anisur_contact_email_text'] = $body_text;

	$headers = array(
		'Content-Type: text/html; charset=UTF-8',
		'From: ' . $from_email,
		'Reply-To: ' . $name . ' <' . $email . '>',
	);

	if ( wp_mail( $to, $subject, $body_html, $headers ) ) {
		wp_send_json_success();
	} else {
		error_log( "Contact Form Email Failed: $to, $subject" );
		wp_send_json_error( array( 'message' => 'Failed to send email. Please try again later.' ) );
	}
}
add_action( 'wp_ajax_send_contact_email', 'anisur_send_contact_email' );
add_action( 'wp_ajax_nopriv_send_contact_email', 'anisur_send_contact_email' );

/**
 * Attach the plain-text alternative to the contact notification.
 *
 * wp_mail() only carries one body, so the text version is passed through a
 * global that this hook picks up during the same send. Setting PHPMailer's
 * AltBody turns the message into multipart/alternative.
 *
 * The charset is forced here too: WordPress does not always forward the
 * charset from the Content-Type header, and PHPMailer falls back to us-ascii,
 * which mangles any non-English character the visitor typed.
 *
 * Both are scoped to this one send so no other email on the site changes.
 */
function anisur_contact_email_alt_body( $phpmailer ) {
	$text = isset( $GLOBALS['anisur_contact_email_text'] ) ? $GLOBALS['anisur_contact_email_text'] : '';

	if ( '' === $text ) {
		return;
	}

	$phpmailer->AltBody                   = $text;
	$phpmailer->CharSet                   = 'UTF-8';
	$GLOBALS['anisur_contact_email_text'] = '';
}
add_action( 'phpmailer_init', 'anisur_contact_email_alt_body' );

/**
 * Log the real reason wp_mail failed so the admin can debug SMTP issues.
 */
function anisur_log_mail_failure( $error ) {
	if ( is_wp_error( $error ) ) {
		error_log( 'wp_mail failure: ' . $error->get_error_message() );
	}
}
add_action( 'wp_mail_failed', 'anisur_log_mail_failure' );

