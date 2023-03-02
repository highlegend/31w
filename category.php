<?php
/**
    Modèle category.php qui permet d'afficher une archive par categorie d'article
*/
get_header(); ?>
<main class="site__main">
   <section class="blocflex">
      <?php
      $category = get_queried_object();
      $args = array(          /* Liste d'articles selon la category */
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
               <?php get_template_part("template-parts/categorie", $category->slug); ?> <!--aller chercher le get template part dans le fichier categorie-cours.php -->
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>
<?php get_footer(); ?>

