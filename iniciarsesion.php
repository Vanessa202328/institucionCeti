<?php
//Conexion a la BD
include_once('conexion.php');
   $Matricula = trim($_POST['Matricula']);
   $Nombre = trim($_POST['Nombre']);
   $ApellidoPaterno = trim($_POST['ApellidoPaterno']);
   $ApellidoMaterno = trim($_POST['ApellidoMaterno']);
   $TipoUsuario = trim($_POST['TipoUsuario']);
   $Password = trim($_POST['Passwoord']);
          
//Comparacion de campos llenos

      if($_POST['Matricula'] == '' or $_POST['Passwoord'] == '')
       {//Campos NO LLENOS
            echo "<br>";
            echo '!! VERIFICA LOS CAMPOS NO SE ENCUENTRAN LLENOS CORRECTAMENTE !!';
      }else{//Campos LLENOS

            echo "Los datos son los siguientes: <br>";
            echo "$Matricula, $Password";

            //Consulta sql datos basicos 
            $conectar=conn(); //ejecuta la conexion a la BD
            $sql = "SELECT * FROM usuarios (Id_usuario,Matricula,Nombre,ApellidoPaterno,ApellidoMaterno,Turno,TipoUsuario,Passwoord)  
            VALUES ('$Matricula', '$Nombre', '$ApellidoPaterno', '$ApellidoMaterno', '$TipoUsuario','$Password')";
            //Validacion de matricula
            
            $validar = "SELECT * FROM usuarios WHERE Matricula = $Matricula";
            $validando = $conectar->query($validar);

            if ($validando->num_rows > 0)
            {
                  echo "Usuario validado correctamente \n";

                  echo "BIENVENIDO  \n";
                  $_SESSION['Nombre'] = $Nombre;
                  $_SESSION['ApellidoPaterno'] = $ApellidoPaterno;
                  $_SESSION['ApellidoMaterno'] = $ApellidoMaterno;
                  echo "Has ingresado como usuario de TIPO"  \n";
                  $_SESSION['TipoUsuario'] = $TipoUsuario;



                  echo "Bienvenido $Nombre, $ApellidoPaterno, $ApellidoMaterno, Has ingresado como AL $TipoUsuario ";
                  $mensaje.="<h5 class='text-danger tet-center'> Bienvenido </h5>";
            }
            else
            {
                echo "Usuario NO REGISTRADO";
                    $mensaje.="<h5 class='text-danger tet-center'> ALERTA... !! USUARIO NO REGISTRADO !! </h5>";
            }

        }
?>