<?php
/* Smarty version 3.1.39, created on 2021-07-04 04:41:10
  from 'C:\adobeTemp\htdocs\App2Tercer_Bimestre\templates\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e11fc6282a27_19680911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '422bbecb1acdfe9fc5b615dbc8570c721287adc9' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\App2Tercer_Bimestre\\templates\\Inventario.tpl',
      1 => 1625366462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e11fc6282a27_19680911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card-panel teal lighten-2 "><h1 class="center-align">Inventario</h1> </div>
    <div class="row">
      <div class="col s4">
         <nav class="center-align teal lighten-2 ">OPCIONES</nav>
            <div class="collection">
            <a href="templates/Inventario.tpl" class="collection-item ">Eliminar Producto</a>
            <a href="templates/Inventario.tpl" class="collection-item">Buscar Producto</a>
            <a href="templates/verInventario.tpl" class="collection-item">Mostrar Inventario</a>
            </div>
        </div>    
        <div class="col s8">
            <form method="post" action="?class=Inventario&method=IngresoProducto">
                <div class="input-field col s8">
                    <input id="nombre" type="text" name="nombre" placeholder="Nombre del Producto">   
                    <br/>
                </div>
                <div class="input-field col s8">
                    <input id="descripción" type="text" name="descripcion" placeholder="Descripción del Producto">
                    <br/>
                </div>
                <div class="input-field col s8">
                    <input id="cantidad" type="number" name="cantidad" placeholder="Cantidad del Producto">
                    <br/>
                </div>
                <div class="input-field col s8">
                    <input id="precio" type="number" name="precio" placeholder="Precio del Producto">
                    <br/>
                </div>
                <div class="input-field col s8">
                    <input id="fecha" type="date" name="fecha" placeholder="Fecha de registro del Producto">
                    <br/>
                </div>
                <div class="input-field col s8">
                    <input class="waves-effect waves-light btn " type= "submit" value="Guardar Producto">
                </div>
            </form>
        </div>
    </div>   
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
