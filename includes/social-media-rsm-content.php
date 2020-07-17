<?php

function social_media_rsm_register_content($post){
    
    echo $post."<br>";
    require_once(DIRECTORY_ROOT_SOCIAL_MEDIA_RSM.'includes/templates/content.php');
}

add_filter('the_content','social_media_rsm_register_content');