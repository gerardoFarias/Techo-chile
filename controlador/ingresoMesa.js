$.ajax(
    { url:"/Techo-chile/api/regions.php",
      method:"GET",
      dataType:"json"
    }
    ).done(function(data){
        
       console.log(data)
        llenarRegionesR(data.regiones)
    }).fail(function(){});
    
    
    var llenarRegionesR=function(data){
        var select = $("#SelecRegion");
       select.html("");
       data.forEach(e=>{
            var opt  = "<option value='"+e.id+"'>"+e.region+"</option>";
            select.append(opt); 
       })
    };


    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2VyZmFyZ2FsIiwiYSI6ImNrYmJmbWI5OTAwdDYyenFlNHR6bmk0MWsifQ.npsztI6PtqfmdB3KksJlfA';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [-79.4512, 43.6568],
    zoom: 13
    });

    var geocoder = new MapboxGeocoder({
    accessToken: mapboxgl.accessToken,
    mapboxgl: mapboxgl
    });

    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));