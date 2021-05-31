<?php
$name1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$name2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

function wordCounter($words, $word_length)
{
    $name_arr = explode(' ', $words);
    $counter = 0;
    for ($i = 0; $i < count($name_arr); $i++) {
        if (strlen($name_arr[$i]) <= $word_length) {
            echo $name_arr[$i] . '<br>';
            $counter++;
        } else {
            continue;
        }
    }
    echo 'Count: ' . $counter . '<br>';
}

wordCounter($name1, 5);
wordCounter($name2, 5);