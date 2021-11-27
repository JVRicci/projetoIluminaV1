<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <script src='js/mapAdm.js' type='text/javascript' rel='script'></script>
    <link rel="stylesheet" href='css/estiloAdm.css' rel='style'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">

    <title>
        Page ADM
    </title>

    <style>
      
    * {
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Baloo 2', cursive;
    }
    .banner-text {
      width: 100%;
      position: absolute;
      z-index: 1;
    }
    .banner-text ul {
      height: 50px;
      float: right;
    }
    .banner-text ul li {
      display: inline-block;
      padding: 40px 15px;
      text-transform: uppercase;
      color: rgb(122, 122, 122);
      font-size: 20px;
    }
    .banner-text ul li:hover {
      cursor: pointer;
    }
    .banner-text h2 {
      text-align: center;
      color: #fff;
      font-size: 50px;
      margin-top: 20%;
    }
    .animation-area {
      background: linear-gradient(to left, #000000, #424242);
      width: 100%;
      height: 100vh;
    }
    .box-area {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }
    .box-area li {
      position: absolute;
      display: block;
      list-style: none;
      width: 25px;
      height: 25px;
      background: rgba(255, 255, 255, 0.2);
      animation: animate 20s linear infinite;
      bottom: -150px;
    }
    .box-area li:nth-child(1) {
      left: 86%;
      width: 80px;
      height: 80px;
      animation-delay: 0s;
    }
    .box-area li:nth-child(2) {
      left: 12%;
      width: 30px;
      height: 30px;
      animation-delay: 1.5s;
      animation-duration: 10s;
    }
    .box-area li:nth-child(3) {
      left: 70%;
      width: 100px;
      height: 100px;
      animation-delay: 5.5s;
    }
    .box-area li:nth-child(4) {
      left: 42%;
      width: 150px;
      height: 150px;
      animation-delay: 0s;
      animation-duration: 15s;
    }
    .box-area li:nth-child(5) {
      left: 65%;
      width: 40px;
      height: 40px;
      animation-delay: 0s;
    }
    .box-area li:nth-child(6) {
      left: 15%;
      width: 110px;
      height: 110px;
      animation-delay: 3.5s;
    }
    @keyframes animate {
      0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
      }
      100% {
        transform: translateY(-800px) rotate(360deg);
        opacity: 0;
      }
    }

    input[type='file']{
        display: none;
    }

    #iframe{
        cursor: pointer;   
    }

    h1{
        color: white;
    }

    .li{
        list-style: none;
        
    }

    table.darkTable {
        font-family: "Arial Black", Gadget, sans-serif;
        border: 2px solid #000000;
        background-color: #4A4A4A;
        width: 100px;
        height: 200px;
        text-align: center;
        border-collapse: collapse;
        
      }
      table.darkTable td, table.darkTable th {
          
        border: 1px solid #4A4A4A;
        padding: 3px 2px;
      }
      table.darkTable tbody td {
        font-size: 13px;
        color: #E6E6E6;
      }
      table.darkTable tr:nth-child(even) {
        background: #888888;
      }
      table.darkTable thead {
        background: #000000;
        border-bottom: 3px solid #000000;
      }
      table.darkTable thead th {
        font-size: 15px;
        font-weight: bold;
        color: #E6E6E6;
        text-align: center;
        border-left: 2px solid #4A4A4A;
      }
      table.darkTable thead th:first-child {
        border-left: none;
      }
      
      table.darkTable tfoot {
        font-size: 12px;
        font-weight: bold;
        color: #E6E6E6;
        background: #000000;
        background: -moz-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
        background: -webkit-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
        background: linear-gradient(to bottom, #404040 0%, #191919 66%, #000000 100%);
        border-top: 1px solid #4A4A4A;
      }
      table.darkTable tfoot td {
        font-size: 12px;
      }



    .tituloPagina{
        position: fixed;
        top: 20px;
        left:36%;

        font-size: 30px;
    }



    #carregaMarc{
        
        position: fixed;
        left: 45%;
        bottom: 50px;
    }

    .gmap_canvas{
        background-color: white;

        position:fixed;
        top:95px;
        left:45%;
        border-style: ridge;
        border-radius: 10px;
        padding: 1%;

        width:500px;
        height: 350px;
        
        overflow:hidden;

    }
      table,th, tr{
        border:solid 1px;
        border-collapse:collapse;
      }

      thead,tbody{

        display: block;
        width:500px; 
        
        overflow-y:auto;   
      }

      tbody{
        height:300px;
        overflow-y:auto;
      }

      
      #latitudeTxt, #longitudeTxt, #descricaoTxt, #statusTxt{
        visibility: hidden;
      }
      

    </style>

    <script>
        function mostraLoc(x){
            
            var  latitudeVal = x.cells[0].innerHTML;
            var longitudeVal= x.cells[1].innerHTML;
            var statusVal = x.cells[2].innerHTML;
            var descricaoVal = x.cells[3].innerHTML;
            var marcRadio = x.cells[4].innerHTML;

            var latTxt = document.getElementById("latitudeTxt");
            var longTxt = document.getElementById("longitudeTxt");
            var statusTxt = document.getElementById("statusTxt");
            var descTxt = document.getElementById("descricaoTxt");

            latTxt.value= latitudeVal;
            longitudeVal.value= longitudeVal;
            statusTxt.value= statusVal;
            descTxt.value = descricaoVal;
            marcRadio.checked= true;

            alert('Latitude: '+latitudeVal+"\nLongitude: "+longitudeVal+"\nStatus: "+statusVal+"\nDescrição: "+descricaoVal);
          
          }
      </script>
</head>
<body >

  <form action="carregaMarc.php" method="post">

  <div class="animation-area">
    <ul class="box-area">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul> 
  <table class="darkTable" id="tabela" name="registros" id='registrosTable' style="
    position: fixed;
    top: 20%;
    left: 5%;">
    <thead>
    <tr >
    <th>Latitude</th>
    <th>Longitude</th>
    <th>Status</th>
    <th>Descrição</th>
    </tr>
    </thead>
    <tbody>
      <?php 

        include ('carregaMarc.php');
        // se i número de resultads for maior que zero, mostra info
        if ($rows > 0){

          do{
      ?>

      
      
      <tr onclick='mostraLoc(this)'>
        <td id="latitudeTd"><?= $linha['latitude'] ?></td>
        <td id="longitudeTd"><?= $linha['longitude'] ?></td>
        <td id="statusTd"><?= $linha['status'] ?></td>
        <td id="descricaoTd"><?= $linha['descricao'] ?></td>
        <td id="marcTd">

          <input name="marcGroup" type="radio" id='marcRadio'  onclick="mostraLoc(this)">
        </td>
      <?php 
      
      }while($linha = mysqli_fetch_assoc($resultado)); 
      
      }
      ?>
      
      </tr>

      </tbody>
      </table>

    <h1 class="tituloPagina">Pontos de Iluminação</h1> 

    <div class="gmap_canvas" id="map">
      
    </div>
    <script src='js/mapAdm.js'>   </script>
    <script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhMnpZ4MbL0aMfSN9Mtou0spemSKRYPYQ&callback=initMap" 
    >
    </script>

    
    <input type="text" name="latitudeTxt" id="latitudeTxt" required></input>
    <input type="text" name="longitudeTxt" id="longitudeTxt" required></input>
    <input type="text" name="statusTxt" id= "statusTxt" required></input>
    <input type="text" name="descricaoTxt" id="descricaoTxt" required></input>

    <button type="submit" id="carregaMarc"  class="btn btn-primary mb-2">Finalizar</button>
      
    </div>   

  </body>
</html>
