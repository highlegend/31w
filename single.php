<?php
/***Va permettre d'afficher un seul article****/ 

/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    <!-- <h3>index.php</h3> -->
    <?php 
    if (have_posts()):
   
   
     if(in_category('cours')){  
        get_template_part("template-parts/single", "cours"); 
     }  
     else{
         get_template_part("template-parts/single", "notes-cours"); 
     }
     
    endif;
?>
</main> 
<?php get_footer(); ?>