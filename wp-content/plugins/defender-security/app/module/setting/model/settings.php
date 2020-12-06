<?php
/**
 * Author: Hoang Ngo
 */

namespace WP_Defender\Module\Setting\Model;

use Hammer\Helper\WP_Helper;

class Settings extends \Hammer\WP\Settings {
	private static $_instance;

	public $translate;
	public $usage_tracking = false;
	public $uninstall_data = 'keep';
	public $uninstall_settings = 'preserve';
	public $high_contrast_mode = false;

	public function behaviors() {
		return array(
			'utils' => '\WP_Defender\Behavior\Utils'
		);
	}

	public function __construct( $id, $is_multi ) {
		parent::__construct( $id, $is_multi );
		$this->high_contrast_mode = ! ! $this->high_contrast_mode;
		$this->usage_tracking     = ! ! $this->usage_tracking;
		$site_locale              = get_locale();

		if ( 'en_US' === $site_locale ) {
			$site_language = 'English';
		} else {
			require_once ABSPATH . 'wp-admin/includes/translation-install.php';
			$translations  = wp_get_available_translations();
			$site_language = $translations[ $site_locale ]['native_name'];
		}
		$this->translate = $site_language;
	}

	/**
	 * @return Settings
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			$class           = new Settings( 'wd_main_settings',
				WP_Helper::is_network_activate( wp_defender()->plugin_slug ) );
			self::$_instance = $class;
		}

		return self::$_instance;
	}

	/**
	 * @return array
	 */
	public function export_strings() {
		return [];
	}

	public function labels( $key = null ) {
		$labels = [
			'translate'          => __( 'General - Translation', "defender-security" ),
			'usage_tracking'     => __( "General - Usage Tracking", "defender-security" ),
			'uninstall_data'     => __( 'Data & Settings - Uninstalling Data', "defender-security" ),
			'uninstall_settings' => __( "Data & Settings - Uninstalling Settings", "defender-security" ),
			'high_contrast_mode' => __( "Accessibility - High Contrast Mode", "defender-security" ),
		];

		if ( $key != null ) {
			return isset( $labels[ $key ] ) ? $labels[ $key ] : null;
		}

		return $labels;
	}

	public function format_hub_data() {
		return [
			'translate'          => $this->translate,
			'usage_tracking'     => $this->usage_tracking ? __( 'Activate', "defender-security" ) : __( 'Inactive',
				"defender-security" ),
			'uninstall_data'     => $this->uninstall_data === 'keep' ? __( 'Keep Data',
				"defender-security" ) : __( 'Delete Data', "defender-security" ),
			'uninstall_settings' => $this->uninstall_settings === 'preserve' ? __( 'Preserve Settings',
				"defender-security" ) : __( 'Delete Settings', "defender-security" ),
			'high_contrast_mode' => $this->high_contrast_mode ? __( 'Activate', "defender-security" ) : __( 'Inactive',
				"defender-security" ),
		];
	}
}