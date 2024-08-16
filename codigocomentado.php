 <!-<!-- Boton para imprimir pantalla 
  
  <button onclick="imprimirPantalla()">Imprimir Pantalla</button>

  <script>
    function imprimirPantalla() {
      // Llama a la función de impresión del navegador
      window.print();
    }
  </script> 


Fin Boton para imprimir pantalla -->


<!-- Documentación aclaratoria del proyecto -->


<!-- 
Se crea una interfaz web que incluye un formulario para ingresar datos y realizar consultas en una base de datos MySQL. 
También has implementado funcionalidades para registrar, actualizar y eliminar registros.
-->


<!--Se realiza programa en PHP

Funcionalidad genaral: 
El programa busca acelerar los procesos de acción de Ejecutivos de Ventas. Con este programa se logrará que solo completando el Código
Tributário automaticamente se complete Razón Social, Tecnología ZEUS y todos los montos de precios de cada una de las tecnologías por separado.
Se logrará multiplicar estos montos por la cantidad de accesos dando el FEE Mensual de manera automática, solo completando la Cantidad de Accesos.
Automaticamente se genera la fecha de emisión de la Propuesta. 
Con respecto al licenciamiento se calcula el porcetanje de manera auntomatica y se puede modificar los dias restantes a la firma y
el método de pago (Transferencia bancaria o Via Echeq)  


Descripción del proyecto: 
El programa se utilizará en el Area de Ventas. 
El Ejecutivo de Ventas completará en N° de CUIT del cliente y 
el programa por medio de conección con Base de datos MySQL obtenbra automaticamente los siguentes datos:
Razón Social, Tecnología contratada y al mismo tiempo según la tecnología contratada se obtendra el Fee por concepto en un tabla realizada en html.
La fecha de Emisión debe figurar de manera automática la fecha actual.
Al pie de página debe figurar Razón Social, Firma*1, Representante Legal(Presidente  - Socio Gerentetes Titular Apoderado  (enviar por mail el poder))
N° de código tributario, Nombre y Apellido y DNI.
Todos estos procesos deben ser automáticos al indicar el numere de CUIT del cliente.

Una vez que todos los campos esten completos el Ejecutivo de Ventas podrá, atravez de un imput y un submit enviar la 
propuesta economica a un mail especifico

*1 la firma debe quedar vacia para que complete el cliente


Tareas realizadas hasta el momento:
Se genera HTML y Css para la implementación de tablas y creación de estilos.
Se crea Base de datos MySQL
Se generan PHP junto con JavaScrip y Ajax para conección de la Base de datos (CUIT -PK-, Razon social y Tecnología) y automatización de carga en el navegador Web.
Se generan funciones en JavaScript para formulas de suma entre datos de la tabla.
Se genera funcion JavaScript para que el Ejecutivo de ventas pueda realizar la impresión de pantalla. 
Se generan Imputs en texto para que el Ejecutivo pueda indicar los días a pagar el licenciamiento.
Se sube base de datos y archivos de desarrollo a Hostinger para ver avanzaces en https://pruebas.zeuserp.tech/propuesta/registro.php
Se genera funcion para que la fecha de emisión sea la fecha actual automaticamente
Se procede a modificar formulas para que no figuren decimales en Fee Mensual.
se genera input para imprimir pantalla. Se deja comentado. se avaluan otras alternativas para realizar la misma funcionalidad
Se generan funcion JavaScript para realizar el calculo de porcentajes
Se genera funcion para indicar si el Representante en Apoderado figuré un mensaje donde pida el envio del documento.



Tareas comentadas con funcionalidad para un futuro u otros prospectos:

Se generan funciones para Agregar, Consultar y Eliminar Clientes en Base de datos.


Tareas Faltantes
Evaluar funcionalidad de input imprimir pantalla. Linea 829-841
Generar la orden para que los FEE por concepto Figuren automaticamente según la Tecnoligía ZEUS
Relacionar imput de Pie de página con Base de datos

-->