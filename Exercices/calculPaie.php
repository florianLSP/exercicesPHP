<?php
    $heure = 150;
    $tauxHoraire = 15;
    $salaireHebdo = null;

    if($heure <= 0){
        $salaireHebdo = 0;
    }
    elseif($heure <= 40){
        $salaireHebdo = $heure * $tauxHoraire;
    }
    else{
        $salaireHebdo = ($tauxHoraire * 40) + (($heure - 40) * ($tauxHoraire * 1.5));
    }

    echo "Tu as fait {$salaireHebdo}€ cette semaine."

?>