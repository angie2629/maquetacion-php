<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../html/css/estilos.css">
    <title>Documento</title>
</head>

<body class="estiloBody">
<!------------------- Encabezado --------------------->
<header class="estiloHeader">

     <nav class="estiloNav">
         <ul class="estiloUl">
              <li class="estiloLi" ><a class="estiloLink" href="layout.php">Home</a></li>
              <li class="estiloLi" ><a class="estiloLink" href="layout.php?opc=1">Link1</a></li>
              <li class="estiloLi" ><a class="estiloLink" href="layout.php?opc=2">Link2</a></li>
        </ul>
     </nav>

     <img class="imgIco" src="../html/img/logoSena.png" alt="">

</header>
<!--------------fin Encabezado --------------------->

<!------------------- Main --------------------->

<main class="estiloMain">
<!-- ******************contenido que cambia****************************-->

<?php 
if (isset($_GET["opc"])){
   $opcion = $_GET["opc"];
if (isset($opcion)){

  if ($opcion==1)
    include "link1.php";
  elseif($opcion==2)
    include "link2.php";
 }
}
else{
  include "home.php";
}
?>
<!--$opcion = $_GET["opc"];
echo "VALOR ENVIADO ES" , $opcion;
include "home.php" -->


<!-- *******************contenido que cambia*********************************-->
</main>

<!------------------- Fin Main --------------------->

<!--------------------- Main ----------------------->
<footer class="estiloFooter">

    <h3 class="estiloH3"> by: Angie Lorena Duitama Ramos</h3>

      <div class="github">
        <img src="imgIco" src="../html/img/github.png" alt="">
        <small class="estiloSmall">usuario github</small>
      </div>

 </footer>
 <!------------------- Fin Footer ------------------->
</body>
</html>
