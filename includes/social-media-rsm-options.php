<?php

function social_media_rsm_options_frontend($args){
    
    require_once(DIRECTORY_ROOT_SOCIAL_MEDIA_RSM.'includes/templates/op.php');
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

function social_media_rsm_settings_api(){
    register_setting('social_op', 'social_media_icons');
}

add_action('admin_init', 'social_media_rsm_settings_api');