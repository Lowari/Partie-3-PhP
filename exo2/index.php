<!-- ## Exercice 2
Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas supérieure à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable -->
<?php

$firstNumber = 0;
$secondNumber = 4;
$arr;

while ($firstNumber < 21) {
    $result = $firstNumber * $secondNumber;
    $arr[$firstNumber] = "$firstNumber x $secondNumber = $result";
    $firstNumber++;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Exo2</title>
</head>

<body>

    <table class="table table-striped text-center text-info">
        <thead>
            <tr class="text-warning">
                <th scope="col">Index</th>
                <th scope="col">Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $key => $value) { ?>
                <tr>
                    <th><?= $key; ?></th>
                    <td><?= $value; ?></td>
                </tr><?php } ?>
            <tr>
        </tbody>
    </table>

</body>

</html>