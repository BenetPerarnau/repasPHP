<?php
/**
 * Created by PhpStorm.
 * User: Benet
 * Date: 17/10/14
 * Time: 12:15
 */

$resultat=2;

for($i=2; $i<11; $i++ ){

    echo "2^$i =";
    for($j=$i; $j>1; $j--){
        $resultat=2*$resultat;
    }
    echo $resultat."<br>";
    $resultat=2;
}