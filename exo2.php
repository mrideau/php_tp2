<?php

function welcome($sexe, $age)
{
    if ($sexe === 'masculin' && ($age >= 21 && $age <= 40) )
        print('Bonjour monsieur de ' . $age . 'ans');
}

welcome('masculin', 18);
echo '<br>';
welcome('masculin', 21);
echo '<br>';
welcome('masculin', 26);
echo '<br>';
welcome('masculin', 45);
echo '<br>';
welcome('femme', 30);