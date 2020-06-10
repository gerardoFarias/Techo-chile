<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../estilos/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>TECHO-CHILE</title>

</head>
<body  >
  

 <nav class="navbar navbar-expand-lg navbar-light header">
 <a href="https://www.techo.org/chile/"><img src="https://www.techo.org/chile/wp-content/themes/techochile/images/head/logo.png" alt="Chile" title="Chile" class="logo-foot"></a>
<marquee behavior="" direction=""> " Nuestro país tiene una inmensa urgencia de un mínimo, al menos, de bienestar, sea extendido a gran número de ciudadanos que hoy carecen de una vida que se pueda llamar humana "</marquee>
    
  </nav>

 
  <div class="container-body "  style=" position: relative; display: block; /* z-index: 2; */ opacity: 1;">
  <div class="container " id="formulario">
  <h4 >MESA DE TRABAJO</h4>
<!-- /************************FORMULARIO MESA DE TRABAJO******************************* */
 --><div class="form-row ">
<div class="form-group col-4 text-light">
      <label for="disabledSelect">Nombre</label>
      <select id="disabledSelect" class="form-control">
        <option>Disabled select</option>
      </select>

      <label for="disabledSelect">Region</label>
      <select id="disabledSelect" class="form-control">
        <option>Disabled select</option>
      </select>

      <label for="disabledSelect">Comuna</label>
      <select id="disabledSelect" class="form-control">
        <option>Disabled select</option>
      </select>


      <label for="disabledSelect">Comunidad</label>
      <select id="disabledSelect" class="form-control">
        <option>Disabled select</option>
      </select>

  
    
</div>
<div class="form-group col-md-2 ">
</div>
<div class="form-group col-md-6  mapa">
<div class="card text-white bg-primary mb-12" style="max-width: 100%; height:100%">
  <div class="card-header">UBICACION GEOGRAFICA</div>
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.84046809187!2d-70.77134438508956!3d-33.50552750772653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c2d48a47a31b%3A0x9e73bd8fb1b4b146!2sLibertad%20914%2C%20Maip%C3%BA%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1591773488345!5m2!1ses!2scl" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 
</div>
</div>
</div>
<br>
<br>
<!-- */************************FORMULARIO DE INGRESO MESA DE TRABAJO******************************* */*
 -->
 <H4 class="text-black">INGRESO MESA DE TRABAJO</H4>
 <br>
 <div class="form-row">
<div class="form-group col-4 text-light">
      <label for="disabledSelect">Nombre</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      <label for="disabledSelect">Region</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


      <label for="disabledSelect">Comuna</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
      


      <label for="disabledSelect">Comunidad</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      <label for="disabledSelect">Ubicacion</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


<br>
<button class="col-6 btn-primary">INGRESAR</button>
<button class="COL-6 btn-danger "> LIMPIAR</button>
<br><br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#buscar">

<i class="fas fa-search"></i> BUSCAR MESA DE TRABAJO
</button>

<!-- Modal -->
<div class="modal fade" id="buscar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
      <a href="https://www.techo.org/chile/"><img src="https://www.techo.org/chile/wp-content/themes/techochile/images/head/logo.png" alt="Chile" title="Chile" class="logo-foot"></a>

        <h5 class="modal-title text-light text-right" id="exampleModalLabel">MESA DE TRABAJO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-primary">

<!--         formulario modal
 -->

      <div class="form-row">
<div class="form-group col-12 text-light">
      <label for="disabledSelect">Nombre</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      <label for="disabledSelect">Region</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


      <label for="disabledSelect">Comuna</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
      


      <label for="disabledSelect">Comunidad</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      <label for="disabledSelect">Ubicacion</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


  </div>
  </div>
      </div>
      <div class="modal-footer bg-primary">
        <button type="button" class="btn btn-danger" data-dismiss="modal">ELIMINAR</button>
        <button type="button" class="btn btn-warning">MODICAR</button>
      </div>
    </div>
  </div>
</div>

</div>
<div class="form-group col-md-2 ">
</div>
<div class="form-group col-md-6  mapa">
<div class="card text-white bg-primary mb-12" style="max-width: 100%; height:100%">
  <div class="card-header">UBICACION GEOGRAFICA</div>
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.84046809187!2d-70.77134438508956!3d-33.50552750772653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c2d48a47a31b%3A0x9e73bd8fb1b4b146!2sLibertad%20914%2C%20Maip%C3%BA%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1591773488345!5m2!1ses!2scl" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 
</div>
</div>
</div>
</div>

</div>

<footer class=" footer ">
<div class="container">
<div class="row">
        <div class="col-md-3"> 
          <ul class="row">
            	<a href="https://www.techo.org/chile/"><img src="https://www.techo.org/chile/wp-content/themes/techochile/images/head/logo.png" alt="Chile" title="Chile" class="logo-foot"></a>
                </ul>
                
        
            <ul class="social_icons row">
              <li class="facebook"><a href="https://www.facebook.com/TECHOchile/" target="_blank"><i class=" fab fa-facebook"></i></a></li>               
              <li class="twitter"><a href="https://twitter.com/TECHOChile" target="_blank"><i class=" fab fa-twitter"></i></a></li>               
              <li class="instagram"><a href="https://www.instagram.com/techochile" target="_blank"><i class=" fab fa-instagram"></i></a></li>                
              <li class="youtube"><a href="https://www.youtube.com/user/untechoparachile" target="_blank"><i class=" fab fa-youtube"></i></a></li>                
              <li class="linkedin"><a href="https://www.linkedin.com/company/techo-chile/" target="_blank"><i class="fab fa-linkedin"></i></a></li>              	
              

          </ul>
          
        </div>
        <div class="col-md-5 text-light  text-right">
            <br> <br>
         <div class="row ">
                 <h7>PROYECTO TECHO-CHILE 2020   GERARDO FARÍAS  <i class="far fa-registered"></i></h7>
            </div>
            
        </div>
</div>

</div>

</footer>

<script src="https://kit.fontawesome.com/18782b87ee.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>


