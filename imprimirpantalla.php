<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir Página Completa</title>
    <!-- Estilos opcionales para personalizar la apariencia -->
    <style>
 .ubuntu-light {
  font-family: "Ubuntu", sans-serif;
  font-weight: 300;
  font-style: normal;
}
.ubuntu-regular {
  font-family: "Ubuntu", sans-serif;
  font-weight: 400;
  font-style: normal;
}
.ubuntu-medium {
  font-family: "Ubuntu", sans-serif;
  font-weight: 500;
  font-style: normal;
}
.ubuntu-bold {
  font-family: "Ubuntu", sans-serif;
  font-weight: 700;
  font-style: normal;
}
.ubuntu-light-italic {
  font-family: "Ubuntu", sans-serif;
  font-weight: 300;
  font-style: italic;
}
.ubuntu-regular-italic {
  font-family: "Ubuntu", sans-serif;
  font-weight: 400;
  font-style: italic;
}
.ubuntu-medium-italic {
  font-family: "Ubuntu", sans-serif;
  font-weight: 500;
  font-style: italic;
}
.ubuntu-bold-italic {
  font-family: "Ubuntu", sans-serif;
  font-weight: 700;
  font-style: italic;
}

        /* Estilos para el botón de impresión */
        #btnImprimir {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }

body{
  background:#FBFBFB; 
  padding:0px;
  height: 100vh; /* Establece la altura del body al 100% del viewport height */


}

  .hd{
    padding:0px;
  }
    .mate{
        display:none;
        
    }
    .row2mate{
        
        display:none;
        
    }


    .btnconsulta {
            background-color: #6A00A7;
            color: #ffffff;
            border: none;
            border-radius: 105px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        

    }
    .btnconsulta2 {
    background-color: #6A00A7;
    padding: 11px;
    margin: 20px;
    color: #ffffff;
    border: none;
    border-radius: 105px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
    .form-control[readonly] {
     background: white;
     font-family:'Ubuntu';
     text-align:center;
    }
    .form-select
    {
     background: white;
     font-family:'Ubuntu';
     text-align:center;
    }

    p{
       line-height: 20px;
       /*margin-left: 100px;*/
       font-family: 'Ubuntu';
       font-size: 15px;}

.labeltech{
margin-left:-25px;

}
    /* ... estilos adicionales para las celdas, bordes, etc. ... */
    .sectiontable {
      width: 75%; /* Ajusta el ancho del contenedor según sea necesario */
      text-align:center;
      overflow-x: auto; /* Agrega una barra de desplazamiento horizontal si es necesario */
    

    }

    table {
      width: 80%;
      border-collapse: collapse;
      margin-left: 90px;
        }

    .bordernone {background:#FBFBFB;
      
    
        
    }

    .bordernone {
    border-left: 2px solid rgba(77, 9, 248, 0.475);
    border-top: none;
    border-bottom: none;
    background; 
}



    button, input, optgroup, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    background-color: #F0F0F0;
}
/*td {border: 2px solid rgba(77, 9, 248, 0.475);
    border-spacing: 0cap;
    padding: 10px 20px; 
    font-size: 13px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
*/

    td {
  border: 2px solid rgb(104,49,147);;
  border-image: linear-gradient(0deg, rgba(104,49,147,1) 0%, rgba(52,192,197,1) 100%);
  padding: 2px; 
  font-size: 13px;
  font-family: 'Ubuntu';
  border-spacing: 1px;
   
  }





th {
   /*background-color: white;*/
    padding: 10px;
    /* border: 1px solid rgb(133, 101, 239); */
    font-size: 15px;
    /* font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; */
}


.colum_title {
background: transparent;
color:#363636;
text-align:center;
font-size:14px;
border: 2px solid rgb(103,49,147);
font-weight:800;

    }

 .celdanone{
  border:none;
 }
/*Estilo de Circuito de Ventas*/
 .borderventas{
   border:2px solid rgb(52,192,197);
   border-bottom:none;
   font-size: 15px;
  font-weight: 600;
  color: #34C0c5;
 } 
 
 .celdavaciaborder{
border:2px solid rgb(52,192,197);
border-top:none;
border-bottom:none;
font-size: 15px;
  font-weight: 600;
  color: rgb(52,192,197);

}
.celdavaciaborderbottom {
    border:2px solid rgb(52,192,197);
    border-top:none;

}
 /*FIN Estilo de Circuito de Ventas*/
 /*Estilo Circuito de Compras */
 .bordercompras{
   border:2px solid rgb(104,49,147);
   border-bottom:none;
   font-size: 15px;
  font-weight: 600;
  color: rgb(104,49,147);
 } 

.bordernonecompras{
border:2px solid rgb(104,49,147);
border-top:none;
border-bottom:none;
font-size: 15px;
  font-weight: 600;
  color: rgb(104,49,147);
}

.celdavaciaborderbottomcompras {
    border:2px solid rgb(104,49,147);
    border-top:none;

}
/*FIN Estilo Circuito de Compras */

/*Estilo Circuito Específico */
.borderespecifico{
   border:2px solid rgb(23,43,83);
   border-bottom:none;
   font-size: 15px;
  font-weight: 600;
  color: rgb(23,43,83);
 } 

.bordernoneespecifico{
border:2px solid rgb(23,43,83);
border-top:none;
border-bottom:none;
font-size: 15px;
  font-weight: 600;
  color: rgb(23,43,83);
}

.celdavaciaborderbottomespecifico {
    border:2px solid rgb(23,43,83);
    border-top:none;

}
/*FIN Estilo Circuito Específico */
/*Estilo de Acceso Virtuales1*/
.bordervirtuales1{
    display: table-cell;
   border:2px solid rgb(52,192,197);
   border-bottom:none;
   font-size: 15px;
  font-weight: 600;
  color: #34C0c5;
 } 
 
 .celdavaciabordervirtuales1{
border:2px solid rgb(52,192,197);
border-top:none;
border-bottom:none;

}
.celdavaciaborderbottomvirtuales1 {
    border:2px solid rgb(52,192,197);
    border-top:none;

}

/*FIN Estilo de Acceso Virtuales1*/

 /*Estilo Accesos Virtuales2 */
 .bordervirtuales2{
   border:2px solid rgb(104,49,147);
   border-bottom:none;
   font-size: 15px;
  font-weight: 600;
  color: rgb(104,49,147);
 } 

.bordernonevirtuales2{
border:2px solid rgb(104,49,147);
border-top:none;
border-bottom:none;
}

.celdavaciaborderbottomvirtuales2 {
    border:2px solid rgb(104,49,147);
    border-top:none;

}
/*FIN Estilo Accesos Virtuales2 */


 .bordervirtuales3 {
    display: grid;
    border-bottom-left-radius: 30px;
    border-top: none;
   
    font-size: 15px;
    font-weight: 700;
    height: 45px;
   }


.sectiontablesecond {
    text-align: center;
    width: 60%;
    margin-left: 300px;
}
pre {
    display: none;
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
    font-size: .875em;
}

.imputw{

width:53px;
}

.resultimputw{
  width:90px;
}

.anchofeetotal{
width: 100px;
}

.altofila{
font-size:13px;
font-family:'Ubuntu';
font-weight:500;

}
.anchocolumna1{
width: 200px;
}

.anchocolumnafinal{
font-weight:700;

}

.anchodecolumna2 {

width: 100px;
}

.anchocantidadaccesos {
width: 50px;
}

