
# Arahan (baris) antara "BEGIN WordPress" dan "END WordPress"
# dihasilkan secara dinamis, dan hanya dapat dimodifikasi melalui filter WordPress.
# Setiap perubahan pada arahan di antara penanda berikut akan ditimpa.
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /ferdiangroup/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /ferdiangroup/index.php [L]
</IfModule>

# END WordPress 
 17  index.php 
@@ -0,0 +1,17 @@
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
 384  license.txt 
Large diffs are not rendered by default.

 97  readme.html 
@@ -0,0 +1,97 @@
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>WordPress &#8250; ReadMe</title>
	<link rel="stylesheet" href="wp-admin/css/install.css?ver=20100228" type="text/css" />
</head>
<body>
<h1 id="logo">
	<a href="https://wordpress.org/"><img alt="WordPress" src="wp-admin/images/wordpress-logo.png" /></a>
</h1>
<p style="text-align: center">Semantic Personal Publishing Platform</p>

<h2>First Things First</h2>
<p>Welcome. WordPress is a very special project to me. Every developer and contributor adds something unique to the mix, and together we create something beautiful that I&#8217;m proud to be a part of. Thousands of hours have gone into WordPress, and we&#8217;re dedicated to making it better every day. Thank you for making it part of your world.</p>
<p style="text-align: right">&#8212; Matt Mullenweg</p>

<h2>Installation: Famous 5-minute install</h2>
<ol>
	<li>Unzip the package in an empty directory and upload everything.</li>
	<li>Open <span class="file"><a href="wp-admin/install.php">wp-admin/install.php</a></span> in your browser. It will take you through the process to set up a <code>wp-config.php</code> file with your database connection details.
		<ol>
			<li>If for some reason this doesn&#8217;t work, don&#8217;t worry. It doesn&#8217;t work on all web hosts. Open up <code>wp-config-sample.php</code> with a text editor like WordPad or similar and fill in your database connection details.</li>
			<li>Save the file as <code>wp-config.php</code> and upload it.</li>
			<li>Open <span class="file"><a href="wp-admin/install.php">wp-admin/install.php</a></span> in your browser.</li>
		</ol>
	</li>
	<li>Once the configuration file is set up, the installer will set up the tables needed for your site. If there is an error, double check your <code>wp-config.php</code> file, and try again. If it fails again, please go to the <a href="https://wordpress.org/support/forums/">WordPress support forums</a> with as much data as you can gather.</li>
	<li><strong>If you did not enter a password, note the password given to you.</strong> If you did not provide a username, it will be <code>admin</code>.</li>
	<li>The installer should then send you to the <a href="wp-login.php">login page</a>. Sign in with the username and password you chose during the installation. If a password was generated for you, you can then click on &#8220;Profile&#8221; to change the password.</li>
</ol>

<h2>Updating</h2>
<h3>Using the Automatic Updater</h3>
<ol>
	<li>Open <span class="file"><a href="wp-admin/update-core.php">wp-admin/update-core.php</a></span> in your browser and follow the instructions.</li>
	<li>You wanted more, perhaps? That&#8217;s it!</li>
</ol>

<h3>Updating Manually</h3>
<ol>
	<li>Before you update anything, make sure you have backup copies of any files you may have modified such as <code>index.php</code>.</li>
	<li>Delete your old WordPress files, saving ones you&#8217;ve modified.</li>
	<li>Upload the new files.</li>
	<li>Point your browser to <span class="file"><a href="wp-admin/upgrade.php">/wp-admin/upgrade.php</a>.</span></li>
</ol>

<h2>Migrating from other systems</h2>
<p>WordPress can <a href="https://wordpress.org/support/article/importing-content/">import from a number of systems</a>. First you need to get WordPress installed and working as described above, before using <a href="wp-admin/import.php">our import tools</a>.</p>

<h2>System Requirements</h2>
<ul>
	<li><a href="https://secure.php.net/">PHP</a> version <strong>5.6.20</strong> or higher.</li>
	<li><a href="https://www.mysql.com/">MySQL</a> version <strong>5.0</strong> or higher.</li>
</ul>

<h3>Recommendations</h3>
<ul>
	<li><a href="https://secure.php.net/">PHP</a> version <strong>7.4</strong> or higher.</li>
	<li><a href="https://www.mysql.com/">MySQL</a> version <strong>5.6</strong> or higher.</li>
	<li>The <a href="https://httpd.apache.org/docs/2.2/mod/mod_rewrite.html">mod_rewrite</a> Apache module.</li>
	<li><a href="https://wordpress.org/news/2016/12/moving-toward-ssl/">HTTPS</a> support.</li>
	<li>A link to <a href="https://wordpress.org/">wordpress.org</a> on your site.</li>
</ul>

