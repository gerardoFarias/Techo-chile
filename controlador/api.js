
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
            });
        }



        var cargarProvincia=function(idRegion){
        
             $.ajax(
                     { 
                       url:"/Techo-chile/api/provincias.php?id=" +idRegion,
                       method:"GET",
                       datatype:"json"             
        
                     }).done(function(data){
                       console.log(data)
                           llenarProvincia(data.provincias);
        
                     });
        
        };
        

        
        var llenarProvincia=function(data){
            var select = $("#provincias");
           select.html("");
           data.forEach(e=>{
                var opt  = "<option value='"+e.region_id+"'>"+e.provincia+"</option>";
                select.append(opt); 
           })
        };
        

        


        $("#provincias").change(function(){

          cargarComuna($(this).val());
         
        });
        var cargarComuna=function(idComu){
        
        
             $.ajax(
                     { 
                       url:"/Techo-chile/api/comunas.php?id=23id=" +idComu,
                       method:"GET",
                       datatype:"json"             
        
                     }).done(function(data){
                      console.log(data)
                           llenarComunas(data.comunas);
                           
                     });
        
        };
        
        
        var llenarComunas=function(data){
            var select = $("#comunas");
           select.html("");
           data.forEach(e=>{
                var opt  = "<option value='"+e.provincia_id+"'>"+e.comuna+"</option>";
                select.append(opt); 
           })
        };
        



         $("#provincias").change(function(){

          cargarComuna($(this).val());
         
        });
        var cargarComuna=function(idComu){
        
        
             $.ajax(
                     { 
                       url:"/Techo-chile/api/comunas.php?id=23id=" +idComu,
                       method:"GET",
                       datatype:"json"             
        
                     }).done(function(data){
                      console.log(data)
                           llenarComunas(data.comunas);
                           
                     });
        
        };
        
        
        var llenarComunas=function(data){
            var select = $("#comunas");
           select.html("");
           data.forEach(e=>{
                var opt  = "<option value='"+e.provincia_id+"'>"+e.comuna+"</option>";
                select.append(opt); 
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
           
