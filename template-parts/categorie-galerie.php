<?php
/* 
*Temokkate-part qui permettra d'afficher 
*un article provenant d'un conteneur de class blocflex
*pour un article de categorie galerie
*/
$titre =substr( get_the_title(),3);
//$titre = get_the_title();
//if(substr($titre,0,1) == "0")   /* dans le cas ou on veux enlever le premier caractere si il y a un 0 dans le debut du titre */
?>

<article class="blockflex_galerie">

    <?php the_content(); ?>
</article>