.borderintegral {
  display: table-cell;
  border-top-left-radius: 30px;
  border: solid 2px rgb(16, 81, 155);
  font-size: 15px;
  font-weight: 600;
  color: rgb(16, 81, 155);
  flex-wrap: nowrap;}

.one{
margin-top:-10px;   
width: 200px;
height: 25px;
border: 2px solid #6A00A7;
border-radius: 5px;
text-align: center;
/*padding: 10px 20px  10px 20px;*/
font-family:'Ubuntu';}
 
.onevence{
width: 200px;
height: 25px;
border: 2px solid #6A00A7;
border-radius: 5px;
text-align: center;
/*padding: 10px 20px  10px 20px;*/
font-family:'Ubuntu';}

.one2{
margin-top:-10px;   
height: 25px;
border: 2px solid #6A00A7;
border-radius: 5px;
text-align: center;
/*padding: 10px 20px  10px 20px;*/
font-family:'Ubuntu';}

.ones {
margin-top:-10px;   
height: 25px;
border: 2px solid #6A00A7;
border-radius: 5px;
text-align: center;
/*padding: 10px 20px  10px 20px;*/
font-family:'Ubuntu';}

button, input, optgroup, select, textarea{
background:#FBFBFB;
font-family:'Ubuntu';
font-size:15px;
text-align: center;}



.sectionht {
   
   margin-left: 150px;
}


select {
        -webkit-appearance: none; /* Para Safari/Chrome */
        -moz-appearance: none; /* Para Firefox */
        appearance: none; /* Para otros navegadores */
       
        
        }
        /* Estilo para ocultar el texto del input file */
        .custom-file-input {
            visibility: hidden;
            width: 0;
        }
        .custom-file-label {
            display: none;
        }
        .custom-upload-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group label {
            position: absolute;
            top: -15px;
            left: 0;
            font-size: 14px;
            color: #666;
            background-color: #fff;
            padding: 0 8px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: none;
            border-bottom: 1px dashed #00CDCD; /* Color de la línea punteada */
            outline: none;
        }
        .text-under-line{
            font-family:'Ubuntu';
            font-size: 14px;
            color:#002955;
            font-weight:400;
        }

        body {
            font-family: Arial, sans-serif;
        /*    padding-bottom: 60px; /* Ajuste para dejar espacio para el footer */
            text-align: center;
        }
        #pageLinks {
            margin-top: 20px;
        }
        #pageLinks a 
        {
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            margin: 15px;
            border: 1px solid #ccc;
            border-radius: 50%;
            text-decoration: none;
            color: #333;
            font-family:'Ubuntu';
            font-weight: bold;
            cursor:pointer;
            margin: 10px;
        }
  



    #pageLinks a:hover {
    color: #ffff;
    background:#6A00A7; /* Cambia el color del texto a rojo al pasar el cursor sobre el enlace */
}
        
        #footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50px;
            background-color: #f0f0f0;
            line-height: 50px;
            text-align: center;
        }

.coloractivo{
 background:#5ddede;}


</style>



</head>
<body>

<div class="container">
    <!-- Contenido de la página -->
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Razón Social AFIP</title>
   
   
</head>
<body>
<form class="mate" method="post">
        <label for="Cuit-Cuil">Código Tributario</label>
        <input type="text" name="Cuit-Cuil" id="Cuit-Cuil" value="<?php echo isset($_POST['Cuit-Cuil']) ? htmlspecialchars($_POST['Cuit-Cuil']) : ''; ?>" required>
        <button type="submit">Consultar Razón Social</button>
    </form>

    <div class="row">
        <?php
        // Manejar la solicitud desde el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Cuit-Cuil'])) {
            $cuitOrCuil = $_POST['Cuit-Cuil'];

            // Validar el número de CUIT/CUIL aquí según tus requisitos
            if (validarCuitCuil($cuitOrCuil)) {
                // Realizar el procesamiento de la consulta y mostrar resultados
                echo '';
            } else {
                // Mostrar un mensaje de error si el número no es válido
                echo '<p style="color: red;">Número de CUIT/CUIL inválido.</p>';
            }
        }
        ?>
    </div>
<?php

// Función para validar un número de CUIT/CUIL (ejemplo ficticio)
function validarCuitCuil($cuitOrCuil) {
  // Implementa tu lógica de validación aquí
  // Por ejemplo, verifica la longitud y el formato del número
  return preg_match('/^\d{11}$/', $cuitOrCuil); // Validar 11 dígitos numéricos
}

// Función para obtener la razón social basada en el número de CUIT/CUIL (ejemplo ficticio)
function obtenerRazonSocial($cuitOrCuil) {
  // Implementa la lógica para consultar y obtener la razón social
  // Ejemplo: consulta a una base de datos o servicio externo
  // Retorna la razón social correspondiente al CUIT/CUIL
  return 'Nombre de Empresa'; // Ejemplo ficticio de resultado
}

// Función para obtener el token de autenticación del servidor Auth Server
function obtenerTokenAutenticacion() {
    $authUrl = 'https://auth.infosis.tech/oauth/token'; // URL del servidor de autenticación
    
    // Configuración de la solicitud para obtener el token
    $data = array(
        'grant_type' => 'client_credentials'
    );

// Realizar la solicitud POST al servidor de autenticación
    $curl = curl_init($authUrl);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Authorization: Basic YXBpLWVjb21tZXJjZTp3ekd1MnVHZFJZNllnRWRO'
        ));
    $response = curl_exec($curl);
    curl_close($curl);

    // Decodificar la respuesta JSON y extraer el token de acceso
    $tokenData = json_decode($response, true);
    
    return $tokenData['access_token'];
}

// Función para obtener el token de autenticación del servidor EbillingAR
function obtenerTokenEbillingAR($accessToken) {
    $authUrl = 'https://api.infosis.tech/ebilling-ar/ticket'; // URL de la API de EbillingAR
    
    // Configuración de la solicitud para obtener el token
    $data = array(
        'cuit' => '30708547472',
        'port' =>  '8070',
        'service' =>  'ws_sr_padron_a5',
    );
    
    $queryParams = http_build_query($data);
    $url = $authUrl . '?' . $queryParams;
    
    // Realizar la solicitud POST al servidor de autenticación
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$accessToken,
        ));

        
    $response = curl_exec($curl);

    curl_close($curl);

    // Decodificar la respuesta JSON y extraer el token de acceso
    $tokenData = json_decode($response, true);

    return $tokenData;
}

// Función para realizar una solicitud a la API de Padron A5 con el token de acceso
function consultarPadronA5($accessToken, $sign, $cuitOrCuil) {
    // URL del servicio SOAP
    $wsdl = 'https://aws.afip.gov.ar/sr-padron/webservices/personaServiceA5?WSDL';
    
    // Crear instancia de SoapClient
    $client = new SoapClient($wsdl, array('trace' => 1));
    
    // Parámetros para la solicitud SOAP
    $params = array(
        'token' => $accessToken,
        'sign' => $sign,
        'cuitRepresentada' => '30708547472',
        'idPersona' => $cuitOrCuil,
        // Agrega aquí los parámetros adicionales según lo necesites
    );

    
    try {
        // Realizar la llamada al método del servicio SOAP
        $response = $client->__soapCall('getPersona', array($params));
        
        // Manejar la respuesta del servicio
        return $response;
    } catch (SoapFault $e) {
        // Manejar errores si ocurren
        echo "Error: " . $e->getMessage();
    }

}

