
<?php include './header.php'; ?>
<?php
 session_start();
 $host = "mysql:host=localhost:3306;dbname=eps_dfl";

 $username = "root";
 $password = "admin";

 $message = "";
 try
 {
      $connect = new PDO($host, $username, $password);
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if(isset($_POST["login"]))
      {
           if(empty($_POST["usuario"]) || empty($_POST["contrasena"]))
           {
                $message = '<label>campos obligatorios</label>';
           }
           else
           {
             $usuario=$_POST['usuario'];
             $contrasena=$_POST['contrasena'];
                $query = "SELECT * FROM usuario WHERE id_documento = '$usuario' AND contrasena = '$contrasena'";
                $statement = $connect->prepare($query);
                $statement->execute();
                $count = 0;
}
                while ($row=$statement->fetch()) {
                  echo $row[0]."<br/>";
                  echo $row[1]."<br/>";
                  $count++;

                echo $count;
}
                if ($count>0) {

                     $_SESSION["usuario"] = $_POST["usuario"];
                     header("location:../paciente/index.php");
                }
                else
                {   echo"<script type=\"text/javascript\">alert('Datos Erroneos'); window.location='ingresar.php';</script>";
                //     $message = '<label>datos erroneos</label>';
                }
           }
      }

 catch(PDOException $error)
 {
      $message = $error->getMessage();
 }
 ?>
<center>
<div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Iniciar Session</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#"></a></div>
                    </div>

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
<section class="loginform">


                        <form id="loginform" class="form-horizontal login" method="post" role="form">

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="usuario" value="" placeholder="username or email">
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="contrasena" placeholder="password">
                                    </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            No tiene cuenta
                                        <a href="./Registrarse.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Registrarse
                                        </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" name="login" class="btn btn-info"><i class="icon-hand-right"></i>Iniciar session</button>
                                        <span style="margin-left:8px;"></span>
                                    </div>
                                </div>
                            </form>
</section>


                        </div>
                    </div>
        </div>

                         </div>

</center>

<?php include './footer.php'; ?>
