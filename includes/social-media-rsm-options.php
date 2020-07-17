<?php

function social_media_rsm_options_frontend($args){
    echo "Opções do Plugin Social Media RSM";
}

function social_media_rsm_options_register(){
    add_options_page('Social Media RSM', 
    'Social Media RSM', 
    'manage_options',
    'social-media-rsm',
    'social_media_rsm_options_frontend','11'
    );
    
}

add_action('admin_menu', 'social_media_rsm_options_register');