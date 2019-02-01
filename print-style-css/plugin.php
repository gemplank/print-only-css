<?php
/**
 * Print Style CSS
 *
 * @package           print_style_css
 *
 * Plugin Name:       Print CSS Styles
 * Description:       A plugin to alter styling when in print view.
 * Version:           0.1.0
 * Author:            Gemma Plank <info@gpwebdevelopment.co.uk>
 * Author URI:        https://gpwebdevelopment.co.uk
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Abort on Direct Call
 *
 * Abort if this file is called directly.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Constants.
 */
define( 'PRINT_STYLE_ROOT', __FILE__ );
define( 'PRINT_STYLE_NAME', 'Print CSS Styles' );
define( 'PRINT_STYLE_SLUG', 'print-styles' );
define( 'PRINT_STYLE_PREFIX', 'print_' );
define( 'PRINT_STYLE_MIN_PHP_VERSION', '5.6' );

/**
 * Class Main
 *
 * Main plugin class.
 *
 * @since   0.1.0
 *
 * @package mkdo_print_style
 */
class Main {

	/**
	 * Path to the root plugin file.
	 *
	 * @var     string
	 * @access  private
	 * @since   0.1.0
	 */
	private $plugin_root;

	/**
	 * Plugin name.
	 *
	 * @var     string
	 * @access  private
	 * @since   0.1.0
	 */
	private $plugin_name;

	/**
	 * Plugin slug.
	 *
	 * @var     string
	 * @access  private
	 * @since   0.1.0
	 */
	private $plugin_slug;

	/**
	 * Plugin prefix.
	 *
	 * @var     string
	 * @access  private
	 * @since   0.1.0
	 */
	private $plugin_prefix;

	/**
	 * Constructor.
	 *
	 * @since   0.1.0
	 */
	public function __construct() {
		$this->plugin_root   = PRINT_STYLE_ROOT;
		$this->plugin_name   = PRINT_STYLE_NAME;
		$this->plugin_slug   = PRINT_STYLE_SLUG;
		$this->plugin_prefix = PRINT_STYLE_PREFIX;
	}

	/**
	 * Unleash Hell.
	 *
	 * @since   0.1.0
	 */
	public function run() {
		add_action( 'wp_enqueue_scripts', array( $this, 'print_enqueue' ), 10 );
	}

	/**
	 * Manage our admin menu.
	 */
	public function print_enqueue() {
		wp_enqueue_style(
			'print-style',
			plugin_dir_url( __FILE__ ) . 'css/style.css',
			array(),
			'1.0',
			'print'
		);
	}
}

/**
 * Instances (Comment out as appropriate).
 */
$main = new Main();

/**
 * Unleash Hell  (Comment out as appropriate).
 *
 * No need for a main controller; just run all the things.
 */
$main->run();
