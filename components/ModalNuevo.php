<div class="modal fade" id="modalNuevo" data-bs-backdrop="static" data-bs-keyboard="false" 
    tabindex="-1" aria-labelledby="modalNuevoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalNuevoLabel">Registrar Persona</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action="helpers/PersonaGuardar.php" method="post">
      <div class="modal-body">

        <div class="row mb-3">
          <div class="col">
            <div class="">
              <label for="nombre" class="form-label ">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-6">
            <div class="">
              <label for="apaterno" class="form-label ">Apellido Paterno</label>
              <input type="text" class="form-control" id="apaterno" name="apaterno" >
            </div>
          </div>

          <div class="col-6">
            <div class="">
              <label for="amaterno" class="form-label ">Apellido Materno</label>
              <input type="text" class="form-control" id="amaterno" name="amaterno" >
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <div class="">
              <label for="estatus" class="form-label ">Estatus</label>
              <select class="form-select" aria-label="Default select example" id="estatus" name="estatus" required>
                <option selected>Seleccione...</option>
                <?php
                  while($estatus = $myEstatus -> fetch_assoc()) {
                ?>
                  <option value="<?=$estatus['Id']?>"><?=$estatus['Nombre']?></option>
                <?php
                  }
                ?>
              </select>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    
    </div>
  </div>
</div>