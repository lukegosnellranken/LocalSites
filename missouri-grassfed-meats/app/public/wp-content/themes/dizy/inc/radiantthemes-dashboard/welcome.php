<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$radiantthemes_my_theme = wp_get_theme();
if ( $radiantthemes_my_theme->parent_theme ) {
	$radiantthemes_my_theme = wp_get_theme( basename( get_template_directory() ) );
}
?>

<div class="wrap about-wrap rt-admin-wrap">

	<h1><?php echo esc_html__( 'Welcome to ', 'dizy' ) . $radiantthemes_my_theme->Name; ?></h1>
	<div class="about-text"><?php echo esc_html( $radiantthemes_my_theme->Name ) . esc_html__( ' is now installed and ready to use!', 'dizy' ); ?></div>
	<div class="wp-badge"><?php printf( esc_html__( 'Version %s', 'dizy' ), esc_html( $radiantthemes_my_theme->Version ) ); ?></div>

	<h2 class="nav-tab-wrapper wp-clearfix">
		<a class="nav-tab nav-tab-active" href="<?php echo esc_url( self_admin_url( 'themes.php?page=radiantthemes-dashboard' ) ); ?>"><?php esc_html_e( 'Dashboard', 'dizy' ); ?></a>
		<a class="nav-tab" href="<?php echo esc_url( self_admin_url( 'themes.php?page=radiantthemes-admin-plugins' ) ); ?>"><?php esc_html_e( 'Install Plugins', 'dizy' ); ?></a>
		<?php if ( class_exists( 'OCDI_Plugin' ) ) { ?>
			<a class="nav-tab" href="<?php echo esc_url( self_admin_url( 'themes.php?page=pt-one-click-demo-import' ) ); ?>"><?php esc_html_e( 'Demo Importer', 'dizy' ); ?></a>
		<?php } ?>
		<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) { ?>
			<a class="nav-tab" href="<?php echo esc_url( self_admin_url( 'admin.php?page=_options' ) ); ?>"><?php esc_html_e( 'Theme Options', 'dizy' ); ?></a>
		<?php } ?>
	</h2>

	<?php

	$radiantthemes_theme              = wp_get_theme();
	$theme_version                    = $radiantthemes_theme->get( 'Version' );
	$theme_name                       = $radiantthemes_theme->get( 'Name' );
	$mem_limit                        = ini_get( 'memory_limit' );
	$mem_limit_byte                   = wp_convert_hr_to_bytes( $mem_limit );
	$upload_max_filesize              = ini_get( 'upload_max_filesize' );
	$upload_max_filesize_byte         = wp_convert_hr_to_bytes( $upload_max_filesize );
	$post_max_size                    = ini_get( 'post_max_size' );
	$post_max_size_byte               = wp_convert_hr_to_bytes( $post_max_size );
	$mem_limit_byte_boolean           = ( $mem_limit_byte < 268435456 );
	$upload_max_filesize_byte_boolean = ( $upload_max_filesize_byte < 67108864 );
	$post_max_size_byte_boolean       = ( $post_max_size_byte < 67108864 );
	$execution_time                   = ini_get( 'max_execution_time' );
	$execution_time_boolean           = ( $execution_time < 300 );
	$input_vars                       = ini_get( 'max_input_vars' );
	$input_vars_boolean               = ( $input_vars < 2000 );
	$input_time                       = ini_get( 'max_input_time' );
	$input_time_boolean               = ( $input_time < 1000 );
	$theme_option_address             = admin_url( 'themes.php?page=radiantthemes_theme_options' );

	?>

	<div id="radiantthemes-dashboard" class="wrap about-wrap">

		<div class="welcome-content w-clearfix">
			<!-- radiantthemes-activator -->
			<div class="radiantthemes-activator">
				<!-- radiantthemes-activator-main -->
				<div class="radiantthemes-activator-main radiantthemes-content">
					<?php
						$purchase_code       = get_option( 'radiant_purchase', '' );
						$buyer_name          = get_option( 'radiant_user_name', '' );
						$purchase_validation = get_option( 'radiant_purchase_validation', '' );
						$readonly            = ( $purchase_validation == 'success' ) ? ' readonly' : '';
						$purchase_form_class = $purchase_validation ? 'class="' . esc_attr( $purchase_validation ) . '"' : '';
					if ( 'success' == $purchase_validation ) {
						$updated_purchase_code = str_repeat( '*', strlen( $purchase_code ) - 5 ) . substr( $purchase_code, -5 );
						$updated_buyer_name    = str_repeat( '*', 3 ) . substr( $buyer_name, 3 );
					} else {
						$updated_purchase_code = $purchase_code;
						$updated_buyer_name    = $buyer_name;
					}
					?>
					<?php if ( ! ( $purchase_validation == 'success' ) ) { ?>
						<p class="register-theme">Please register the Theme to get access to pre-built designs.</p>
					<?php } ?>
					<hr>
					<h3>Register Dizy</h3>
					<div class="radiantthemes-resgiter-form">
						<div class="radiantthemes-resgiter-form-row">
							<form <?php echo esc_attr( $purchase_form_class ); ?> id="rtGetPurchaseCode" method="post" action="#">
								<input id="rtPurchaseCode" name="radiant_purchase" type="text" required placeholder="Paste your purchase code here" value="<?php echo esc_attr( $updated_purchase_code ); ?>"<?php echo esc_attr( $readonly ); ?>>
								<input id="rtUserName" name="radiant_user_name" type="text" required placeholder="Paste your Envato Username here" value="<?php echo esc_attr( $updated_buyer_name ); ?>"<?php echo esc_attr( $readonly ); ?>>
								<?php if ( ! ( $purchase_validation == 'success' ) ) { ?>
									<button class="btn default" type="submit"><span class="dashicons dashicons-unlock"></span> Register Theme</button>
								<?php } else { ?>
									<div class="btn success" type="submit"><span class="dashicons dashicons-yes"></span> Registered</div>
								<?php } ?>
								<div class="btn success" type="submit" style="display: none;"><span class="dashicons dashicons-yes"></span> Registered</div>
								<div class="radiantthemes-notice radiantthemes-notice-success registration-success" style="display: none;">
									<p>Thank You for registering Dizy. <a href="<?php echo esc_url( self_admin_url( 'themes.php?page=radiantthemes-admin-plugins' ) ); ?>">Click HERE to continue with Plugin install process.</a></p>
								</div>
								<?php if ( ! ( $purchase_validation == 'success' ) ) { ?>
									<div class="radiantthemes-notice radiantthemes-notice-error registration-failed" style="display: none;"><p>Oops! Invalid data has been entered. Please provide correct information to get access to pre-built designs.</p></div>
								<?php } ?>
							</form>
						</div>
					</div>
					<h4>Where Can I Find My Purchase Code?</h4>
					<ul>
						<li>Please go to <a href="<?php echo esc_url( 'https://themeforest.net/downloads' ); ?>" target="_blank">http://themeforest.net/downloads</a></li>
						<li>Click the Download button in "Dizy" row.</li>
						<li>Select License Certificate &amp; Purchase code.</li>
						<li>Select &amp; copy Item Purchase Code.</li>
					</ul>
					<h4>Alternatively you can go to <a href="<?php echo esc_url( 'https://themeforest.net/item/dizy-finance-financial-consulting-wordpress-theme/23087866/support' ); ?>" target="_blank">Dizy Support Page</a> (logged in to your ThemeForest Account ) and scroll down to the bottom of the page to find the purchase code.</h4>
					<div class="radiantthemes-notice">
						<p><strong>Important Notice!</strong> Only one standard license is considered valid for one website. Running more than 1 website on a single license is a gross infringement or violation of license.</p>
					</div>
				</div>
			</div>
			<!-- radiantthemes-activator -->
		</div>
		<div class="welcome-content w-clearfix extra">
			<div class="w-row">
				<div class="w-col-sm-7">
					<div class="w-row">
						<div class="w-col-sm-6">
							<div class="w-box text-center">
								<div class="w-box-head">
									<?php esc_html_e( 'Theme Documentation', 'dizy' ); ?>
								</div>
								<div class="w-box-content">
									<div class="w-button">
										<a href="http://themes.radiantthemes.com/dizy/docs/" target="_blank"><?php esc_html_e( 'DOCUMENTATION', 'dizy' ); ?></a>
									</div>
								</div>
							</div>
						</div>
						<div class="w-col-sm-6">
							<div class="w-box text-center">
								<div class="w-box-head">
									<?php esc_html_e( 'Theme Support', 'dizy' ); ?>
								</div>
								<div class="w-box-content">
									<div class="w-button">
										<a href="https://support.radiantthemes.com/open.php" target="_blank"><?php esc_html_e( 'OPEN SUPPORT TICKET', 'dizy' ); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="w-col-sm-5">
					<div class="w-box">
						<div class="w-box-head">
							<?php esc_html_e( 'System Status', 'dizy' ); ?>
						</div>
						<div class="w-box-content">
							<div class="w-system-info">
								<span> <?php esc_html_e( 'WP Memory Limit', 'dizy' ); ?> </span>
								<?php
								$wp_memory_limit       = WP_MEMORY_LIMIT;
								$wp_memory_limit_value = preg_replace( '/[^0-9]/', '', $wp_memory_limit );
								if ( $wp_memory_limit_value < 256 ) {
									?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php echo esc_html__( 'Currently:', 'dizy' ) . ' ' . $wp_memory_limit; ?> </span>
									<span class="w-min"> <?php esc_html_e( '(min:256M)', 'dizy' ); ?> </span>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php echo esc_html__( 'Currently:', 'dizy' ) . ' ' . $wp_memory_limit; ?> </span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php esc_html_e( 'Upload Max. Filesize', 'dizy' ); ?> </span>
								<?php
								if ( $upload_max_filesize_byte_boolean ) {
									?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php echo esc_html__( 'Currently:', 'dizy' ) . ' ' . $upload_max_filesize; ?> </span>
									<span class="w-min"> <?php esc_html_e( '(min:64M)', 'dizy' ); ?> </span>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php echo esc_html__( 'Currently:', 'dizy' ) . ' ' . $upload_max_filesize; ?> </span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php esc_html_e( 'Max. Post Size', 'dizy' ); ?> </span>
								<?php
								if ( $post_max_size_byte_boolean ) {
									?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php echo esc_html__( 'Currently:', 'dizy' ) . ' ' . $post_max_size; ?> </span>
									<span class="w-min"> <?php esc_html_e( '(min:64M)', 'dizy' ); ?> </span>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php echo esc_html__( 'Currently:', 'dizy' ) . ' ' . $post_max_size; ?> </span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php esc_html_e( 'Max. Execution Time', 'dizy' ); ?> </span>
								<?php
								if ( $execution_time_boolean ) {
									?>
									<i class="w-icon w-icon-red ti-close"></i>
									<span class="w-current"> <?php echo esc_html( 'Currently:', 'dizy' ) . ' ' . $execution_time; ?> </span>
									<span class="w-min"> <?php esc_html_e( '(min:300)', 'dizy' ); ?> </span>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php echo esc_html__( 'Currently:', 'dizy' ) . ' ' . $execution_time; ?> </span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php esc_html_e( 'PHP Max. Input Vars', 'dizy' ); ?> </span>
								<?php
								if ( $input_vars_boolean ) {
									?>
									<i class="w-icon w-icon-red ti-close"></i>
									<span class="w-current"> <?php echo esc_html__( 'Currently:', 'dizy' ) . ' ' . $input_vars; ?> </span>
									<span class="w-min"> <?php esc_html_e( '(min:2000)', 'dizy' ); ?> </span>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php echo esc_html__( 'Currently:', 'dizy' ) . ' ' . $input_vars; ?> </span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php esc_html_e( 'PHP Max. Input Time', 'dizy' ); ?> </span>
								<?php
								if ( $input_time_boolean ) {
									?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php echo esc_html__( 'Currently:', 'dizy' ) . ' ' . $input_time; ?> </span>
									<span class="w-min"> <?php esc_html_e( '(min:1000)', 'dizy' ); ?></span>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php echo esc_html__( 'Currently:', 'dizy' ) . ' ' . $input_time; ?> </span>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div> <!-- end wrap -->
