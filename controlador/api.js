/* $(document).ready(function(){
    // Bloqueamos el SELECT de los cursos
    $("#SelecNom").prop('disabled', true);
    $("#SelectCom").prop('disabled', true);
    $("#SelecComu").prop('disabled', true);

    // Hacemos la lógica que cuando nuestro SELECT cambia de valor haga algo
    $("#SelecReg").change(function(){
        // Guardamos el select de cursos
        var comuna = $("#SelecCom");

        // Guardamos el select de alumnos
        var region = $(this);

        if($(this).val() != '')
        {
            $.ajax({
                data: { r : region.val() , f:gsm},
                url:   'https://domain.chile.techo.org/api/v2/',
                type:  'POST',
                dataType: 'json',
                beforeSend: function () 
                {
                    region.prop('disabled', true);
                },
                success:  function (r) 
                {
                    console.log(r);
                    region.prop('disabled', false);

                    // Limpiamos el select
                    comuna.find('option').remove();

                    $(r).each(function(i, v){ // indice, valor
                        comuna.append('<option value="' + v[i].id + '">' + v[i].Nombre + '</option>');
                    })

                    cursos.prop('disabled', false);
                },
                error: function()
                {
                    alert('Ocurrio un error en el servidor ..');
                    alumnos.prop('disabled', false);
                }
            });
        }
        else
        {
            cursos.find('option').remove();
            cursos.prop('disabled', true);
        }
    })
}) */