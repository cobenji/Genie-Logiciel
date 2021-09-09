<?php declare(strict_types=1);

// Exercice 1
// ==========

// L'objectif est de compléter une fonction permettant de déterminer si l'année
// passée en paramètre est bissextile ou non. Une année bissextile est divisible
// par 4 mais pas par 100, sauf si elle est également divisible par 400.

final class Exo{

    public static function isLeapYear(int $year)
    {
        if ((($year % 4) == 0 && ($year % 100) != 0) || (($year % 100) == 0 && ($year % 400) == 0))
        {
            return true;
        }else{
            return false;
        }

    }
    
}