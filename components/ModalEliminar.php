<div class="modal fade" id="modalEliminar" data-bs-backdrop="static" data-bs-keyboard="false" 
    tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalEliminarLabel">Editar Persona</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action="helpers/PersonaEditar.php" method="post">
      <div class="modal-body">

        <input type="hidden" id="id" name="id">
       
        <p>¿Desea Eliminar el registro?</p>

      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Eliminar</button>
      </div>
      </form>
    
    </div>
  </div>
</div>