// Manejar la solicitud desde el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Cuit-Cuil'])) {
    $cuitOrCuil = $_POST['Cuit-Cuil'];

    // if (MySQL NO Tenes un token valido ? )
    
        // Obtener token de autenticación
        $authToken = obtenerTokenAutenticacion();
        
        // Obtener token de acceso para EbillingAR
        $ebillingToken = obtenerTokenEbillingAR($authToken);
        $token = $ebillingToken['token'];
        $sign = $ebillingToken['sign'];
        
        // GUARDAR EL TOKEN VALIDO DE EBILLING AR en TU MYSQL

    // FIN (Tenes un token valido)

    // Consultar el padrón A5 con el token de acceso obtenido
    $resultadoConsulta = consultarPadronA5($token, $sign, $cuitOrCuil);
    
   // Manejar el resultado de la consulta
    if ($resultadoConsulta) {
        
        if ($resultadoConsulta->personaReturn->datosGenerales->tipoPersona == "FISICA"){
            $razonSocial = $resultadoConsulta->personaReturn->datosGenerales->nombre . " ". $resultadoConsulta->personaReturn->datosGenerales->apellido;
        } else {
            $razonSocial = $resultadoConsulta->personaReturn->datosGenerales->razonSocial;
        }
       // Procesar los datos obtenidos, por ejemplo, mostrarlos en la página web
        echo "<pre>";
        print_r( "Razón Social: ". $razonSocial);
        echo "</pre>";
    } else {
        echo "";
    }
}

?>

<section class="sectionht" style="padding: 0px, 0px, 30px, 0px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
            <form method="POST" action="registro.php" id="consultaForm">
    
              <!-- Campo Código Tributario -->
                <label for="Cuit-Cuil" class="form-label">Código Tributario</label>
                <div class="input-group">
                <input type="text" name="Cuit-Cuil" id="Cuit-Cuil" class="form-control" required oninput="guardarCuit()">
                    <button type="submit" class="btn btn-primary btnconsulta">Consultar</button>
                </div>
            </div>

            <div class="col-md-4">
                <!-- Campo Razón Social -->
                <label for="razon_social" class="form-label">Razón Social</label>
                <?php if (isset($razonSocial)) : ?>
                    <input type="text" id="razon_social" name="razon_social" value="<?php echo htmlspecialchars($razonSocial); ?>" class="form-control" readonly>
                <?php else : ?>
                    <input type="text" id="razon_social" name="razon_social"  class="form-control" readonly>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <!-- Campo Tecnología -->
                <label for="tecnologia" class="form-label labeltech">Tecnología</label>
                <select class="form-select" id="tecnologia" name="tecnologia" onchange="actualizarCelda1()">
                    <option value="seleccionar">Seleccionar</option>
                    <option value="express">Express</option>
                    <option value="advanced">Advanced</option>
                    <option value="premium">Premium</option>
                </select>
            </div>
        </div>
    </div>
    <!--Script correspondiente al campo cuit para que no se borre el campo al validad-->
<script>
    // Función para guardar el valor del CUIT en localStorage
    function guardarCuit() {
        var cuitInput = document.getElementById('Cuit-Cuil');
        var cuitValue = cuitInput.value.trim();

        if (cuitValue !== '') {
            localStorage.setItem('lastCuit', cuitValue);
        }
    }

    // Función para restaurar el último CUIT ingresado al cargar la página
    window.onload = function() {
        var lastCuit = localStorage.getItem('lastCuit');
        if (lastCuit) {
            var cuitInput = document.getElementById('Cuit-Cuil');
            cuitInput.value = lastCuit;
        }
    };
</script>
</section>


      </form>
    </div>
    </div>
    </div>

  
   </section>
 
<style>
     /* ... estilos adicionales para las celdas, bordes, etc. ... */
    .sectiontable {
      width: 75%; /* Ajusta el ancho del contenedor según sea necesario */
      text-align:center;
      overflow-x: auto; /* Agrega una barra de desplazamiento horizontal si es necesario */
    

    }

    table {
      width: 80%;
      border-collapse: collapse;
      margin-left: 90px;
        }

    .bordernone {background:#FBFBFB;
      
    
        
    }

    .bordernone {
    border-left: 2px solid rgba(77, 9, 248, 0.475);
    border-top: none;
    border-bottom: none;
    background; 
}



    button, input, optgroup, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    background-color: #F0F0F0;
}
/*td {border: 2px solid rgba(77, 9, 248, 0.475);
    border-spacing: 0cap;
    padding: 10px 20px; 
    font-size: 13px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
*/

    td {
  border: 2px solid rgb(104,49,147);;
  border-image: linear-gradient(0deg, rgba(104,49,147,1) 0%, rgba(52,192,197,1) 100%);
  padding: 2px; 
  font-size: 13px;
  font-family: 'Ubuntu';
  border-spacing: 1px;
   
  }





th {
   /*background-color: white;*/
    padding: 10px;
    /* border: 1px solid rgb(133, 101, 239); */
    font-size: 15px;
    /* font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; */
}


.colum_title {
background: transparent;
color:#363636;
text-align:center;
font-size:14px;
border: 2px solid rgb(103,49,147);
font-weight:800;

    }

 .celdanone{
  border:none;
 }
/*Estilo de Circuito de Ventas*/
 .borderventas{
   border:2px solid rgb(52,192,197);
   border-bottom:none;
   font-size: 15px;
  font-weight: 600;
  color: #34C0c5;
 } 
 
 .celdavaciaborder{
border:2px solid rgb(52,192,197);
border-top:none;
border-bottom:none;
font-size: 15px;
  font-weight: 600;
  color: rgb(52,192,197);

}
.celdavaciaborderbottom {
    border:2px solid rgb(52,192,197);
    border-top:none;

}
 /*FIN Estilo de Circuito de Ventas*/
 /*Estilo Circuito de Compras */
 .bordercompras{
   border:2px solid rgb(104,49,147);
   border-bottom:none;
   font-size: 15px;
  font-weight: 600;
  color: rgb(104,49,147);
 } 

.bordernonecompras{
border:2px solid rgb(104,49,147);
border-top:none;
border-bottom:none;
font-size: 15px;
  font-weight: 600;
  color: rgb(104,49,147);
}

.celdavaciaborderbottomcompras {
    border:2px solid rgb(104,49,147);
    border-top:none;

}
/*FIN Estilo Circuito de Compras */

/*Estilo Circuito Específico */
.borderespecifico{
   border:2px solid rgb(23,43,83);
   border-bottom:none;
   font-size: 15px;
  font-weight: 600;
  color: rgb(23,43,83);
 } 

.bordernoneespecifico{
border:2px solid rgb(23,43,83);
border-top:none;
border-bottom:none;
font-size: 15px;
  font-weight: 600;
  color: rgb(23,43,83);
}

.celdavaciaborderbottomespecifico {
    border:2px solid rgb(23,43,83);
    border-top:none;

}
/*FIN Estilo Circuito Específico */
/*Estilo de Acceso Virtuales1*/
.bordervirtuales1{
    display: table-cell;
   border:2px solid rgb(52,192,197);
   border-bottom:none;
   font-size: 15px;
  font-weight: 600;
  color: #34C0c5;
 } 
 
 .celdavaciabordervirtuales1{
border:2px solid rgb(52,192,197);
border-top:none;
border-bottom:none;

}
.celdavaciaborderbottomvirtuales1 {
    border:2px solid rgb(52,192,197);
    border-top:none;

}

