<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
    @page { margin: 180px 50px; }
    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; background-color: deepskyblue; text-align: center; }
    #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; background-color: lightblue; }
    #footer .page:after { content: counter(page, upper-roman); }
  </style>



<body>

  <div id="header">
    <h1>Hospital Municipal Xonacatlán <br> 
    "Vicente Guerrero"</h1>
    <h2> Benito Juárez SN, Centro, 52060 Xonacatlán, Méx.</h2>
    
  </div>
  <div id="footer">
    <p class="page">Page </p>
  </div>
  <div id="content">
    <p><table border="2">

     <tr>
      <td>Id</td><td>Medicamento Materno</td><td>Medicamento</td><td>Existencia</td>
    </tr>
          </thead>
                      <tbody>
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
                        echo "<td>";
                        echo $elemento;
                        echo "</td>";
                      }
                     echo"</tr>";
      
                     }
                       ?> 
                      </tbody> 

        
    </table>
</p>
    <p style="page-break-before: always;">the second page</p>
  </div>
	

</body>
</html>