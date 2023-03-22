<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body class="site <?= (is_front_page() ? "no-aside" : "");  ?> ">
<header class="site__entete">
        <section class="logomenu">
        <!-- <div class="menusearch"> -->
                <input type="checkbox" id="chkBurger" checked="">
                <?php the_custom_logo(); ?> 
                <?php wp_nav_menu(array(
                    'menu' => 'entete',
                    'container' => 'nav'
                )); ?> 

                <?= get_search_form(); ?> 
            
                <label for="chkBurger" class="burger">
                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&amp;color=ffffff" height="20px" width="20px">
                </label>
        <!-- </div> -->
        </section>
        <section class="marge_entete">

        <h1><a href="<?php  bloginfo('url'); ?>"><?php  bloginfo('name'); ?></a></h1> 
        <h2 class="h2-menu"><?php  bloginfo('description'); ?></h2>
        </section>

    </header>
<?php 
    if (is_front_page() == false)
    {
        get_template_part("template-parts/aside");
    }
?>
    

<!-- Le bloginfo est une fonction de WordPress qui permet de récupérer des informations sur le site Web et de les afficher dans des templates ou des articles. Cette fonction peut être utilisée pour afficher des informations telles que le nom du site, l'URL du site, la description du site, l'adresse e-mail de l'administrateur du site, entre autres. -->