/*FIN Estilo de Acceso Virtuales1*/

 /*Estilo Accesos Virtuales2 */
 .bordervirtuales2{
   border:2px solid rgb(104,49,147);
   border-bottom:none;
   font-size: 15px;
  font-weight: 600;
  color: rgb(104,49,147);
 } 

.bordernonevirtuales2{
border:2px solid rgb(104,49,147);
border-top:none;
border-bottom:none;
}

.celdavaciaborderbottomvirtuales2 {
    border:2px solid rgb(104,49,147);
    border-top:none;

}
/*FIN Estilo Accesos Virtuales2 */


 .bordervirtuales3 {
    display: grid;
    border-bottom-left-radius: 30px;
    border-top: none;
   
    font-size: 15px;
    font-weight: 700;
    height: 45px;
   }


.sectiontablesecond {
    text-align: center;
    width: 60%;
    margin-left: 300px;
}
pre {
    display: none;
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
    font-size: .875em;
}

.imputw{

width:53px;
}

.resultimputw{
  width:90px;
}

.anchofeetotal{
width: 100px;
}

.altofila{
font-size:13px;
font-family:'Ubuntu';
font-weight:500;

}
.anchocolumna1{
width: 200px;
}

.anchocolumnafinal{
font-weight:700;

}

.anchodecolumna2 {

width: 100px;
}

.anchocantidadaccesos {
width: 50px;
}

.borderintegral {
  display: table-cell;
  border-top-left-radius: 30px;
  border: solid 2px rgb(16, 81, 155);
  font-size: 15px;
  font-weight: 600;
  color: rgb(16, 81, 155);
  flex-wrap: nowrap;}

.one{
margin-top:-10px;   
width: 200px;
height: 25px;
border: 2px solid #6A00A7;
border-radius: 5px;
text-align: center;
/*padding: 10px 20px  10px 20px;*/
font-family:'Ubuntu';}
 
.onevence{
width: 200px;
height: 25px;
border: 2px solid #6A00A7;
border-radius: 5px;
text-align: center;
/*padding: 10px 20px  10px 20px;*/
font-family:'Ubuntu';}

.one2{
margin-top:-10px;   
height: 25px;
border: 2px solid #6A00A7;
border-radius: 5px;
text-align: center;
/*padding: 10px 20px  10px 20px;*/
font-family:'Ubuntu';}

.ones {
margin-top:-10px;   
height: 25px;
border: 2px solid #6A00A7;
border-radius: 5px;
text-align: center;
/*padding: 10px 20px  10px 20px;*/
font-family:'Ubuntu';}

button, input, optgroup, select, textarea{
background:#FBFBFB;
font-family:'Ubuntu';
font-size:15px;
text-align: center;}



.sectionht {
   
   margin-left: 150px;
}

</style>

<body>

<br>

<section class="sectionht" style="padding: 0px, 0px, 0px, 0px;">
      <h2 class="titulosass" style="display: flex; flex-direction: column; align-items: center; font-family:'Ubuntu'; font-size:25px; width:auto">CAPÍTULO I - FEE MENSUAL SERVICIO DE SOFTWARE (ABONO SAAS)</h2>
       <br>
 <p style=
  "text-align: justify;
    font-size: 16px;
    font-family: 'Ubuntu';
    padding: 10px;">
  El Fee Mensual del servicio de software incluye el espacio en el Datacenter AWS, la usabilidad de los alcances y 
  funcionalidades del sistema de conforme los productos contratados, el servicio de mantenimiento, las actualizaciones 
  automáticas y los evolutivos funcionales que se lanzan para el ecosistema ZEUS cloud ERP, el respaldo de datos, el servicio 
  continuo y el soporte asociado facilitado por el Servicio al Cliente y la Plataforma de Ayuda.
  </p>
</section>

