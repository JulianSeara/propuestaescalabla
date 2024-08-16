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
        <input type="text" name="Cuit-Cuil" id="Cuit-Cuil" required>
        <button type="submit">Consultar Razón Social</button>
  
<div class="row">
     <?php if (isset($razonSocial)) : ?>
        <p>Razón Social: <?php echo $razonSocial; ?></p>
    <?php endif; ?>
</div>
</body>
</html>
  </form>
<?php

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
        echo "Error al consultar el Padrón A5.";
    }
}

?>



<section class="sectionlast">

<div class="form-floating mb-3">
<input class="one" type="text" name="razon_social2" placeholder="Razón Social" class="form-control" id="razon_social2" style="background:#E0EAFE; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">
  
</div>


<div class="form-floating mb-3">

    <canvas id="canvas" width="400" height="100" style="background:#E0EAFE; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);"></canvas><br>
    <label for="floatingInput">Firma</label>
    <br>
</div>
<div class="form-floating mb-3">
  <select class="one" class="form-select" id="floatingSelect" aria-label="Representante Legal"  placeholder="Representante" style="background:#E0EAFE; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);" onchange="mostrarMensaje()">
    <option value="Presidente">Presidente</option>
    <option value="SocioGerente">Socio Gerente</option>
    <option value="Titular">Titular</option>
    <option value="Apoderado">Apoderado</option>
  </select>

  <p id="mensajeApoderado" style="color:black; display: none; ; margin-top:20px;">¡Recordar enviar documento!</p>
</div>

<script>
  function mostrarMensaje() {
    var seleccion = document.getElementById("floatingSelect").value;
    var mensajeApoderado = document.getElementById("mensajeApoderado");

    // Mostrar el mensaje solo si se selecciona "Apoderado"
    mensajeApoderado.style.display = (seleccion === "Apoderado") ? "block" : "none";
  }
</script>
<!-- Fin para dejar mensaje -->
</section>

<section class="seccionfirmas2">
        <div class="form-floating mb-3">
        <input class="one" type="text" name="codigo_tributario2" placeholder="Código Tributario" class="form-control" id="codigo_tributario2" style="background:#E0EAFE; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">

 </div>

<div class="form-floating mb-3">
  <input class="one" type="text" class="form-control" id="floatingInput"  placeholder="Nombre y Apellido" style="background:#E0EAFE; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">
 
</div>

<div class="form-floating mb-3 camposimput">
  <input class="one" type="text" class="form-control" id="floatingInput" placeholder="D.N.I" style="background:#E0EAFE; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">
 
</div>
</section>