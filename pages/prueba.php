<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="col-md-6">
            <label class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="naci" required>
            
            <?php

$fecha_nacimiento = $_POST['naci'];
if($fecha_nacimiento){
    echo '';}


            ?>

          </div>

</body>
</html>

