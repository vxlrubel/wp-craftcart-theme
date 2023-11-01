<?php 

defined( 'ABSPATH' ) || exit;

if ( ! WC()->cart->is_empty() ) : ?>

<div class="row CartUpperSummary">
   <div class="upperLeft col-6 cc-mini-cart-item-count">
		<div class="cc-wc-update-count">
			<p class="Count" id="cc-wc-update-count">
				<?php
					if( WC()->cart->get_cart_contents_count() == 1 ){
						printf('%s item' , WC()->cart->get_cart_contents_count() );
					}else{
						printf('%s items' , WC()->cart->get_cart_contents_count() );
					}
				?>
			</p>
		</div>
   </div>
   <div class="upperRight col-6">
      <!-- <span>Cart Subtotal:</span>
      <p class="Price">Tk<span>100</span></p> -->
		<?php do_action( 'woocommerce_widget_shopping_cart_total' ); ?>
   </div>
</div>


<div class="CartNabBtn hover-color-white">
	<?php 
		printf('<a href="%s">%s</a>', esc_url( wc_get_checkout_url() ), __( 'Proceed to Checkout', CC_DOMAIN ) );
	
	 ?>
</div>


<?php foreach( WC()->cart->get_cart() as $cart_item_key => $cart_item ) : ?>
	<?php
		$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
		$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
	?>
	<?php if( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ): ?>
		<?php
			$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
			$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
			$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
			$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
		?>

<!-- single item -->
		<div class="CartSummaryProduct row">
			<div class="col-3">
				<?php echo $thumbnail; ?>
			</div>
			<div class="col-9">
				<span class="CartProductTitle">
					<a href="<?php echo esc_url( $product_permalink ); ?>"><?php echo $product_name; ?></a>
				</span>
				<form class="CartNavForm">
					<div class="CartProductQuantity">
						<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
					</div>
					<div class="CartProductQuantity">
						<?php
							echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								'woocommerce_cart_item_remove_link',
								sprintf(
									'<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s"><i class="fa-solid fa-delete-left"></i></a>',
									esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
									/* translators: %s is the product name */
									esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
									esc_attr( $product_id ),
									esc_attr( $cart_item_key ),
									esc_attr( $_product->get_sku() )
								),
								$cart_item_key
							);
						?>
						
						
					</div>
				</form>
			</div>
		</div> 

	<?php endif; ?>
<?php endforeach; ?>


<!-- single item end -->
<div class="CartNabBtn CartNabBtn1 hover-color-white">
	<?php
		printf('<a href="%s">%s</a>', esc_url( wc_get_cart_url() ), __( 'View Cart Page', CC_DOMAIN ));
	?>
</div>
<?php else : ?>
	<?php printf('<p>%s</p>', __( 'No products in the cart', CC_DOMAIN ) ); ?>
<?php endif; ?>
