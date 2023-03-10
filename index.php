<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header(); ?>
<main>
    <h3><!-- index.php --></h3>
    <?php 
    if (have_posts()):
        while (have_posts()) : the_post();
            // the_title('<h1>','</h1>');
            // the_permalink(); ?>
          
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <!-- the_content();    -->
            <!-- the_excerpt();   /* Permet d'afficher un résumé (le petit extrait qu'on retrouve à droite sur wordpress)  -->
            <?php echo wp_trim_words(get_the_excerpt(),4);  //get_the_excerpt va retourner une chaîne de caractères
        endwhile;
    endif;
    ?>    
</main> 
<?php get_footer(); ?>

