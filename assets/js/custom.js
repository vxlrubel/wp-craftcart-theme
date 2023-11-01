(function ($) {
    class CRAFTCART {
        init() {
            this.carousel();
            this.increaseNDecrease();
        }
        carousel() {
            // brand carousel
            $('.BrandCrosul').owlCarousel({
                loop: true,
                margin: 10,
                dots: false,
                nav: false,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 3,
                    },
                    600: {
                        items: 4,
                    },
                    1000: {
                        items: 7,
                        loop: true
                    }
                }
            });

            // category carousel
            $('.CatagorisCrosul').owlCarousel({
                loop: true,
                margin: 10,
                dots: false,
                nav: false,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 3,
                    },
                    600: {
                        items: 6,
                    },
                    1000: {
                        items: 10,
                        loop: true
                    }
                }
            });


        }
        increaseNDecrease() {

            // decrement the count
            $(document).on('click', '.quantity-minus', function () {
                var $input = $(this).closest('.cc-item-quantity').find('input[type="number"]');
                var currentValue = parseInt($input.val());
                if (currentValue > parseInt($input.attr('min'))) {
                    $input.val(currentValue - 1);
                }
                $('.updateable-cart').removeAttr('disabled');
            });

            // increment the count
            $(document).on('click', '.quantity-plus', function () {
                var $input = $(this).closest('.cc-item-quantity').find('input[type="number"]');
                var currentValue = parseInt($input.val());
                // if (currentValue < parseInt($input.attr('max'))) {
                $input.val(currentValue + 1);
                // }
                $('.updateable-cart').removeAttr('disabled');
            });
        }
    }

    $(document).ready(function () {
        const cc = new CRAFTCART();
        cc.init();

        // active class first child
        $(".home-carousel-slider").owlCarousel({
            items: 1,
            nav: true,
            smartSpeed: 1500,
            loop: true
        });


        // add cart items inside the mini cart
        // Add to Cart button click event
        $('.add_to_cart_button').on('click', function (e) {
            e.preventDefault();

            var product_id = $(this).data('product_id');
            var quantity = 1; // You can customize this based on your needs

            // Make an AJAX request to update the cart
            $.ajax({
                type: 'POST',
                url: wc_add_to_cart_params.ajax_url,
                data: {
                    action: 'add_to_cart',
                    product_id: product_id,
                    quantity: quantity
                },
                success: function (response) {
                    // Update the mini cart content
                    if (response) {
                        $('.widget_shopping_cart_content').html(response);
                    }
                }
            });
        });






    });

    // add to cart items count
    $(document.body).on('added_to_cart', function () {
        // Use AJAX to update the mini cart
        $.ajax({
            type: 'GET',
            url: wc_add_to_cart_params.ajax_url,
            dataType: 'json',
            data: { action: 'update_mini_cart' },
            success: function (response) {
                // Update the mini cart count
                if (response && response.fragments) {
                    $.each(response.fragments, function (key, value) {
                        if (key.startsWith('mini_cart_count')) {
                            $('#cc-wc-update-count').html(value);
                        }
                    });
                }
            }
        });
    });



})(jQuery);