<?php 
        require('./models/model.php');
        require('./views/view.php');
        
        $etudiants= getEtudiantsWithFormation();
        $id = 1;
        render_all($etudiants);
        getEtudiant($id);

        
        

