<!-- ## Exercice 1
Créer une variable et l'initialiser à 0.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer -->
<?php

$arr;

for ($i = 0; $i <= 10; $i++) {
    $arr[$i] = $i;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Exo1</title>
</head>

<body>
    <table class="table table-striped table-info text-center">
        <thead>
            <tr class="table-warning">
                <th scope="col">Index</th>
                <th scope="col">Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $key => $value) { ?>
                <tr class="table-info">
                    <th><?= $key; ?></th>
                    <td><?= $value; ?></td>
                </tr><?php } ?>
        </tbody>
    </table>

</body>

</html>