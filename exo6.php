<?php
$indexes = range(11, 36);

for ($i=0; $i < count($indexes); $i++)
{ 
    echo $i . ': ' . chr(65 + $i);
    echo '<br>';
}

echo '<br>';

foreach ($indexes as $key => $value)
{
    echo $key . ': ' . chr(54 + $value);
    echo '<br>';
}