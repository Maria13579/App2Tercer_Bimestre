<?php
/* Smarty version 3.1.39, created on 2021-07-05 20:00:17
  from 'C:\adobeTemp\htdocs\App2Tercer_Bimestre\templates\Navs\BarraOpciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e348b106e904_61787359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '208f740da3b978fa5220d2f96817db3a0f8f80bf' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\App2Tercer_Bimestre\\templates\\Navs\\BarraOpciones.tpl',
      1 => 1625508010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e348b106e904_61787359 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
<div class="col s2">
   <nav class="center-align teal lighten-2 ">OPCIONES</nav>
      <div class="collection">
      <a href="?class=Inventario&method=IngresoProducto" class="collection-item ">Ingresar Producto</a>
      <a href="?class=Inventario&method=VerInventarioVis" class="collection-item">Mostrar Inventario</a>
      <a href="?class=User&method=InicioSesion" class="collection-item">Salir</a>
      </div>
  </div>   <?php }
}
