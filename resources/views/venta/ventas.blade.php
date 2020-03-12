@extends('layouts.web')

@section('content')
<section id="nav-ventas">
<div class="container-fluid bg-primary">
<div class="container mt-2">
  <div class="row">
  <div class="col-md-3 p-4">
    <div class="arrow input-group input-group-sm mb-3">
        <select class="custom-select select-radius" id="inputGroupSelectCiudad">
          <option selected>Selecciona una ciudad</option>
          <option value="1">Barraquilla</option>
          <option value="2">Puerto Colombia</option>
          <option value="3">Soledad</option>
        </select>
      </div>

      <div class="arrow input-group input-group-sm mb-3">
        <select class="custom-select select-radius" id="inputGroupSelectArea">
          <option selected>Selecciona un área</option>
          <option value="1">100mt2 - 150mt2</option>
          <option value="2">200mt2 - 250mt2</option>
          <option value="3">300mt2 - 350mt2</option>
        </select>
      </div>
  </div>
  <div class="col-md-3 p-4">
    <div class="arrow input-group input-group-sm mb-3">
        <select class="custom-select select-radius" id="inputGroupSelectPropiedad">
          <option selected>Selecciona un tipo de propiedad</option>
          <option value="1">Casa</option>
          <option value="2">Apartamento</option>
          <option value="3">Apartaestudio</option>
        </select>
      </div>
      <div class="arrow input-group input-group-sm mb-3">
        <select class="custom-select" id="inputGroupSelectPrecio">
          <option selected>Selecciona el precio</option>
          <option value="1">800.000 - 1.000.000</option>
          <option value="2">1.100.000 - 1.300.000</option>
          <option value="3">1.400.000 - 1.600.000</option>
        </select>
      </div>
  </div>
  <div class="col-md-3 p-4">
    <div class="arrow input-group input-group-sm mb-3">
        <select class="custom-select select-radius" id="inputGroupSelectPropiedad">
          <option selected>Selecciona un tipo de propiedad</option>
          <option value="1">Casa</option>
          <option value="2">Apartamento</option>
          <option value="3">Apartaestudio</option>
        </select>
      </div>
      <div class="arrow input-group input-group-sm mb-3">
        <select class="custom-select" id="inputGroupSelectPrecio">
          <option selected>Selecciona el precio</option>
          <option value="1">800.000 - 1.000.000</option>
          <option value="2">1.100.000 - 1.300.000</option>
          <option value="3">1.400.000 - 1.600.000</option>
        </select>
      </div>
  </div>
  <div class="col-md-3 p-4">
    <div class="arrow input-group input-group-sm mb-3">
        <select class="custom-select select-radius" id="inputGroupSelectPropiedad">
          <option selected>Selecciona un tipo de propiedad</option>
          <option value="1">Casa</option>
          <option value="2">Apartamento</option>
          <option value="3">Apartaestudio</option>
        </select>
      </div>
      <div class="arrow input-group input-group-sm mb-3">
        <select class="custom-select" id="inputGroupSelectPrecio">
          <option selected>Selecciona el precio</option>
          <option value="1">800.000 - 1.000.000</option>
          <option value="2">1.100.000 - 1.300.000</option>
          <option value="3">1.400.000 - 1.600.000</option>
        </select>
      </div>
  </div>
</div>
</div>
</div>
</section>

