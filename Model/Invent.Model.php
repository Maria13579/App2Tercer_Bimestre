<?php
    Class Invent
    {
        public function GuardarInventario($n,$d,$p,$f)
        {
            $con=new Conexion();
            $consulta=$con->query("INSERT INTO `inventario`(`Nombre`, `Descripcion`, `Cantidad`, `Precio`, `Fecha`) VALUES ('$n','$d','$c','$p','$f');");
            $con->close();
        }
    }
?>