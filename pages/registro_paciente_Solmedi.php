<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <select class="form-select" name="docu" required>
              <option selected>seleccione el tipo de documento</option>

              <?php 
                  include ("../php/Database.php");
                  $tipo = "SELECT * FROM tipo_doc order by id_doc";
                  $tipo2 = mysqli_query($tipo);

                  while($row = mysql_fetch_array($tipo2)){
                    $id_doc = $row['id_doc'];
                    $doc = $row['documento'];
                  ?>
                  <option value = "<?php echo $doc;?>"><?php echo $doc; ?></option>
                  <?php
                  } 
                ?> 

             <!--<option>Cedula</option>
              <option>Tarjeta de identidad</option>
              <option>Cedula de extrangeria</option> -->
        </select>



        <br><br>
        <div>
            <label required>Documento del paciente</label>
            <input type="number" class="form-control" id="inputAddress" placeholder="Numero de documento" name="numdoc" required>
            </div>
</body>
</html>