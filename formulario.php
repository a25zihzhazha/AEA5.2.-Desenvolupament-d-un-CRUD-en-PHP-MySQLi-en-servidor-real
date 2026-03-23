<?php include_once "encabezado.php"; ?>
<div class="row">
    <div class="col-12">
        <h1>Registrar videojuego</h1>
        <form action="registrar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea placeholder="Descripción" class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
            </div>

            
        //Seleccionar genero juego
            
            <div class="form-group">
                <label for="genero">Gènere</label>
            <select name="genero" id="genero">
                <option value="accion">Acción</option>
                <option value="survival">Survival</option>
                <option value="lucha">Lucha</option>
                <option value="aventura">Aventura</option>
            </select>
            </div>




            <div class="form-group"><button class="btn btn-success">Guardar</button></div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>