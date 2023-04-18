<?php
/**
 * Le modèle pour afficher les pages 404 (non trouvées)
 */
get_header(); ?>

<div id="primary" class="content-area pge-bg">
    <main id="main" class="site__main " role="main">

        <section class="error-404 not-found">
            <header class="page-header">
                <h4 class="page-title">Erreur 404</h4>
                <p>Page introuvable. Vous pouvez tentez une recherche</p>
                <form class="recherche" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <label>
                    <input class="recherche__input" type="search" class="search-field" placeholder="Recherche..." value="<?php echo get_search_query(); ?>" name="s" />
                </label>
                <button class="recherche__bouton" type="submit" class="search-submit">
                    <span class="recherche__icone">&#x1F50D;</span>
                </button>
                </form>
                <h2>Nos Choix de cours</h2>
                <?php wp_nav_menu(array(
                    'menu' => 'cours',
                    'container' => 'nav'
                )); ?> 

                <h2>Les notes de cours</h2>
                <?php wp_nav_menu(array(
                    'menu' => 'note-wp',
                    'container' => 'nav'
                )); ?> 

            </header><!-- .page-header -->
        </section><!-- .error-404 -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>


<!-- this is my  -->
<!-- <?php
/**
    Modèle index.php représente le modèle par défaut du thème

get_header() */ ?>
<main class="site__main">
    <code>404.php</code>
    <h1>Erreur 404 - la page n'existe pas</h1>
</main> 
<?php // get_footer(); ?> -->