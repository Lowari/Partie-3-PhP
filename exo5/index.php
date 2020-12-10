<!-- ## Exercice 5
En allant de 1 à 15 avec un pas de 1, afficher le message **On y arrive presque**. -->
<?php

$pas = 1;
$arr;

while ($pas <= 15) {
    $arr[$pas] =  "On y est presque";
    $pas++;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>exo5</title>
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