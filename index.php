<form action="/index.php" method="post">
    <label for="id-option">
        <select name="option" id="id-option">
            <option value="Monsieur">Monsieur</option>
            <option value="Madame">Madame</option>
        </select>
    </label>
    <label for="id-name">
        <input type="text" name="name" id="id-name" placeholder="Votre Nom">
    </label>
    <label for="id-firstname">
        <input type="text" name="firstname" id="id-firstname" placeholder="Votre Prenom">
    </label>
    <input type="file" name="file" id="id-file">
    <input type="submit" value="Envoyer">
</form>

<?php

$file = $_POST['file'];
$extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
$valide = array('pdf');

if (isset($_POST['option']) && isset($_POST['name']) && isset($_POST['firstname'])) {
    echo "<p>Bonjour " . $_POST['option'] . " " . $_POST['name'] . " " . $_POST['firstname'] . ", merci de nous avoir envoyé un message !</p>";
    echo "Vous avez envoyé le fichier " . $_POST['file'];
}
else {
    echo "Tous les champs ne sont pas complétés !";
}

if (in_array($extension, $valide)) {
    echo "<p>Votre fichier est bien au format pdf</p>";
}
else {
    echo "<p>Votre fichier n'est pas au format pdf !</p>";
}


