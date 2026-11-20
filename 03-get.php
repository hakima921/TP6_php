<?php

$nom = "";
$ville="";

if (isset($_GET["nom"])) {

    $nom = $_GET["nom"];

}

if (isset($_GET["ville"])){
    $ville = $_GET["ville"];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>GET avec PHP</title>
</head>

<body>

    <h1>Exemple avec GET</h1>

    <?php

    if ($nom != "" && $ville != "") {

        echo "<p>Bonjour " . $nom . "</p>";
        echo "<p>Vous habitez à " . $ville . "</p>";

    } else {

        echo "<p>Aucun nom ou ville reçu.</p>";

    }

    ?>

</body>

</html>