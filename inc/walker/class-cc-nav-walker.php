<?php

// directly access denied
defined('ABSPATH') || exit;

class CC_Nav_Walker extends Walker_Nav_Menu {

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
		$classes = array( 'nav-item NavSubBranceHover' );

		$class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );

		$atts          = array();
		$atts['class'] = ! empty( $class_names ) ? $class_names : '';

		$atts       = apply_filters( 'nav_menu_submenu_attributes', $atts, $args, $depth );
		$attributes = $this->build_atts( $atts );


		if( $depth == 0 ){
			$output .= '<div class="category-sub-menu bg-1 TabletopSubMenu" data-depth="'.$depth.'"><div class="row g-4">';
		}else{
			$output .= '<ul data-depth="'.$depth.'">';
		}
		
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent  = str_repeat( $t, $depth );
		// $output .= "$indent</ul>{$n}";
		if( $depth == 0 ){
			$output .= '</div></div>';
		}else{
			$output .= '</ul>';
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
		if ( $depth === 0 ) {
			$this->megamenu            = get_post_meta( $data_object->ID, '_menu_item_megamenu', true );
			$this->megamenu_col        = get_post_meta( $data_object->ID, '_menu_item_megamenu_col', true );
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

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


		$hoverClass = '';
		if( $this->megamenu == true ){
			$hoverClass = 'NavSubBranceHover';
		}
		
      if( $depth == 0 ){
         $output .= '<li class="nav-item '.$hoverClass.'">';
      }else{
			if( $depth == 1 ){
				$output .= '<div class="col-lg-4">';
			}else{
				$output .= '<li>';
			}
         
      }

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
         if( $menu_item->megamenu == true ){
            $item_output .= '<div class="d-flex NavSubBrance">';
            $item_output .= '<div>';
            $item_output .= '<a href="'.$atts['href'].'" class="nav-link">';
            $item_output .= $title;
            $item_output .= '</a>';
            $item_output .= '</div>';
            $item_output .= '<div> <i class="fa-solid fa-chevron-right navLinkI"></i></div>';
            $item_output .= '</div>';
         }else{
            $item_output .= '<div class="d-flex"><a class="nav-link" aria-current="page" href="'.$atts['href'].'">';
            // $item_output .= '<div class="d-flex"><a' . $attributes . '>';
            $item_output .= $title;
            $item_output .= '</a></div>';
         }
      }else{

			if( $depth == 1 ){
				$item_output .= "<h4>{$title}</h4>";
			}else{
				$item_output .= '<a' . $attributes . '>';
				$item_output .= $args->link_before . $title . $args->link_after;
				$item_output .= '</a>';
			}
      }
	
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
		if( $depth == 1 ){
			$output .= "</div>{$n}";
		}else{
			$output .= "</li>{$n}";
		}
		
	}
}
