<?php

//cena pod
function cenaPod($auta, $cenaHranice){
    $autaPodCenou = array();
    for($i = 0; $i < count($auta); $i++ ){
        if($auta[$i]["cena"] < $cenaHranice){
            $autaPodCenou[] = $auta[$i];
        }
    }
    return $autaPodCenou;
}

//vypis aut s cenou pod
function vypisCenaPod($result){
    $zpet = "<ul>";
    foreach($result as $hodnota){
        $zpet .= "<li>";
        $zpet .= "Značka: " . $hodnota["znacka"] . ", Typ: " . $hodnota["typ"] . ", Cena: " . $hodnota["cena"];
        $zpet .= "</li>";
    }
    $zpet .= "</ul>";
    return $zpet;
}

//procedura prumer auta 
function cenaPrumer($auta){
    $autaCena = 0;
    for($i = 0; $i < count($auta); $i++){
        $autaCena = $autaCena + $auta[$i]["cena"];
    }
    $autaPrumerFinal = $autaCena / count($auta);
    $autaPrumerFinal = round($autaPrumerFinal,2);
    echo "<ul>";
    echo "<li>";
    echo "prumerna cena auta je:  " . $autaPrumerFinal . " Kc";
    echo "</li>";
    echo "</ul>";
}



?>