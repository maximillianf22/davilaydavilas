@extends('layouts.web')

@section('content')
<section class="div-1 d-none d-sm-none d-md-block">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-12 text-lg-center btn-wrapper p-2 mt-4">
        <h1 class="redes sociales text-light"><big><strong style="font-family: Century Gothic" class="font-italic">Colombia</strong> el país que más arrienda en América</big></h1>
      </div>
    </div>
  </div>
</section>

<section id="post">
	<div class="container">
		<div class="row text-center">
			<div class="jumbotron p-3 p-md-5 text-white rounded">
		        <div class="col-md-6 px-0">
		          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
		          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
		          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
		        </div>
	      </div>
		</div>
	</div>


	<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
           <div class="blog-post">
            <h2 class="blog-post-title text-primary">Los departamentos de Colombia donde hay más viviendas en alquiler </h2>
            <p class="blog-post-meta">January 1, 2020</p>

           		<p>Según un estudio del Banco Interamericano de Desarrollo (BID), el 34 por ciento de las viviendas que
				existen en Colombia son para alquilar, mientras que el promedio en América Latina es de 21 por ciento.
				De hecho, la media es superior a la de los bloques económicos del mundo. El que más se acerca es
				Norteamérica con 33 por ciento.
				</p>

				<p>Un documento de Fedelonjas seccional Medellín y Antioquia indica que una de las razones para vivir en
				arriendo es que no se puede acceder a una vivienda propia porque la persona no cuenta con la cuota
				inicial, porque tiene la percepción de que es muy alta y no lo intenta, o que no sea sujeto de crédito.
				La investigación de la seccional advierte que además de la falta de dinero, una persona puede vivir en
				arriendo para mejorar su movilidad; habitar en “mejores” sectores de la ciudad, aún teniendo vivienda
				propia; o para no inmovilizar capital e invertirlo en sus negocios.
				</p>

				<p>Al respecto María Clara Luque, presidenta de la Federación Colombiana de Lonjas de propiedad Raíz
				(Fedelonjas), dice que “se debe proteger la inversión inmobiliaria. Colombia sobresale en Latinoamérica
				como el país donde más se compra la vivienda para inversión, por la renta”.
				</p>
				
				<p>Además agregó que gracias a esa inversión se dinamiza el 18 por ciento de la actividad edificadora en
				vivienda y se tiene un equilibrio entre oferta y demanda, que resulta conveniente para las familias que
				viven en alquiler.
				</p>
				
				<p>Según el Departamento Administrativo Nacional de Estadistica (Dane) y cálculos de la Lonja de
				Propiedad Raíz de Medellín y Antioquia, el mayor porcentaje de familias que viven en arriendo se
				encuentran en Risaralda con 44,1 por ciento, seguido por Bogotá, donde el 43,4 por ciento de las casas o
				apartamentos son para arrendar. En el tercer puesto está el departamento del Meta con 43,1 por ciento.
				Los lugares del país con menos presencia de arrendamiento son Vaupés, con 7,9 por ciento; Guainía (9,4
				por ciento) y Amazonas ( 11,7 por ciento).
				</p>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->
		<aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->
      </div><!-- /.row -->
		
    </main><!-- /.container -->
	
</section>
@endsection
