<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    :root{
      --salmon: #f08e7aff;
            --ghost-white: #f6f6fdff;
            --alice-blue: #d7e6edff;
            --tiffany-blue: #7fdcc8ff;
            --yinmn-blue: #324d71ff;
    }

    body{
      font-family: 'Times New Roman', Times, serif;
      background-color: var(--yinmn-blue) ;
      color: white;
      display: flex;
      justify-content: center;
      padding: 20px;

    }

    h1{
        top: 50px;
        position: absolute;
    }

    .tabla-ciber{
      top: 80px;
      width: 90%;
      margin: 40px auto;
      border-collapse: collapse;
      font-family: 'Times New Roman', Times, serif;
      box-shadow: 0px 4px 15px black;
      background-color: var(--salmon);
      border-radius: 12px;
      overflow: hidden;
      position: absolute;
    }

    .tabla-ciber thead{
      background-color: var(--salmon);
      color: var(--ghost-white);
    }

    .tabla-ciber th, 
    .tabla-ciber td{
       padding: 14px 18px;
       text-align: center;
       border: 1px solid var(--yinmn-blue);
       font-size: 16px;
    }

    .tabla-ciber th{
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .tabla-ciber tr:nth-child(even){
      background-color: var(--yinmn-blue);
      color: var(--tiffany-blue);

    }

    .tabla-ciber tr:hover{
      background-color: var(--tiffany-blue);
      color: var(--ghost-white);
      cursor: pointer;
      transition: 0.3s ease-in-out;
    }

    .tabla-ciber img{
      width: 70px;
      height: auto;
      border-radius: 8px;
      box-shadow: 0px 2px 6px black;
    }
  </style>

  <h1>Pokemon</h1>

  <?php
  //conexion de la bd
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "pokimon";
  $conexion = new mysqli($servername, $username, $password, $database);

  if($conexion->connect_error){
    die("laconexion fallo" .$conexion->connect_error);
  }

  $sql = "SELECT * FROM pokimones";
  $result = $conexion->query($sql);

  if($result->num_rows >0){
    echo "<table>";
    echo "<tr><th>ID</th><th>nombre</th><th>hp</th><th>ataque</th><th>defensa</th><th>ataque especial</th><th>defensa especial</th><th>especial</th><th>velocidad</th><th>historia</th><th>creacion</th></tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . 
        "</td><td>". $row["hp"] . "</td><td>". $row["ataque"] . "</td><td>". $row["defensa"] .
        "</td><td>". $row["ataque_especial"] . "</td><td>". $row["defensa_especial"] . "</td><td>". $row["especial"] .
        "</td><td>". $row["velocidad"] . "</td><td>". $row["historia"] . "</td><td>". $row["creacion"] . "</td></tr>";
    }
  }
  ?>
    
</body>
</html>