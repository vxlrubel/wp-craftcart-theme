<?php

namespace App\Walker;
// directly access denied
defined('ABSPATH') || exit;

class CC_Menu_Fields{

   public function __construct(){

      // add custom field inside the menu options
      add_filter( 'wp_setup_nav_menu_item', [ $this, 'add_custom_fields_meta' ] );
      add_action( 'wp_nav_menu_item_custom_fields', [ $this, 'add_custom_fields' ], 10, 4 );

      // save menu custom fields
      add_action( 'wp_update_nav_menu_item', [ $this, 'update_custom_fields' ], 10, 3);
   }


	/**
	 * Add custom menu style fields data to the menu.
	 *
	 * @access public
	 * @param object $menu_item A single menu item.
	 * @return object $menu_item [The menu item.]
	 */
   public function add_custom_fields_meta( $menu_item ){

      $menu_item->megamenu     = get_post_meta( $menu_item->ID, '_menu_item_megamenu', true );
      $menu_item->megamenu_col = get_post_meta( $menu_item->ID, '_menu_item_megamenu_col', true );
      
      return $menu_item;
   }


    /**
     * Add custom megamenu fields data to the menu.
     *
     * @access public
     * @param [type] $id
     * @param [type] $item
     * @param [type] $depth
     * @param [type] $args
     * @return object The menu item.
     */
   public function add_custom_fields( $id, $item, $depth, $args ){
      
      ?> 
         <p>
            <input type="checkbox" id="edit-menu-item-<?php echo esc_attr( $item->ID ); ?>" value="megamenu" name="menu-item-megamenu[<?php echo esc_attr( $item->ID ); ?>]" <?php checked( $item->megamenu, 'megamenu'); ?> >
            <label for="edit-menu-item-<?php echo esc_attr( $item->ID ); ?>"><?php esc_html_e( 'Enable Megamenu', CC_DOMAIN ); ?></label>
         </p>

         <p>
            <label for="edit-menu-column-<?php echo esc_attr( $item->ID ); ?>">
               <?php esc_html_e( 'Megamenu column width (max 3).', CC_DOMAIN ); ?>
            </label>
            <input type="number" min="2" max="3" id="edit-menu-column-<?php echo esc_attr( $item->ID ); ?>" value="<?php echo esc_attr( $item->megamenu_col ); ?>" name="menu-item-megamenu_col[<?php echo esc_attr( $item->ID ); ?>]" class="widefat">
         </p>
      <?php
   }

   /**
	 * Add the custom menu style fields menu item data to fields in database.
	 *
	 * @access public
	 * @param string|int $menu_id         The menu ID.
	 * @param string|int $menu_item_db_id The menu ID from the db.
	 * @param array      $args            The arguments array.
	 * @return void
	 */
   public function update_custom_fields( $menu_id, $menu_item_db_id, $args ){

      $check = [ 'megamenu', 'megamenu_col' ];

      foreach ($check as $key) {
         if( ! isset( $_POST['menu-item-'. $key][$menu_item_db_id] ) ){
            $_POST['menu-item-'. $key][$menu_item_db_id] = '';
         }

         $value = sanitize_text_field( wp_unslash( $_POST['menu-item-'. $key][$menu_item_db_id] ) );

         update_post_meta( $menu_item_db_id, "_menu_item_{$key}", $value );

      }

   }

}
// initiate the class
new CC_Menu_Fields;