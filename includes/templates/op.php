<?php 
    $social_options = get_option('social_media_icons');
?>
<div class="wrap">
    
<h3>Cadastre as redes sociais:</h3>
<hr>
<form action="options.php" method="post">
        <?php settings_fields('social_op'); ?>
        <table>
            <tr>
                <td><label for="facebool">Facebook:</label></td>
                <td><input type="url" name="social_media_icons[fb_perfil]" id="social_media_icons[fb_perfil]" value="<?php echo $social_options['fb_perfil']?>"></td>
            </tr>
            <tr>
                <td><label for="facebool">Twitter:</label></td>
                <td><input type="url" name="social_media_icons[tw_perfil]" id="social_media_icons[tw_perfil]" value="<?php echo $social_options['tw_perfil']?>"></td>
            </tr>
            <tr>
                <td><label for="facebool">Facebook:</label></td>
                <td><input type="url" name="social_media_icons[yt_perfil]" id="social_media_icons[yt_perfil]" value="<?php echo $social_options['yt_perfil']?>"></td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit" value="SALVAR"></td>
                <td></td>
            </tr>
        </table>
        
        
      
        
        

       
    </form>
</div>