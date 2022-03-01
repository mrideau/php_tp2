<?php
$number = 90;

$int = null;

while($int == null)
{
    $rand = (int)rand(1, 9);
    if ($number % $rand == 0)
        $int = $rand;
}

echo $int . ' multiple de ' . $number;

echo '<br>';
echo '<br>';

do {
    $int = (int)rand(1, 9);
} while ($number % $int != 0);

echo $int . ' multiple de ' . $number;