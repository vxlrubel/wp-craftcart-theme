<?php

// directly access denied
defined('ABSPATH') || exit;


if( $related_products ): ?>

<Section class="CommonpaddingSection TitleBorderBottom productPhonemargin" >
   <div class="container">
      <div class="row Brandsection">
         <div class="Titelh42 row RowPadingError RowMarginError">
            <div class="col-8 RowPadingError RowMarginError">
                  <?php 
                     $related_title = apply_filters( 'cc_related_product_title', 'Related Products' );
                     echo "<h4>{$related_title}</h4>\n";
                   ?>
            </div>

            <div class="col-4 TitleCntent RowPadingError RowMarginError">
                  <div class="SeeAlSpan">
                     <?php
                        $shop_page_id = wc_get_page_id('shop');
                        $shop_url = get_permalink( $shop_page_id );

                        printf( '<a href="%s">%s</a>', $shop_url, 'See More' );
                      ?>
                  </div>
            </div>
         </div>

         <div class="tab-content">
            <div class="row">

                  <?php
                     foreach ($related_products as $related_product ) {

                        // post object
                        $post_object = get_post( $related_product->get_id() );

                        // post data
                        setup_postdata( $GLOBALS['post'] =& $post_object );

                        // load template
                        wc_get_template_part( 'content', 'product' );
                     }
                   ?>

            </div>
         </div>
   </div>
</Section>
<?php endif;

wp_reset_postdata();