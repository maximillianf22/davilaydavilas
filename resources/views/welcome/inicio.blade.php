@extends('layouts.web')

@section('content')

<!-- Header -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <!-- Header -1 -->
      <div class="col-md-6 text-center">
        <div class="container-fluid bg-opacity p-4">
          <div id="header">
            <h4 class="text-primary p-3">Encuentra tu inmueble</h4>
          </div>
          <div id="nav-pills">
            <ul class="nav nav-pills nav-fill nav-radius" id="myTab" role="tablist">
              <li class="nav-item border-bottom border-primary mr-auto pl-3">
                <a class="nav-link active nav-text" id="ventas-tab" data-toggle="tab" href="#ventas" role="tab" aria-controls="ventas" aria-selected="true">Ventas</a>
              </li>
              <li class="nav-item border-bottom border-primary mr-auto pl-3">
                <a class="nav-link" id="arriendos-tab" data-toggle="tab" href="#arriendo" role="tab" aria-controls="arriendo" aria-selected="true">Arriendos</a>
              </li>
              <li class="nav-item border-bottom border-primary mr-auto pl-3">
                <a class="nav-link" id="proyecto-tab" data-toggle="tab" href="#proyecto" role="tab" aria-controls="proyecto" aria-selected="true">Proyectos</a>
              </li>
            </ul>
          </div>
            <br>
              <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="ventas" role="tabpanel" aria-labelledby="ventas-tab">
                      <div class="row">
                      <div class="col-md-6 p-4">
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
                      <div class="col-md-6 p-4">
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
              <div class="tab-pane fade show" id="arriendo" role="tabpanel" aria-labelledby="arriendo-tab">
                      <div class="row">
                      <div class="col-md-6 p-4">
                        <div class="arrow input-group input-group-sm mb-3">
                            <select class="custom-select select-radius" id="inputGroupSelectCiudad">
                              <option selected>Selecciona una Arriendo</option>
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
                      <div class="col-md-6 p-4">
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
              <div class="tab-pane fade show" id="proyecto" role="tabpanel" aria-labelledby="proyecto-tab">
                      <div class="row">
                      <div class="col-md-6 p-4">
                        <div class="arrow input-group input-group-sm mb-3">
                            <select class="custom-select select-radius" id="inputGroupSelectCiudad">
                              <option selected>Selecciona una Proyecto</option>
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
                      <div class="col-md-6 p-4">
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
          <div class="row" id="button-submit align-items-center">
            <div class="col-md-6 offset-md-3 p-1 mb-3">
              <button class="btn-block btn-lg btn-radius btn-primary">Buscar <i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- #Header 1-->

      <!-- Header 2-->
      <div class="col-md-6 text-right d-none d-sm-none d-md-block">
        <h1 class="header-1" style="color: black"><big>Encuentra <br> <b>lo que necesitas</b></big></h1><br>
        <div class="col-md-8 offset-md-3">
        <button class="btn btn-primary btn-lg btn-block">PUBLICA TU PROPIEDAD</button><br>
        <button class="btn btn-primary btn-lg btn-block">PUBLICA TU REQUERIMIENTO</button>
        </div>
      </div>
      <!-- #Header 2-->
    </div>
  </div>
</header>
<!-- #Header -->

<!--Seccion header descripcion de la empresa-->
<section class="div-1">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-12 text-lg-center btn-wrapper p-2 mt-4  d-none d-sm-none d-md-block">
        <h1 class="redes sociales text-light"><big><strong style="font-family: Century Gothic" class="font-italic">¡Somos tu Inmobiliaria de Confianza!</strong></big></h1>
      </div>
      <div class="col-lg-12 text-lg-center btn-wrapper p-2 mt-4  d-block d-sm-block d-md-none">
        <h4 class="redes sociales text-light"><big><strong style="font-family: Century Gothic" class="font-italic">¡Somos tu Inmobiliaria de Confianza!</strong></big></h4>
      </div>
    </div>
  </div>
</section>
<!--Seccion descripcion de la empresa-->
<section class="bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12 text-lg-center btn-wrapper p-2 mt-4" style="font-size: 25px">
       Somos la inmobiliaria líder en servicios inmobiliarios en Colombia. Contamos con oficinas en
        Cartagena, Barranquilla, Santa Marta y Montería. Nuestra experiencia, seriedad y constante
        innovación nos permiten ofrecerle un completo y novedoso portafolio de servicios. 
      </div>
    </div>
  </div>
  <hr>
