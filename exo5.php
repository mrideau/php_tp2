<?php
$number = 512;

$figures = str_split((string)$number);

$guessed_number = [];
$tries = 0;

while($guessed_number != $figures)
{
    $tries ++;
    $rand = (string)rand(0, 9);

    if ($rand == $figures[sizeof($guessed_number)])
        array_push($guessed_number, $rand);
}

echo 'Nombre ' . $number . ' deviné en ' . $tries . ' essais';

echo '<br>';

$guessed_number = [];
$tries = 0;

for ($i=0; $i < sizeof($figures); $i++) { 
    for ($j=0; $j < 9; $j++) {
        $tries ++;
        if ($figures[$i] == (string)$j)
        {
            array_push($guessed_number, (string)$j);
            break;
        }
    }
}

echo 'Nombre ' . $number . ' deviné en ' . $tries . ' essais';