<?php
session_start();
include 'head.php';

if(isset($_REQUEST['listar'])){    
  $tipo=$_REQUEST['tipo'];      //Recogemos el tipo

//Creando la cabecera
 echo '<table>                  
 <tr>
 <th> Incidencia </th>
 <th> Urgencia </th>
 <th> Tipo </th>
 <th> Fecha </th>
 <th> Lugar </th>
 <th> Direccion IP </th>
 <th> Descripcion </th>
 </tr>';
foreach($_SESSION['incidencia'] as $clave => $valor){                 //Recorreremos el array
  if($tipo==$valor[2]){                                               // Si el tipo que hemos ingresado es igual al tipo del array (situado en el indice 2 de la variable $valor)...
                                                                     // Mostraremos su valor por cada indice en una fila diferente
    echo '<tr>
    <td> <pre> <center>'. $valor[0] .'</pre>  </center> </td>         
    <td> <pre> <center>'. $valor[1] .'</pre>  </center> </td>
    <td> <pre> <center>'. $valor[2] .'</pre>  </center> </td>
    <td> <pre> <center>'. $valor[3] .'</pre>  </center> </td>
    <td> <pre> <center>'. $valor[4] .'</pre>  </center> </td>
    <td> <pre> <center>'. $valor[5] .'</pre>  </center> </td>
    <td> <pre> <center>'. $valor[6] .'</pre>  </center> </td>
     </tr>';
  }
}
echo '<br>';
}

 print' 
         <strong>SELECCIONA EL TIPO DE INCIDENCIA A LISTAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              										  </td></tr>
              <tr>
                <td align="right"><strong>Tipo :</strong></td><td>
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
                </div>
               </td>
              </tr>
              <tr >
              <td colspan="2"><div align="center"><strong>
                <input name="listar" type="submit" id="listar" value="Listar"/>
                </strong>
                </div>
              </td>
            </tr>
              
        </table>
    </form>
        </div>';
 include 'pie.php';

