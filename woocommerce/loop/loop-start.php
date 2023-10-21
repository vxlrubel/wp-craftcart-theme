<?php

// derectly access denied
defined('ABSPATH') || exit;

printf(
   '<div class="row" id="column-%s">',
   esc_attr( wc_get_loop_prop('columns') )
);