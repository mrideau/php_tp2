<?php

function pgcd($a, $b)
{
    if (is_float($a) || is_float($b))
        throw new Exception("Les valeurs doivent être des entiers");

    do {
        $remains = $a % $b;
        $a = $b;
        $b = $remains;
    } while ($remains != 0);

    return $a;
}

print('PGCD(96, 36) = ' . pgcd(96, 36));
echo '<br>';
print('PGCD(758, 306) = ' . pgcd(758, 306));
// print(pgcd(96.2, 36));