<h2>Online Resources</h2>
<p>If you have any questions that aren&#8217;t addressed in this document, please take advantage of WordPress&#8217; numerous online resources:</p>
<dl>
	<dt><a href="https://codex.wordpress.org/">The WordPress Codex</a></dt>
		<dd>The Codex is the encyclopedia of all things WordPress. It is the most comprehensive source of information for WordPress available.</dd>
	<dt><a href="https://wordpress.org/news/">The WordPress Blog</a></dt>
		<dd>This is where you&#8217;ll find the latest updates and news related to WordPress. Recent WordPress news appears in your administrative dashboard by default.</dd>
	<dt><a href="https://planet.wordpress.org/">WordPress Planet</a></dt>
		<dd>The WordPress Planet is a news aggregator that brings together posts from WordPress blogs around the web.</dd>
	<dt><a href="https://wordpress.org/support/forums/">WordPress Support Forums</a></dt>
		<dd>If you&#8217;ve looked everywhere and still can&#8217;t find an answer, the support forums are very active and have a large community ready to help. To help them help you be sure to use a descriptive thread title and describe your question in as much detail as possible.</dd>
	<dt><a href="https://codex.wordpress.org/IRC">WordPress <abbr>IRC</abbr> (Internet Relay Chat) Channel</a></dt>
		<dd>There is an online chat channel that is used for discussion among people who use WordPress and occasionally support topics. The above wiki page should point you in the right direction. (<a href="irc://irc.freenode.net/wordpress">irc.freenode.net #wordpress</a>)</dd>
</dl>

<h2>Final Notes</h2>
<ul>
	<li>If you have any suggestions, ideas, or comments, or if you (gasp!) found a bug, join us in the <a href="https://wordpress.org/support/forums/">Support Forums</a>.</li>
	<li>WordPress has a robust plugin <abbr>API</abbr> (Application Programming Interface) that makes extending the code easy. If you are a developer interested in utilizing this, see the <a href="https://developer.wordpress.org/plugins/">Plugin Developer Handbook</a>. You shouldn&#8217;t modify any of the core code.</li>
</ul>

<h2>Share the Love</h2>
<p>WordPress has no multi-million dollar marketing campaign or celebrity sponsors, but we do have something even better&#8212;you. If you enjoy WordPress please consider telling a friend, setting it up for someone less knowledgable than yourself, or writing the author of a media article that overlooks us.</p>

<p>WordPress is the official continuation of <a href="http://cafelog.com/">b2/caf&#233;log</a>, which came from Michel V. The work has been continued by the <a href="https://wordpress.org/about/">WordPress developers</a>. If you would like to support WordPress, please consider <a href="https://wordpress.org/donate/">donating</a>.</p>

<h2>License</h2>
<p>WordPress is free software, and is released under the terms of the <abbr>GPL</abbr> (GNU General Public License) version 2 or (at your option) any later version. See <a href="license.txt">license.txt</a>.</p>

</body>
</html>
 220  wp-activate.php 
@@ -0,0 +1,220 @@
<?php
/**
 * Confirms that the activation key that is sent in an email after a user signs
 * up for a new site matches the key for that user and then displays confirmation.
 *
 * @package WordPress
 */

define( 'WP_INSTALLING', true );

/** Sets up the WordPress Environment. */
require __DIR__ . '/wp-load.php';

require __DIR__ . '/wp-blog-header.php';

if ( ! is_multisite() ) {
	wp_redirect( wp_registration_url() );
	die();
}

$valid_error_codes = array( 'already_active', 'blog_taken' );

list( $activate_path ) = explode( '?', wp_unslash( $_SERVER['REQUEST_URI'] ) );
$activate_cookie       = 'wp-activate-' . COOKIEHASH;

$key    = '';
$result = null;

if ( isset( $_GET['key'] ) && isset( $_POST['key'] ) && $_GET['key'] !== $_POST['key'] ) {
	wp_die( __( 'A key value mismatch has been detected. Please follow the link provided in your activation email.' ), __( 'An error occurred during the activation' ), 400 );
} elseif ( ! empty( $_GET['key'] ) ) {
	$key = $_GET['key'];
} elseif ( ! empty( $_POST['key'] ) ) {
	$key = $_POST['key'];
}

if ( $key ) {
	$redirect_url = remove_query_arg( 'key' );

	if ( remove_query_arg( false ) !== $redirect_url ) {
		setcookie( $activate_cookie, $key, 0, $activate_path, COOKIE_DOMAIN, is_ssl(), true );
		wp_safe_redirect( $redirect_url );
		exit;
	} else {
		$result = wpmu_activate_signup( $key );
	}
}

if ( null === $result && isset( $_COOKIE[ $activate_cookie ] ) ) {
	$key    = $_COOKIE[ $activate_cookie ];
	$result = wpmu_activate_signup( $key );
	setcookie( $activate_cookie, ' ', time() - YEAR_IN_SECONDS, $activate_path, COOKIE_DOMAIN, is_ssl(), true );
}

if ( null === $result || ( is_wp_error( $result ) && 'invalid_key' === $result->get_error_code() ) ) {
	status_header( 404 );
} elseif ( is_wp_error( $result ) ) {
	$error_code = $result->get_error_code();

	if ( ! in_array( $error_code, $valid_error_codes, true ) ) {
		status_header( 400 );
	}
}

nocache_headers();

if ( is_object( $wp_object_cache ) ) {
	$wp_object_cache->cache_enabled = false;
}

// Fix for page title.
$wp_query->is_404 = false;

/**
 * Fires before the Site Activation page is loaded.
 *
 * @since 3.0.0
 */
do_action( 'activate_header' );

/**
 * Adds an action hook specific to this page.
 *
 * Fires on {@see 'wp_head'}.
 *
 * @since MU (3.0.0)
 */
function do_activate_header() {
	/**
	 * Fires before the Site Activation page is loaded.
	 *
	 * Fires on the {@see 'wp_head'} action.
	 *
	 * @since 3.0.0
	 */
	do_action( 'activate_wp_head' );
}
add_action( 'wp_head', 'do_activate_header' );

/**
 * Loads styles specific to this page.
 *
 * @since MU (3.0.0)
 */
function wpmu_activate_stylesheet() {
	?>
	<style type="text/css">
		form { margin-top: 2em; }
		#submit, #key { width: 90%; font-size: 24px; }
		#language { margin-top: .5em; }
		.error { background: #f66; }
		span.h3 { padding: 0 8px; font-size: 1.3em; font-weight: 600; }
	</style>
	<?php
}
add_action( 'wp_head', 'wpmu_activate_stylesheet' );
add_action( 'wp_head', 'wp_sensitive_page_meta' );

get_header( 'wp-activate' );

$blog_details = get_blog_details();
?>

<div id="signup-content" class="widecolumn">
	<div class="wp-activate-container">
	<?php if ( ! $key ) { ?>

		<h2><?php _e( 'Activation Key Required' ); ?></h2>
		<form name="activateform" id="activateform" method="post" action="<?php echo network_site_url( $blog_details->path . 'wp-activate.php' ); ?>">
			<p>
				<label for="key"><?php _e( 'Activation Key:' ); ?></label>
				<br /><input type="text" name="key" id="key" value="" size="50" />
			</p>
			<p class="submit">
				<input id="submit" type="submit" name="Submit" class="submit" value="<?php esc_attr_e( 'Activate' ); ?>" />
			</p>
		</form>

		<?php
	} else {
		if ( is_wp_error( $result ) && in_array( $result->get_error_code(), $valid_error_codes, true ) ) {
			$signup = $result->get_error_data();
			?>
			<h2><?php _e( 'Your account is now active!' ); ?></h2>
			<?php
			echo '<p class="lead-in">';
			if ( '' === $signup->domain . $signup->path ) {
				printf(
					/* translators: 1: Login URL, 2: Username, 3: User email address, 4: Lost password URL. */
					__( 'Your account has been activated. You may now <a href="%1$s">log in</a> to the site using your chosen username of &#8220;%2$s&#8221;. Please check your email inbox at %3$s for your password and login instructions. If you do not receive an email, please check your junk or spam folder. If you still do not receive an email within an hour, you can <a href="%4$s">reset your password</a>.' ),
					network_site_url( $blog_details->path . 'wp-login.php', 'login' ),
					$signup->user_login,
					$signup->user_email,
					wp_lostpassword_url()
				);
			} else {
				printf(
					/* translators: 1: Site URL, 2: Username, 3: User email address, 4: Lost password URL. */
					__( 'Your site at %1$s is active. You may now log in to your site using your chosen username of &#8220;%2$s&#8221;. Please check your email inbox at %3$s for your password and login instructions. If you do not receive an email, please check your junk or spam folder. If you still do not receive an email within an hour, you can <a href="%4$s">reset your password</a>.' ),
					sprintf( '<a href="http://%1$s%2$s">%1$s%2$s</a>', $signup->domain, $blog_details->path ),
					$signup->user_login,
					$signup->user_email,
					wp_lostpassword_url()
				);
			}
			echo '</p>';
		} elseif ( null === $result || is_wp_error( $result ) ) {
			?>
			<h2><?php _e( 'An error occurred during the activation' ); ?></h2>
			<?php if ( is_wp_error( $result ) ) : ?>
				<p><?php echo $result->get_error_message(); ?></p>
			<?php endif; ?>
			<?php
		} else {
			$url  = isset( $result['blog_id'] ) ? get_home_url( (int) $result['blog_id'] ) : '';
			$user = get_userdata( (int) $result['user_id'] );
			?>
			<h2><?php _e( 'Your account is now active!' ); ?></h2>

			<div id="signup-welcome">
			<p><span class="h3"><?php _e( 'Username:' ); ?></span> <?php echo $user->user_login; ?></p>
			<p><span class="h3"><?php _e( 'Password:' ); ?></span> <?php echo $result['password']; ?></p>
			</div>

			<?php
			if ( $url && network_home_url( '', 'http' ) !== $url ) :
				switch_to_blog( (int) $result['blog_id'] );
				$login_url = wp_login_url();
				restore_current_blog();
				?>
				<p class="view">
				<?php
					/* translators: 1: Site URL, 2: Login URL. */
					printf( __( 'Your account is now activated. <a href="%1$s">View your site</a> or <a href="%2$s">Log in</a>' ), $url, esc_url( $login_url ) );
				?>
				</p>
			<?php else : ?>
				<p class="view">
				<?php
					printf(
						/* translators: 1: Login URL, 2: Network home URL. */
						__( 'Your account is now activated. <a href="%1$s">Log in</a> or go back to the <a href="%2$s">homepage</a>.' ),
						network_site_url( $blog_details->path . 'wp-login.php', 'login' ),
						network_home_url( $blog_details->path )
					);
				?>
				</p>
				<?php
				endif;
		}
	}
	?>
	</div>
</div>
<script type="text/javascript">
	var key_input = document.getElementById('key');
	key_input && key_input.focus();
</script>
<?php
get_footer( 'wp-activate' );
 21  wp-blog-header.php 
@@ -0,0 +1,21 @@
<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
 81  wp-comments-post.php 
@@ -0,0 +1,81 @@
<?php
/**
 * Handles Comment Post to WordPress and prevents duplicate comment posting.
 *
 * @package WordPress
 */

if ( 'POST' !== $_SERVER['REQUEST_METHOD'] ) {
	$protocol = $_SERVER['SERVER_PROTOCOL'];
	if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ), true ) ) {
		$protocol = 'HTTP/1.0';
	}

	header( 'Allow: POST' );
	header( "$protocol 405 Method Not Allowed" );
	header( 'Content-Type: text/plain' );
	exit;
}

