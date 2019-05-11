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

<article id="post-<?php echo $product->id;?>" class="post-<?php echo $product->id;?> post custom_post row">

	<div class="row">
		<div class="featured-thumb col-md-3">
			<a href="javascript:void(0)"><img width="370" height="500" src="<?php echo the_post_thumbnail_url();?>" class="attachment-business-point-small" alt="<?php the_title();?>"></a>
		</div>
		
		
		<div class="content-wrap content-with-image col-md-9">
			<div class="content-wrap-inner">
				<header class="entry-header">
					<h2 class="entry-title"><?php the_title();?></h2>			
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p>Ut in urna ut odio ultricies varius. Proin volutpat congue turpis sit amet posuere. Integer felis leo, dictum vitae diam quis, consequat feugiat nulla. Donec ac nisl mi. Nullam finibus…</p>
					
					
				</div><!-- .entry-content -->
			</div>
		</div>
	</div>

</article>
<!-- <div class="row" style="padding-bottom: 15px">
	<div class="col-md-3">
		<?php //do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
	</div>
	<div class="col-md-9">
		<table class="table table-striped custom-atrr-table">
			<tbody>
				<?php
					//$attributes = $product->get_attributes();
					//foreach ( $attributes as $attribute ) {
						?>
						<tr>
							<td><?php //echo $attribute[ 'name' ]; ?></td>
							<td><?php //echo $attribute['value']; ?></td>
						</tr>
						<?php
						
					//}
				?>
			</tbody>
		
		</table>	
	</div>
</div>
<div class="seperator">
	<span><i class="fa fa-users"></i></span>
</div> -->

