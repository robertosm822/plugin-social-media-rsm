<?php
/*
    Plugin Name: Social Media RSM
    Author: Roberto Soares
    Description: Lista de Medias Sociais
    Version: 0.1
    Author URI: http://web.siswebmobile.com.br/
*/

// security
if(!defined('ABSPATH')){
    exit("Access not found");
}

define('DIRECTORY_ROOT_SOCIAL_MEDIA_RSM', plugin_dir_path(__FILE__));

//includes

require_once(DIRECTORY_ROOT_SOCIAL_MEDIA_RSM.'includes/social-media-rsm-content.php');
require_once(DIRECTORY_ROOT_SOCIAL_MEDIA_RSM.'includes/social-media-rsm-options.php');