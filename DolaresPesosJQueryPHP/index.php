<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <head>
        <title>
            Conversión de Dolares a Pesos y viceversa.
        </title>
    </head>

    <script>
    function proceso(txtnumero1, boton)
        switch(boton){
            case "dolares":
                var parametros={
                    "txtnunmero1" : txtnumero1,
                    "btndolarapeso" : boton
                };
            break;
        }
        $.ajax({
            data:parametros,
            url:'calcular.php',
            type: 'post',
            beforeSend: function(){
                $('#resultado').html('Cargando.');
            },
            success: function(response){
                $('#resultado').html('Cargando.');
            }
        });
    </script>


    <body>
        <h2>
            Conversión de Dolares a Pesos
        </h2>
        <form name="form1" method="POST"> 
            Ingrese el valor de Dólares a convertir: <input type="text" name="txtnumero1" id="txtnumero1">          
            <input type="button" name="btndolarapeso" id="btndolarapeso" onclick="proceso($('#txtnumero1').val(),$('#btndolarapeso').val());" value="dolares">
            <br>
        </form>
        <span id="resultado"></span>

        <script src="jquery-3.4.1.js"></script>
    </body>
</html>