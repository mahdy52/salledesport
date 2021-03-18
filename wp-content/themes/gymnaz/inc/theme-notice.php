<?php
/**
 * Welcome Screen Class
 */
class gymnaz_screen {

	/**
	 * Constructor for the Notice
	 */
	public function __construct() {

		/* activation notice */
		add_action( 'load-themes.php', array( $this, 'gymnaz_activation_admin_notice' ) );

	}
	
	public function gymnaz_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) ) {
			add_action( 'admin_notices', array( $this, 'gymnaz_admin_notice' ), 99 );
		}
	}

	
	public function gymnaz_admin_notice() {
		?>			
		<div class="updated notice is-dismissible bizzmo-note">
			<h1><?php
			$theme_info = wp_get_theme();
			printf( esc_html__('Thanks for installing  %1$s ', 'gymnaz'), esc_html( $theme_info->Name ), esc_html( $theme_info->Version ) ); ?>
			</h1>
			<p><?php echo  esc_html__("Welcome! Thank you for choosing Gymnaz WordPress theme. To take full advantage of the features this theme Please Install Our Demo", "gymnaz"); ?></p>
			<p class="note1"><a href="https://testerwp.com/docs/gymnaz-free/" class="button button-blue-secondary button_info" style="text-decoration: none;" target="_blank"><?php echo esc_html__('Read Documentation','gymnaz'); ?></a> <a href="https://testerwp.com/wp/" target="_blank" class="button button-blue-secondary button_info" style="text-decoration: none;"><?php echo esc_html__('View Pro','gymnaz'); ?></a></p>
		</div>
		<?php
	}
	
}

$GLOBALS['gymnaz_screen'] = new gymnaz_screen();