<section class="sectionht">
<table id="chasqui">
    <colgroup>
        <col>
        <col>
        <col>
        <col>
        <col>
   </colgroup>

    <thead>
        <tr>
            <th class="bordernone celdanone"></th>
            <th class="colum_title anchocolumna1">DETALLES DE <br>CONCEPTOS</th>
            <th class="colum_title">FEE POR CONCEPTO</th>
            <th class="colum_title anchocantidadaccesos">CANTIDAD<br>ACCESOS</th>
            <th class="colum_title anchofeetotal">FEE TOTAL MENSUAL</th>
        </tr>
    </thead>
    <tbody>
      <tr>
                <td class="borderintegral anchodecolumna2">Gestión Integral</td>
                <td class="altofila anchocolumna1">Acceso Simultáneo FULL (Gestión Integral)</td>
                <td class="altofila">$<input type="text" id="celda1" class="imputw"  readonly oninput="calcularTotal('celda1', 'celda2', 'resultado1')"></td>
                <td class="anchocantidadaccesos"><input type="text" id="celda2" class="imputw" oninput="calcularTotal('celda1', 'celda2', 'resultado1')"></td>
                <td class="altofila">$<input type="text" id="resultado1" class="resultimputw" readonly></td>
        </tr>

        <tr>
                <td class="borderventas anchodecolumna2"></td>
                <td class="altofila anchocolumna1">Acceso Simultáneo POS (Punto de Ventas)</td>
                <td >$<input type="text" id="celda3" class="imputw" readonly oninput="calcularTotal('celda3', 'celda4', 'resultado2')"></td>
                <td class="anchocantidadaccesos"><input type="text" id="celda4" class="imputw" oninput="calcularTotal('celda3', 'celda4', 'resultado2')"></td>
                <td>$<input type="text" id="resultado2" class="resultimputw" readonly></td>

        </tr>
       
        <tr>
                <td class="anchodecolumna2 celdavaciaborder">Circulo de Ventas</td>
                <td class="altofila anchocolumna1">Acceso Simultáneo POS (Android)</td>
                <td>$<input type="text" id="celda31" class="imputw" readonly oninput="calcularTotal('celda31', 'celda41', 'resultado21')"></td> 
                <!-- recordar que aun es la celda con los valores de la anterior-->
                <td class="anchocantidadaccesos"><input type="text" id="celda41" class="imputw"  oninput="calcularTotal('celda31', 'celda41', 'resultado21')"></td>
                <td>$<input type="text" id="resultado21" class="resultimputw" readonly></td>

        </tr>
     
        <tr>
               <td class="anchodecolumna2 celdavaciaborder"></td>
               <td class="altofila anchocolumna1">Acceso Simultáneo POS Pack Plus + # <input type="text" required style="width: 32px"></td>
               <td class="imputw">Bonificado</td>
               <td class="anchocantidadaccesos"><input type="text" id="celda81bon" class="imputw" oninput="calcularTotal('celda71', 'celda81bon', 'resultado4bon')"></td>
               <td class="resultimputw">$0.00</td>
        </tr>

        <tr>
               <td class="anchodecolumna2 celdavaciaborderbottom"></td>
               <td class="altofila anchocolumna1">Acceso Simultáneo VND (Vendor)</td>
               <td>$<input type="text" id="celda7" class="imputw" readonly oninput="calcularTotal('celda7', 'celda8', 'resultado3')"></td>
               <td class="anchocantidadaccesos"><input type="text" id="celda8"  class="imputw" oninput="calcularTotal('celda7', 'celda8', 'resultado3')"></td>
               <td>$<input type="text" id="resultado3" class="resultimputw" readonly></td>

            </tr>

            <tr>
               <td class="bordercompras anchodecolumna2"></td>
               <td class="altofila anchocolumna1">Acceso Simultáneo POP (Punto de Compras)</td>
               <td>$<input type="text" id="celda71" class="imputw" readonly oninput="calcularTotal('celda71', 'celda81', 'resultado4')"></td>
               <td class="anchocantidadaccesos"><input type="text" id="celda81"  class="imputw" oninput="calcularTotal('celda71', 'celda81', 'resultado4')"></td>
               <td>$<input type="text" id="resultado4" class="resultimputw" readonly></td>

            </tr>

            <tr>
               <td class="bordernonecompras anchodecolumna2">Circuito de Compras</td>
               <td class="altofila anchocolumna1">Acceso Simultáneo POP Pack Plus + # <input type="text" required style="width: 32px"></td>
               <td class="imputw">Bonificado</td>
               <td class="anchocantidadaccesos"><input type="text" id="celda83bon" class="imputw" oninput="calcularTotal('celda71', 'celda83bon', 'resultado4bon')"></td>
               <td class="resultimputw">$0.00</td>
            </tr>
            <tr>
               <td class="celdavaciaborderbottomcompras anchodecolumna2"></td>
               <td class="altofila anchocolumna1">Acceso Simultáneo WHW (Almacén)</td>
               <td>$<input type="text" id="celda9" class="imputw" readonly oninput="calcularTotal('celda9', 'celda10', 'resultado5')"></td>
               <td class="anchocantidadaccesos"><input type="text" id="celda10"  class="imputw" oninput="calcularTotal('celda9', 'celda10', 'resultado5')"></td>
               <td>$<input type="text" id="resultado5" class="resultimputw" readonly></td>
            </tr>

            <tr>
               <td class="borderespecifico anchodecolumna2"></td>
               <td class="altofila anchocolumna1">Acceso Simultáneo TCP (Precios/Stock)</td>
               <td>$<input type="text" id="celda11" class="imputw" readonly oninput="calcularTotal('celda11', 'celda12', 'resultado6')"></td>
               <td class="anchocantidadaccesos"><input type="text" id="celda12"  class="imputw" oninput="calcularTotal('celda11', 'celda12', 'resultado6')"></td>
               <td>$<input type="text" id="resultado6" class="resultimputw" readonly></td>
            </tr>
             
        <!--nuevos items dentro de Circuito Específico-->
            <tr>
               <td class="bordernoneespecifico anchodecolumna2">Circuito Específico</td>
               <td class="altofila anchocolumna1">Acceso Simultáneo CPN (Contador Público)</td>
               <td>$<input type="text" id="celda91" class="imputw" readonly oninput="calcularTotal('celda91', 'celda101', 'resultado51')"></td>
               <td class="anchocantidadaccesos"><input type="text" id="celda101"  class="imputw" oninput="calcularTotal('celda91', 'celda101', 'resultado51')"></td>
               <td>$<input type="text" id="resultado51" class="resultimputw" readonly></td>
            </tr>
            
            <tr>
               <td class="celdavaciaborderbottomespecifico anchodecolumna2"></td>
               <td class="altofila anchocolumna1">Acceso Simultáneo PCP (Clientes/Proovedores)</td>
               <td>$<input type="text" id="celda92" class="imputw" readonly oninput="calcularTotal('celda92', 'celda102', 'resultado52')"></td>
               <td class="anchocantidadaccesos"><input type="text" id="celda102"  class="imputw" oninput="calcularTotal('celda92', 'celda102', 'resultado52')"></td>
               <td>$<input type="text" id="resultado52" class="resultimputw" readonly></td>
            </tr>
            
             <tr>
               <td class="bordervirtuales1 anchodecolumna2">Accesos Virtuales</td>
               <td class="altofila anchocolumna1">Acceso Virtual AMH (Markethub)*</td>
               <td>$<input type="text" id="celda13" class="imputw" readonly oninput="calcularTotal('celda13', 'celda14', 'resultado7')"></td>
               <td class="anchocantidadaccesos"><input type="text" id="celda14" class="imputw" oninput="calcularTotal('celda13', 'celda14', 'resultado7')"></td>
               <td>$<input type="text" id="resultado7" class="resultimputw" readonly></td>
            </tr>
             
            <tr>
               <td class="celdavaciaborderbottomvirtuales1 anchodecolumna2"></td>
               <td class="altofila anchocolumna1"> Acceso Virtual AEC (Ecommerce)**</td>
               <td>$<input type="text" id="celda15" readonly class="imputw" oninput="calcularTotal('celda15', 'celda16', 'resultado8')"></td>
               <td class="anchocantidadaccesos"><input type="text" id="celda16"  class="imputw" oninput="calcularTotal('celda15', 'celda16', 'resultado8')"></td>
               <td>$<input type="text" id="resultado8" class="resultimputw" readonly></td>
               
            </tr>

            <tr>
            <td class="bordervirtuales2 anchodecolumna2">Accesos Virtuales</td>
               <td class="altofila ">Acceso Virtual AVM (Multiempresa)</td>
               <td class="altofila">Off<input type="text" id="celda171" class="imputw" readonly oninput="calcularTotal('celda171', 'celda181', 'resultado9')">meses</td>
               <td class="anchocantidadaccesos"><input type="text" id="celda181"  class="imputw" oninput="calcularTotal('celda171', 'celda181', 'resultado9')"></td>
               <td class="altofila">(<input type="text" id="resultado9" class="resultimputw" readonly>)</td>
            </tr>

            <tr>
               <td class="celdavaciaborderbottomvirtuales2 anchodecolumna2"> </td>
               <td class="altofila anchocolumna1">Acceso Virtual AVF (Franquicia)</td>
               <td>$<input type="text" id="celda17" class="imputw" readonly oninput="calcularTotal('celda17', 'celda18', 'resultado10')"></td>
               <td class="anchocantidadaccesos"><input type="text" id="celda18" class="imputw" oninput="calcularTotal('celda17', 'celda18', 'resultado10')"></td>
               <td>$<input type="text" id="resultado10" class="resultimputw" readonly></td>
            </tr>
            
          
  </tbody>
  
  <tfoot>
      <tr>
        <td class="bordernone celdanone"></td>
        <td class="altofila anchocolumnafinal">Total Fee Mensual Servicio</td>
        <td></td>
        <td class="anchocantidadacceos" id="totalCantidadAccesos"></td>
        <td id="totalFeeMensual"></td>
      </tr>

  </tfoot>

