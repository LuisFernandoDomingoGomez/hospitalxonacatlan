
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="icon" type="image/png" href="<?php echo e(asset('login/images/icons/favicon3.ico')); ?>"/>
<style type="text/css" media="print">
.nover {display:none}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!-- Bootstrap Core CSS -->
<link href="<?php echo e(asset('HistoriaCG/jquery/bootstrap.min.css')); ?>" rel="stylesheet">
<!-- Custom CSS -->
<script type="text/javascript" src="<?php echo e(asset('HistoriaCG/jquery/jquery-3.2.1.js')); ?>"></script>  
<title>Hoja de Indicaciones M&eacute;dicas</title>
</head>
<style>
.sinborde {
  border: 0;
}
</style>
<style>
.fecha {
  border: 0;
}
</style>
<script>
$(document).ready(function() {
$("#div1").click(function(){
$("#nota1").prepend("<input type='date' style='height:15px'  id='Fecha_Elaboracion1' name='Fecha_Elaboracion1' class='fecha'> <br> <input type='time'  style='height:15px' value='12:00:00' class='sinborde' id='Hora_Elaboracion1' name='Hora_Elaboracion1' not null>");
$("#cancelarnota1").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div1").empty();
$("#div2").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
    });
$("#cancelarnota1").click(function(){
$("#div1").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota1").empty();
$("#cancelarnota1").empty();
$("#div2").empty();
	});
$("#div2").click(function(){
$("#cancelarnota1").empty();
$("#nota2").prepend("<input type='date' style='height:15px'  id='Fecha_Elaboracion2' name='Fecha_Elaboracion2' class='fecha' notnull> <br> <input type='time'  style='height:15px' value='12:00:00' class='sinborde' id='Hora_Elaboracion2' name='Hora_Elaboracion2'>");
$("#cancelarnota2").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div2").empty();
$('#Nota2').prop("required", true);
$('#Nota2').removeAttr("readonly");
$("#div3").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota2").click(function(){
$("#div2").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota2").empty();
$('#Nota2').removeAttr("required");
$('#Nota2').prop("readonly", true);
$('#Nota2').val('');
$("#cancelarnota2").empty();
$("#cancelarnota1").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div3").empty();
	});//
	
});	
</script> 

<body>
<div align='center'>
<form class="form-horizontal" action="<?php echo e('guardaimed'); ?>" method='POST'>
<?php echo e(csrf_field()); ?>




<div align="left"><img src="<?php echo e(asset('ConsultaU/img3.jpg')); ?>" width="750" height="72" HSPACE="150" VSPACE="0">
	<br>

	<!-- <img src="<?php echo e(asset('HistoriaCG/neimage003.png')); ?>" width="155" height="60"HSPACE="76" VSPACE="0"> --></div>
<div class=WordSection1>
<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext 1.5pt;
 mso-border-bottom-alt:solid windowtext 1.5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  page-break-inside:avoid;height:22.7pt'>
  <td width=712 style='width:573.95pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:22.7pt'>
<body lang=ES-MX style='tab-interval:35.4pt'>

<div class=WordSection1>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext 1.5pt;
 mso-border-bottom-alt:solid windowtext 1.5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  page-break-inside:avoid;height:21.25pt'>
  <td width=557 style='width:577.5pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:21.25pt'>
  <h5><span lang=ES>Hoja de Indicaciones M&eacute;dicas</span></h5>
  </td>
  <td width=155 style='width:116.45pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:21.25pt'>
  <h1><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:12.0pt'>HOJA
  No.<input type="text"  style="WIDTH: 30px; HEIGHT:25px "class="sinborde" name="hoja" id="hoja" required> </h1>
  </td>
 </tr>
</table>

<p class=MsoNormal><b><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
12.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
 mso-border-bottom-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  page-break-inside:avoid;height:25.5pt'>
  <td width=557 valign=top style='width:577.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h2 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt;page-break-after:auto'><span lang=ES
  style='font-size:7.0pt;font-weight:normal'>UNIDAD M&Eacute;DICA:</span><span
  lang=ES style='font-size:7.0pt'><o:p></o:p></span></h2>

  <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_unidad'>

