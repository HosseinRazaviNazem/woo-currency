
<?php

include 'db.php';
$stmt = $connection->prepare('select * from currency ') ;
 $stmt->execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>List</title>

    <table class="table">
  <thead>
    <tr>
      <th><abbr title="Position">Id</abbr></th>
      <th>Dollar</th>
      <th><abbr title="Played">Euro</abbr></th>
      <th><abbr title="Won">Create Date</abbr></th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th><abbr title="Position">ID</abbr></th>
      <th>Dollar</th>
      <th><abbr title="Played">Euro</abbr></th>
      <th><abbr title="Won">Create_Date</abbr></th>
      <th><abbr title="Won">Delete</abbr></th>

    </tr>
  </tfoot>
  <tbody>
      <?php
      
       while( $record = $stmt ->fetch(PDO::FETCH_ASSOC)) :
      ?>
    <tr>
      <td> <?php  echo $record['id'] ?> </td>
      <td> <?php echo $record['dollar'] ?> </td>
      <td> <?php echo $record['Euro'] ?> </td>
      <td> <?php  echo $record['Create_date'] ?> </td>
      <td><button class="button is-danger"> <a href="delete.php?id=<?php echo $record['id']?>" > Delete</button></a></td>
      <td><button class="button is-info"> <a href="Edit.php?id=<?php echo $record['id']?>" > Edit</button></a></td>
      
    </tr>
    <?php endwhile ?>
  </tbody>
</table>


</head>
<body>
    
</body>
</html>