<?php
session_start();
include('Conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
h5 {text-align: center;}
.container2{
         text-align: center;
         }
         #btn{
         font-size: 18px;
         }
</style>
  <title>Empresas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Datos de la Empresa</h2>

  <form>
    <input type="text" name="nambecomer" class="form-control form-control-lg" placeholder="Nombre Comercial">
    <input type="text" name="nit" class="form-control form-control-lg" placeholder="NIT">
    <input type="text" name="pbx" class="form-control form-control-lg" placeholder="PBX">
    <input type="text" name="dire" class="form-control form-control-lg" placeholder="Direccion">
  </form>
      
  <div>
    <div>
        <div class="container2">
        
        <input class='BotonesTeam' type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar este producto');">
    
    </div>
    </div>

    <div>
    
        <h5><a href="index.php">INICIO</a></h5>
    </div>
  </div>
</div>

<?php
if(isset($_POST['btnregistrar']))
{   
	$pnamecomer 	= $_POST['nambecome'];
    $pnit 	= $_POST['nit'];
	$ppbx 	= $_POST['pbx'];
	$pdire 	= $_POST['dire'];
   
	mysqli_query($conn, "INSERT INTO empresa
    (nombrecomercial,nit,pbx,direccion) VALUES('$pnamecomer','$pnit','$ppbx','$pdire')");
	
	echo "<script> alert('Producto registrado con exito: $pnamecomer');";
}
?>

</body>
</html>