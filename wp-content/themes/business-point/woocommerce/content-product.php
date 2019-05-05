 <?php
 /* @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="row" style="padding-bottom: 15px">
	<div class="col-md-3">
		<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
	</div>
	<div class="col-md-9">
		<table class="table table-striped custom-atrr-table">
			<tbody>
				<?php
					$attributes = $product->get_attributes();
					foreach ( $attributes as $attribute ) {
						?>
						<tr>
							<td><?php echo $attribute[ 'name' ]; ?></td>
							<td><?php echo $attribute['value']; ?></td>
						</tr>
						<?php
						
					}
				?>
			</tbody>
		
		</table>	
	</div>
</div>
<div class="seperator">
	<span><i class="fa fa-users"></i></span>
</div>

