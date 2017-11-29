
<?php
require_once ('./header.php');
$doc = $_POST['documento'];
$nom = $_POST['nombres'];
$ape = $_POST['apellidos'];
$dir = $_POST['direccion'];
$tel = $_POST['telefono'];
$cor = $_POST['correo'];
$fec = $_POST['fechanacimiento'];


#<!-- '$id_cotizacion', -->
$sql =" INSERT INTO paciente (id_documetno,nombre,apellidos,direccion,telefono,fecha_nacimiento,email)
        VALUES ('$doc','$nom','$ape','$dir','$tel','$fec','$cor');";
$stmt= $llamarMetodo->prepare($sql);
$stmt-> execute();
if ($stmt) {
  echo"<script type=\"text/javascript\">alert('Datos insertados'); window.location='./Registrarse.php';</script>";
}else {
  echo"<script type=\"text/javascript\">alert('Datos no insertados'); window.location='./Registrarse.php';</script>";

}
while ($row= $stmt->fetch()) {
  echo $row[0]."<br />";
  echo $row[1]."<br />";
  echo $row[2]."<br />";
  echo $row[3]."<br />";
  echo $row[4]."<br />";
  echo $row[5]."<br />";
  echo $row[6]."<br />";
  echo $row[7]."<br />";
  echo $row[9]."<br />";
  echo $row[10]."<br />";
}
    # code...


 ?>
