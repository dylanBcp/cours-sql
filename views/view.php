<?php
    
    function render_all($req){
        foreach($req as $row) {
            echo '<p>' . $row['prenom'] . " " . $row['nom'] . " " . $row['nom_formation'] . '</p>';
        }
    }
    