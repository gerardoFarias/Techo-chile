
   $.ajax(
    { url:"/Techo-chile/api/regions.php",
      method:"GET",
      dataType:"json"
    }
    ).done(function(data){
        
       console.log(data)
        llenarRegiones(data.regiones)
    }).fail(function(){});
    
    
    var llenarRegiones=function(data){
        var select = $("#regiones");
       select.html("");
       data.forEach(e=>{
            var opt  = "<option value='"+e.region_techo+"'>"+e.region+"</option>";
            select.append(opt); 
       })
    };
     
    
    $("#regiones").change(function(){
    
      cargarMesasDeTrabajo($(this).val());
     //cargarProvincia($(this).val());
     
    });

    var cargarMesasDeTrabajo = function(idRegion){
      $.ajax(
        { 
          url:"/Techo-chile/api/mesaTrabajo.php?idRegion=" +idRegion,
          method:"GET",
          datatype:"json"             

        }).done(function(data){
    console.log(data)
            llenarTabla(data.mesasTrabajos)
        
        });
    };

    var llenarTabla= function(data){

      var select = $('#tabla');
      select.html("");
      data.forEach(e=>{

         var tab ="<tr>"+"<td >"+e.nombre+"</td>"+"<td >"+e.comunidad+"</td>"+"<td >"+e.region+"</td>"+"</tr>"
              select.append(tab); 
      })


    };


    
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
       