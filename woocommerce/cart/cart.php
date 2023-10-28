<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>


<Section class="CommonpaddingSection tab-section  productPhonemargin WidhPage" >
	<div class="container">
			<div class="row">
				<div class="col-12 px-0">
					<div class="tab-contents">
							<!-- shoping list & tatal cost stat  -->
						<div class="single-tab active " id="cartTab">
							<div class="table-wrap revel-table">
								<form class="table-responsive woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
									<table class="table table-borderless">
										<thead>
											<tr class="w-100 cc-cart-table-row">
													<th class="thumb">Image</th>
													<th class="product-name">Product Name</th>
													<th class="price">Price</th>
													<th class="quantity">Quantity</th>
													<th class="total" style="justify-content: center">Total</th>
													<th class="action" style="justify-content: center">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
												foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
													$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
													$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
													
													/**
													 * Filter the product name.
													 *
													 * @since 2.1.0
													 * @param string $product_name Name of the product in the cart.
													 * @param array $cart_item The product in the cart.
													 * @param string $cart_item_key Key for the product in the cart.
													 */
													$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
													
													if( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ):
														$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key ); ?>

														<tr class="cc-cart-table-row">
															<!-- product thumbnail -->
															<td class="w-120">
																<?php
																	$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image('woocommerce_thumbnail', ['class' => 'cart-image-thumb']), $cart_item, $cart_item_key );

																	if ( ! $product_permalink ) {
																		echo $thumbnail;
																	} else {
																		printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
																	}
																?>
															</td>

															<!-- proudct name -->

															<td class="product-name width-product" data-title="<?php esc_attr_e( 'Product', CC_DOMAIN ); ?>">
																<?php
																	if ( ! $product_permalink ) {
																		echo wp_kses_post( $product_name . '&nbsp;' );
																	} else {
																		/**
																		* This filter is documented above.
																		*
																		* @since 2.1.0
																		*/
																		echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
																	}

																	do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

																	// Meta data.
																	echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

																	// Backorder notification.
																	if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
																		echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
																	}
																?>
															</td>
															
															<!-- product price -->	
															<td class="product-price w-120" data-title="<?php esc_attr_e( 'Price', CC_DOMAIN ); ?>">
																<?php
																	echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
																?>
															</td>
															
															<!-- product quantity -->
															<td class="product-quantity w-120" data-title="<?php esc_attr_e( 'Quantity', CC_DOMAIN ); ?>">
																<?php
																	if ( $_product->is_sold_individually() ) {
																		$min_quantity = 1;
																		$max_quantity = 1;
																	} else {
																		$min_quantity = 0;
																		$max_quantity = $_product->get_max_purchase_quantity();
																	}

																	$product_quantity = woocommerce_quantity_input(
																		array(
																			'input_name'   => "cart[{$cart_item_key}][qty]",
																			'input_value'  => $cart_item['quantity'],
																			'max_value'    => $max_quantity,
																			'min_value'    => $min_quantity,
																			'product_name' => $product_name,
																		),
																		$_product,
																		false
																	);

																	echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
																?>
															</td>

															<!-- subtotal -->
															<td class="product-subtotal w-120" data-title="<?php esc_attr_e( 'Total', CC_DOMAIN ); ?>" style="justify-content: center" >
																<?php
																	echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
																?>
															</td>


															<!-- product remove -->
															<td class="product-remove w-120" style="justify-content: center;">
																<?php
																	echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
																		'woocommerce_cart_item_remove_link',
																		sprintf(
																			'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa-solid fa-delete-left"></i></a>',
																			esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
																			/* translators: %s is the product name */
																			esc_attr( sprintf( __( 'Remove %s from cart', CC_DOMAIN ), wp_strip_all_tags( $product_name ) ) ),
																			esc_attr( $product_id ),
																			esc_attr( $_product->get_sku() )
																		),
																		$cart_item_key
																	);
																?>
															</td>


														</tr>

													<?php endif;

												endforeach;
											
												?>
												<!-- Coupon area start -->
											<tr>
												<td colspan="6" class="actions coupon-box">

													<?php if ( wc_coupons_enabled() ) { ?>
														<div class="coupon">
															<label for="coupon_code" class="screen-reader-text">
																<?php esc_html_e( 'Coupon:', CC_DOMAIN ); ?></label>
																<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', CC_DOMAIN ); ?>" />
																<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', CC_DOMAIN ); ?>"><?php esc_html_e( 'Apply coupon', CC_DOMAIN ); ?></button>
															<?php do_action( 'woocommerce_cart_coupon' ); ?>
														</div>
													<?php } ?>

													<button type="submit" class="updateable-cart button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', CC_DOMAIN ); ?>"><?php esc_html_e( 'Update cart', CC_DOMAIN ); ?></button>

													<?php do_action( 'woocommerce_cart_actions' ); ?>

													<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
												</td>
											</tr>
												<!-- Coupon area end -->
										</tbody>
									</table>
								</form>

								<div class="cart-total-panel">
									<?php
										/**
										 * Cart collaterals hook.
										 *
										 * @hooked woocommerce_cross_sell_display
										 * @hooked woocommerce_cart_totals - 10
										 */
										// do_action( 'woocommerce_cart_collaterals' );
									?>
										<div class="panel-body">
											<div class="row">
												<div class="col-md-6 offset-md-6">
													<?php do_action( 'woocommerce_cart_collaterals' ); ?>
												</div>
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</Section>
