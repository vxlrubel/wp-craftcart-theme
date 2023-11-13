<?php
/**
 * Template Name: Frontpage
 */
 get_header();


//  hero section
 cc_hero_section();

//  service list
 cc_service_list_items();

 /**
 * first banner section
 * 
 * @return void
 */
cc_banner_image(1); 

//  feature brand image
cc_feature_brand();

//  popular category
cc_popular_categories();

//  flash sale product
cc_flash_sale_product();

// furniture product
cc_product_furniture();

/**
 * first banner section
 * 
 * @return void
 */
cc_banner_image(2);

// wc light categories product
cc_product_light();

// wc pet suplies product
cc_product_pet_suplies();

/**
 * third banner section
 * 
 * @return void
 */
cc_banner_image(3);


// wc kitchen category product list here
cc_product_kitchen();

// wc bedding category product list here.
cc_product_bedding();

/**
 * include partners section
 * 
 * @return void
 */
cc_partners();

/**
 * include footer section
 * 
 * @return void
 */
get_footer();