<?php
    include 'Database.php';
    $id_hc = $_POST['idhc'];
    $docu_pa = $_POST['docpa'];
    $nombre_enfer = $_POST['nom_enfer'];
    $id_ser = $_POST['Id_ser'];
    $descripcion = $_POST['des_ser'];
    $diagno = $_POST['diag'];
    $examen = $_POST['exa_fis'];

    $sql = "INSERT INTO historia_clinica (id_hc, descripcion_servicio, diagnostico, examen_fisico_inicial, id_servicio, doc_paciente, id_usuario) VALUES  
    VALUES ($id_hc,$docu_pa,$nombre_enfer,'$id_ser','$descripcion','$diagno',$examen)";

    //$ver_documento = mysqli_query($conn, "SELECT * FROM paciente WHERE doc_paciente = '$doc_paciente'");
/*
if(mysqli_num_rows($ver_documento) > 0){
    echo'
    <script>
    alert("Documento ya registrado, verifique nuevamente")
    window.location = "../../Proyecto/pages/inicio_Solmedi.html"
    </script>
    ';
    exit();
  }*/

  $ejecu = mysqli_query($conn, $sql);

  if($ejecu){
    echo '
    <script>
      alert("Datos agregados correctamente")
      window.location = "../../Proyecto/pages/inicio_Solmedi.php"
    </script>
    ';

}else{
  echo '
  <script>
    alert("Eror - No fue posible cargar los datos - intente nuevamente")
    window.location = "../../Proyecto/pages/registro_datos_Solmedi.php"
  </script>
  
  ';
}
mysqli_close($conn);

?>