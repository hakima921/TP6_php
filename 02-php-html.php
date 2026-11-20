<?php

$nom = "Hakima";
$age = 21;
$ville= "Marrakech";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>PHP et HTML</title>
</head>

<body>

    <h1>Vos informations personnelles:</h1>

    <p>
        Bonjour
        <?php echo $nom; ?>
    </p>

    <p>
        Vous avez
        <?php echo $age; ?>
        ans.
    </p>
    
    <p>
        Voous habitez à
        <?php echo $ville; ?>
    </p>


</body>

</html>