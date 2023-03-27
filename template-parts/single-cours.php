<?php 

        the_title('<h1>','</h1>');
        the_content();  
        echo "<p> Professeur : <span class='nom-auteur'>".strval(get_field('professeur'))."</span></p>";
        echo "<p> Filiere : <span class='nom-auteur'>".strval(get_field('domaine'))."</span></p>";
 
?>   