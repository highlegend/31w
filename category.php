<?php
/**
    Modèle category.php qui permet d'afficher une archive par categorie d'article
*/
get_header(); ?>
<main>
    <code>category.php</code>
    <section class="blocflex">

    
    <h3><!-- index.php --></h3>
    <?php 
    if (have_posts()):
        while (have_posts()) : the_post(); ?>
        <article>  
            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
           <p><?php echo wp_trim_words(get_the_excerpt(),4);?> </p>
        </article>
        <?php endwhile;
    endif; ?>
    </section>  
</main> 
<?php get_footer(); ?>

