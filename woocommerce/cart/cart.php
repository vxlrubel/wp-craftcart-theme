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
												<tr>
														<th>Image</th>
														<th>Product Name</th>
														<th>Price</th>
														<th>Quantity</th>
														<th>Total</th>
														<th>Action</th>
												</tr>
											</thead>
											<tbody>

												<?php
													foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
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

															<tr>
																<!-- product thumbnail -->
																<td>
																	<?php
																		$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

																		if ( ! $product_permalink ) {
																			echo $thumbnail;
																		} else {
																			printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
																		}
																	?>
																</td>

																<!-- proudct name -->

																<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
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
																<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
																	<?php
																		echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
																	?>
																</td>
																
																<!-- product quantity -->
																<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
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

																
															</tr>

														<?php endif;

													}
												
												 ?>
												<tr>
														<td>
															<div class="product-img"><img src="./Images/Product/Product.jpg" alt="Image" /></div>
														</td>
														<td><a href="shop-details.html" class="product-name">White short Checkered</a></td>
														<td>
															<span class="price-txt">Tk <span class="main-price">460</span></span>
														</td>
														<td>
															<div class="product-count cart-product-count">
																<div class="quantity rapper-quantity">
																		<input type="number" min="1" max="100" step="1" value="1" readonly />
																		<div class="quantity-nav">
																			<div class="quantity-button quantity-down"><i class="fa-solid fa-minus"></i></div>
																			<div class="quantity-button quantity-up"><i class="fa-solid fa-plus"></i></div>
																		</div>
																</div>
															</div>
														</td>
														<td>
															<span class="price-txt">Tk <span class="total-price">460</span></span>
														</td>
														<td>
															<button class="cart-delete">
																<i class="fa-solid fa-delete-left"></i>
															</button>
														</td>
												</tr>
											</tbody>
										</table>
									</form>

									<div class="cart-total-panel">
											<h3 class="title">Cart Total</h3>
											<div class="panel-body">
												<div class="row">
													<div class="col-md-6">
															<h4 class="sub-title">Choose Shipping Mode:</h4>
															<div class="shipping-mode">
																<div class="form-check">
																	<input class="form-check-input shipping-check" type="radio" name="shippingMode" id="storePickup" checked /> <span class="sub-input"><i class="fa-regular fa-check"></i></span>
																	<label class="form-check-label" for="storePickup">Store pickup (in 20 minutes) - FREE</label>
																</div>

																<div class="form-check">
																	<input class="form-check-input shipping-check" type="radio" name="shippingMode" id="homeDelivery" /> <span class="sub-input"><i class="fa-regular fa-check"></i></span>
																	<label class="form-check-label" for="homeDelivery">Delivery at home (2 - 4 day) - Tk 2.00 <span>1206 Sussex Court, Killeen, TX - 76541</span></label>
																</div>
															</div>
													</div>

													<div class="col-md-6">
															<div class="calculate-area">
																<ul>
																	<li>
																			Sub Total <span class="price-txt">Tk <span class="sub-total">1026</span></span>
																	</li>
																	<li>
																			Shipping <span class="price-txt" id="shippingFee"><span class="text-success">Free</span></span>
																	</li>
																	<li class="total-price-wrap">
																			Total <span class="price-txt">Tk <span id="totalPrice">1026</span></span>
																	</li>
																</ul>
															</div>
													</div>
												</div>
											</div>
									</div>

									<div class="btn-box CartPage d-flex">
											<div class="btn-box2">
												<a href="./index.html" class="def-btn">
													<i class="fa-solid fa-chevron-left"></i>
													Continue Shopping
												</a> 
											</div>
											<!-- <button class="def-btn" id="cartUpdate" >Update Cart</button> -->
											
											<div>
												<button class="def-btn tab-next-btn ProceedToCheckout" id="proceedToCheckout" onclick="ProceedToCheckoutFuns()">
													Proceed to checkout <i class="fa-solid fa-chevron-right"></i>
													<i class="fa-light fa-cart-circle-check"></i>
												</button>
											</div>
									</div>
								</div>
							</div>
							<!-- shoping list & tatal cost end  -->

							<!-- Adress & order information start -->
							<div class="single-tab" id="checkOutTab">
								<div class="row">
									<div class="col-xl-8 col-lg-7 col-md-6">
											<div class="billing-details">
												<h3 class="title">Billing Details</h3>
												<form class="form-row">
													<div class="form-col-5"><input type="text" class="form-control" placeholder="Name" required /></div>
													<div class="form-col-5"><input type="email" class="form-control" placeholder="Email Address" required /></div>
													<div class="form-col-5"><input type="tel" class="form-control" placeholder="Phone" required /></div>
													
													<div class="form-col-10"><input type="text" class="form-control" placeholder="Address" required /></div>
													
													<div class="form-col-10">
															<div class="check-wrap">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="shipDifferentAddress" /> <span class="sub-input"><i class="fa-regular fa-check"></i></span>
																	<label class="form-check-label" for="shipDifferentAddress">Ship To Different Address</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="saveInformation" /> <span class="sub-input"><i class="fa-regular fa-check"></i></span>
																	<label class="form-check-label" for="saveInformation">Save This Information For Next Time</label>
																</div>
															</div>
													</div>

													<div class="form-col-10"><textarea class="form-control textarea" placeholder="Notes about your order, e.g. special notes for delivery"></textarea></div>
												</form>
											</div>
									</div>

									<div class="col-xl-4 col-lg-5 col-md-6">
											<div class="payment-method">
												<div class="total-clone">
													<ul>
															<li>
																Sub Total <span class="price-txt">TK<span class="sub-total-2"> 1026</span></span>
															</li>
															<li>
																Shipping <span class="price-txt" id="shippingFee2"><span class="text-success">Free</span></span>
															</li>
															<li>
																Tax & Vat <span class="price-txt" id="shippingFee2">TK<span class="text-success"> 15</span></span>
															</li>
															<li class="total-price-wrap">
																Total <span class="price-txt">TK<span id="totalPrice2">1026</span></span>
															</li>
													</ul>
												</div>

												<div class="payment-option">
													<div class="single-payment-card">
															<div class="panel-header">
																<div class="left-wrap">
																	<div class="form-check">
																			<input class="form-check-input" name="credit-card" type="checkbox" disabled /> 
																			<span class="sub-input"><i class="fa-solid fa-check"></i></span>
																	</div>
																	<span class="type">Credit Card</span>
																</div>
																<span class="icon"><i class="fa-solid fa-credit-card fa-2x"></i></span>
															</div>

															<div class="panel-body">
																<form class="credit-card-form">
																	<div class="row g-lg-4 g-3">
																			<div class="col-12">
																				<div class="input-box card-number">
																					<span class="symbol"><img src="assets/images/visa.png" alt="Card Type" /> </span><label>Card Number</label>
																					<input type="text" id="creditCardNumber" placeholder="XXXX XXXX XXXX XXXX" />
																				</div>
																			</div>
																			<div class="col-6">
																				<div class="input-box"><label>Expiry date</label> <input type="text" id="datepicker" placeholder="MM/YYYY" /></div>
																			</div>
																			<div class="col-6">
																				<div class="input-box"><label>Security code</label> <input type="number" id="securityCode" placeholder="e.g. 123" /></div>
																			</div>
																			<div class="col-12">
																				<div class="input-box"><label>Enter card holder name</label> <input type="text" id="cardHolderName" placeholder="Card holder" /></div>
																			</div>
																	</div>
																</form>
															</div>
													</div>

													<div class="single-payment-card">
															<div class="panel-header">
																<div class="left-wrap">
																	<div class="form-check">
																			<input class="form-check-input" name="paypal" type="checkbox" disabled /> 
																			<span class="sub-input">
																				<i class="fa-solid fa-check"></i>
																			</span>
																	</div>
																	<span class="type">PayPal</span>
																</div>
																<span class="icon"><i class="fa-brands fa-cc-paypal fa-3x"></i></span>
															</div>
															<div class="panel-body">
																<form class="paypal-form">
																	<div class="row g-lg-4 g-3">
																			<div class="col-12">
																				<label>Email or phone no. that used in paypal</label> 
																				<input type="email" name="paypal-id" id="paypalId" placeholder="Email or mobile number" required />
																			</div>
																			<div class="col-12"><button type="submit" id="confirmPaypal" class="def-btn">Confirm Paypal</button></div>
																	</div>
																</form>
															</div>
													</div>

													<div class="single-payment-card">
															<div class="panel-header">
																<div class="left-wrap">
																	<div class="form-check">
																			<input class="form-check-input" name="google-pay" type="checkbox" disabled /> 
																			<span class="sub-input"><i class="fa-solid fa-check"></i></span>
																	</div>
																	<span class="type">Google Pay</span>
																</div>
																<span class="icon"><i class="fa-brands fa-google-pay fa-3x"></i></span>
															</div>
															<div class="panel-body">
																<form class="google-pay-form">
																	<div class="row g-lg-4 g-3">
																			<div class="col-12">
																				<label>Email or phone no. that used in google pay</label> <input type="email" name="google-Pay-id" id="googlePayId" placeholder="Email or mobile number" required />
																			</div>
																			<div class="col-12"><button type="submit" id="confirmGooglePay" class="def-btn">Confirm Google Pay</button></div>
																	</div>
																</form>
															</div>
													</div>

													<div class="single-payment-card">
															<div class="panel-header">
																<div class="left-wrap">
																	<div class="form-check">
																			<input class="form-check-input" name="cash" type="checkbox" disabled /> 
																			<span class="sub-input"><i class="fa-solid fa-check"></i></span>
																	</div>
																	<span class="type">Cash on delivery</span>
																</div>
																<span class="icon"><i class="fa-solid fa-money-bill-1-wave fa-2x"></i></span>
															</div>
													</div>
												</div>

												<button class="def-btn palce-order tab-next-btn PalceOrder" id="palceOrder" onclick="ProceedToCheckout2Funs()">
													Place Order 
												</button>
											</div>
									</div>
								</div>
							</div>
							<!-- Adress & order information end -->

							<!-- Order Sucess Animetion stat -->
							<div class="single-tab" id="orderCompletedTab">
								<div class="check-icon text-center mb-2">
									<!-- <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
											<circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
											<path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
									</svg> -->
									<i class="fa-regular fa-circle-check fa-4x orderSucessColors"></i>
								</div>
								<div class="order-complete-msg text-center"><h2>Your Order Has Been Completed</h2></div>
							</div>
							<!-- Order Sucess Animetion end -->
					</div>
				</div>
			</div>
	</div>
</Section>


<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>

	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove"><span class="screen-reader-text"><?php esc_html_e( 'Remove item', 'woocommerce' ); ?></span></th>
				<th class="product-thumbnail"><span class="screen-reader-text"><?php esc_html_e( 'Thumbnail image', 'woocommerce' ); ?></span></th>
				<th class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
				<th class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
				<th class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
				<th class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
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

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						<td class="product-remove">
							<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										/* translators: %s is the product name */
										esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
						</td>

						<td class="product-thumbnail">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
						</td>

						<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
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

						<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>

						<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
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

						<td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>
					</tr>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<tr>
				<td colspan="6" class="actions">

					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
				</td>
			</tr>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</tbody>
	</table>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<div class="cart-collaterals">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
	?>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>
