<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        
            <script>
                alert("Por Favor Debes Iniciar Sesion");
                window.location = "index.php"

            </script>        
        
        ';
        session_destroy();
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="http://localhost/applicacion/css/estanques.css">
    <style>
        
    </style>
    <title>Estanques</title>
</head>
<body>

         <a class="cerrar" href="php/cerrar_sesion.php">cerrar sesion</a> 
   

<h1 class="titulo">Estanques</h1>


    <div class="container__cards">
        <div class="card">
            <div class="cover">
                <img src="../applicacion/img/pez_1.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Estanque - 1️⃣</h2>
                <p>Cachamas</p>
                <br>
                <a href="../applicacion/table.php">Ver estadisticas</a>
            </div>
        </div>

         <div class="card">
            <div class="cover">
                <img src="../applicacion/img/pez_2.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Estanque - 2️⃣</h2>
                <p>Tilapias</p>
                <br>
                <a href="../applicacion/table.php">Ver estadisticas</a>
            </div>
        </div>

         <div class="card">
            <div class="cover">
                <img src="../applicacion/img/pez_3.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Estanque - 3️⃣</h2>
                <p>Trucha</p>
                <br>
                <a href="../applicacion/table.php">Ver estadisticas</a>
            </div>
        </div>

         
       
         

    </div>-

    
    <div class="container__cards">
        <div class="card">
            <div class="cover">
                <img src="../applicacion/img/pez_4.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Estanque - 4️⃣</h2>
                <p>Betta </p>
                <br>
                <a href="../applicacion/table.php">Ver estadisticas</a>
            </div>
        </div>

         <div class="card">
            <div class="cover">
                <img src="../applicacion/img/pez_5.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Estanque - 5️⃣</h2>
                <p>Guppy</p>
                <br>
                <a href="../applicacion/table.php">Ver estadisticas</a>
            </div>
        </div>

         <div class="card">
            <div class="cover">
                <img src="../applicacion/img/pez_6.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Estanque - 6️⃣</h2>
                <p>Platy</p>
                <br>
                <a href="../applicacion/table.php">Ver estadisticas</a>
            </div>
        </div>

         
       
         

    </div>-

    
    <div class="container__cards">
        <div class="card">
            <div class="cover">
                <img src="../applicacion/img/pez_7.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Estanque - 7️⃣</h2>
                <p>Ramirezi</p>
                <br>
                <a href="../applicacion/table.php">Ver estadisticas</a>
            </div>
        </div>

         <div class="card">
            <div class="cover">
                <img src="../applicacion/img/pez_8.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Estanque - 8️⃣</h2>
                <p>Tetra</p>
                <br>
                <a href="../applicacion/table.php">Ver estadisticas</a>
            </div>
        </div>

         <div class="card">
            <div class="cover">
                <img src="../applicacion/img/pez_9.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Estanque - 9️⃣</h2>
                <p>Mollys</p>
                <br>
                <a href="../applicacion/table.php">Ver estadisticas</a>
            </div>
        </div>

         
       
         

    </div>-

    
    <div class="container__cards">
        <div class="card">
            <div class="cover">
                <img src="../applicacion/img/pez_10.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Estanque - 🔟</h2>
                <p>Killis</p>
                <br>
                <a href="../applicacion/table.php">Ver estadisticas</a>
            </div>
        </div>

         <div class="card">
            <div class="cover">
                <img src="../applicacion/img/pez_11.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Estanque - 1️⃣1️⃣</h2>
                <p>Rasboras</p>
                <br>
                <a href="../applicacion/table.php">Ver estadisticas</a>
            </div>
        </div>

         <div class="card">
            <div class="cover">
                <img src="../applicacion/img/pez_12.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Estanque - 1️⃣2️⃣</h2>
                <p>Paccora</p>
                <br>
                <a href="../applicacion/table.php">Ver estadisticas</a>
            </div>
        </div>

         
       
         

    </div>


   


</body>
</html>



 <!--   -->