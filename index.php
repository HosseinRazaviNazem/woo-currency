<?php
$colors = array(1 => 'red' , 2 => '#00ff00ff' , 3 =>'#0000ff');
$selected = 2;
$stylefiles = ['style1.css','style2.css','style3.css'];
$currentstyle =1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $stylefiles[$currentstyle]?>">
    <title>Document</title>

    
</head>
<body style=" background-color:<?php echo $colors[$selected] ?>">


 
    
</body>
</html>