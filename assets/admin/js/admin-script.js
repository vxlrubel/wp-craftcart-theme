(function ($) {
    class Admin_Craft_Cart {
        init() {
            this.counter();
        }
        counter() {

            $(document).on('click', '.plus', function () {
                var $input = $(this).closest('.cc-counter').find('input[type="number"]');
                var currentValue = parseInt($input.val());
                if (currentValue < parseInt($input.attr('max'))) {
                    $input.val(currentValue + 1);
                }
            });

            $(document).on('click', '.minus', function () {
                var $input = $(this).closest('.cc-counter').find('input[type="number"]');
                var currentValue = parseInt($input.val());
                if (currentValue > parseInt($input.attr('min'))) {
                    $input.val(currentValue - 1);
                }
            });
        }
    }

    $(document).ready(function () {
        const ccAdmin = new Admin_Craft_Cart();
        ccAdmin.init();


    });
})(jQuery);