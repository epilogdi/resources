<form class="container"> 
  <div class="row">
    <div class="form-group col-12 formUbicacion">
      <label>Busca un Lugar</label>
      <input id="lugarBuscadoMapaPrincipal" type="text" class="form-control form-control-sm bg-light border-0 small" placeholder="Busca un lugar"/>
    </div>
    <div class="form-group col-md-12 formAnalitico">
      <label>Tipo</label>
      <select class="form-control form-control-sm bg-light border-0 small" onchange="changeAnalytic(this)">
        <option value="" selected disabled>Seleccione una opción</option>
        <option value="ventas">Ventas</option>
        <option value="inventario">Inventario</option>
        <option value="rotacion">Rotación</option>
        <option value="devoluciones">Devoluciones</option>
        <option value="margen">Margen</option>
      </select>
    </div>
    <div class="form-group col-12 soloSKU formCategorias soloSKU">
      <label>Categorías</label>
      <select class="form-control form-control-sm bg-light border-0 small selectCategorias" onchange="changeCategory(this)">
      </select>
    </div> 
    <div class="form-group col-12 soloSKU formSubcategorias soloSKU">
      <label>Subcategorías</label>
      <select class="form-control form-control-sm bg-light border-0 small selectSubcategorias" onchange="changeSubcategory(this)">
      </select>
    </div>
    <div class="form-group col-12 soloSKU formSkus soloSKU">
      <label>SKUs</label>
      <select class="form-control form-control-sm bg-light border-0 small selectSkus">
      </select>
    </div>
    <div class="form-group col-md-6">
      <label>Desde</label>
      <input type="date" class="form-control form-control-sm bg-light border-0 small"/>
    </div>
    <div class="form-group col-md-6">
      <label>Hasta</label>
      <input type="date" class="form-control form-control-sm bg-light border-0 small"/>
    </div>
    <div class="form-group col-md-12">
      <button type="button" class="btn btn-primary btn-block btn-sm " onclick="filterForm(this)">
        Filtrar
      </button>
    </div>
  </div>
</form>