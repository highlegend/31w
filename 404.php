<?php
/**
 * Le modèle pour afficher les pages 404 (non trouvées)
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site__main " role="main">

        <section class="error-404 not-found">
            <header class="page-header">
                <h4 class="page-title">Erreur 404</h4>
                <p>Page introuvable. Vous pouvez tentez une recherche</p>
               <?php 
                    function wpdocs_my_search_form( $form ) {
                        $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
                        <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
                        <input type="text" value="' . get_search_query() . '" name="s" id="s" />
                        <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
                        </div>
                        </form>';

                        return $form;
                    }
                    add_filter( 'get_search_form', 'wpdocs_my_search_form' );
                    ?>
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