</table>

    </section>

    <script>
    function calcularTotal(celdaId, cantidadId, resultadoId) {
        var celda = document.getElementById(celdaId);
        var cantidad = document.getElementById(cantidadId);
        var resultado = document.getElementById(resultadoId);

        resultado.value = (parseFloat(celda.value) * parseFloat(cantidad.value)) || 0;
    }

    function actualizarCelda1() {
        var tecnologia = document.getElementById('tecnologia').value.toLowerCase();
        var celda1 = document.getElementById('celda1');
        var celda3 = document.getElementById('celda3');
        var celda31 = document.getElementById('celda31');/*Nuevo*/
        var celda7 = document.getElementById('celda7');
        var celda71 = document.getElementById('celda71');
        var celda9 = document.getElementById('celda9');
        var celda91 = document.getElementById('celda91');/*Nuevo*/
        var celda92 = document.getElementById('celda92');/*Nuevo*/
        var celda11 = document.getElementById('celda11');
        var celda13 = document.getElementById('celda13');
        var celda15 = document.getElementById('celda15');
        var celda171 = document.getElementById('celda171');
        var celda17 = document.getElementById('celda17');
        // Establece el valor en la celda1 en función de la tecnología seleccionada
        if (tecnologia === 'advanced') {
          
            celda1.value = 67250;  //Acceso Simultáneo FULL (Gestión Integral)	
            celda3.value = 58438;  //Acceso Simultáneo POS (Punto de Ventas)	
            celda31.value = 30000;  //Acceso Simultáneo POS (Android)	/**Nuevo */
            celda7.value = 36988;  //Acceso Simultáneo VND (Vendor)	
            celda71.value = 50438;   //Acceso Simultáneo POP (Punto de Compras)	
            celda9.value = 36988;   //Acceso Simultáneo WHW (Almacén)	
            celda91.value = 8001;   //Acceso Simultáneo WHW (Almacén)/**Nuevo */	
            celda92.value = 8005;   //Acceso Simultáneo WHW (Almacén)/**Nuevo */	
            celda11.value = 23538; //Acceso Simultáneo TCP (Precios/Stock)
            celda13.value = 50438;   //Acceso Virtual AMH (Markethub)*	
            celda15.value = 67250;  //Acceso Virtual AEC (Ecommerce)**	
            celda171.value = 67250; //Acceso Virtual AVM (Multiempresa)		
            celda17.value = 67250;   //Acceso Virtual AVF (Franquicia)	


        } else if (tecnologia === 'advanced') {
            celda1.value = 0;
            celda3.value = 0;
        } else {
// Establece algún otro valor predeterminado o lógica para otras tecnologías
            celda1.value = 0;
        }
        // Establece el valor en la tecnología Premium
 if (tecnologia === 'premium') {
            celda1.value = 100875;  //Acceso Simultáneo FULL (Gestión Integral)	
            celda3.value = 75656;  //Acceso Simultáneo POS (Punto de Ventas)	
            celda31.value = 30000;  //Acceso Simultáneo POS (Punto de Ventas) Nuevo	
            celda7.value = 55481;  //Acceso Simultáneo VND (Vendor)	
            celda71.value = 75656;   //Acceso Simultáneo POP (Punto de Compras)	
            celda9.value = 55481;   //Acceso Simultáneo WHW (Almacén)	
            celda91.value = 1995;   //Acceso Simultáneo WHW (Almacén) Nuevo	
            celda92.value = 1998;   //Acceso Simultáneo WHW (Almacén) Nuevo	
            celda11.value = 35306; //Acceso Simultáneo TCP (Precios/Stock)
            celda13.value = 75656;   //Acceso Virtual AMH (Markethub)*	
            celda15.value = 100875;  //Acceso Virtual AEC (Ecommerce)**	
            celda171.value = 100875; //Acceso Virtual AVM (Multiempresa)		
            celda17.value = 100875;   //Acceso Virtual AVF (Franquicia)	

        } else if (tecnologia === 'premium') {
            celda1.value = 0;
            celda3.value = 0;
        } else {
            // Establece algún otro valor predeterminado o lógica para otras tecnologías
           
        }
 // Establece el valor en la tecnología Express
 if (tecnologia === 'express') {
            celda1.value = 40350;  //Acceso Simultáneo FULL (Gestión Integral)	
            celda3.value = 30263;  //Acceso Simultáneo POS (Punto de Ventas)	
            celda31.value = 30000;  //Acceso Simultáneo POS (Android nuevo)	
            celda7.value = 22193;  //Acceso Simultáneo VND (Vendor)	
            celda71.value = 30263;   //Acceso Simultáneo POP (Punto de Compras)	
            celda9.value = 22193;   //Acceso Simultáneo WHW (Almacén)	
            celda91.value = 2010;   //Acceso Simultáneo WHW (Almacén) Nuevo	
            celda92.value = 2015;   //Acceso Simultáneo WHW (Almacén) Nuevo	
            celda11.value = 14123; //Acceso Simultáneo TCP (Precios/Stock)
            celda13.value = 30263;   //Acceso Virtual AMH (Markethub)*	
            celda15.value = 40350;  //Acceso Virtual AEC (Ecommerce)**	
            celda171.value = 40350; //Acceso Virtual AVM (Multiempresa)		
            celda17.value = 40350;   //Acceso Virtual AVF (Franquicia)	

        } else if (tecnologia === 'express') {
            celda1.value = 0;
            celda3.value = 0;
        } else {
            // Establece algún otro valor predeterminado o lógica para otras tecnologías
           
        }
    // Establece el valor en la tecnología Express
 if (tecnologia === 'seleccionar') {
            celda1.value = "Seleccione Tecnología";
            celda3.value = "Seleccione Tecnología";
            celda31.value = "Seleccione Tecnología";
            celda7.value = "Seleccione Tecnología";
            celda71.value = "Seleccione Tecnología";
            celda9.value = "Seleccione Tecnología";
            celda91.value = "Seleccione Tecnología";
            celda92.value = "Seleccione Tecnología";
            celda11.value = "Seleccione Tecnología";
            celda13.value = "Seleccione Tecnología";
            celda15.value = "Seleccione Tecnología";
            celda171.value = "Seleccione Tecnología";
            celda17.value = "Seleccione Tecnología";
        } else if (tecnologia === 'seleccionar') {
            celda1.value = 0;
            celda3.value = 0;
        } else {
            // Establece algún otro valor predeterminado o lógica para otras tecnologías
           
        }
        // Llama a la función para calcular el total
        calcularTotal('celda1', 'celda2', 'resultado1');
    }
</script>
  <script> 
    // Modifica la función buscar_datos() en tu script

  function buscar_datos()
    {
    doc = $("#doc").val();
    
    
    var parametros = 
    {
      "buscar": "1",
      "doc" : doc
      
    };
    $.ajax(
    {
      data:  parametros,
      dataType: 'json',
      url:   'codigos_php.php',
      type:  'post',
     beforeSend: function() 
     {alert("enviando");}, 
      error: function()
    {alert("Error");},
      complete: function() 
     {alert("¡Listo!");},
      success:  function (valores) 
      {

        $("#nombre").val(valores.nombre);
        $("#dir").val(valores.direccion);
        $("#tel").val(valores.telefono);


    }
    }) 
    }


</script>
  <script>
  // Lógica para calcular la suma de la columna Fee mensual y cantidad de accesos
  $(document).ready(function() {
    $('input[type="text"]').on('input', function() {
      calcularTotales();
    });

    function calcularTotales() {
      var totalCantidadAccesos = 0;
      var totalFeeMensual = 0;

      $('input[id^="celda"], input[id^="resultado"]').each(function() {
        var valor = parseFloat($(this).val()) || 0;

        if ($(this).attr('id').includes('celda2') || $(this).attr('id').includes('celda4') || $(this).attr('id').includes('celda8') || $(this).attr('id').includes('celda81') || $(this).attr('id').includes('celda10') || $(this).attr('id').includes('celda12') || $(this).attr('id').includes('celda14') || $(this).attr('id').includes('celda16') || $(this).attr('id').includes('celda181') || $(this).attr('id').includes('celda18')) {
          totalCantidadAccesos += valor;
        }

        if ($(this).attr('id').includes('resultado') && !isNaN(valor)) {
          totalFeeMensual += valor;
        }
      });

      $('#totalCantidadAccesos').text(  totalCantidadAccesos.toFixed(0));
      $('#totalFeeMensual').text('$' + totalFeeMensual.toFixed(0));
    }
  });
