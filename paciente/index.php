<?php
session_start();
if(isset($_SESSION["usuario"]))
{// echo '<h3>backend '.$_SESSION["usuario"].'</h3>';
		/*echo '<h3>backend '.$_SESSION["usuario"].'</h3>';*/
		}
		 else
		 {
		      header("location:../institucional/ingresar.php");
		 }
     $paciente = $_SESSION ["usuario"];
   include './header.php';
    $sql =" SELECT paciente_fk,fecha,hora, medico_fk, consultorio_fk FROM cita  WHERE paciente_fk='$paciente' ORDER BY fecha DESC";
		$stmt= $llamarMetodo->prepare($sql);
		$stmt-> execute();

?>

<center>
<table width="100%" border="1" class="col-md-8">
		 	<tr>
		 		<th colspan="8">
		 			<center><strong>Citas</strong></center>
			</th>
		 	</tr>
      <br><br>
		 	<tr>
        <th><center><strong>Documento paciente</strong></center></th>
		 		<th><center><strong>Fecha</strong></center></th>
		 		<th><center><strong>Hora</strong></center></th>
		 		<th><center><strong>Medico</strong></center></th>
		 	  <th><center><strong>Consultorio</strong></center></th>
		 		<th><center><strong>Sede</strong></center></th>
		 	</tr>
		<?php
      $sql =" SELECT paciente_fk,fecha,hora, medico_fk, consultorio_fk FROM cita  WHERE paciente_fk='$paciente' ORDER BY fecha DESC";
      $stmt= $llamarMetodo->prepare($sql);
    	$stmt-> execute();

	 while ($row= $stmt->fetch()) {
		 	$doc=$row[0];
		  $fec=$row[1];
		 	$hor=$row[2];
		  $med=$row[3];
		 	$con=$row[4];
			?>
		 	<tr>
		 		<td><?php echo $doc;?></td>
		 		<td><?php echo $fec;?></td>
		 		<td><?php echo $hor;?></td>
		 		<td><?php echo $med;?></td>
        <td><?php echo $con;?></td>
        <td>hola</td>
        <!--<td> echo $ob;</td>
		 		<td> echo'<a href="editcot.php?codigo='.$row[0].'"><img class="icon" src="../usuario/imagenes/edit.png" alt="Imagen no disponible"/></a>'</td>
		 		<td> echo'<a href="elicot.php?codigo='.$row[0].'"><img class="icon" src="../usuario/imagenes/elim.png" alt="Imagen no disponible"/></a>'</td>-->
		 	</tr>
		 	<?php
		 	}
		 	?>
		 </table>
</center>
<?php  include './footer.php' ?>
