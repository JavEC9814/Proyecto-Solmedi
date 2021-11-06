<?php

include 'Database.php';

$correo = $_POST['correo'];

$consulta2 = mysqli_query($conn, "SELECT * FROM usuario where correo_usuario = '$correo'");
$resultado2 = mysqli_num_rows($consulta2);

if ($resultado2){
    $datos = mysqli_fetch_array($consulta2);
    $pass = $datos['contraseña'];
    $name = $datos['nombre_usuario'];

    $para = $correo;
    $titulo = "Recuperar contraseña";
    $msg = "Buen dia Señor(a) ".$name.".\n
            Tu contraseña es: ".$pass.".\n
            Recuerda no compartir esta informacion con ninguna persona"."\n
            Buen dia, ATT: Solmedi";
    $tucorreo = "From: solmedisas@gmail.com";
    
    
    
    if(mail($para,$titulo,$msg,$tucorreo)){
        echo'
        <script> 
            alert("Correo enviado con exito!!");
            window.location="../../Proyecto/index.html"
        </script>
        ';
    }else{
        echo'
        <script> 
            alert("Error, no fue posible enviar el correo. Intente nuevamente"); 
            window.location="../../Proyecto/pages/recuperar_Solmedi.html"
        </script>
        ';
    }
}else{
    echo'
    <script> 
    alert("El correo no se encuentra en la base de datos, verifique por favor"); 
    window.location="../pages/recuperar_Solmedi.html";
    </script>';
}
mysqli_close($conn);
?>