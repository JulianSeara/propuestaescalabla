  <?php
    
    /**
 *
 * @author Julian Seara
 * @created 2/11/2023..-->//
 * @version Test
 */


    //ACA INICIAN LAS CONSULTAS DE USUARIOS EXISTENTES EN LA BASE DE DATOS
    include("abrir_conexion.php");
      
     
      if(isset($_POST['btn_consulta']))
        
      {  
          $doc = $_POST ['doc'];
          $existe=0;


     if($doc=="")
     {echo "Ingrese dato";}

    else


{
  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE doc = '$doc'");
  while($consulta = mysqli_fetch_array($resultados))
  {
    echo $consulta ['nombre']."<br>"; 
    echo $consulta ['doc']."<br>"; 
    echo $consulta ['direccion']."<br>"; 
    echo $consulta ['telefono']."<br>"; 
    $existe++;
}


    if($existe==0)
    
           {echo "El dato no existe en los registros";}
}
      }

  
     //ACA INICIAN LOS REGISTEOS DE NUEVOS USUARIOS EN LA BASE DE DATOS
     

      if(isset($_POST['btn_registrar']))
      {  
        $doc = $_POST ['doc'];
        $nombre = $_POST ['nombre'];
        $dir = $_POST ['dir'];
        $tel = $_POST ['tel'];
        
{
  mysqli_query($conexion, "INSERT INTO $tabla_db1 (doc, nombre, direccion, telefono) values ('$doc','$nombre' ,'$dir', '$tel')");

}
{echo "Registro Exitoso!!";}
  }



       //ACA INICIA LA ACTUALIZACION DE DATOS

  if(isset($_POST['btn_actualizar']))
  {  
    $doc = $_POST ['doc'];
    $nombre = $_POST ['nombre'];
    $dir = $_POST ['dir'];
    $tel = $_POST ['tel'];
    
         //ACTUALIZAR 
$_UPDATE_SQL="UPDATE $tabla_db1 Set 
doc='$doc', 
nombre='$nombre',
direccion='$dir',
telefono='$tel'

WHERE doc='$doc'"; 

mysqli_query($conexion,$_UPDATE_SQL); 

{echo "Actualizado con éxito!!";}

}

       //ACA INICIA LA ELIMINACION DE DATOS

       if(isset($_POST['btn_eliminar']))

       {  
        $doc = $_POST ['doc'];
        $existe=0;


   if($doc=="")
   {echo "Ingrese dato";}

  else


{
$resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE doc = '$doc'");
while($consulta = mysqli_fetch_array($resultados))
{
  
  $existe++;
}


  if($existe==0)
  
         {echo "El dato no existe en los registros";}

  else
  {

     //ELIMINAR
  $_DELETE_SQL =  "DELETE FROM $tabla_db1 WHERE doc = '$doc'";
  mysqli_query($conexion,$_DELETE_SQL); 
 
  }
}

{echo "Dato Eliminado";}
    }




    include("cerrar_conexion.php");
  ?>



<!-- Aqui comienza el AJAX JS para realizar tabulación -->

<script type="text/javascript">
 
    function buscar_datostab()
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
    // beforeSend: function() 
     //{alert("Hola");}, 
    // error: function()
   // {alert("Error");},
    // complete: function() 
    // {alert("¡Listo!");},
   //  success:  function (valores) 
      {

        $("#nombre").val(valores.nombre);
        $("#dir").val(valores.direccion);
        $("#tel").val(valores.telefono);


    }
    }) 
    }

    </script>
