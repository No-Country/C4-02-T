<?php

    require_once "conexion.php";


    if(isset($_GET['id_guitarra']))
    {
        $id_guitarra = $_GET['id_guitarra'];
        $query_guitarra = mysqli_query($conn,"SELECT * FROM guitarras as g WHERE g.id = $id_guitarra AND g.estado = 1;");

        if($query_guitarra){
            $datos = mysqli_fetch_assoc($query_guitarra);
            echo json_encode($datos, JSON_UNESCAPED_UNICODE);
            
        }else{
            echo "no se pudo realizar la consulta";
        }

        mysqli_close($conn);
    }

?>