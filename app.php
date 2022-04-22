<?php

    require_once "conexion.php";


    if(isset($_GET['id_guitarra']))
    {
        $query_listado = mysqli_query($conn,"SELECT * FROM guitarras;");

        $resultado = mysqli_fetch_assoc($query_listado);
        
        if($query_listado){
            $datos = mysqli_fetch_assoc($query_update);
            echo json_encode($datos, JSON_UNESCAPED_UNICODE);
            
        }else{
            echo "no se pudo realizar la consulta";
        }

        mysqli_close($conn);
    }

    if($_POST['action'] == "listado_select")
    {
        $query_listado = mysqli_query($conn,"SELECT * FROM guitarras;");

        $resultado = mysqli_fetch_assoc($query_listado);
        
        if($query_listado){
            $datos = mysqli_fetch_assoc($query_update);
            echo json_encode($datos, JSON_UNESCAPED_UNICODE);
            
        }else{
            echo "no se pudo realizar la consulta";
        }

        mysqli_close($conn);
    }



?>