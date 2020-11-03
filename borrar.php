<?php
session_start();
include 'head.php';
if(isset($_REQUEST['borrar'])){
    $num_incidencia=$_REQUEST['num_incidencia'];    // Recoger el num de incidencia
    $cont_prev=count($_SESSION['incidencia']);     // Calculamos primero los indicentes que hay ates de borrar

    unset($_SESSION['incidencia'][$num_incidencia]);  //Borramos el num de incidente que hayamos introducido

    $cont_post=count($_SESSION['incidencia']);     // Calculamos los indicentes posteriores al borrado

    if($cont_prev==$cont_post){                    // Comprobamos si el conteo de incidencias ha sido alterado
        echo 'No se ha borrado ningún incidente';
    }else{
        echo 'El incidente numero: '. $num_incidencia . ' se ha borrado con éxito';
    }

}                                 
 print' 
            <strong>INTRODUCE EL IDENTIFICADOR DE LA INCIDENCIA A BORRAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr><td align="right"><strong>Num Incidencia :</strong></td><td>
              <div align="left">
                    <input type="text" name="num_incidencia"/>
              </div></td></tr>
              
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="borrar" type="submit" id="borrar" value="Dar de Baja"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>';
 include 'pie.php';