<?php 

  $conexion=mysqli_connect('localhost','root','','hospitalxonacatlan');

 ?>





<?php 

    $sql="SELECT * from unidades where id_unidad=id_unidad";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){

      

   ?>
       
     
               

	<option value = "<?php echo e($mostrar['1']); ?>"><?php echo e($mostrar['nom_unidad']); ?></option>
	<option value = "<?php echo e($mostrar['2']); ?>"><?php echo e($mostrar['nom_unidad']); ?></option>


                <?php 
  }
   ?>
     

      						
          		
						

								
                                    </select>  
   <input type="text" style="WIDTH: 400px; HEIGHT:20px "class="sinborde" id="Id_Imedicas" name='Id_medicas' value="{ $idns }" hidden />
  </td>
  <td width=155 valign=top style='width:116.45pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h2 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt;page-break-after:auto'><span lang=ES
  style='font-size:7.0pt;font-weight:normal'>EXPEDIENTE:</span><span lang=ES
  style='font-size:7.0pt'><o:p></o:p></span></h2>
  
   <input type="text" style="WIDTH: 150px; HEIGHT:20px " class="sinborde" name="Id_expediente" id="Id_expediente"  placeholder="No Expediente" required>

  </td>
  
 </tr>
</table>
</form>
<p class=MsoNormal><b><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
  height:25.5pt'>
  <td width=402 colspan=4 valign=top style='width:577.2pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span lang=ES style='font-size:7.0pt;font-family:"Arial","sans-serif"'>NOMBRE
  DEL PACIENTE (</span><span lang=ES style='font-size:6.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif"'>APELLIDO PATERNO, APELLIDO MATERNO Y
  NOMBRE(S))<o:p></o:p></span></p>
  
  
 <input type="text" style="WIDTH: 100px; HEIGHT:20px " id="Apellido_P" name="Apellido_P" class="sinborde" >
<input type="text" style="WIDTH: 100px; HEIGHT:20px " id="Apellido_M" name="Apellido_M"class="sinborde"> 
<input type="text" style="WIDTH: 150px; HEIGHT:20px " id="Nombre" name="Nombre"class="sinborde" >


  </td>
  <td width=104 colspan=2 valign=top style='width:77.95pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span lang=ES style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-weight:bold'>EDAD:<o:p></o:p></span></p>
   <input type="text" style="WIDTH: 100px; HEIGHT:20px "class="sinborde" name='Edad' id="Edad"  />
  </td>
  <td width=206 colspan=2 valign=top style='width:154.8pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span lang=ES style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-weight:bold'>GENERO:<o:p></o:p></span></p> 
 <input type="radio" name="Genero" id="Genero" checked value="Masculino"/> Masculino   
  <input type="radio" name="Genero" id="Genero"  value="Femenino" />Femenino
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:3.95pt'>
  <td width=712 colspan=8 valign=bottom style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:3.95pt'>
  <h3 style='margin-bottom:0cm;margin-bottom:.0001pt'><span lang=ES
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'>SIGNOS VITALES<o:p></o:p></span></h3>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:25.5pt'>
  <td width=119 valign=top style='width:88.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=FR style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;mso-ansi-language:FR;font-weight:normal'>T/A<o:p></o:p></span></h4>
     <input type="text" style="WIDTH:120px; HEIGHT:22px " id="T_A" name="T_A" class='sinborde' placeholder="T/A" required>
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=FR style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;mso-ansi-language:FR;font-weight:normal'>TEMP<o:p></o:p></span></h4>
       <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Temp" name="Temp" class='sinborde' placeholder="TEMP" required>
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>FREC. C.<o:p></o:p></span></h4>
     <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Frec_C" name="Frec_C" class='sinborde' placeholder="FREC. C" required>
  </td>
  <td width=119 colspan=2 valign=top style='width:89.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>FREC R.<o:p></o:p></span></h4>
   <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Frec_R" name="Frec_R" class='sinborde' placeholder="FREC. R" required>
  </td>
  <td width=119 colspan=2 valign=top style='width:89.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>PESO<o:p></o:p></span></h4>
     <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Peso" name="Peso" class='sinborde' placeholder="PESO" required>
  </td>
  <td width=119 valign=top style='width:89.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>TALLA</span><span lang=ES
  style='color:black'><o:p></o:p></span></h4>
    <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Talla" name="Talla" class='sinborde' placeholder="TALLA" required>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=119 style='border:none'></td>
  <td width=119 style='border:none'></td>
  <td width=119 style='border:none'></td>
  <td width=46 style='border:none'></td>
  <td width=73 style='border:none'></td>
  <td width=31 style='border:none'></td>
  <td width=88 style='border:none'></td>
  <td width=119 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
 mso-border-bottom-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.0pt'>

  <td width=151 style='width:113.05pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 3.5pt 0cm 3.5pt;height:17.0pt'>
  <p class=MsoNormal align=center style='margin-top:.5pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:0cm;text-align:center'><b><span lang=ES
  style='font-size:9.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
  text-transform:uppercase'>FECHA Y HORA<o:p></o:p> </span></b></p>
  
  <div id='cancelarnota1'></div>
  <div id='cancelarnota2'>
 
  </td>
  
  <td width=151 style='width:113.05pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 3.5pt 0cm 3.5pt;height:22.0pt'>

  <h6 style='margin-top:.5pt;margin-right:2cm;margin-bottom:1.0pt;margin-left:
  3cm'><span lang=ES>HOJA DE INDICACIONES M&Eacute;DICAS</span></h6>


  </td>
