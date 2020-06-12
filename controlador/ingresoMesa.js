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



    