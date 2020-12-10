<!-- ## Exercice 7
En allant de 1 à 100 avec un pas de 15, afficher le message **On tient le bon bout**. -->
<?php

$pas = 1;
$arr;

while ($pas <= 100) {
    $arr[$pas] = "On tient le bon bout";
    $pas += 15;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>exo7</title>
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