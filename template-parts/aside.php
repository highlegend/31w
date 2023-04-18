<?php
if(is_404()==true){
    echo '<aside style="display: none;" class="site__aside">';
}
else{
?>

<aside class="site__aside">  <!-- le Aside va safficher sur toutes les pages, parce qu'il est dans le header.php -->
<?php } ?>
    <h3>Menu Secondaire</h3>
    
    <?php
    $lemenu = "note-wp";
    if (in_category('cours'))
    {$lemenu = "cours";}

    wp_nav_menu(array(
        "menu" => $lemenu,
        "container" => "nav"
    )); ?>
</aside>