</section>
<!--Card Lista de inmuebles en Arriendo-->
<section id="lista de inmuebles">
  <div class="container">
    <div class="row mb-0">
        <div class="col-xl-8 mt-4 mx-auto text-center">
          <div class="section-title">
            <h4 class="text-dark">Inmuebles en Arriendo</h4>
          </div>
        </div>
      </div>
    <div class="row">
    <div class="card-deck">
      <!--Card Arriendos-->
      <div class="card arriendo-card text-left">
        <div class="card-img-block">
            <img class="card-img-top" src="https://d3agu2fxhtb0q8.cloudfront.net/1506379173772_46728356.jpg" alt="Card image cap">
        </div>
            <div class="card-body pt-0">
            <a href=""><h4 class="card-title text-primary mt-3">Arriendo de casas en Barranquilla</h4></a>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text text-primary"><b>800 m<sup>2</sup></b></p>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
          </div>
      </div>  
      <div class="card arriendo-card text-left">
        <div class="card-img-block">
            <img class="card-img-top" src="https://http2.mlstatic.com/casas-en-venta-santa-marta-532-1947-D_NQ_NP_658620-MCO28638467460_112018-F.jpg" alt="Card image cap">
        </div>
            <div class="card-body pt-0">
            <a href=""><h4 class="card-title text-primary mt-3">Arriendo de casas en Barranquilla</h4></a>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text text-primary"><b>500 m<sup>2</sup></b></p>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
          </div>
      </div>
      <div class="card arriendo-card text-left">
        <div class="card-img-block">
            <img class="card-img-top" src="https://staticw.s3.amazonaws.com/inmuebles/7972320160810095123.jpg" alt="Card image cap">
        </div>
            <div class="card-body pt-0">
            <a href=""><h4 class="card-title text-primary mt-3">Arriendo de casas en Barranquilla</h4></a>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text text-primary"><b>200 m<sup>2</sup></b></p>
            <a href="#" class="btn btn-primary btn-sm "><i class="fa fa-heart" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
          </div>
      </div>
      <div class="card arriendo-card text-left">
        <div class="card-img-block">
            <img class="card-img-top" src="https://images.clasicolombia.com/2013/06/30/casa-venta-santa-marta-4-habitaciones-2-banos_a7eea8849_3.jpg" alt="Card image cap">
        </div>
            <div class="card-body pt-0">
            <a href=""><h4 class="card-title text-primary mt-3">Arriendo de casas en Barranquilla</h4></a>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text text-primary">900 m<sup>2</sup></p>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
          </div>
      </div>
    </div>  
  </div>
      <div class="row" id="button-submit align-items-center">
        <div class="col-md-4 offset-md-4 p-4 mt-4 mb-3">
          <button class="btn-block btn-lg btn-primary">Ver inmuebles en arriendo </button>
        </div>
      </div>
  </div>
