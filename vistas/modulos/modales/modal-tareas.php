<!-- MODAL PARA INSERTAR TAREA -->
<div class="modal fade" id="modal-insertar-tarea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nueva Tarea</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nueva-tarea">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Título</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="txt_titulo"  placeholder="Ingrese titulo de tarea" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <textarea name="txt_descripcion" class="form-control" rows="5" required placeholder="Ingrese descripción de la tarea"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Fecha de entrega</label>
            <div class="col-sm-10">
              <input class="form-control" type="date" name="fecha_entrega" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">Estado</div>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" name="estado" type="checkbox">
                <label class="form-check-label">
                  Realizado
                </label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">Usuario</div>
            <div class="col-sm-10">
              <select name="usuario" class="form-control" required>
                <option value="">Seleccione Usuario</option>
                <option value="1">Juanito perez</option>
                <option value="2">Byron perez</option>
              </select>
            </div>
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
      </div>
    </div>
  </div>
</div>