</script>
<script>
//formula multiplicacion conceptos y accesos//
   function calcularTotal(idCelda1, idCelda2, idResultado) {
        var valorCelda1 = parseFloat(document.getElementById(idCelda1).value) || 0;
        var valorCelda2 = parseFloat(document.getElementById(idCelda2).value) || 0;
        var resultado = valorCelda1 * valorCelda2;
        document.getElementById(idResultado).value = resultado.toFixed(0);
   }

</script>

</section>

<!-- Aquí finalizan los Script Formulas-->


<!-- Aquí comienza la sección fecha de emisión y vencimiento-->

<section class="sectionlast">
    
    <div>
       <p for="emision">Fecha de Emisión:</p>
       <p class="one" id="fechaActual"></p>
   
    </div>
    <div>
         <label for="vencimiento">Fecha de Vencimiento:</label><br>
       <input class="onevence"  type="date" id="vencimiento" name="vencimiento" required>
   
    </div>

    
</section>

  </section>
  <section class="sectionht" style="padding-bottom:10px; padding-top:10px;">
  <!--class="lh-lg" class="shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="background:#E0EAFE; padding: 25px; filter: drop-shadow(0 0 0.75rem #E0EAFE); text-align:justify; font-family:'Ubuntu';"-->     
  <p style=
  "text-align: justify;
    font-size: 14px;
    font-weight: 500;
    font-family: 'Ubuntu';">
Los importes expresados en términos brutos no incluyen impuestos (IVA y Percepciones IIBB). 
  </p>
<p style=
  "text-align: justify;
    font-size: 14px;
    font-weight: 500;
    font-family: 'Ubuntu';">
La Facturación del fee mensual corre a partir de la fecha de inicio del proceso de Onboarding. La 
Forma de Pago es por Débito Automático Bancario como condición de contratación. Forma de Pago del Licenciamiento: en x pagos iguales y consecutivos sin interés, siendo el 1er pago 
inicial vía transferencia bancaria; y los restantes a <input type="text" required style="width: 32px;background:#FBFBFB; font-size: 14px; font-weight: 500; font-family:'Ubuntu';"> días de la firma de la orden de servicio,  
   <select name="metodos" id="metodos" style="background:#FBFBFB; font-size: 14px; font-weight: 500; font-family: 'Ubuntu'; border:none; text-align:justify;">
         <option value="e-Cheq">vía e-Cheq.</option>
         <option value="transfer">mediante transferencia bancaria.</option>
   </select>
  </p>
  <p style=
  "text-align: justify;
    font-size: 14px;
    font-weight: 500;
    font-family: 'Ubuntu';">
Tiempo mínimo de permanencia: 6 meses de facturación plena del servicio. La Inversión del Licenciamiento corresponde al requerimiento, concurrencia y tipo de accesos 
itemizados y cotizados.
</p>
<p style=
  "text-align: justify;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Ubuntu';">
(*) AMH - Acceso Markethub incluye plataformas de marketplaces, email marketing, sueldos y recursos 
humanos, fidelización de clientes, entre otras soluciones certificadas en el ecosistema.
</p>
<p style=
  "text-align: justify;
    font-size: 14px;
    font-weight: 500;
    font-family: 'Ubuntu';">
(**) Acceso Ecommerce no cuenta con entorno de prueba. El Swagger API Acceso E-commerce contiene la 
información de los campos que se pueden compartir mediante nuestra herramienta. El esfuerzo de 
integración debe ser realizado por el contratante.
</p>
<p style=
  "text-align: justify;
    font-size: 14px;
    font-weight: 500;
    font-family: 'Ubuntu';">
Por medio de la presente dejo constancia de la comprensión y aceptación de la propuesta económica 
correspondiente a la orden de servicio de provisión de software conforme los Términos y Condiciones 
del Sistema ZEUS cloud ERP, Advanced Tech.
</p>
</section>
<style>
    select {
        -webkit-appearance: none; /* Para Safari/Chrome */
        -moz-appearance: none; /* Para Firefox */
        appearance: none; /* Para otros navegadores */
       
        
        }
        /* Estilo para ocultar el texto del input file */
        .custom-file-input {
            visibility: hidden;
            width: 0;
        }
        .custom-file-label {
            display: none;
        }
        .custom-upload-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>   
      <!--  
<section class="sectionlast">

<div class="form-floating mb-3">
<input class="one" type="text" name="razon_social2" placeholder="Razón Social" class="form-control" id="razon_social2" style="background:#E0EAFE; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">
  
</div>

<div class="form-floating mb-3">
 <input type="file" accept="image/*" onchange="loadImage(event)">
    <br>
    <canvas id="canvas"  width="200" height="100" style="background:#E0EAFE; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);" placeholder="Firma"></canvas><br>
 <label for="floatingInput">Firma</label>
    <br>

    <button a href="https://pruebas.zeuserp.tech/propuesta/registro.php">Eliminar Imagen</button></a>
    
    <a href="https://pruebas.zeuserp.tech/propuesta/registro.php" class="button-link">Eliminar Firma</a>

</div>-->
<!--Script para poder firmar, dibujar, sobre el campo canva-->
<!-- <script>
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');

        let isDrawing = false;
        
        canvas.addEventListener('mousedown', (e) => {
            isDrawing = true;
            ctx.beginPath();
            ctx.moveTo(e.offsetX, e.offsetY);
        });

        canvas.addEventListener('mousemove', (e) => {
            if (isDrawing) {
                ctx.lineTo(e.offsetX, e.offsetY);
                ctx.stroke();
            }
        });

        canvas.addEventListener('mouseup', () => {
            isDrawing = false;
        });

        canvas.addEventListener('mouseleave', () => {
            isDrawing = false;
        });
    </script>
    -->
