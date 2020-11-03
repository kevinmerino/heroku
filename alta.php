<?php
session_start();

include 'head.php';

if(isset($_REQUEST['enviar'])){

// Vamos a incrementar cada numero de incidencia

$incremento=count($_SESSION['incidencia']);       // Contamos la array incidencia cada vez que pulsamos enviar
$_SESSION['num_incidencia']=$incremento++;        //Incrementamos en uno el numero de incidencias
if(isset($_REQUEST['urgente'])){                  //Urgencia SELECT
      $urgencia="Si";
}else{
      $urgencia="No";
}
$tipo=$_REQUEST['tipo'];                          // Tipo
$fechaHora=date ('d-m-Y H:i:s');                  // Fecha y Hora
$lugar=$_REQUEST['lugar'];                        // Lugar
$ip=$_SERVER['REMOTE_ADDR'];                      // Direccion IP
$description=$_REQUEST['descripcion'];            // Descripcion

$_SESSION['incidencia'][]=array($_SESSION['num_incidencia'],$urgencia,$tipo,$fechaHora,$lugar,$ip,$description); //Los datos recogidos se añadiran en su variable correspondiente del array

echo  '<pre>';
print_r ($_SESSION['incidencia']);                    //Mostrar Array's Generadas
echo '</pre>';
}
                                             
 print' 
        <h2 class="postheader">FORMULARIO ALTA INCIDENCIA</h2>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              <tr>
              <td align="right"><strong>Urgente? :</strong></td>
              <td>

              <input type="checkbox" name="urgente" value="urg"/>Si											  </td></tr>
              <tr><td align="right"><strong>Tipo :</strong></td><td>
              <div align="left">
                    <select name="tipo">
                      <option value="Basuras">Basuras</option>
                      <option value="Aseo Urbano">Aseo Urbano</option>
                      <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                      <option value="Vandalismo">Vandalismo</option>
                       <option value="Transporte">Transporte</option>
                      <option value="Señales y Semaforos">Señales y Semaforos</option>
                      <option value="Mobiliario Urbano">Otros</option>
                      
                    </select>
              </div></td></tr>
              
              <tr><td align="right"><strong>Lugar :</strong></td><td>
              <div align="left">
                    <input type="text" name="lugar" size=35"/>
              </div></td></tr>
              <tr><td align="right"><strong>Descripcion: </strong></td><td>
              <div align="left">
                    <textarea cols=50 rows=4 name="descripcion"></textarea>
              </div></td></tr>
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="enviar" type="submit" id="enviar" value="Dar de alta"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>
<div id="imagen1">
        

        </div>        
';

 include 'pie.php';
											
                           