<?php
function multiple3or5($x)
{
    return (bool)($x % 3 XOR $x % 5);
}

print(multiple3or5(3) ? 'true' : 'false');
echo '<br>';
print(multiple3or5(5) ? 'true' : 'false');
echo '<br>';
print(multiple3or5(4) ? 'true' : 'false');