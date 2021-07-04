<?php
/* Smarty version 3.1.39, created on 2021-07-02 23:50:43
  from 'C:\adobeTemp\htdocs\App2Tercer_Bimestre\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60df8a33d3c382_14577428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4eb191ac7dd309c5e97883fd3b4cfc9cd59bad60' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\App2Tercer_Bimestre\\templates\\Home.tpl',
      1 => 1625261224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60df8a33d3c382_14577428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
  <div class="card-panel teal lighten-2 "><h1 class="center-align">Inicie Sesion</h1> </div>
                <br/><br/>
                    <div align = "center">
                        <form method="post" action="?class=user&method=iniciosesion" >
                            <input class ="left" type="text" name="user" placeholder="Ingrese su Usuario">   
                            <br/><br/>
                            <input type="password" name="pass" placeholder="Ingrese su Contraseña">
                            <br/><br/>
                            <input class="waves-effect waves-light btn " type= "submit" value="Ingresar">
                        </form>
                    </div>
  </div>
 
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