</section>
<!--carousel-->
<section id="arriendos-req">
 <div class="container-fluid bg-light mt-4 p-4">
  <div class="row">
        <div class="col-xl-8 mx-auto text-center">
          <div class="section-title">
            <h4 class="text-dark">Requerimientos Activos</h4>
          </div>
        </div>
      </div>
   <div class="container">
  <div class="carousel slide multi-item-carousel" id="theCarousel">
    <div class="carousel-inner row w-100 mx-auto">
      <div class="carousel-item active col-md-4">
        <div class="card bg-dark text-white">
          <img class="card-img" src="https://thumbs4.properati.com/6/kPwitjft2Vrte-CFIrHw1dkc1nM=/trim/570x428/smart/filters:strip_icc()/http://pictures.domus.la/inmobiliaria_314/1538_0_38233538.jpg" alt="Card image">
          <div class="card-img-overlay">
            <h4 class="card-title">Necesito bodega para arriendo</h4>
            <p class="card-text">Villa Santos, Barranquilla, Atlantico, Colombia.</p>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
       <div class="card bg-dark text-white">
          <img class="card-img" src="https://d3agu2fxhtb0q8.cloudfront.net/1523378731538_-736897800.JPG" alt="Card image">
          <div class="card-img-overlay">
            <h4 class="card-title">Necesito bodega para arriendo</h4>
            <p class="card-text">Villa Santos, Barranquilla, Atlantico, Colombia.</p>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card bg-dark text-white">
          <img class="card-img" src="https://metrocuadrado.blob.core.windows.net/inmuebles/412-M2040513/412-M2040513_1_p.jpg" alt="Card image">
          <div class="card-img-overlay">
            <h4 class="card-title">Necesito bodega para arriendo</h4>
            <p class="card-text">Villa Santos, Barranquilla, Atlantico, Colombia.</p>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card bg-dark text-white">
          <img class="card-img" src="https://d3agu2fxhtb0q8.cloudfront.net/-213449366.jpg" alt="Card image">
          <div class="card-img-overlay">
            <h4 class="card-title">Necesito bodega para arriendo</h4>
            <p class="card-text">Villa Santos, Barranquilla, Atlantico, Colombia.</p>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card bg-dark text-white">
          <img class="card-img" src="https://staticw.s3.amazonaws.com/inmuebles/b431720190514093509.jpg" alt="Card image">
          <div class="card-img-overlay">
            <h4 class="card-title">Necesito bodega para arriendo</h4>
            <p class="card-text">Villa Santos, Barranquilla, Atlantico, Colombia.</p>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card bg-dark text-white">
          <img class="card-img" src="https://d3agu2fxhtb0q8.cloudfront.net/1545543319391_1707896817.jpg" alt="Card image">
          <div class="card-img-overlay">
            <h4 class="card-title">Necesito bodega para arriendo</h4>
            <p class="card-text">Villa Santos, Barranquilla, Atlantico, Colombia.</p>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card bg-dark text-white">
          <img class="card-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRLUzrR-1h5JS-GFbK6GTjiNWVVxAwd6M7tOT1bXCP82J9QG67-" alt="Card image">
          <div class="card-img-overlay">
            <h4 class="card-title">Necesito bodega para arriendo</h4>
            <p class="card-text">Villa Santos, Barranquilla, Atlantico, Colombia.</p>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-heart" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#theCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon text-primary" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#theCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</section>


<!--Seccion Blog-->
<section id="blog-post">
  <div class="container mt-4">
        <div class="row">
        <div class="col-xl-8 mx-auto text-center">
          <div class="section-title">
            <h4 class="text-dark">Blog</h4>
          </div>
        </div>
      </div>
      <div class="row mb-1 mt-1 p-2">
        <div class="col-md-6">
          <div class="card blog-card-5 flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <div class="card-img-block">
              <img class="card-img-top card-img-left flex-auto d-none d-md-block" src="https://img.freepik.com/foto-gratis/propietario-desbloquea-llave-casa-nuevo-hogar-agentes-inmobiliarios-agentes-ventas_112699-358.jpg?size=626&ext=jpg" alt="Card image cap">
          </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card blog-card-5 flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <div class="card-img-block">
              <img class="card-img-top card-img-left flex-auto d-none d-md-block" src="https://image.freepik.com/foto-gratis/gente-dandose-mano-sobre-casa-modelo-juguete_23-2148301743.jpg" alt="Card image cap">
          </div>
          </div>
        </div>
        </div>
      <div class="row mb-1 mt-1 p-2">
        <div class="col-md-6">
          <div class="card blog-card-5 flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <div class="card-img-block">
              <img class="card-img-top card-img-left flex-auto d-none d-md-block" src="https://image.freepik.com/foto-gratis/llave-casa-desbloquear-nueva-casa-conectada-puerta_112699-153.jpg" alt="Card image cap">
          </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card blog-card-5 flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <div class="card-img-block">
              <img class="card-img-top card-img-left flex-auto d-none d-md-block" src="https://www.muypymes.com/wp-content/uploads/2019/02/inmobiliaria-vivendum.jpg" alt="Card image cap">
          </div>
          </div>
        </div>
      </div>
      <div class="row" id="button-submit align-items-center">
        <div class="col-md-4 offset-md-4 p-4 mt-4 mb-3">
          <button class="btn-block btn-lg btn-primary">Ver Mas</button>
        </div>
      </div>
      </div>
</section>

@endsection