<!--Fín de Script para poder firmar, dibujar, sobre e campo canva -->
<!--Script para subir imagen a canva
<script>
        function loadImage(event) {
            const file = event.target.files[0];
            const canvas = document.getElementById('canvas');
            const ctx = canvas.getContext('2d');

            const reader = new FileReader();
            reader.onload = function(e) {
                const img = new Image();
                img.onload = function() {
                    // Calcular el factor de escala para ajustar la imagen al canvas
                    const scaleFactor = Math.min(canvas.width / img.width, canvas.height / img.height);

                    // Calcular las dimensiones de la imagen escalada
                    const scaledWidth = img.width * scaleFactor;
                    const scaledHeight = img.height * scaleFactor;

                    // Limpiar el canvas antes de dibujar la imagen
                    ctx.clearRect(0, 0, canvas.width, canvas.height);

                    // Dibujar la imagen escalada en el centro del canvas
                    ctx.drawImage(img, (canvas.width - scaledWidth) / 2, (canvas.height - scaledHeight) / 2, scaledWidth, scaledHeight);
                };
                img.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    </script>-->
<!--Fín Script para subir imagen a canva-->
<style>
/* Estilos para el campo de entrada */
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group label {
            position: absolute;
            top: -15px;
            left: 0;
            font-size: 14px;
            color: #666;
            background-color: #fff;
            padding: 0 8px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: none;
            border-bottom: 1px dashed #00CDCD; /* Color de la línea punteada */
            outline: none;
        }
        .text-under-line{
            font-family:'Ubuntu';
            font-size: 14px;
            color:#002955;
            font-weight:400;
        }
        </style>

<section class="seccionfirmas2">
<div class="form-group">
          <input type="text" id="razon_social" name="razon_social">
          <div class="text-under-line">RAZÓN SOCIAL</div>
    </div>


   <div class="form-group">
          <input type="text" id="razon_social" name="Firma">
          <div class="text-under-line">FIRMA</div>
    </div>
  
    <div class="form-group">
        <input type="text" id="razon_social" name="razon_social">
     
        <div class="text-under-line">REPRESENTANTE LEGAL</div>
    </div>
<!--
<div class="form-floating mb-3">
<input class="one" type="text" name="Representante" placeholder="Representante" class="form-control" id="razon_social2" style="background:#E0EAFE; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">
 </div>
-->

</section>


<section class="seccionfirmas2">

<div class="form-group">
        
        <input type="text" id="razon_social" name="razon_social">
      
        <div class="text-under-line">N° CÓDIGO TRIBUTARIO</div>
    </div>

    <div class="form-group">
        
        <input type="text" id="razon_social" name="razon_social">
       
        <div class="text-under-line">NOMBRE Y APELLIDO</div>
    </div>

    <div class="form-group">
     <input type="text" id="razon_social" name="razon_social">
     
     <div class="text-under-line">N° DOCUMENTO IDENTIDAD</div>
    </div>
<!--<div>
        <input class="one" type="text" name="codigo_tributario2" placeholder="Código Tributario" class="form-control" id="codigo_tributario2" style="background:#E0EAFE; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">
 </div>
<div>
  <input class="one" type="text" class="form-control" id="floatingInput"  placeholder="Nombre y Apellido" style="background:#E0EAFE; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">
</div>
<div>
  <input class="one" type="text" class="form-control" id="floatingInput" placeholder="D.N.I" style="background:#E0EAFE; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">
</div>
    -->
</section>
<script>
  // Obtener la fecha actual
  var fechaActual = new Date();

  // Obtener los componentes de la fecha
  var dia = fechaActual.getDate();
  var mes = fechaActual.getMonth() + 1; // Nota: JavaScript cuenta los meses desde 0
  var año = fechaActual.getFullYear();

  // Calcular la fecha de vencimiento (7 días después)
  var fechaVencimiento = new Date();
  fechaVencimiento.setDate(fechaActual.getDate() + 7);

  var diaVencimiento = fechaVencimiento.getDate();
  var mesVencimiento = fechaVencimiento.getMonth() + 1;
  var añoVencimiento = fechaVencimiento.getFullYear();

  // Formatear la fecha de vencimiento
  var fechaVencimientoFormateada = diaVencimiento + '/' + mesVencimiento + '/' + añoVencimiento;

  // Mostrar la fecha actual en el elemento con el id "fechaActual"
  document.getElementById('fechaActual').textContent = dia + '/' + mes + '/' + año;

  // Establecer la fecha de vencimiento en el campo de entrada de fecha
  document.getElementById('vencimiento').value = añoVencimiento + '-' + ('0' + mesVencimiento).slice(-2) + '-' + ('0' + diaVencimiento).slice(-2);
</script>

<!--Repetición de Código triburario -->
<script>
  function copiarCodigoTributario() {
    var codigoTributario = document.getElementById("doc").value;
    document.getElementById("codigo_tributario2").value = codigoTributario;
  }
</script>

 <!--Aquí comienza el contador de páginas-->
 <style>
        body {
            font-family: Arial, sans-serif;
        /*    padding-bottom: 60px; /* Ajuste para dejar espacio para el footer */
            text-align: center;
        }
        #pageLinks {
            margin-top: 20px;
        }
        #pageLinks a 
        {
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            margin: 15px;
            border: 1px solid #ccc;
            border-radius: 50%;
            text-decoration: none;
            color: #333;
            font-family:'Ubuntu';
            font-weight: bold;
            cursor:pointer;
            margin: 10px;
        }
  



    #pageLinks a:hover {
    color: #ffff;
    background:#6A00A7; /* Cambia el color del texto a rojo al pasar el cursor sobre el enlace */
}
        
        #footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50px;
            background-color: #f0f0f0;
            line-height: 50px;
            text-align: center;
        }

.coloractivo{
 background:#5ddede;}

    </style>
</head>
<body>

<div id="content">
    <!-- Contenido de la página aquí -->

    <div id="pageLinks">
        <a href="https://pruebas.zeuserp.tech/propuesta/registro.php" class="coloractivo" onclick="goToPage(1)">1</a>
        <a href="https://pruebas.zeuserp.tech/propuesta/registrosheet2.php" onclick="goToPage(2)">2</a>
        <a href="https://pruebas.zeuserp.tech/propuesta/registrosheet3.php" onclick="goToPage(3)">3</a>
    </div>

    <!-- Fin del contenido antes del footer -->
</div>

<script>
    function goToPage(pageNumber) {
        // Definir las URLs a las que se redirigirá cada página
        var pageURLs = {
            1: 'https://pruebas.zeuserp.tech/propuesta/registro.php',
            2: 'https://pruebas.zeuserp.tech/propuesta/registrosheet2.php',
            3: 'https://pruebas.zeuserp.tech/propuesta/registrosheet3.php',
        };

        // Obtener la URL correspondiente al número de página
        var url = pageURLs[pageNumber];

        // Redirigir a la URL
        if (url) {
            window.location.href = url;
        }
    }
</script>

<button class="btnconsulta2" onclick="imprimirPantalla()">Imprimir Pantalla</button>

<script>
  function imprimirPantalla() {
    // Llama a la función de impresión del navegador
    window.print();
  }
</script>

</html>

</body>

<footer style="padding-top:5px;">
    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="container text-center" style="background: rgb(131,58,180);
    background: linear-gradient(90deg, rgba(131,58,180,1) 19%, rgba(0,205,205,1) 100%); 
    max-width: -webkit-fill-available; padding-top: 5px; padding-bottom:5px; margin-top: 0px;">
    <div class="row justify-content-center align-items-center">
        <div class="col-sm text-center">
            <img src="img/usuariofooter.svg" width="50px" heigth="50px"; alt="Usuario">
        </div>
        <div class="col-sm">
            <input class="inputfooter" placeholder="EDN">
        </div>
        <div class="col-sm">
            <input class="inputfooter" placeholder="EDN@infosis.tech">
        </div>
        <div class="col-sm">
            <input class="inputfooter" placeholder="00-0000-0000">
        </div>
        <div class="col-sm text-center">
        <a href="https://tecnologias.zeuserp.tech/" target="_blank"> <img src="img/tecnologiasfooter.svg" width="130px" heigth="50px"; alt="Tecnología"></a>
        </div>
        <div class="col-sm text-center">
          <a href="https://terminosycondiciones.zeuserp.tech/" target="_blank"> <img src="img/contratofooter.svg" width="130px" heigth="50px"; alt="Contrato"></a>
        </div>
        <div class="col-sm text-center">
           <a href="https://zeuserp.tech/" target="_blank"><img src="img/websitefooter.svg" width="130px" heigth="50px"; alt="Web"></a>
        </div>
    </div>
</div>

  </footer>
    <!-- Botón para imprimir -->
    <button id="btnImprimir" onclick="imprimirPagina()">Imprimir Página</button>
</div>

<!-- Script JavaScript para imprimir -->
<script>
    function imprimirPagina() {
        window.print();
    }
</script>

</body>
</html>

<style>
/* Estilos para impresión */
@media print {
    body {
        font-size: 10px;
      /*  line-height: 1.5;*/
      background:red;
    }

    #btnImprimir {
        display: none; /* Oculta el botón de impresión en la vista previa de impresión */
    }
}
</style>