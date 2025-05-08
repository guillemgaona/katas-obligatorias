<?php

define('HIDDEN_CHAR', '_');

function wheelOfFortune(): string {
    $solution= readline("Tell me the sentene to guess: ");
    $hint = readline("Tell me the hint: ");
    $hiddenSolution = hideTheSolution($solution);

    return "The sentence to guess is: " . $hiddenSolution . PHP_EOL . "the hint is: " . $hint;
    
}

function hideTheSolution($solution): string {
    $solution = str_split($solution, 1);
    $hiddenSolution = "";
    $lineLength = 0;
    foreach ($solution as $letter) {
        if ($letter !== " ") {
            $hiddenSolution .= HIDDEN_CHAR;
            $lineLength++;
        } else {
            $hiddenSolution .= " ";
            if ($lineLength >= 15) {
                $hiddenSolution .= PHP_EOL;
                $lineLength = 0; 
            } else {
                $lineLength++;
            }
        }
    }
    return $hiddenSolution;
    } 

echo wheelOfFortune();