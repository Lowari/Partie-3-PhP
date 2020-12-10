<!-- ## Exercice 6
En allant de 20 à 0 avec un pas de 1, afficher le message **C'est presque bon**. -->
<?php

$pas = 20;
$arr;

while ($pas >= 0) {
    $arr[$pas] = "C'est presque bon";
    $pas--;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>exo6</title>
</head>

<body>

    <table class="table table-striped text-center text-info">
        <thead>
            <tr>
                <th scope="col">Index</th>
                <th scope="col">Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $key => $value) { ?>
                <tr>
                    <th scope="row"><?= $key; ?></th>
                    <td><?= $value; ?></td>
                </tr><?php } ?>
        </tbody>
    </table>

</body>

</html>