{include file="templates/Cabeceras/Header.tpl"}
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
{include file="templates/Cabeceras/Footer.tpl"}