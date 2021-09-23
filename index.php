<?php require_once './snack1.php' ?>
<?php require_once './snack2.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Snack 1</h1>
    <div><?php foreach (random_numbers_gen(1, 100, 10) as $number) echo "$number " ?></div>
    <hr>

    <h1>Snack 2</h1>
    <div><?php foreach ($students as $student) : ?>
            <ul>
                <li><?= $student["firstname"] ?></li>
                <li><?= $student["lastname"] ?></li>
                <li><?= round(get_media($student["votes"]), 1) ?></li>
            </ul>
        <?php endforeach; ?>
    </div>
    <hr>

    <h1>Snack 3</h1>
    <div><?php require_once './snack3.php' ?></div>
</body>

</html>