<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
            crossorigin="anonymous">

        <link rel="stylesheet" href="../assets/css/estilos_registro.css"> 

        <title>Solmedi</title>
    </head>

    <body>
    <?php
          include_once('../../Proyecto/php/header.php');
        ?>

        <?php
          include_once('../../Proyecto/php/desplegable.php');
        ?>


          </div>

        <div id="div1">
            <form class="row g-3">
                <div class="col-md-2">
                  <label for="inputAddress" class="form-label">Id servicio</label>
                  <input type="number" class="form-control" id="inputAddress" placeholder="">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Tipo de servicio</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Fecha de nacimiento</label>
                  <input type="date" class="form-control" id="inputCity">
                </div>
                <div class="col-md-2">
                  <label for="inputCity" class="form-label">Fecha de nacimiento</label>
                  <input type="time" class="form-control" id="inputCity">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Acepto politica de tratamiento de datos
                    </label>
                  </div>
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-outline-dark">Siguiente</button>
                </div>
              </form>
        </div>
        
        
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
    </body>
</html>