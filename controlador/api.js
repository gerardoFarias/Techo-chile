var region = document.getElementById('SelecRegion');


region.addEventListener('change',function(){
    var selectedOption = this.options[region.selectedIndex];
   var selector = selectedOption.value;
   
    const formData = new FormData()
    formData.append('f', 'gms');
    formData.append('region', selector); 
    
  
  fetch('https://domain.chile.techo.org/api/v2/', {
    method: 'POST',
    body: formData
  })
  .then(r => r.json())
  .then(data => {
      var comuna = data.data
    console.log(comuna);

    var filtro = comuna.filter(con => con.comuna);
    consolel.log()
    
  })
  

  });


/* 
  $(document).ready(function(){
      $('#ingresar').click(function(){
      var user = ('#NombreMo').val();
      var pass = $('#ContMo').val();

        if($.trim(user).lenght > 0 && $.trim(pass).lenght > 0){
            $.ajax({

              url : "../model/usuario.php",
              method:"POST",
              data : {
             }



            }),
        }

          });

    }); */



  
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2VyZmFyZ2FsIiwiYSI6ImNrYmJmbWI5OTAwdDYyenFlNHR6bmk0MWsifQ.npsztI6PtqfmdB3KksJlfA';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center:[-70.669266,-33.448891],
    zoom:10
    });


    var geocoder = new MapboxGeocoder({
      accessToken: mapboxgl.accessToken,
      mapboxgl: mapboxgl
      });
       
      document.getElementById('geocoder').appendChild(geocoder.onAdd(map));