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
$attributes = $product->get_attributes();
?>

<article id="post-<?php echo $product->id;?>" class="post-<?php echo $product->id;?> post custom_post row">

	<div class="row">
		<div class="col-md-3">
			<a href="javascript:void(0)"><img height="500" src="<?php echo get_the_post_thumbnail_url() ?>" class="wp-post-image img-responsive" alt="<?php the_title();?>" /></a>
		</div>
		
		
		<div class="content-wrap col-md-9">
			<div class="content-wrap-inner">
				<header class="entry-header custom_header">
					<?php the_title();?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="custom_container">
				        <table>
				        	
				        	<tbody>
				        		<?php foreach ($attributes as $key => $attribute) { ?>
				        			<tr>
				        				<td><b><?php echo $attribute->get_name().":"; ?></b></td>
				        				<td><?php echo esc_html( implode( ', ', $attribute->get_options() ) ); ?></td>
				        			</tr>
				        		<?php } ?>
				        	</tbody>
				        </table>
				    </div>
				</div><!-- .entry-content -->
			</div>
		</div>
	</div>

</article>