/** Sets up the WordPress Environment. */
require __DIR__ . '/wp-load.php';

nocache_headers();

$comment = wp_handle_comment_submission( wp_unslash( $_POST ) );
if ( is_wp_error( $comment ) ) {
	$data = (int) $comment->get_error_data();
	if ( ! empty( $data ) ) {
		wp_die(
			'<p>' . $comment->get_error_message() . '</p>',
			__( 'Comment Submission Failure' ),
			array(
				'response'  => $data,
				'back_link' => true,
			)
		);
	} else {
		exit;
	}
}

$user            = wp_get_current_user();
$cookies_consent = ( isset( $_POST['wp-comment-cookies-consent'] ) );

/**
 * Perform other actions when comment cookies are set.
 *
 * @since 3.4.0
 * @since 4.9.6 The `$cookies_consent` parameter was added.
 *
 * @param WP_Comment $comment         Comment object.
 * @param WP_User    $user            Comment author's user object. The user may not exist.
 * @param bool       $cookies_consent Comment author's consent to store cookies.
 */
do_action( 'set_comment_cookies', $comment, $user, $cookies_consent );

$location = empty( $_POST['redirect_to'] ) ? get_comment_link( $comment ) : $_POST['redirect_to'] . '#comment-' . $comment->comment_ID;

// If user didn't consent to cookies, add specific query arguments to display the awaiting moderation message.
if ( ! $cookies_consent && 'unapproved' === wp_get_comment_status( $comment ) && ! empty( $comment->comment_author_email ) ) {
	$location = add_query_arg(
		array(
			'unapproved'      => $comment->comment_ID,
			'moderation-hash' => wp_hash( $comment->comment_date_gmt ),
		),
		$location
	);
}

/**
 * Filters the location URI to send the commenter after posting.
 *
 * @since 2.0.5
 *
 * @param string     $location The 'redirect_to' URI sent via $_POST.
 * @param WP_Comment $comment  Comment object.
 */
$location = apply_filters( 'comment_post_redirect', $location, $comment );

wp_safe_redirect( $location );
exit;
 90  wp-config-sample.php 
@@ -0,0 +1,90 @@
<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
 90  wp-config.php 
