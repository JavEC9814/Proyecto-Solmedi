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


            <div class="dropdown">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="#" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>Usuario</strong>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>

        <div id="div1">
            <form class="row g-3">
                <div class="col-3">
                  <label for="inputAddress" class="form-label">id HC</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="">
                </div>
                <div class="col-md-3">
                  <label for="id" class="form-label">Documento del paciente</label>
                  <input type="text" class="form-control" id="Id">
                </div>
                <div class="col-md-3">
                  <label for="Usuario" class="form-label">id de Usuario </label>
                  <input type="text" class="form-control" id="inputUser">
                </div>
                <div class="col-md-3">
                  <label for="inputAddress2" class="form-label">Id servicio</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción del servicio</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Diagnostico</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div> 
                <div class="col-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Examen fisico inicial</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div> 
   
                <div class="col-md-2">
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
                    <button type="button" class="btn btn-outline-dark">Crear</button>
                    <button type="button" class="btn btn-outline-dark">Actualizar</button>
                    <button type="button" class="btn btn-outline-dark">Consultar</button>
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