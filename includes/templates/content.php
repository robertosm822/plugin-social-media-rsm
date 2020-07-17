<?php $social_links = get_option('social_media_icons');?>

<!-- verify exists icon activate -->
<?php if(!$social_links['fb_hide'] or !$social_links['tw_hide'] or !$social_links['yt_hide'] ): ?>

<link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__)."css/style.css"; ?>">
<div class="social-conteudo">
    Me encontre nas redes sociais:
    <div class="line-hr"></div>
    <div class="social-icones">
       
        
        <?php if(!$social_links['fb_hide']): ?>
            <a href="<?php echo $social_links['fb_perfil']?>">
                <img src="<?php echo plugin_dir_url(__FILE__)."img/fb.png"; ?>"  alt="facebook">
            </a>
        <?php endif; ?>

        <?php if(!$social_links['tw_hide']): ?>
            <a href="<?php echo $social_links['tw_perfil']?>">
                <img src="<?php echo plugin_dir_url(__FILE__)."img/tw.png"; ?>"  alt="twiter esquerdalha">
            </a>
        <?php endif; ?>

        <?php if(!$social_links['yt_hide']): ?>
            <a href="<?php echo $social_links['yt_perfil']?>">
                <img src="<?php echo plugin_dir_url(__FILE__)."img/yt.png"; ?>"  alt="youtube">
            </a>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

