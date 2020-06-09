<?php

function reversestrings($origenalstring){
    $reversestring = "";
    for ($i = strlen($origenalstring) - 1; $i >= 0;$i--){
        $letter = substr($origenalstring, $i, 1);
        $reversestring .= $letter;
    }
    echo "origenal: ". $origenalstring ."<br>";
    echo "reverse: ". $reversestring ."<br>";
    return $reversestring;
}

reversestrings("Jack");
reversestrings("Josh");
reversestrings("Jones");