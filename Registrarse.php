<!--//VANESSA ESMERALDA FLORES CERVANTES ES172004305-->

<?php
//Conexion a la BD
include_once('conexion.php');
//Recibo todos los datos del formulario
   $Id_usuario = trim($_POST['Id_usuario']);
   $Matricula = trim($_POST['Matricula']);
   $Nombre = trim($_POST['Nombre']);
   $ApellidoPaterno = trim($_POST['ApellidoPaterno']);
   $ApellidoMaterno = trim($_POST['ApellidoMaterno']);
   $Turno = trim($_POST['Turno']);
   $TipoUsuario = trim($_POST['TipoUsuario']);
   $Password = trim($_POST['Passwoord']);
             
                  
//Comparacion de campos llenos
      if($_POST['Id_usuario'] == '' or $_POST['Matricula'] == '' or $_POST['Nombre'] == '' or$_POST['ApellidoPaterno'] == '' or $_POST['ApellidoMaterno'] == '' or $_POST['Turno'] == '' or $_POST['TipoUsuario'] == '' or $_POST['Passwoord'] == '')
       {//Campos NO LLENOS
            echo "<br>";
            echo '!! VERIFICA LOS CAMPOS NO SE ENCUENTRAN LLENOS CORRECTAMENTE !!';
      }else{//Campos LLENOS
            echo "Los datos son los siguientes: <br>";
            echo "$Id_usuario,$Matricula, $Nombre, $ApellidoPaterno, $ApellidoMaterno, $Turno, $TipoUsuario, $Password";

            //Consulta sql datos basicos 
            $conectar=conn(); //ejecuta la conexion a la BD
            $sql = "INSERT INTO usuarios (Id_usuario,Matricula,Nombre,ApellidoPaterno,ApellidoMaterno,Turno,TipoUsuario,Passwoord) 
            VALUES ('$Id_usuario', '$Matricula', '$Nombre', '$ApellidoPaterno', '$ApellidoMaterno', '$Turno', '$TipoUsuario','$Password')";
            //Validacion de matricula
            
            $validar = "SELECT * FROM usuarios WHERE Matricula = $Matricula ";
            $validando = $conectar->query($validar);

            
                  if ($validando->num_rows > 0)
                  {
                        $mensaje.="<h5 class='text-danger tet-center'> La matricula ya fue registrada </h5>";
                  }
                  else
                  {
                        if ($TipoUsuario == 'AL')
                        {
                              $resultado = mysqli_query($conectar , $sql)or trigger_error("Query Failed ! SQL - Error ".mysql_error($conectar), E_USER_ERROR);
                              echo "$sql";
                        }
                        
                  }
       }
              
      

?>
