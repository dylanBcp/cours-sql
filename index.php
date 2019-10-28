<?php 
        require('./models/model.php');
        require('./views/view.php');

        if(isset($_GET['id'])) {
			echo "<h2>Tu as juste un ID</h2>";
			$etudiantById = getEtudiant($_GET['id']);
			render_all($etudiantById);
        } else {
			echo "<h2>Tu as tout</h2> ";
			$etudiants = getEtudiantsWithFormation();
			render_all($etudiants);
        }
        

        


        
        

