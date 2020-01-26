<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <head>
        <title>
            Conversion dolares a pesos.
        </title>
    </head>

    <script>
    function proceso(txtdolares){
        var parametros={
            "txtdolares" : txtdolares
        };
    }
    $.ajax({
        data: parametros,
        url: "calcular.php",
        type: "post",
        beforeSend: function(){
            $('#resultado').html("Procesando, espere...");
        },
        success: function(response){
            $('#resultado').html(response);
        }
    })
    
    </script>


    <body>
        <h2>
            Conversion dolares a pesos.
        </h2>
        <form name="form1" method="POST">
            Ingrese el valor de dolares a convertir: <input type="text" name="txtdolares" id="txtdolares">
            <br>
            <input type="button" name="btnconvertir" id="btnconvertir" value="Convertir" onclick="proceso($('#txtdolares'));return false;">
        </form>
        <span id="resultado"></span>
        <script src="jquery-3.4.1.js"></script>
    </body>
</html>