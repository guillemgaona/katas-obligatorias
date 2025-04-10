<?php


function valueWord($word): int {
    $abecedari = "abcdefghijklmnñopqrstuvwxyz";
    $word = mb_strtolower($word, 'UTF-8'); // no me aceptaba HOLA ycon  str_split clasico la ñ me daba 31 de valor.
    $word = quitarAcento($word); // quito los acentos que me daba valor 0.

    $abecedari_split = mb_str_split($abecedari, 1, 'UTF-8');   
    $word_split = mb_str_split($word, 1, 'UTF-8');

    $result = 0;
    for ($i= 0; $i < count($word_split); $i++) {
        for ($j= 0; $j < count($abecedari_split); $j++) {
            if ($word_split[$i] == $abecedari_split[$j]) {
                $result += $j + 1;
            }
        }
    }
    return $result;
 
}

function quitarAcento($word): string {
    $acentos = ['á', 'é', 'í', 'ó', 'ú'];
    $sinAcentos = ['a', 'e', 'i', 'o', 'u'];
    return str_replace($acentos, $sinAcentos, $word);
}

function kataWord100(): void {
    do {
        $word = readline("Tell me a word :): ");
        $value = valueWord($word);
        if ($value !== 100) {
            echo "The value of the word is: $value" . PHP_EOL;
        }
    } while ($value !== 100);
    echo "The value of the word is 100" . PHP_EOL;
}
kataWord100();