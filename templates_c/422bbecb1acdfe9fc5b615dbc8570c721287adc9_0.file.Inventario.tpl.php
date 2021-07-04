<?php
/* Smarty version 3.1.39, created on 2021-07-02 23:58:42
  from 'C:\adobeTemp\htdocs\App2Tercer_Bimestre\templates\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60df8c128b9871_39487418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '422bbecb1acdfe9fc5b615dbc8570c721287adc9' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\App2Tercer_Bimestre\\templates\\Inventario.tpl',
      1 => 1625231823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60df8c128b9871_39487418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card-panel teal lighten-2 "><h1 class="center-align">Inventario</h1> </div>

    <div class="collection">
    <a href="#!" class="collection-item">Ingresar Producto</a>
    <a href="#!" class="collection-item active">Eliminar Producto</a>
    <a href="#!" class="collection-item">Buscar Producto</a>
    <a href="#!" class="collection-item">Mostrar Inventario</a>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
