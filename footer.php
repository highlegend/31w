<!-- Ici on peut appeler nav, custom-logo -->

<?php
/**
* Template footer.php
*/
?>
<footer class="site__footer">
<section class="footer__widget">   
    <div><?php dynamic_sidebar( 'pied-page-1' ); ?></div>
    <div><?php dynamic_sidebar( 'pied-page-2' ); ?></div>
    <div><?php dynamic_sidebar( 'pied-page-3' ); ?></div>
</section> 
<section class="footer__lien">
    <div><?php wp_nav_menu(array('menu'=>'lien-externe-1',
                                         'container_class'=>'footer_lien_nav'
                                                          )); ?></div>
    <div><?php wp_nav_menu(array('menu'=>'lien-externe-2',
                                         'container_class'=>'footer_lien_nav'
                                                          )); ?></div>
    <div><?php wp_nav_menu(array('menu'=>'lien-externe-3',
                                         'container_class'=>'footer_lien_nav'
                                                          )); ?></div>
</section>

</footer>
<?php wp_footer(); ?>
</body>
</html>

<!-- MON ANCIEN FOOTER -->
<!-- <footer class="site__footer">

  <div class="footer-columns">
    <div class="column">
      <h4>A propos</h4>
      <ul>
        <li><a href="#">Description</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Mission</a></li>
      </ul>
    </div>
    <div class="column">
      <h4>Membre</h4>
      <ul>
        <li><a href="#">Inscription</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Rejoindre l'equipe</a></li>
      </ul>
    </div>
    <div class="column">
      <h4>Reseaux Sociaux</h4>
      <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Instragram</a></li>
        <li><a href="#">Twitter</a></li>
      </ul>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

 -->