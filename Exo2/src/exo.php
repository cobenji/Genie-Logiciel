<?php declare(strict_types=1);

// Exercice 2
// ==========

// L'objectif est d'écrire une méthode permettant de calculer les facteurs 
// premiers d'un nombre entier positif passé en paramètre. Cette liste devra
// être triée par ordre croissant.

// Un nombre premier est un nombre entier supérieur ou égal à deux qui a
// exactement deux diviseurs : 1 et lui-même.

final class PrimeFactors{

    public static function generate(int $number)
    {

        $array = []; 

        for ($i=2; $i<=$number; $i++) {
            while($number % $i === 0){
                array_push($array,$i);
                $number /= $i;
            }  
        }
        return $array;
    }
    
}