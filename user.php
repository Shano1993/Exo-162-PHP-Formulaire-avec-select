<?php

$name1 = $_GET['name1'];
$firstname1 = $_GET['firstname1'];

if (isset($name1) && isset($firstname1)) {
    echo "Bonjour Monsieur " . $name1 . " " . $firstname1 . ", " . "vous avez utilisez la méthode GET !" . "<br>";
}
else {
    echo "Les champs ne sont pas remplis avec la méthode GET !" . "<br>";
}

$name2 = $_POST['name2'];
$firstname2 = $_POST['firstname2'];

if (isset($name2) && isset($firstname2)) {
    echo "Bonjour Monsieur " . $name2 . " " . $firstname2 . ", " . "vous avez utilisez la méthode POST !" . "<br>";
}
else {
    echo "Les champs ne sont pas remplis avec la méthode POST !" . "<br>";
}
