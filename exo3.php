<?php
$sequence = ['odd', 'even', 'even'];

function odd_even($number)
{
    return $number % 2 == 0 ? 'even' : 'odd';
}

for ($i=0; $i < count($sequence); $i++) { 
    while($sequence[$i] == 'odd' || $sequence[$i] == 'even')
    {
        $rand = rand();
        $test = odd_even($rand);

        if (($test === 'even' && $sequence[$i] == 'even') || ($test === 'odd' && $sequence[$i] == 'odd'))
        {
            $sequence[$i] = $rand;
        }
    }
}

print_r($sequence);    