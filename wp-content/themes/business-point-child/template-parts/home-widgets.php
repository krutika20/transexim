<?php
/**
 * Home widgets
 *
 * @package Business_Point
 */

// Bail if not home page.
if ( ! is_page_template( 'templates/home.php' )  ) {
	return;
}
?>

<div id="home-page-widget-area" class="widget-area">
	
		<?php if ( is_active_sidebar( 'home-page-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'home-page-widget-area' ); ?>
		<?php else: ?>
			<?php
			// CTA.
			$args = array(
				'title'       => esc_html__( 'This is Business Point', 'business-point' ),
				'filter'      => true,
				'button_url'  => '#',
				'button_text' => esc_html__( 'Learn More', 'business-point' ),
				'text'        => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolor possimus inventore ut sint et, blanditiis nobis tempore voluptatum, autem in. Provident fugiat sunt placeat quibusdam dolore, quasi repudiandae eius.', 'business-point' ),
			);
			if ( current_user_can( 'edit_theme_options' ) ) {
				$args['button_url']  = esc_url( admin_url( 'widgets.php' ) );
				$args['button_text'] = esc_html__( 'Add Widgets', 'business-point' );
				$args['text']        = esc_html__( 'Widgets of Home Page Widget Area will be displayed here. Go to Appearance->Widgets in admin panel to add widgets. All these widgets will be replaced when you start adding widgets.', 'business-point' );
			}

			$widget_args = array(
				'before_title' => '<h2 class="widget-title">',
				'after_title'  => '</h2>',
			);
			the_widget( 'Business_Point_CTA_Widget', $args, $widget_args );

			?>
		<?php endif; ?>

		<section id="business-point-cta-2" style="background-image:url(https://www.prodesigns.com/wordpress-themes/demo/business-point/wp-content/uploads/sites/26/2019/01/office-space-1744803_1920.jpg);" class="bg_enabled widget business_point_widget_call_to_action"><div class="container">
			<div class="cta-widget">

				<h2 class="widget-title">Mission</h2>
							<div class="call-to-action-content">
								<p>Our aim is to supply a comprehensive range of best quality product with best competitive price and delivered within time period to our clients to ensure complete satisfaction.</p>
							</div>
			</div><!-- .cta-widget -->

			</div>
		</section>
		<section id="pt-theme-addon-clients-2" class="widget pt_theme_addon_widget_clients"><div class="container">
			<div class="pt-clients-main">
				<div class="section-title">
			        <h2 class="widget-title">Why Us?</h2>
			        <div class="seperator">
			        	<span><i class="fa fa-users"></i></span>
			        </div>
			        <p>We have worked for various companies. Find our regular and famous clients</p>
			        <div class="whyUs_container container">
				        <ul>
				        	<li class="why_us_li"><strong>Best Quality</strong> We are constantly providing best quality products in terms of dimensional accuracy, design, printing, labeling and packaging.</li>

				        	<li class="why_us_li"><strong>Competitive Price</strong> We strive to offer best competitive price for best quality products.</li>

				        	<li class="why_us_li"><strong>Superior Packaging</strong> We only use high quality material and equipment for packaging to ensure safety of the product during in transit. </li>

				        	<li class="why_us_li"><strong>On time Delivery</strong> We tend to deliver all order within time frame.</li>
				        </ul>
				        <ul>

				        	<li class="why_us_li"><strong>Flexibility</strong> We can provide all products as per need of client.</li>

				        	<li class="why_us_li"><strong>Best Vendor</strong> We are constantly providing best quality products in terms of dimensional accuracy, design, printing, labeling and packaging.</li>

				        	<li class="why_us_li"><strong>Satisfaction</strong> We are constantly providing best quality products in terms of dimensional accuracy, design, printing, labeling and packaging.</li>
				        </ul>
				    </div>
			    </div>
			</div>

        </section>

        
	</div>
</div><!-- #home-page-widget-area -->