<?php
$users = [
    [
        "first_name" => "Hossein",
        "last_name" => "razavi",
        "age" => 10,
    ],
    [
        "first_name" => "Hossein",
        "last_name" => "razavi2",
        "age" => 320,
    ],
    [
        "first_name" => "Hossein",
        "last_name" => "razavi3",
        "age" => 330,
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <thead>
                <td>name</td>
                <td>family</td>
                <td>age</td>
            </thead>
        </tr>
    <?php $counter = 0;
$class = "";
?>

<?php foreach ($users as $user): ?>

   <?php if ($counter % 2 == 0)
    { $class = "red";}
   ?>

    <tr style="background-color:<?php echo $class ?>">
        <td><?php echo $user['first_name'] ?></td>
        <td><?php echo $user['last_name'] ?></td>
        <td><?php echo $user['age'] ?></td>
    </tr>
    <?php $counter++?>
<?php endforeach?>
</table>
</body>
</html>
