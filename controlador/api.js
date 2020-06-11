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
      
    console.log(data.data);
  })
  

  });






