<?php
/*Customize excerpt length for better readability */

function hz_custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'hz_custom_excerpt_length');
