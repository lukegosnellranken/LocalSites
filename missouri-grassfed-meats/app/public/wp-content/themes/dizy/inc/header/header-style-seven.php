<?php
/**
 * Header Style Seven Template
 *
 * @package dizy
 */

?>

<!-- wraper_header -->
<?php if ( true == dizy_global_var( 'header_seven_floating', '', false ) ) { ?>
	<header class="wraper_header style-seven floating-header">
<?php } else { ?>
	<header class="wraper_header style-seven static-header">
<?php } ?>
	<!-- wraper_header_main -->
	<?php if ( true == dizy_global_var( 'header_seven_sticky', '', false ) ) { ?>
		<div class="wraper_header_main i-am-sticky">
	<?php } else { ?>
		<div class="wraper_header_main">
	<?php } ?>
		<div class="container-fluid">
			<!-- header_main -->
			<div class="header_main">
				<?php if ( dizy_global_var( 'header_seven_logo', 'url', true ) ) { ?>
					<!-- brand-logo -->
					<div class="brand-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( dizy_global_var( 'header_seven_logo', 'url', true ) ); ?>" alt="<?php echo esc_attr( dizy_global_var( 'header_seven_logo', 'alt', true ) ); ?>"></a>
					</div>
					<!-- brand-logo -->
				<?php } ?>
			    <!-- header-flexi-menu -->
				<div class="header-flexi-menu">
				    <span class="header-flexi-menu-line"></span>
				    <span class="header-flexi-menu-line"></span>
				    <span class="header-flexi-menu-line"></span>
				</div>
				<!-- header-flexi-menu -->
				<div class="clearfix"></div>
			</div>
			<!-- header_main -->
		</div>
	</div>
	<!-- wraper_header_main -->
</header>
<!-- wraper_header -->

<!-- wraper_flexi_menu -->
<div class="wraper_flexi_menu">
    <!-- flexi-menu-overlay -->
    <div class="flexi-menu-overlay"></div>
    <!-- flexi-menu-overlay -->
    <!-- flexi-menu-close -->
	<div class="flexi-menu-close">
		<div class="flexi-menu-close-holder">
    		<span class="flexi-menu-close-line"></span>
    	    <span class="flexi-menu-close-line"></span>
    	</div>
	</div>
	<!-- flexi-menu-close -->
	<div class="table">
		<div class="table-cell">
			<!-- flexi-menu -->
			<div class="flexi-menu">
				<!-- flexi-menu-nav -->
				<nav class="flexi-menu-nav">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'flyout-menu',
							'fallback_cb'    => false,
						)
					);
					?>
				</nav>
				<!-- flexi-menu-nav -->
			</div>
			<!-- flexi-menu -->
		</div>
	</div>
</div>
<!-- wraper_flexi_menu -->