@@ -0,0 +1,90 @@
<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',wDo<~=0esqfIgqBO-KH/[)#?@AAmkCGsCQdp9&M&Q1}7JH:4E^AqtIWZXcLJ*#2' );
define( 'SECURE_AUTH_KEY',  'uj)JS`bTXB*.}M&1$tuj!/w1!HpCzdd^.&dwUX7xluVQ rj ak$t-z?p^1X2:r,2' );
define( 'LOGGED_IN_KEY',    '!a)/;e%NFz-BZ9>n&zDW-_]d}7AVcP%b02EI^SyAX[gJ]F?Y2-[Zu$c74ePdIr/9' );
define( 'NONCE_KEY',        '+&hkE&Xk^fZ78}$T782bU2 txwj5BMT)=:[jie1RG}/FlC/$Xmhx/S~CKQ *8eKe' );
define( 'AUTH_SALT',        '@IzotcAJcE8RAY;BPp-2HNJhOaxmOs1U=tiy2TKC48s #^XZNjt ]{uzwDMK`uWN' );
define( 'SECURE_AUTH_SALT', '8`.8GzYRWwWl.6KgOhu%0Ceb1v|EaXhgVKK6}f^!4w Fn,;Z o&XcP#r4QkxI.d5' );
define( 'LOGGED_IN_SALT',   'ygy{CAxdrRK;X:r1D6^PDkcX:#`j90~!^Nt5v$DW];:Ua(lJU0 b#@n6CG{<Vg@*' );
define( 'NONCE_SALT',       '&`0C85#X~nY*}eK:9|0<5oX!N%9|>oo36^TFD*:+Jo.ki9B-pIDI~6iQj>?nB4%E' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
 152  wp-cron.php 
@@ -0,0 +1,152 @@
<?php
/**
 * A pseudo-cron daemon for scheduling WordPress tasks.
 *
 * WP-Cron is triggered when the site receives a visit. In the scenario
 * where a site may not receive enough visits to execute scheduled tasks
 * in a timely manner, this file can be called directly or via a server
 * cron daemon for X number of times.
 *
 * Defining DISABLE_WP_CRON as true and calling this file directly are
 * mutually exclusive and the latter does not rely on the former to work.
 *
 * The HTTP request to this file will not slow down the visitor who happens to
 * visit when a scheduled cron event runs.
 *
 * @package WordPress
 */

ignore_user_abort( true );

/* Don't make the request block till we finish, if possible. */
if ( function_exists( 'fastcgi_finish_request' ) && version_compare( phpversion(), '7.0.16', '>=' ) ) {
	if ( ! headers_sent() ) {
		header( 'Expires: Wed, 11 Jan 1984 05:00:00 GMT' );
		header( 'Cache-Control: no-cache, must-revalidate, max-age=0' );
	}

	fastcgi_finish_request();
}

if ( ! empty( $_POST ) || defined( 'DOING_AJAX' ) || defined( 'DOING_CRON' ) ) {
	die();
}

/**
 * Tell WordPress we are doing the cron task.
 *
 * @var bool
 */
define( 'DOING_CRON', true );

if ( ! defined( 'ABSPATH' ) ) {
	/** Set up WordPress environment */
	require_once __DIR__ . '/wp-load.php';
}

/**
 * Retrieves the cron lock.
 *
 * Returns the uncached `doing_cron` transient.
 *
 * @ignore
 * @since 3.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @return string|false Value of the `doing_cron` transient, 0|false otherwise.
 */
function _get_cron_lock() {
	global $wpdb;

	$value = 0;
	if ( wp_using_ext_object_cache() ) {
		/*
		 * Skip local cache and force re-fetch of doing_cron transient
		 * in case another process updated the cache.
		 */
		$value = wp_cache_get( 'doing_cron', 'transient', true );
	} else {
		$row = $wpdb->get_row( $wpdb->prepare( "SELECT option_value FROM $wpdb->options WHERE option_name = %s LIMIT 1", '_transient_doing_cron' ) );
		if ( is_object( $row ) ) {
			$value = $row->option_value;
		}
	}

	return $value;
}

$crons = wp_get_ready_cron_jobs();
if ( empty( $crons ) ) {
	die();
}

$gmt_time = microtime( true );

// The cron lock: a unix timestamp from when the cron was spawned.
$doing_cron_transient = get_transient( 'doing_cron' );

// Use global $doing_wp_cron lock, otherwise use the GET lock. If no lock, try to grab a new lock.
if ( empty( $doing_wp_cron ) ) {
	if ( empty( $_GET['doing_wp_cron'] ) ) {
		// Called from external script/job. Try setting a lock.
		if ( $doing_cron_transient && ( $doing_cron_transient + WP_CRON_LOCK_TIMEOUT > $gmt_time ) ) {
			return;
		}
		$doing_wp_cron        = sprintf( '%.22F', microtime( true ) );
		$doing_cron_transient = $doing_wp_cron;
		set_transient( 'doing_cron', $doing_wp_cron );
	} else {
		$doing_wp_cron = $_GET['doing_wp_cron'];
	}
}

/*
 * The cron lock (a unix timestamp set when the cron was spawned),
 * must match $doing_wp_cron (the "key").
 */
if ( $doing_cron_transient !== $doing_wp_cron ) {
	return;
}

foreach ( $crons as $timestamp => $cronhooks ) {
	if ( $timestamp > $gmt_time ) {
		break;
	}

	foreach ( $cronhooks as $hook => $keys ) {

		foreach ( $keys as $k => $v ) {

			$schedule = $v['schedule'];

			if ( $schedule ) {
				wp_reschedule_event( $timestamp, $schedule, $hook, $v['args'] );
			}

			wp_unschedule_event( $timestamp, $hook, $v['args'] );

			/**
			 * Fires scheduled events.
			 *
			 * @ignore
			 * @since 2.1.0
			 *
			 * @param string $hook Name of the hook that was scheduled to be fired.
			 * @param array  $args The arguments to be passed to the hook.
			 */
			do_action_ref_array( $hook, $v['args'] );

			// If the hook ran too long and another cron process stole the lock, quit.
			if ( _get_cron_lock() !== $doing_wp_cron ) {
				return;
			}
		}
	}
}

if ( _get_cron_lock() === $doing_wp_cron ) {
	delete_transient( 'doing_cron' );
}

die();
 97  wp-links-opml.php 
@@ -0,0 +1,97 @@
<?php
/**
 * Outputs the OPML XML format for getting the links defined in the link
 * administration. This can be used to export links from one blog over to
 * another. Links aren't exported by the WordPress export, so this file handles
 * that.
 *
 * This file is not added by default to WordPress theme pages when outputting
 * feed links. It will have to be added manually for browsers and users to pick
 * up that this file exists.
 *
 * @package WordPress
 */

require_once __DIR__ . '/wp-load.php';

header( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ), true );
$link_cat = '';
if ( ! empty( $_GET['link_cat'] ) ) {
	$link_cat = $_GET['link_cat'];
	if ( ! in_array( $link_cat, array( 'all', '0' ), true ) ) {
		$link_cat = absint( (string) urldecode( $link_cat ) );
	}
}

