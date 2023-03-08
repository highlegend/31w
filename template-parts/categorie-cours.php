<?php
/* 
*Temokkate-part qui permettra d'afficher 
*un article provenant d'un conteneur de class blocflex
*/
$titre = get_the_title();
$sigle = substr($titre, 0, 7);  /* extraire le sigle du cour */
$titre_long = substr($titre, 7, -5); /* solution pas optimale, le prof vx quon trouve mieux que sa */
$duree = "90h";  /* il vx quon le fasse par nous mm aussi */
?>

<article class="article-principale blockflex__article">
    <h2><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h2>
    <h6><?= $titre_long ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <p><?= $duree ?></p>
</article>