<?php include './header.php' ?>
<center>
  <h1>Registrarse</h1>

<form id="loginform" class="form-horizontal col-md-6" role="form" method="post"action="./Ing_regs.php">
  <br>
  <p>Recuerde que para poder registrarse aca, ya necesita estar afiliado.</p>
    <br>
    <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="login-username" type="text" class="form-control" name="documento" value="" placeholder="Nº de identificacion">
            </div>

    <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="login-password" type="text" class="form-control" name="nombres" placeholder="Nombres">
            </div>
    <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="login-password" type="text" class="form-control" name="apellidos" placeholder="Apellidos">
            </div>
    <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="login-password" type="text" class="form-control" name="direccion" placeholder="Direccion">
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
  <?php include './footer.php' ?>