echo '<?xml version="1.0"?' . ">\n";
?>
<opml version="1.0">
	<head>
		<title>
		<?php
			/* translators: %s: Site title. */
			printf( __( 'Links for %s' ), esc_attr( get_bloginfo( 'name', 'display' ) ) );
		?>
		</title>
		<dateCreated><?php echo gmdate( 'D, d M Y H:i:s' ); ?> GMT</dateCreated>
		<?php
		/**
		 * Fires in the OPML header.
		 *
		 * @since 3.0.0
		 */
		do_action( 'opml_head' );
		?>
	</head>
	<body>
<?php
if ( empty( $link_cat ) ) {
	$cats = get_categories(
		array(
			'taxonomy'     => 'link_category',
			'hierarchical' => 0,
		)
	);
} else {
	$cats = get_categories(
		array(
			'taxonomy'     => 'link_category',
			'hierarchical' => 0,
			'include'      => $link_cat,
		)
	);
}

foreach ( (array) $cats as $cat ) :
	/** This filter is documented in wp-includes/bookmark-template.php */
	$catname = apply_filters( 'link_category', $cat->name );

	?>
<outline type="category" title="<?php echo esc_attr( $catname ); ?>">
	<?php
	$bookmarks = get_bookmarks( array( 'category' => $cat->term_id ) );
	foreach ( (array) $bookmarks as $bookmark ) :
		/**
		 * Filters the OPML outline link title text.
		 *
		 * @since 2.2.0
		 *
		 * @param string $title The OPML outline title text.
		 */
		$title = apply_filters( 'link_title', $bookmark->link_name );
		?>
<outline text="<?php echo esc_attr( $title ); ?>" type="link" xmlUrl="<?php echo esc_attr( $bookmark->link_rss ); ?>" htmlUrl="<?php echo esc_attr( $bookmark->link_url ); ?>" updated="
							<?php
							if ( '0000-00-00 00:00:00' !== $bookmark->link_updated ) {
								echo $bookmark->link_updated;}
							?>
" />
		<?php
	endforeach; // $bookmarks
	?>
</outline>
	<?php
endforeach; // $cats
?>
</body>
</opml>
 93  wp-load.php 
@@ -0,0 +1,93 @@
<?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config.php file. The wp-config.php
 * file will then load the wp-settings.php file, which
 * will then set up the WordPress environment.
 *
 * If the wp-config.php file is not found then an error
 * will be displayed asking the visitor to set up the
 * wp-config.php file.
 *
 * Will also search for wp-config.php in WordPress' parent
 * directory to allow the WordPress directory to remain
 * untouched.
 *
 * @package WordPress
 */

/** Define ABSPATH as this file's directory */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );

/*
 * If wp-config.php exists in the WordPress root, or if it exists in the root and wp-settings.php
 * doesn't, load wp-config.php. The secondary check for wp-settings.php has the added benefit
 * of avoiding cases where the current directory is a nested installation, e.g. / is WordPress(a)
 * and /blog/ is WordPress(b).
 *
 * If neither set of conditions is true, initiate loading the setup process.
 */
if ( file_exists( ABSPATH . 'wp-config.php' ) ) {

	/** The config file resides in ABSPATH */
	require_once ABSPATH . 'wp-config.php';

} elseif ( @file_exists( dirname( ABSPATH ) . '/wp-config.php' ) && ! @file_exists( dirname( ABSPATH ) . '/wp-settings.php' ) ) {

	/** The config file resides one level above ABSPATH but is not part of another installation */
	require_once dirname( ABSPATH ) . '/wp-config.php';

} else {

	// A config file doesn't exist.

	define( 'WPINC', 'wp-includes' );
	require_once ABSPATH . WPINC . '/load.php';

	// Standardize $_SERVER variables across setups.
	wp_fix_server_vars();

	require_once ABSPATH . WPINC . '/functions.php';

	$path = wp_guess_url() . '/wp-admin/setup-config.php';

	/*
	 * We're going to redirect to setup-config.php. While this shouldn't result
	 * in an infinite loop, that's a silly thing to assume, don't you think? If
	 * we're traveling in circles, our last-ditch effort is "Need more help?"
	 */
	if ( false === strpos( $_SERVER['REQUEST_URI'], 'setup-config' ) ) {
		header( 'Location: ' . $path );
		exit;
	}

	define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
	require_once ABSPATH . WPINC . '/version.php';

	wp_check_php_mysql_versions();
	wp_load_translations_early();

	// Die with an error message
	$die = sprintf(
		/* translators: %s: wp-config.php */
		__( "There doesn't seem to be a %s file. I need this before we can get started." ),
		'<code>wp-config.php</code>'
	) . '</p>';
	$die .= '<p>' . sprintf(
		/* translators: %s: Documentation URL. */
		__( "Need more help? <a href='%s'>We got it</a>." ),
		__( 'https://wordpress.org/support/article/editing-wp-config-php/' )
	) . '</p>';
	$die .= '<p>' . sprintf(
		/* translators: %s: wp-config.php */
		__( "You can create a %s file through a web interface, but this doesn't work for all server setups. The safest way is to manually create the file." ),
		'<code>wp-config.php</code>'
	) . '</p>';
	$die .= '<p><a href="' . $path . '" class="button button-large">' . __( 'Create a Configuration File' ) . '</a>';

	wp_die( $die, __( 'WordPress &rsaquo; Error' ) );
}
 1,563  wp-login.php 
Large diffs are not rendered by default.

 264  wp-mail.php 
@@ -0,0 +1,264 @@
<?php
/**
 * Gets the email message from the user's mailbox to add as
 * a WordPress post. Mailbox connection information must be
 * configured under Settings > Writing
 *
 * @package WordPress
 */

/** Make sure that the WordPress bootstrap has run before continuing. */
require __DIR__ . '/wp-load.php';

