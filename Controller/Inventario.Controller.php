<?php
Class Inventario
{
    public function IngresoProducto()
    {
        $invet= new Invent();
        $smarty= new Smarty();
        $nombre =$_POST['nombre'];
        $descr = $_POST['descripcion'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $fecha = $_POST['fecha'];
        $in=$invet->GuardarInventario($nombre,$descr,$cantidad,$precio,$fecha);
        $smarty->assign('nombre','Inventario');
        $smarty->display('Inventario.tpl');
    }
    public function BuscarProducto()
    {

    }
    public function VerInventario()
    {
        
    }
    public function EliminarProducto()
    {

    }
}
?>