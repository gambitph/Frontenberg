<?php

get_header();
?>
<div id="wpwrap">
	<div id="adminmenumain" role="navigation" aria-label="Main menu">
		<a href="#wpbody-content" class="screen-reader-shortcut">Skip to main content</a>
		<a href="#wp-toolbar" class="screen-reader-shortcut">Skip to toolbar</a>
		<div id="adminmenuback"></div>
		<div id="adminmenuwrap">
			<svg xmlns="http://www.w3.org/2000/svg" class="ugb-stackable-gradient" height="0" width="0" style="opacity: 0;">
				<defs>
					<linearGradient id="stackable-gradient">
						<stop offset="0%" stop-color="#ab5af1" stop-opacity="1"></stop>
						<stop offset="100%" stop-color="#fb6874" stop-opacity="1"></stop>
					</linearGradient>
				</defs>
			</svg>
			<svg class="stackable-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" fill="url(#stackable-gradient)">
				<path d="M64.08,136L23,176.66a4.75,4.75,0,0,0,3.53,8.15l86.91,0.14Z"/>
				<path d="M177.91,128.39a17,17,0,0,0-5-12.07L71.39,14.72h0L26.61,59.5a17,17,0,0,0-5,12.05h0a17,17,0,0,0,5,12.05L128.16,185.2v-0.07l0,0,44.76-44.76a17,17,0,0,0,5-12h0Z"/>
				<path d="M172.95,14.69l-86.83,0,49.42,49.62,40.92-41.16A5,5,0,0,0,172.95,14.69Z"/>
			</svg>
			<div class="stackable-welcome">
				Stackable Premium Demo
			</div>
			<div class="stackable-note">
				👋 Welcome to our Premium demo. Pick from our list below to see our premium layouts, effects and other premium features.
			</div>
			<ul id="adminmenu">
				<?php
				/*
				<li class="wp-not-current-submenu menu-top menu-icon-performance menu-top-last" id="menu-comments">
					<a href="#" class="wp-not-current-submenu menu-top menu-icon-performance menu-top-last">
						<div class="wp-menu-arrow">
							<div></div>
						</div>
						<div class="wp-menu-image dashicons-before dashicons-performance"><br></div>
						<div class="wp-menu-name">Version: <?php echo esc_html( frontenberg_get_block_editor_version() ); ?></div>
					</a>
				</li>
				*/
				?>
				<?php
					if ( has_nav_menu( 'sidebar' ) ) {
						wp_nav_menu( [
							'menu' => 'sidebar',
							'container' => '',
							'items_wrap' => '%3$s',
							'link_before' => '<div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image dashicons-before dashicons-arrow-right-alt2"><br></div><div class="wp-menu-name">',
							'link_after' => '</div>'
						] );
					}
				?>
			</ul>
		</div>
	</div>
	<div id="wpcontent">
		<div id="wpbody" role="main">
			<div id="wpbody-content" aria-label="Main content" tabindex="0">
				<div class="nvda-temp-fix screen-reader-text">&nbsp;</div>
				<div class="block-editor gutenberg">
					<div id="editor" class="block-editor__container gutenberg__editor"></div>
					<div id="metaboxes" class="hidden">
						<?php /*
						this is commented out because it causes a fatal with do_metaboxes not being found
						the_block_editor_meta_boxes(); */ ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php

get_footer();
