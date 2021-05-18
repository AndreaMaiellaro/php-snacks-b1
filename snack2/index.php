<?php 
    $name = $_GET['nome'];

    $mail = $_GET['mail'];

    $age = $_GET['eta'];   
?>

<?php echo $name ?> - <?php echo $mail ?> - <?php echo $age ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if (strlen($name) > 3) && () && { ?>
        Accesso consentito;
        else
    <?php } ?> 
    
</body>
</html>