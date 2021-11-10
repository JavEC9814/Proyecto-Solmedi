<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
            crossorigin="anonymous">
</head>
<body>


<?php
include_once('../../Proyecto/php/header.php');
?>



<div style="float: right; width: 80%; height: 100%; ">

    <nav   class="navbar navbar-light bg-light">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Consultar</button>
        </form>
    </nav>

        <table class="table">

            <thead>
              <tr>
                  <br>
                <th scope="col">doc_paciente</th>
                <th scope="col">tipo_documento</th>
                <th scope="col">nombre</th>
                <th scope="col">apellido</th>
                <th scope="col">genero</th>
                <th scope="col">fecha_nacimiento</th>
                <th scope="col">telefono</th>
                <th scope="col">direccion</th>
                <th scope="col">EPS</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../../Proyecto/php/Database.php';
              $query="SELECT * from paciente";
              $resultado=mysqli_query($conn,$query);

              while($mostrar=mysqli_fetch_array($resultado)){
              ?>
              <tr>
                <td><?php echo $mostrar['doc_paciente']?></td>
                <td><?php echo $mostrar['tipo_documento']?></td>
                <td><?php echo $mostrar['nombre']?></td>
                <td><?php echo $mostrar['apellido']?></td>
                <td><?php echo $mostrar['genero']?></td>
                <td><?php echo $mostrar['fecha_nacimiento']?></td>
                <td><?php echo $mostrar['telefono']?></td>
                <td><?php echo $mostrar['direccion']?></td>
                <td><?php echo $mostrar['EPS']?></td>
                <td><button type="button" style="border: none; background-color: white;">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-eye" viewBox="0 0 15 15">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg></button>
                <button type="button" style="border: none; background-color: white;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg></button>
                </td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
</div>



<?php
include_once('../../Proyecto/php/desplegable.php');
?>

<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>

</body>
</html>