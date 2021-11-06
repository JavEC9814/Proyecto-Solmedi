<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
include_once('../../Proyecto/pages/header.php');
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
              <tr>
                <td>1007228642</td>
                <td>cedula</td>
                <td>juan camilo</td>
                <td>mendez silva</td>
                <td>masculino</td>
                <td>05/12/2021</td>
                <td>3144573148</td>
                <td>cll 132D #129-73</td>
                <td>compensar</td>
              </tr>

              <tr>
                <td>1007228642</td>
                <td>cedula</td>
                <td>juan camilo</td>
                <td>mendez silva</td>
                <td>masculino</td>
                <td>05/12/2021</td>
                <td>3144573148</td>
                <td>cll 132D #129-73</td>
                <td>compensar</td>
              </tr>
              <tr>
              </tr>
            </tbody>
          </table>
</div>

<?php
include_once('../../Proyecto/pages/desplegable.php');
?>

<?php
include_once('../../Proyecto/pages/footer.php');
?>

<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>

</body>
</html>