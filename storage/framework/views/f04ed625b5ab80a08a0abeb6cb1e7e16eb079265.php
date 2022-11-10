<?php

//include("conexion.php");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=inventario.xls");
?>
 <meta charset="utf-8">
 <h1>Hospital Municipal Xonacatlán </h1><br>
    <h1>"Vicente Guerrero"</h1>
    <h2> Benito Juárez SN, Centro, 52060 Xonacatlán, Méx.</h2>
   <h3>INVENTARIO MEDICAMENTOS</h3>
    <table  border="1" cellpadding="1" cellspacing="1">
      <tr>
      <th> Id</th>
      <th>Medicamento Materno</th>
      <th>medicamento</th>
      <th>existencia</th>
      </tr>
        <?php
        $siceVec=sizeof($inventarios);
                          $cont=0; 
                        foreach ($inventarios as $i) {
                        $cont=$cont+1;

                       if ($cont==$siceVec) {
                       break;
                        }
    
                       $elementos=explode("~",$i);
                       echo "<tr>";
                        foreach ($elementos as $elemento) {
                        echo "<td align='center'>";
                        echo $elemento;
                        echo "</td>";
                      }
                     echo"</tr>";
      
                     }
                       ?>  
      </table>








