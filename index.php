<?php 
        require('./models/model.php');
        require('./views/view.php');

        if(isset($_GET['id'])) {
			$etudiantById = getEtudiant($_GET['id']);
			render_all($etudiantById);
        } else {
			$etudiants= getEtudiantsWithFormation();
			render_all($etudiants);
        }
        

        


        
        

