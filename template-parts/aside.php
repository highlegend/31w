<aside class="site__aside">  <!-- le Aside va safficher sur toutes les pages, parce qu'il est dans le header.php -->
    <h3>Menu Secondaire</h3>
    
    <?php
    $category = get_queried_object();
    if (isset($category))
    {
        $lemenu = $category->slug;
    }else{
        $lemenu = "note-wp";
    }
    wp_nav_menu(array(
        "menu" => $lemenu,
        "container" => "nav"
    )); ?>
</aside>