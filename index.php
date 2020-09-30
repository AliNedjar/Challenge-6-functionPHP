<?php

function writeSecretSentence(string $param1, string $param2): string
{
    return $param1 . 's\'incline face à ' . $param2;


}

echo writeSecretSentence('La grenouille ', 'l\'air ');
echo writeSecretSentence('L\'anguille ', 'la flamme ');
echo writeSecretSentence('Le chien ', 'l\'os ');
echo writeSecretSentence('L\'hibou ', 'l\'orage ');
echo writeSecretSentence('Le serpent ', 'la pluie ');
echo writeSecretSentence('Le cheval ', 'l\'Homme ');

?>
