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