<section id="list-ventas">
  <div class="container mt-2 p-4">
    <div class="row mb-0">
        <div class="col-xl-8 mt-4 mx-auto text-center">
          <div class="section-title">
            <h4 class="text-dark">Inmuebles en Venta</h4>
          </div>
        </div>
      </div>
  <div class="row">
    <div class="col-md-4 col-sm-6 mt-2">
      <div class="venta-card container card-block p-2">
        <div class="container p-2 border">
        <h3 class="text-center text-primary"><strong>Bodega para Venta</strong></h3>
        </div>
          <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset" class="venta-card-img mt-2">
          <div class="container border mt-2">
          <h5 class="venta-card-text text-dark mt-1">Villa Santos,<br>Barranquilla,<br>Atlantico, Colombia.</h5> 
          <p class="text-primary text-focus"><b>800 m<sup>2</sup></b></p>
          <hr>
          <p class="venta-card-text"><small class="text-muted"><i class="fa fa-bath"></i>2<i class="fa fa-car"></i>1<i class="fa fa-object-group"></i>800 m<sup>2</sup></small></p>
          </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mt-2">
      <div class="venta-card container card-block p-2">
        <div class="container p-2 border">
        <h3 class="text-center text-primary"><strong>Bodega para Venta</strong></h3>
        </div>
          <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset" class="venta-card-img mt-2">
          <div class="container border mt-2">
          <h5 class="venta-card-text text-dark mt-1">Villa Santos,<br>Barranquilla,<br>Atlantico, Colombia.</h5> 
          <p class="text-primary text-focus"><b>800 m<sup>2</sup></b></p>
          <hr>
          <p class="venta-card-text"><small class="text-muted"><i class="fa fa-bath"></i>2<i class="fa fa-car"></i>1<i class="fa fa-object-group"></i>800 m<sup>2</sup></small></p>
          </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mt-2">
      <div class="venta-card container card-block p-2">
        <div class="container p-2 border">
        <h3 class="text-center text-primary"><strong>Bodega para Venta</strong></h3>
        </div>
          <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset" class="venta-card-img mt-2">
          <div class="container border mt-2">
          <h5 class="venta-card-text text-dark mt-1">Villa Santos,<br>Barranquilla,<br>Atlantico, Colombia.</h5> 
          <p class="text-primary text-focus"><b>800 m<sup>2</sup></b></p>
          <hr>
          <p class="venta-card-text"><small class="text-muted"><i class="fa fa-bath"></i>2<i class="fa fa-car"></i>1<i class="fa fa-object-group"></i>800 m<sup>2</sup></small></p>
          </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mt-2">
      <div class="venta-card container card-block p-2">
        <div class="container p-2 border">
        <h3 class="text-center text-primary"><strong>Bodega para Venta</strong></h3>
        </div>
          <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset" class="venta-card-img mt-2">
          <div class="container border mt-2">
          <h5 class="venta-card-text text-dark mt-1">Villa Santos,<br>Barranquilla,<br>Atlantico, Colombia.</h5> 
          <p class="text-primary text-focus"><b>800 m<sup>2</sup></b></p>
          <hr>
          <p class="venta-card-text"><small class="text-muted"><i class="fa fa-bath"></i>2<i class="fa fa-car"></i>1<i class="fa fa-object-group"></i>800 m<sup>2</sup></small></p>
          </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mt-2">
      <div class="venta-card container card-block p-2">
        <div class="container p-2 border">
        <h3 class="text-center text-primary"><strong>Bodega para Venta</strong></h3>
        </div>
          <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset" class="venta-card-img mt-2">
          <div class="container border mt-2">
          <h5 class="venta-card-text text-dark mt-1">Villa Santos,<br>Barranquilla,<br>Atlantico, Colombia.</h5> 
          <p class="text-primary text-focus"><b>800 m<sup>2</sup></b></p>
          <hr>
          <p class="venta-card-text"><small class="text-muted"><i class="fa fa-bath"></i>2<i class="fa fa-car"></i>1<i class="fa fa-object-group"></i>800 m<sup>2</sup></small></p>
          </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 mt-2">
      <div class="venta-card container card-block p-2">
        <div class="container p-2 border">
        <h3 class="text-center text-primary"><strong>Bodega para Venta</strong></h3>
        </div>
          <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset" class="venta-card-img mt-2">
          <div class="container border mt-2">
          <h5 class="venta-card-text text-dark mt-1">Villa Santos,<br>Barranquilla,<br>Atlantico, Colombia.</h5> 
          <p class="text-primary text-focus"><b>800 m<sup>2</sup></b></p>
          <hr>
          <p class="venta-card-text"><small class="text-muted"><i class="fa fa-bath"></i>2<i class="fa fa-car"></i>1<i class="fa fa-object-group"></i>800 m<sup>2</sup></small></p>
          </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mt-2">
      <div class="venta-card container card-block p-2">
        <div class="container p-2 border">
        <h3 class="text-center text-primary"><strong>Bodega para Venta</strong></h3>
        </div>
          <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset" class="venta-card-img mt-2">
          <div class="container border mt-2">
          <h5 class="venta-card-text text-dark mt-1">Villa Santos,<br>Barranquilla,<br>Atlantico, Colombia.</h5> 
          <p class="text-primary text-focus"><b>800 m<sup>2</sup></b></p>
          <hr>
          <p class="venta-card-text"><small class="text-muted"><i class="fa fa-bath"></i>2<i class="fa fa-car"></i>1<i class="fa fa-object-group"></i>800 m<sup>2</sup></small></p>
          </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mt-2">
      <div class="venta-card container card-block p-2">
        <div class="container p-2 border">
        <h3 class="text-center text-primary"><strong>Bodega para Venta</strong></h3>
        </div>
          <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset" class="venta-card-img mt-2">
          <div class="container border mt-2">
          <h5 class="venta-card-text text-dark mt-1">Villa Santos,<br>Barranquilla,<br>Atlantico, Colombia.</h5> 
          <p class="text-primary text-focus"><b>800 m<sup>2</sup></b></p>
          <hr>
          <p class="venta-card-text"><small class="text-muted"><i class="fa fa-bath"></i>2<i class="fa fa-car"></i>1<i class="fa fa-object-group"></i>800 m<sup>2</sup></small></p>
          </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mt-2">
      <div class="venta-card container card-block p-2">
        <div class="container p-2 border">
        <h3 class="text-center text-primary"><strong>Bodega para Venta</strong></h3>
        </div>
          <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset" class="venta-card-img mt-2">
          <div class="container border mt-2">
          <h5 class="venta-card-text text-dark mt-1">Villa Santos,<br>Barranquilla,<br>Atlantico, Colombia.</h5> 
          <p class="text-primary text-focus"><b>800 m<sup>2</sup></b></p>
          <hr>
          <p class="venta-card-text"><small class="text-muted"><i class="fa fa-bath"></i>2<i class="fa fa-car"></i>1<i class="fa fa-object-group"></i>800 m<sup>2</sup></small></p>
          </div>
        </div>
    </div>

    
  
</div>
</section>

@endsection