/** This filter is documented in wp-admin/options.php */
if ( ! apply_filters( 'enable_post_by_email_configuration', true ) ) {
	wp_die( __( 'This action has been disabled by the administrator.' ), 403 );
}

$mailserver_url = get_option( 'mailserver_url' );

if ( 'mail.example.com' === $mailserver_url || empty( $mailserver_url ) ) {
	wp_die( __( 'This action has been disabled by the administrator.' ), 403 );
}

/**
 * Fires to allow a plugin to do a complete takeover of Post by Email.
 *
 * @since 2.9.0
 */
do_action( 'wp-mail.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores

/** Get the POP3 class with which to access the mailbox. */
require_once ABSPATH . WPINC . '/class-pop3.php';

/** Only check at this interval for new messages. */
if ( ! defined( 'WP_MAIL_INTERVAL' ) ) {
	define( 'WP_MAIL_INTERVAL', 5 * MINUTE_IN_SECONDS );
}

$last_checked = get_transient( 'mailserver_last_checked' );

if ( $last_checked ) {
	wp_die( __( 'Slow down cowboy, no need to check for new mails so often!' ) );
}

set_transient( 'mailserver_last_checked', true, WP_MAIL_INTERVAL );

$time_difference = get_option( 'gmt_offset' ) * HOUR_IN_SECONDS;

$phone_delim = '::';

$pop3 = new POP3();

if ( ! $pop3->connect( get_option( 'mailserver_url' ), get_option( 'mailserver_port' ) ) || ! $pop3->user( get_option( 'mailserver_login' ) ) ) {
	wp_die( esc_html( $pop3->ERROR ) );
}

$count = $pop3->pass( get_option( 'mailserver_pass' ) );

if ( false === $count ) {
	wp_die( esc_html( $pop3->ERROR ) );
}

if ( 0 === $count ) {
	$pop3->quit();
	wp_die( __( 'There doesn&#8217;t seem to be any new mail.' ) );
}

for ( $i = 1; $i <= $count; $i++ ) {

	$message = $pop3->get( $i );

	$bodysignal                = false;
	$boundary                  = '';
	$charset                   = '';
	$content                   = '';
	$content_type              = '';
	$content_transfer_encoding = '';
	$post_author               = 1;
	$author_found              = false;
	foreach ( $message as $line ) {
		// Body signal.
		if ( strlen( $line ) < 3 ) {
			$bodysignal = true;
		}
		if ( $bodysignal ) {
			$content .= $line;
		} else {
			if ( preg_match( '/Content-Type: /i', $line ) ) {
				$content_type = trim( $line );
				$content_type = substr( $content_type, 14, strlen( $content_type ) - 14 );
				$content_type = explode( ';', $content_type );
				if ( ! empty( $content_type[1] ) ) {
					$charset = explode( '=', $content_type[1] );
					$charset = ( ! empty( $charset[1] ) ) ? trim( $charset[1] ) : '';
				}
				$content_type = $content_type[0];
			}
			if ( preg_match( '/Content-Transfer-Encoding: /i', $line ) ) {
				$content_transfer_encoding = trim( $line );
				$content_transfer_encoding = substr( $content_transfer_encoding, 27, strlen( $content_transfer_encoding ) - 27 );
				$content_transfer_encoding = explode( ';', $content_transfer_encoding );
				$content_transfer_encoding = $content_transfer_encoding[0];
			}
			if ( ( 'multipart/alternative' === $content_type ) && ( false !== strpos( $line, 'boundary="' ) ) && ( '' === $boundary ) ) {
				$boundary = trim( $line );
				$boundary = explode( '"', $boundary );
				$boundary = $boundary[1];
			}
			if ( preg_match( '/Subject: /i', $line ) ) {
				$subject = trim( $line );
				$subject = substr( $subject, 9, strlen( $subject ) - 9 );
				// Captures any text in the subject before $phone_delim as the subject.
				if ( function_exists( 'iconv_mime_decode' ) ) {
					$subject = iconv_mime_decode( $subject, 2, get_option( 'blog_charset' ) );
				} else {
					$subject = wp_iso_descrambler( $subject );
				}
				$subject = explode( $phone_delim, $subject );
				$subject = $subject[0];
			}

			/*
			 * Set the author using the email address (From or Reply-To, the last used)
			 * otherwise use the site admin.
			 */
			if ( ! $author_found && preg_match( '/^(From|Reply-To): /', $line ) ) {
				if ( preg_match( '|[a-z0-9_.-]+@[a-z0-9_.-]+(?!.*<)|i', $line, $matches ) ) {
					$author = $matches[0];
				} else {
					$author = trim( $line );
				}
				$author = sanitize_email( $author );
				if ( is_email( $author ) ) {
					/* translators: %s: Post author email address. */
					echo '<p>' . sprintf( __( 'Author is %s' ), $author ) . '</p>';
					$userdata = get_user_by( 'email', $author );
					if ( ! empty( $userdata ) ) {
						$post_author  = $userdata->ID;
						$author_found = true;
					}
				}
			}

			if ( preg_match( '/Date: /i', $line ) ) { // Of the form '20 Mar 2002 20:32:37 +0100'.
				$ddate = str_replace( 'Date: ', '', trim( $line ) );
				// Remove parenthesised timezone string if it exists, as this confuses strtotime().
				$ddate           = preg_replace( '!\s*\(.+\)\s*$!', '', $ddate );
				$ddate_timestamp = strtotime( $ddate );
				$post_date       = gmdate( 'Y-m-d H:i:s', $ddate_timestamp + $time_difference );
				$post_date_gmt   = gmdate( 'Y-m-d H:i:s', $ddate_timestamp );
			}
		}
	}

	// Set $post_status based on $author_found and on author's publish_posts capability.
	if ( $author_found ) {
		$user        = new WP_User( $post_author );
		$post_status = ( $user->has_cap( 'publish_posts' ) ) ? 'publish' : 'pending';
	} else {
		// Author not found in DB, set status to pending. Author already set to admin.
		$post_status = 'pending';
	}

	$subject = trim( $subject );

	if ( 'multipart/alternative' === $content_type ) {
		$content = explode( '--' . $boundary, $content );
		$content = $content[2];

		// Match case-insensitive content-transfer-encoding.
		if ( preg_match( '/Content-Transfer-Encoding: quoted-printable/i', $content, $delim ) ) {
			$content = explode( $delim[0], $content );
			$content = $content[1];
		}
		$content = strip_tags( $content, '<img><p><br><i><b><u><em><strong><strike><font><span><div>' );
	}
	$content = trim( $content );

	/**
	 * Filters the original content of the email.
	 *
	 * Give Post-By-Email extending plugins full access to the content, either
	 * the raw content, or the content of the last quoted-printable section.
	 *
	 * @since 2.8.0
	 *
	 * @param string $content The original email content.
	 */
	$content = apply_filters( 'wp_mail_original_content', $content );

	if ( false !== stripos( $content_transfer_encoding, 'quoted-printable' ) ) {
		$content = quoted_printable_decode( $content );
	}

	if ( function_exists( 'iconv' ) && ! empty( $charset ) ) {
		$content = iconv( $charset, get_option( 'blog_charset' ), $content );
	}

	// Captures any text in the body after $phone_delim as the body.
	$content = explode( $phone_delim, $content );
	$content = empty( $content[1] ) ? $content[0] : $content[1];

	$content = trim( $content );

	/**
	 * Filters the content of the post submitted by email before saving.
	 *
	 * @since 1.2.0
	 *
	 * @param string $content The email content.
	 */
	$post_content = apply_filters( 'phone_content', $content );

	$post_title = xmlrpc_getposttitle( $content );

	if ( '' === trim( $post_title ) ) {
		$post_title = $subject;
	}

	$post_category = array( get_option( 'default_email_category' ) );

	$post_data = compact( 'post_content', 'post_title', 'post_date', 'post_date_gmt', 'post_author', 'post_category', 'post_status' );
	$post_data = wp_slash( $post_data );

	$post_ID = wp_insert_post( $post_data );
	if ( is_wp_error( $post_ID ) ) {
		echo "\n" . $post_ID->get_error_message();
	}

	// We couldn't post, for whatever reason. Better move forward to the next email.
	if ( empty( $post_ID ) ) {
		continue;
	}

	/**
	 * Fires after a post submitted by email is published.
	 *
	 * @since 1.2.0
	 *
	 * @param int $post_ID The post ID.
	 */
	do_action( 'publish_phone', $post_ID );

	echo "\n<p><strong>" . __( 'Author:' ) . '</strong> ' . esc_html( $post_author ) . '</p>';
	echo "\n<p><strong>" . __( 'Posted title:' ) . '</strong> ' . esc_html( $post_title ) . '</p>';

	if ( ! $pop3->delete( $i ) ) {
		echo '<p>' . sprintf(
			/* translators: %s: POP3 error. */
			__( 'Oops: %s' ),
			esc_html( $pop3->ERROR )
		) . '</p>';
		$pop3->reset();
		exit;
	} else {
		echo '<p>' . sprintf(
			/* translators: %s: The message ID. */
			__( 'Mission complete. Message %s deleted.' ),
			'<strong>' . $i . '</strong>'
		) . '</p>';
	}
}

$pop3->quit();
 579  wp-settings.php 
Large diffs are not rendered by default.

 1,014  wp-signup.php 
Large diffs are not rendered by default.

 152  wp-trackback.php 
@@ -0,0 +1,152 @@
<?php
/**
 * Handle Trackbacks and Pingbacks Sent to WordPress
 *
 * @since 0.71
 *
 * @package WordPress
 * @subpackage Trackbacks
 */

if ( empty( $wp ) ) {
	require_once __DIR__ . '/wp-load.php';
	wp( array( 'tb' => '1' ) );
}

/**
 * Response to a trackback.
 *
 * Responds with an error or success XML message.
 *
 * @since 0.71
 *
 * @param int|bool $error         Whether there was an error.
 *                                Default '0'. Accepts '0' or '1', true or false.
 * @param string   $error_message Error message if an error occurred.
 */
function trackback_response( $error = 0, $error_message = '' ) {
	header( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ) );
	if ( $error ) {
		echo '<?xml version="1.0" encoding="utf-8"?' . ">\n";
		echo "<response>\n";
		echo "<error>1</error>\n";
		echo "<message>$error_message</message>\n";
		echo '</response>';
		die();
	} else {
		echo '<?xml version="1.0" encoding="utf-8"?' . ">\n";
		echo "<response>\n";
		echo "<error>0</error>\n";
		echo '</response>';
	}
}

