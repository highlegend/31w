<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header(); ?>
<main>
    <code>front-page.php</code>
    <h3>Mes articles</h3>
    <section class="blocflex">
    <?php 
    if (have_posts()):
        while (have_posts()) : the_post(); ?>
            <?php get_template_part("template-parts/categorie", "note-wp"); ?>
        <?php endwhile; ?> 
     <?php endif;?>    
</main> 
    </section>
<?php get_footer(); ?>

