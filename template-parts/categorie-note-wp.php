<?php
/* 
*Temokkate-part qui permettra d'afficher 
*un article provenant d'un conteneur de class blocflex
*pour un article de categorie note-wp
*/
$titre =substr( get_the_title(),3);
//$titre = get_the_title();
//if(substr($titre,0,1) == "0")   /* dans le cas ou on veux enlever le premier caractere si il y a un 0 dans le debut du titre */
?>

<article class="article-principale blockflex__article">
    <h2><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h2>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>