// Trackback is done by a POST.
$request_array = 'HTTP_POST_VARS';

if ( ! isset( $_GET['tb_id'] ) || ! $_GET['tb_id'] ) {
	$tb_id = explode( '/', $_SERVER['REQUEST_URI'] );
	$tb_id = (int) $tb_id[ count( $tb_id ) - 1 ];
}

$tb_url  = isset( $_POST['url'] ) ? $_POST['url'] : '';
$charset = isset( $_POST['charset'] ) ? $_POST['charset'] : '';

// These three are stripslashed here so they can be properly escaped after mb_convert_encoding().
$title     = isset( $_POST['title'] ) ? wp_unslash( $_POST['title'] ) : '';
$excerpt   = isset( $_POST['excerpt'] ) ? wp_unslash( $_POST['excerpt'] ) : '';
$blog_name = isset( $_POST['blog_name'] ) ? wp_unslash( $_POST['blog_name'] ) : '';

if ( $charset ) {
	$charset = str_replace( array( ',', ' ' ), '', strtoupper( trim( $charset ) ) );
} else {
	$charset = 'ASCII, UTF-8, ISO-8859-1, JIS, EUC-JP, SJIS';
}

// No valid uses for UTF-7.
if ( false !== strpos( $charset, 'UTF-7' ) ) {
	die;
}

// For international trackbacks.
if ( function_exists( 'mb_convert_encoding' ) ) {
	$title     = mb_convert_encoding( $title, get_option( 'blog_charset' ), $charset );
	$excerpt   = mb_convert_encoding( $excerpt, get_option( 'blog_charset' ), $charset );
	$blog_name = mb_convert_encoding( $blog_name, get_option( 'blog_charset' ), $charset );
}

// Now that mb_convert_encoding() has been given a swing, we need to escape these three.
$title     = wp_slash( $title );
$excerpt   = wp_slash( $excerpt );
$blog_name = wp_slash( $blog_name );

if ( is_single() || is_page() ) {
	$tb_id = $posts[0]->ID;
}