<td width=501 style='width:420.9pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:17.0pt'>
 

    <p class=MsoNormal align=center style='margin-top:.5pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:1cm;text-align:center'><b><span lang=ES
  style='font-size:9.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
  text-transform:uppercase'>NOMBRE Y FIRMA DEL MEDICO TRATANTE<o:p></o:p> </span></b></p>  

 </tr>

 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:9.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div1' name='div1'>
<center><input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' /></center>
  </div>
  
  <div id='nota1'></div>

  </p>
</td>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="50" cols="85" class="sinborde" name="Nota1" id="Nota1" required></textarea>
  </p></td>

<div id='Nombre_doctor'></div>

  </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:10.85pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="50" cols="15" class="sinborde" name="Nombre_doctor" id="Nombre_doctor" required></textarea>
  </p>

</td>


</tr>
  
  
  

  
  </tr>
  
  


   
 


       
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1026" style='padding:3.6pt 7.2pt 3.6pt 7.2pt'
    class=shape>
    
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
12.0pt;font-family:"Arial","sans-serif"'>NOTA: </span>  </b><span lang=ES
style='font-size:9.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif"'>  TODAS
LAS NOTAS M&Eacute;DICAS DEBER&Aacute;N ESTAR FIRMADAS POR EL M&Eacute;DICO ADSCRITO DEL SERVICIO<o:p></o:p></span></p>

<p class=MsoNormal align=right style='margin-top:1.0pt;margin-right:198.15pt;
margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:right'><span
lang=ES style='font-size:7.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif"'>208C0101100000L-047-19<o:p></o:p></span></p>

</div>

<style type="text/css">
		#abajo { display : none; }
</Style>





</form>
</div>
<style type="text/css" media="print">
.nover {display:none}
</style>
<div align="center"><input type="submit" class="btn btn-primary btn-lg nover" value="Guardar" id="Guardar" />
<input type='button' onclick='window.print();' value='Imprimir' class="btn btn-success btn-lg nover" id="imprimir" name="imprimir" />
<input value="Limpiar" onclick="history.go(0)" type="button" class="btn btn-warning btn-lg nover" >
<a href="<?php echo e(URL::action('Hojaindicacionesmedicas@indicacionesmedicas')); ?>"><input name="button" type="button" class="btn btn-danger btn-lg nover" value="Volver" /> </a>
</div></body>

<br><br>

</td>
</div>
 

			</div>
</body>
</html>