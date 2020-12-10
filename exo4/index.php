<!-- ## Exercice 4
Créer une variable et l'initialiser à 1.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur -->
<?php

$variable = 1;
$arr;

while ($variable <= 10) {
    $arr[$variable] = $variable;
    $variable += $variable / 2;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Exo4</title>
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
                    <th scope="row"><?= $key; ?></th>
                    <td><?= $value; ?></td>
                </tr> <?php } ?>
        </tbody>
    </table>

</body>

</html>