if ( ! isset( $tb_id ) || ! (int) $tb_id ) {
	trackback_response( 1, __( 'I really need an ID for this to work.' ) );
}

if ( empty( $title ) && empty( $tb_url ) && empty( $blog_name ) ) {
	// If it doesn't look like a trackback at all.
	wp_redirect( get_permalink( $tb_id ) );
	exit;
}

if ( ! empty( $tb_url ) && ! empty( $title ) ) {
	/**
	 * Fires before the trackback is added to a post.
	 *
	 * @since 4.7.0
	 *
	 * @param int    $tb_id     Post ID related to the trackback.
	 * @param string $tb_url    Trackback URL.
	 * @param string $charset   Character Set.
	 * @param string $title     Trackback Title.
	 * @param string $excerpt   Trackback Excerpt.
	 * @param string $blog_name Blog Name.
	 */
	do_action( 'pre_trackback_post', $tb_id, $tb_url, $charset, $title, $excerpt, $blog_name );

	header( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ) );

	if ( ! pings_open( $tb_id ) ) {
		trackback_response( 1, __( 'Sorry, trackbacks are closed for this item.' ) );
	}

	$title   = wp_html_excerpt( $title, 250, '&#8230;' );
	$excerpt = wp_html_excerpt( $excerpt, 252, '&#8230;' );

	$comment_post_ID      = (int) $tb_id;
	$comment_author       = $blog_name;
	$comment_author_email = '';
	$comment_author_url   = $tb_url;
	$comment_content      = "<strong>$title</strong>\n\n$excerpt";
	$comment_type         = 'trackback';

	$dupe = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_author_url = %s", $comment_post_ID, $comment_author_url ) );
	if ( $dupe ) {
		trackback_response( 1, __( 'We already have a ping from that URL for this post.' ) );
	}

	$commentdata = compact( 'comment_post_ID', 'comment_author', 'comment_author_email', 'comment_author_url', 'comment_content', 'comment_type' );

	$result = wp_new_comment( $commentdata );

	if ( is_wp_error( $result ) ) {
		trackback_response( 1, $result->get_error_message() );
	}

	$trackback_id = $wpdb->insert_id;

	/**
	 * Fires after a trackback is added to a post.
	 *
	 * @since 1.2.0
	 *
	 * @param int $trackback_id Trackback ID.
	 */
	do_action( 'trackback_post', $trackback_id );
	trackback_response( 0 );
}
 105  xmlrpc.php 
@@ -0,0 +1,105 @@
<?php
/**
 * XML-RPC protocol support for WordPress
 *
 * @package WordPress
 */

/**
 * Whether this is an XML-RPC Request
 *
 * @var bool
 */
define( 'XMLRPC_REQUEST', true );

// Some browser-embedded clients send cookies. We don't want them.
$_COOKIE = array();

// $HTTP_RAW_POST_DATA was deprecated in PHP 5.6 and removed in PHP 7.0.
// phpcs:disable PHPCompatibility.Variables.RemovedPredefinedGlobalVariables.http_raw_post_dataDeprecatedRemoved
if ( ! isset( $HTTP_RAW_POST_DATA ) ) {
	$HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
}

// Fix for mozBlog and other cases where '<?xml' isn't on the very first line.
if ( isset( $HTTP_RAW_POST_DATA ) ) {
	$HTTP_RAW_POST_DATA = trim( $HTTP_RAW_POST_DATA );
}
// phpcs:enable

/** Include the bootstrap for setting up WordPress environment */
require_once __DIR__ . '/wp-load.php';

if ( isset( $_GET['rsd'] ) ) { // http://cyber.law.harvard.edu/blogs/gems/tech/rsd.html
	header( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ), true );
	echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>';
	?>
<rsd version="1.0" xmlns="http://archipelago.phrasewise.com/rsd">
	<service>
		<engineName>WordPress</engineName>
		<engineLink>https://wordpress.org/</engineLink>
		<homePageLink><?php bloginfo_rss( 'url' ); ?></homePageLink>
		<apis>
			<api name="WordPress" blogID="1" preferred="true" apiLink="<?php echo site_url( 'xmlrpc.php', 'rpc' ); ?>" />
			<api name="Movable Type" blogID="1" preferred="false" apiLink="<?php echo site_url( 'xmlrpc.php', 'rpc' ); ?>" />
			<api name="MetaWeblog" blogID="1" preferred="false" apiLink="<?php echo site_url( 'xmlrpc.php', 'rpc' ); ?>" />
			<api name="Blogger" blogID="1" preferred="false" apiLink="<?php echo site_url( 'xmlrpc.php', 'rpc' ); ?>" />
			<?php
			/**
			 * Add additional APIs to the Really Simple Discovery (RSD) endpoint.
			 *
			 * @link http://cyber.law.harvard.edu/blogs/gems/tech/rsd.html
			 *
			 * @since 3.5.0
			 */
			do_action( 'xmlrpc_rsd_apis' );
			?>
		</apis>
	</service>
</rsd>
	<?php
	exit;
}

require_once ABSPATH . 'wp-admin/includes/admin.php';
require_once ABSPATH . WPINC . '/class-IXR.php';
require_once ABSPATH . WPINC . '/class-wp-xmlrpc-server.php';

/**
 * Posts submitted via the XML-RPC interface get that title
 *
 * @name post_default_title
 * @var string
 */
$post_default_title = '';

/**
 * Filters the class used for handling XML-RPC requests.
 *
 * @since 3.1.0
 *
 * @param string $class The name of the XML-RPC server class.
 */
$wp_xmlrpc_server_class = apply_filters( 'wp_xmlrpc_server_class', 'wp_xmlrpc_server' );
$wp_xmlrpc_server       = new $wp_xmlrpc_server_class;

// Fire off the request.
$wp_xmlrpc_server->serve_request();

exit;

/**
 * logIO() - Writes logging info to a file.
 *
 * @deprecated 3.4.0 Use error_log()
 * @see error_log()
 *
 * @param string $io Whether input or output
 * @param string $msg Information describing logging reason.
 */
function logIO( $io, $msg ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
	_deprecated_function( __FUNCTION__, '3.4.0', 'error_log()' );
	if ( ! empty( $GLOBALS['xmlrpc_logging'] ) ) {
		error_log( $io . ' - ' . $msg );
	}
