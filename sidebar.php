<?php
/**
 * The sidebar containing the main widget area
 *
 */

if ( mirasat_is_wc('woocommerce') || mirasat_is_wc('shop') || mirasat_is_wc('product') ) : ?>
			<?php 
				$mirasat_sidebar = mirasat_get_wc_sidebar_pos();
			?>
			<?php if ( is_active_sidebar( 'sidebar-wc' ) AND !empty( $mirasat_sidebar ) ): ?>
			<?php if ( $mirasat_sidebar == 'left' ): ?>
			<div class="col-xl-3 col-xl-pull-9 col-lg-4 col-lg-pull-8 col-md-12 div-sidebar" >
			<?php else: ?>
			<div class="col-xl-3 col-lg-4 col-md-12 col-xs-12 div-sidebar matchHeight" >
			<?php endif; ?>
				<div id="content-sidebar" class="content-sidebar woocommerce-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-wc' ); ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
<?php elseif ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 div-sidebar" >
		<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div>
<?php endif; ?>
