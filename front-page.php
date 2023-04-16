<?php
/**
*    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    <!-- <code></code> -->
    <section class="viewport">
        <h1>Auteur: Said Mehdi</h1>
        <h3>Cours: 31w - Introduction a un gestionnaire de contenu</h3>
        <div class="events-section">
<?php 
    $menu_items = wp_get_nav_menu_items('Évenement');

    foreach ($menu_items as $menu_item) {
        $url = $menu_item->url;
        $title = $menu_item->title;
        $post_id = $menu_item->object_id;

        echo '<div class="single-event">';
        echo '<a href="' . $url . '">';

        if (has_post_thumbnail($post_id)) {
            $thumbnail = get_the_post_thumbnail($post_id, 'event_thumbnail');
            echo $thumbnail;
        }

        echo '<h3>' . $title . '</h3>';
        echo '</a>';
        echo '</div>';
    }
?>

</div>
    </section>
    <section class="blocflex">
        <?php 
        if (have_posts()):
            while (have_posts()) : the_post(); ?>
                <?php 
                $ma_categorie = "note-wp";
                if (in_category('galerie')){$ma_categorie = "galerie";}
                get_template_part("template-parts/categorie", $ma_categorie);
                
             endwhile; 
        endif; ?>    
    </section>




    
</main> 
<?php get_footer(); ?>