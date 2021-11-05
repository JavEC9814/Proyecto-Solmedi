<?php

if(isset($_POST['enviar'])) {
    if(!empty($_POST['correo'])){
        $correo = $_POST['correo'];
        $titulo = "Recuperar contraseña";
        $header = "From: noreply@example.com" . "\r\n"; 
        $header.= "Reply-To: noreply@example.com". "\r\n"; 
        $header.= "X-Mailer: PHP/". phpversion(); 
        $mail=mail($correo,$titulo,$header);
        print_r($correo); 
        if($mail){
            print_r($correo); 
            echo'
            <script> 
            alert("Correo enviado con exito"); windows.location="../Proyecto/index.html"
            </script>
            ';
        }
    }
}










/*include 'Database.php';

$correo = $_POST['correo'];

$consulta2 = mysqli_query($conn, "SELECT * FROM usuario where correo_usuario = '$correo'");
$resultado2 = mysqli_num_rows($consulta2);

if ($resultado2){
    $datos = mysqli_fetch_array($consulta2);
    $pass = $datos['contraseña'];
    $name = $datos['nombre_usuario'];

    $enviarcorreo = $correo;
    $titulo = "Recuperar contraseña";
    $mensaje1 = "Buen dia Señor(a) ".$name." Tu contraseña es: ".$pass;
    $mensaje2 = "Recuerda no compartir esta informacion con ninguna persona"."\n".
                "Buen dia, ATT: Solmedi";
    $header = "from: noreply@mail.com". "\r\n"; 
    $header.= "reply-to: noreply@mail.com". "\r\n"; 
    $header.= "X-Mailer: PHP/". phpversion(); 
    $mail=@mail($enviarcorreo,$titulo,$mensaje1,$mensaje2,$header);


    if($mail){
        echo'
        <script> 
            alert("Correo enviado con exito"); windows.location="../Proyecto/index.html"
            </script>
            ';
    }else{
        echo'<script> alert("Error, no fue posible enviar el correo. Intente nuevamente"); windows.location="../Proyecto/pages/recuperar_Solmedi.html"</script>';  
        print_r($pass); 
        print_r($name); 
        print_r($enviarcorreo); 
        print_r($mail); 
        
    }
}else{
    echo'<script> alert("El correo no se encuentra en la base de datos, verifique por favor"); windows.location="../../Proyecto/pages/recuperar_Solmedi.html"</script>';
}*/
?>