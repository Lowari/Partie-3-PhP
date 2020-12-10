<!-- ## Exercice 8
En allant de 200 à 0 avec un pas de 12, afficher le message **Enfin !!!!**. -->
<?php

$pas = 200;
$arr;

while ($pas >= 0) {
    $arr[$pas] = "Enfin !!!!";
    $pas -= 12;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>exo8</title>
</head>

<body>

    <table class="table table-info table-striped">
        <thead>
            <tr class="table-warning text-center">
                <th scope="col">Index</th>
                <th scope="col">Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $key => $value) { ?>
                <tr class="text-center">
                    <th><?= $key; ?></th>
                    <td><?= $value; ?></td>
                </tr> <?php } ?>
        </tbody>
    </table>

</body>

</html>