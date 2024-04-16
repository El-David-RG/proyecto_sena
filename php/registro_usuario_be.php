<?php
include 'conexion_be.php';

// Assuming conexion_be.php contains the $conexion variable for database connection

// Check if all required fields are set
if(isset($_POST['nombre_completo'], $_POST['correo'], $_POST['usuario'], $_POST['contrasena'])) {
    // Sanitize user inputs to prevent SQL injection
    $nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombre_completo']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);


    // Create the SQL query with correct field names
    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
              VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";


    // Verifica que el correo no se repita
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

        if(mysqli_num_rows($verificar_correo) > 0){
            echo '
                
                <script>
            
                    alert("Este Correo Ya Ha Sido Registrado, Intentelo Con Otro Diferente");
                    window.location = "../index.php";
                </script>
            ';
            exit();
        }

        // Verifica que el nombre de usuario no se repita
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

        if(mysqli_num_rows($verificar_usuario) > 0){
            echo '
                
                <script>
            
                    alert("Este usuario Ya Ha Sido Registrado, Intentelo Con Otro Diferente");
                    window.location = "../index.php";
                </script>
            ';
            exit();
        }





    // Execute the query
    $ejecutar = mysqli_query($conexion, $query);

    // Check if the query was successful

    if($ejecutar){
        echo '
            <script>

                alert("Usuario Registrado Exitosamente")
                window.location = "../index.php";

            </script>
        
        ';
    }else{
       echo '
            <script>

                alert("Intentalo De Nuevo, Usuario No Registrado")
                window.location = "../index.php";

            </script>
        
        '; 
    }
}

    mysqli_close($conexion);
?>
