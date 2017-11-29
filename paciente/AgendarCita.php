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
   $sql =" SELECT CONCAT(nombre,'  ',apellidos) FROM paciente  WHERE id_documetno='$paciente'";
   $stmt= $llamarMetodo->prepare($sql);
   $stmt-> execute();
   $sql2 = "SELECT id, nombre FROM medico";
   $stmt2 = $llamarMetodo->prepare($sql2);
   $stmt2->execute();

 while ($row= $stmt->fetch()) {
   $nombres=$row[0];
 }
   ?>

<center>
 <h2>Asignar cita</h2>
<form id="loginform" class="form-horizontal col-md-6" role="form" method="post"action="./Ing_regs.php">
  <br>
  <p></p>
    <br>
    <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="login-username" type="text" class="form-control" name="documento" value=" <?php echo $paciente ?>   " placeholder="Nº de identificacion" disabled>
            </div>
    <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="login-password" type="text" class="form-control" name="nombres" placeholder="Nombres" value="<?php echo "$nombres"?>" disabled>
            </div>
    <div style="margin-bottom: 25px" class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <select name="tipo" class="form-control">
            <option value="">Selecione el medico</option>
                <?php
            while ($row = $stmt2->fetch()) {
            echo '<option value = "'.$row[0].'"> '.$row[1].'</option> ';
            }
                ?>
          </select>
    </div>
    <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="login-password" type="datetime-local" class="form-control" name="fecha" placeholder="fecha" min="today">
    </div>
    <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="login-password" type="text" class="form-control" name="telefono" placeholder="Telefono">
            </div>
            <div style="margin-bottom: 25px" class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input id="login-password" type="email" class="form-control" name="correo" placeholder="Correo">
                    </div>
                  <div style="margin-bottom: 25px" class="input-group">
                          <span class="input-group-addon">Fecha de Nacimiento:  <i class="glyphicon glyphicon-lock"></i></span>
                         <input id="login-password" type="text" class="form-control" name="fechanacimiento" placeholder="aaaa/mm/dd">
                    </div>
<br><hr><br>
        <div class="form-group">
            <!-- Button -->
            <div class="col-md-offset-3 col-md-9">
                <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Registrarse</button>
                <span style="margin-left:8px;"></span>
            </div>
        </div>
    </form>
  </center>

<?php  include './footer.php' ?>
