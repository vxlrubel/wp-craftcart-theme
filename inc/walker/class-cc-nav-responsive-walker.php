<?php

defined('ABSPATH') || exit;

class CC_Nav_Responsive_Walker extends Walker_Nav_Menu {
	
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );

		// Default class.
		$classes = array( 'sub-menu' );

		
		$class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );

		$atts          = array();
		$atts['class'] = ! empty( $class_names ) ? $class_names : '';

		
		$atts       = apply_filters( 'nav_menu_submenu_attributes', $atts, $args, $depth );
		$attributes = $this->build_atts( $atts );

		// $output .= "{$n}{$indent}<ul{$attributes}>{$n}";

      if( $depth == 0 ){
         $output .= "<div class=\"w-100 DeopDownMenuMobiel\" depth=\"{$depth}\">";
      }else{
         $output .= "<ul depth=\"{$depth}\">";
      }

	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		// if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
		// 	$t = '';
		// 	$n = '';
		// } else {
		// 	$t = "\t";
		// 	$n = "\n";
		// }
		// $indent  = str_repeat( $t, $depth );
		// $output .= "$indent</ul>{$n}";
      if( $depth == 0 ){
         $output .= "<div>\n";
      }else{
         $output .= "</ul>\n";
      }
	}

	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		// Restores the more descriptive, specific name for use within this method.
		$menu_item = $data_object;

		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

      if( $depth === 0 ){
         $this->responsive_menu = get_post_meta( $data_object->ID, '_menu_item_responsive_menu', true );
      }
      
		$classes   = empty( $menu_item->classes ) ? array() : (array) $menu_item->classes;
		$classes[] = 'menu-item-' . $menu_item->ID;

		$args = apply_filters( 'nav_menu_item_args', $args, $menu_item, $depth );

		
		$class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $menu_item, $args, $depth ) );

		
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $menu_item->ID, $menu_item, $args, $depth );

		$li_atts          = array();
		$li_atts['id']    = ! empty( $id ) ? $id : '';
		$li_atts['class'] = ! empty( $class_names ) ? $class_names : '';


		$li_atts       = apply_filters( 'nav_menu_item_attributes', $li_atts, $menu_item, $args, $depth );
		$li_attributes = $this->build_atts( $li_atts );

      $submenu_click_event = '';

      if( true == $this->responsive_menu ){
         $submenu_click_event = 'onclick="showDropdown()"';
      }

      if( $depth == 0 ){
         $output .= "<li class=\"nav-item\" {$submenu_click_event} depth=\"{$depth}\">\n";
      }else{
         if( $depth == 1 ){
            $output .= '<div class="DeopDownDiv">';
         }else{
            $output .= "<li depth=\"{$depth}\">\n";
         }
         
      }
      
      // echo $depth;

		$atts           = array();
		$atts['title']  = ! empty( $menu_item->attr_title ) ? $menu_item->attr_title : '';
		$atts['target'] = ! empty( $menu_item->target ) ? $menu_item->target : '';
		if ( '_blank' === $menu_item->target && empty( $menu_item->xfn ) ) {
			$atts['rel'] = 'noopener';
		} else {
			$atts['rel'] = $menu_item->xfn;
		}

		if ( ! empty( $menu_item->url ) ) {
			if ( get_privacy_policy_url() === $menu_item->url ) {
				$atts['rel'] = empty( $atts['rel'] ) ? 'privacy-policy' : $atts['rel'] . ' privacy-policy';
			}

			$atts['href'] = $menu_item->url;
		} else {
			$atts['href'] = '';
		}

		$atts['aria-current'] = $menu_item->current ? 'page' : '';

		$atts       = apply_filters( 'nav_menu_link_attributes', $atts, $menu_item, $args, $depth );
		$attributes = $this->build_atts( $atts );

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $menu_item->title, $menu_item->ID );

		$title = apply_filters( 'nav_menu_item_title', $title, $menu_item, $args, $depth );

		$item_output  = $args->before;

      if( $depth == 0 ){
         if( true == $this->responsive_menu ){
            $item_output .= "<div class=\"d-flex\"><a class=\"nav-link\" aria-current=\"page\" href=\"javascript:void(0)\">{$title}</a></div><i class=\"fa-solid fa-chevron-right navLinkI\"></i>";
         }else{
            $item_output .= "<div class=\"d-flex\"><a class=\"nav-link\" aria-current=\"page\" href=\"{$atts['href']}\">{$title}</a></div>";
         }
         
      }else{
         if( $depth == 1 ){
            $output .= sprintf('<h6>%s</h6>', $title );
         }else{
            $output .= sprintf('<a href="%s">%s</a>', esc_url( $atts['href']), esc_html($title) );
         }
         
      }
      
		// $item_output .= '<a' . $attributes . '>';
		// $item_output .= $args->link_before . $title . $args->link_after;
		// $item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $menu_item, $depth, $args );
	}

	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}

      if( $depth == 0 ){
         $output .= "</li>{$n}";
      }else{
         if( $depth == 1 ){
            $output .= "</div>{$n}";
         }else{
            $output .= "</li>{$n}";
         }
      }
		
	}

}