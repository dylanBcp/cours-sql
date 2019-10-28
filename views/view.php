<?php
    
    function render_all($req){
        foreach($req as $row) {
            if (isset($row['nom_formation'])) {
                echo '<p>' . $row['prenom'] . " " . $row['nom'] . " " . $row['nom_formation'] . '</p>';
            } else {
                echo '<p>' . $row['prenom'] . " " . $row['nom'] . '</p>';
            }
        }
    }
    