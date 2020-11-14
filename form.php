<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

 <!-- Default form register -->
 <form class="text-center border border-light p-5 " action="proccess.php" method="post">

        <p class="h4 mb-4">Sign up</p>

        <div class="form-row mb-4">
          <div class="col-3">
            <!-- First name -->
            <input  name = "dollar"type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Dollar"> </br>
          </div>
          <div class="col-3">
            <!-- Last name -->
            <input  name="euro" type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Euro">
            <input name = "id" type="hidden" value=" <?php echo  $_GET[$id];  ?> ">  
          </div>
        </div>

        <!-- Sign up button -->
        <button class="btn btn-outline-primary col-4" type="submit">submit</button>

</form>
      <!-- Default form register -->
</body>
</html>
