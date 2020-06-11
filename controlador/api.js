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

var defaultBounds = new google.maps.LatlngBounds(
new google.maps.Latlng(-35.675148 ),
new google.maps.Latlng(-71.5429688));

var options = {
  bounds : defaulBounds
};

var input =document.getElementById('pac-input');
map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);


var autocomplete = new google.maps.places.Autocomplete(input,options);
 
 
