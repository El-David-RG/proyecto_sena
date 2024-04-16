<!DOCTYPE html>
<html lang="en"  data-bs-theme ="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
     <link rel="stylesheet" href="../applicacion/css/table.css">
     <link rel="stylesheet" href="../applicacion/css/tabla_actual.css">
</head>
<body>
    <a class="regresar_" href="../applicacion/estanques.php">Regresar</a>
    <h1 class="titulo">Informacion Del Estanque </h1>
    <br><br>
    <hr>
    <p class="real">Tiempo Real</p>
    <div class="tabla_container_">
        <table class="tabla_actual">
        <tr>
                <th>Nivel del oxigeno actual</th>
                <th>Tipo de estanque</th>
                <th>Tipo de especie</th>
                <th>Cantidad de peces</th>
                <th>Fecha</th>
               
            </tr>
             <tr>
                <td>11.06 - Mg/L</td>
                <td>Geomembrana</td>
                <td>Tilapia</td>
                <td>250</td>
                <td>2/4/2024</td>
                
            </tr>
            
    </table>
    </div>
    <hr>
    <!--------------------------------------------------------------------------------------->
    <div class="container mt-5">
    <table id="mytable" class="table table-striped" style="width:100%">
    
        <thead>
            <tr>
                <th>Nivel del oxigeno</th>
                <th>Tipo de estanque</th>
                <th>Tipo de especie</th>
                <th>Cantidad de peces</th>
                <th>Fecha</th>
                
               
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>11.06 - Mg/L</td>
                <td>Geomembrana</td>
                <td>Tilapia</td>
                <td>250</td>
                <td>2/4/2024</td>
                
            </tr>
            <tr>
                <td>12.00 - Mg/L</td>
                <td>Tierra</td>
                <td>Tilapia</td>
                <td>130</td>
                <td>5/4/2024</td>
                
            </tr>
            <tr>
                <td>6.01 - Mg/L</td>
                <td>Tierra</td>
                <td>Tilapia</td>
                <td>120</td>
                <td>8/4/2024</td>
               
            </tr>
             <tr>
                <td>5.01 - Mg/L</td>
                <td>Geomembrana</td>
                <td>Tilapia</td>
                <td>222</td>
                <td>7/4/2024</td>
                
            </tr>
            <tr>
                <td>6.76 - Mg/L</td>
                <td>Australiano</td>
                <td>Tilapia</td>
                <td>100</td>
                <td>10/4/2024</td>
                
            </tr>
            <tr>
                <td>6.08 - Mg/L</td>
                <td>Geomembrana</td>
                <td>Tilapia</td>
                <td>120</td>
                <td>9/4/2024</td>
               
            </tr>
             <tr>
                <td>9.08 - Mg/L</td>
                <td>Geomembrana</td>
                <td>Tilapia</td>
                <td>300</td>
                <td>12/4/2024</td>
                
            </tr>
            <tr>
                <td>7.60 - Mg/L</td>
                <td>Cemento</td>
                <td>Tilapia</td>
                <td>130</td>
                <td>11/4/2024</td>
                
            </tr>
            <tr>
                <td>10.58 - Mg/L</td>
                <td>Cemento</td>
                <td>Tilapia</td>
                <td>245</td>
                <td>1/4/2024</td>
               
            </tr>
             <tr>
                <td>11.28 - Mg/L</td>
                <td>Geomembrana</td>
                <td>Tilapia</td>
                <td>221</td>
                <td>4/4/2024</td>
                
            </tr>
            <tr>
                <td>13.05 - Mg/L</td>
                <td>Geomembrana</td>
                <td>Tilapia</td>
                <td>267</td>
                <td>6/4/2024</td>
                
            </tr>
            <tr>
                <td>11.09 - Mg/L</td>
                <td>Geomembrana</td>
                <td>Tilapia</td>
                <td>198</td>
                <td>3/4/2024</td>
               
            </tr>
           
        </tbody>
    
    </table>
    </div>
    
    <canvas id="myChart" style="position: relative; height: 40vh; width: 80vw;"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ctx = document.getElementById('myChart')
        var myChart = new Chart(ctx, {
            type:'bar',
            data:{
                 labels: [  "00:00", "01:00 - am", "02:00 - am", "03:00 - am", "04:00 - am",
                            "05:00 - am", "06:00 - am", "07:00 - am", "08:00 - am", "09:00 - am",
                             "10:00 - am", "11:00 - am", "12:00 - pm", "01:00 - pm", "02:00 - pm", 
                             "03:00 - pm", "04:00 - pm", "05:00 - pm", "06:00 - pm", "07:00 - pm",
                             "08:00 - pm", "09:00 - pm", "10:00 - pm", "11:00 - pm", "00:00 ",],
                datasets: [{
                    label: 'Niveles del oxigeno disuelto',
                    backgroundColor: ['#6bf1ab','#63d69f', '#438c6c', '#509c7f', '#1f794e', '#34444c', '#90CAF9', '#64B5F6', '#42A5F5', '#2196F3', '#0D47A1'],
                    data:[10.58 , 11.06, 11.09, 11.28, 12.00, 13.05, 5.01, 6.01, 6.08, 6.76, 7.60, 9.08, 4, 21, 12, 23,
                         35, 4, 21, 12 ,23, 35, 4, 21, 12, 23, 35, 4, 21, 12],
                    borderColor: ['black'],
                    borderWidth:1
                }]
            },
            options:{
                scales:{
                    y:{
                        beginAtZero:true
                    }
                }
            }
        })
</script>
 









    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
       <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
       <script src="../applicacion/js/table.js"></script>
</body>
</html>