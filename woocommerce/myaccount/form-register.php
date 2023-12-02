<?php
/**
 * Custom Registration Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-register.php.
 *
 * @package WooCommerce/Templates
 * @version 5.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
}

global $cc;

$login_url    = esc_url( $cc['cc-commerce-login'] );

wc_print_notices(); ?>

<form class="woocommerce-form woocommerce-form-register register" method="post">

   <?php do_action( 'woocommerce_register_form_start' ); ?>

   <h2 class="my-4 text-center">Register Form</h2>
   
   <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
         <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
         <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />
      </p>

   <?php endif; ?>

   <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
      <label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
      <input type="email" class="woocommerce-Input woocommerce-Input--text input-text w-100" name="email" id="reg_email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" />
   </p>

   <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
         <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
         <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" />
      </p>

   <?php endif; ?>

   <p class="woocommerce-form-row form-row" style="clear:both; overflow:hidden; margin:0;">
      <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
      <button type="submit" class="woocommerce-Button button w-100 py-2 my-3 px-3 border-0 rounded button-theme" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
   </p>

   <p class="small text-end">
      Already have an account? <a href="<?php echo $login_url; ?>">login here</a>
   </p>

   <?php do_action( 'woocommerce_register_form_end' ); ?>

</form>
