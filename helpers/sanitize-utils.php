<?php
/*Sanitize text input safely */
 
function hz_sanitize_text($input) {
    return sanitize_text_field(wp_unslash($input));
}
