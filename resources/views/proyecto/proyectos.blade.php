@extends('layouts.web')

@section('content')
<section id="nav-ventas ">
<div class="container-fluid bg-primary">
<div class="container">
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
	<div class="container mt-4">
	<div class="row">
        <div class="col-xl-8 mt-4 mx-auto text-center">
          <div class="section-title">
            <h4 class="text-dark">Inmuebles en Venta</h4>
          </div>
        </div>
      </div>
	<div class="row">
    
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://d3agu2fxhtb0q8.cloudfront.net/1506379173772_46728356.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>

      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://http2.mlstatic.com/casas-en-venta-santa-marta-532-1947-D_NQ_NP_658620-MCO28638467460_112018-F.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://staticw.s3.amazonaws.com/inmuebles/7972320160810095123.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm "><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://images.clasicolombia.com/2013/06/30/casa-venta-santa-marta-4-habitaciones-2-banos_a7eea8849_3.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://d3agu2fxhtb0q8.cloudfront.net/1506379173772_46728356.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://http2.mlstatic.com/casas-en-venta-santa-marta-532-1947-D_NQ_NP_658620-MCO28638467460_112018-F.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://staticw.s3.amazonaws.com/inmuebles/7972320160810095123.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm "><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://images.clasicolombia.com/2013/06/30/casa-venta-santa-marta-4-habitaciones-2-banos_a7eea8849_3.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>    
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://d3agu2fxhtb0q8.cloudfront.net/1506379173772_46728356.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://http2.mlstatic.com/casas-en-venta-santa-marta-532-1947-D_NQ_NP_658620-MCO28638467460_112018-F.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://staticw.s3.amazonaws.com/inmuebles/7972320160810095123.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm "><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://images.clasicolombia.com/2013/06/30/casa-venta-santa-marta-4-habitaciones-2-banos_a7eea8849_3.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>    
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://d3agu2fxhtb0q8.cloudfront.net/1506379173772_46728356.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://http2.mlstatic.com/casas-en-venta-santa-marta-532-1947-D_NQ_NP_658620-MCO28638467460_112018-F.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://staticw.s3.amazonaws.com/inmuebles/7972320160810095123.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm "><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://images.clasicolombia.com/2013/06/30/casa-venta-santa-marta-4-habitaciones-2-banos_a7eea8849_3.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>    
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://d3agu2fxhtb0q8.cloudfront.net/1506379173772_46728356.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
      <div class="col-md-4 mt-4 p-4">
      <div class="card profile-card-5 text-right">
          <div class="card-img-block">
              <img class="card-img-top" src="https://http2.mlstatic.com/casas-en-venta-santa-marta-532-1947-D_NQ_NP_658620-MCO28638467460_112018-F.jpg" alt="Card image cap">
          </div>
              <div class="card-body pt-0">
              <a href=""><h4 class="card-title text-primary">Arriendo de casas en Barranquilla</h4></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>   
  </div>
	</div>
</section>

@endsection