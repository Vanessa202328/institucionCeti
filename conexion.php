<!--//VANESSA ESMERALDA FLORES CERVANTES ES172004305-->

<?php
    //Configuracion necesaria para acceder a la data base.

    function conn(){
        $hostname = "localhost";
        $usuariodb = "root";
        $passwordb = "";
        $dbname = "escuelaceti";

        //Generando la conexion con el servidor
        $conectar = mysqli_connect($hostname,$usuariodb,$passwordb,$dbname); 
        return $conectar;
    }

?>
