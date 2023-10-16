(function ($) {
    class CRAFTCART {
        init() {
            this.carousel();
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
    }

    $(document).ready(function () {
        const cc = new CRAFTCART();
        cc.init();
    });
})(jQuery);