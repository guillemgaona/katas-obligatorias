<?php
/*Escriu un algoritme que llegeixi un nombre enter i determini si és parell o imparell.

Si és parell, que escrigui tots els parells de manera descendent des de si mateix fins a 0.
Si és imparell, que escrigui tots els imparells de manera descendent des de si mateix fins a l'1.
El nombre que entri al programa ha d'entrar directament a la variable "number".*/

function evenOrOdd($number): void {
    if (filter_var($number, FILTER_VALIDATE_INT) && $number > 0) {
        if($number % 2 == 0) {
            for ($i = $number; $i >=0; $i-=2) {
                echo $i . "<br> ";
            } 
        } else if($number % 2 !== 0) {
            for ($i = $number; $i >=1; $i-=2) {
                echo $i . "<br>";
            
            }
        }
    } else if ($number == 0) {
        echo 0;
    } else {
        echo "escriu un nombre vàlid";
    }
}

evenOrOdd(19);
evenOrOdd("a");
evenOrOdd(0);
evenOrOdd(-3);
evenOrOdd("44");