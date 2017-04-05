<?php 
 App::import('Vendor','tcpdf/tcpdf');  
 ob_clean();
 // create new PDF document
 $tcpdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 
       PDF_PAGE_FORMAT, true, 'UTF-8', false);
 
 //$tcpdf = new TCPDF('P','mm','LETTER',true,'UTF-8',false);
$textfont = 'helvetica';
$tcpdf->SetCreator(PDF_CREATOR);
$tcpdf->SetAuthor("autor");
$tcpdf->SetTitle("Título");
$tcpdf->SetSubject("Tutorial TCPDF en cakePHP");
$tcpdf->SetKeywords("TCPDF, PDF, cakePHP, ejemplo");
$tcpdf->setPrintHeader(FALSE);
$tcpdf->setPrintFooter(TRUE);
$tcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$tcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$tcpdf->setHeaderMargin(2);
$tcpdf->getAliasNumPage();
$tcpdf->AddPage();
$tcpdf->SetFont('helvetica', '', 12); 

//$meses = array('01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre');
//$grados = array(1 => 'Primer', 2 => 'Segundo', 3 => 'Tercer', 4 => 'Cuarto', 5 => 'Quinto', 6 => 'Sexto');


//$hora = date('g:i  A');
//$dias = date('d');
//$mes = $meses[date('m')];
//$año = date('Y');
//$año2 = ($año + '1');

//$colegio_nombre = strtoupper($colegio['Colegio']['nombre']);
//$colegio_logo = $colegio['Colegio']['logo'];
/*$alumno_info = strtoupper($alumno['Alumno']['nombre_completo']);
$grado = $grados[$alumno['Inscripcion'][0]['Curso']['Grado']['nombre']];*/


//$directora = $directivos['Directivo']['nombres'].' '.$directivos['Directivo']['apellidos'];
//$cargo = $directivos['Cargo']['titulo'];
//$cedu = $directivos['Directivo']['cedula'];
//$nombre = strtoupper($post['Alumno']['nombres']);
//$apellido = strtoupper($post['Alumno']['apellidos']);
//$alumno_info = $nombre.' '.$apellido;
//$grado = $grados[$post['Curso']['Grado']['nombre']];

//datos del periodo activo
$periodo = strtoupper($post['Comunicacione']['asunto']);
$para = $post['Dependencia']['nombre'];
$de = "DIRECCION DE SEGURIDAD SOCIAL UNERG";
$fecha = date("d-m-Y", strtotime($post['Comunicacione']['fecha']));
$cuerpo = $post['Comunicacione']['cuerpo'];
$nume = $post['Comunicacione']['numero_comuni'];
$director = $post['Directivo']['director'];
$ce_dire = $post['Directivo']['cedula'];
$resolucion = $post['Directivo']['resolucion'];
$copia = $post['Comunicacione']['copia_a'];
if($copia>1){
   echo "Hola";
};
//if($copia==true){
//    echo "Hola";
//};
//$fec = $fecha[date('%Y')];//<?php echo h($comunicacione['Comunicacione']['asunto']); 
$html = <<<EOD
<table><tr><td><img src="../webroot/img/UNERG.jpg" width="120px" align="left"></td><td><p align="center" style="font-size:8px; text-align:center;">
Republica Bolivariana de Venezuela<br>
UNIVERSIDAD NACIONAL EXPERIMENTAL <br>
"ROMULO GALLEGOS"<br> 
Direccion de Seguridad Social<br>
Estado Guarico</p></td></tr></table>

<br>
<br>
<table border="">
    <tr>
        <th><b>VRAD-. &nbsp;000$nume</b></th>
    </tr>
    <tr>
        <th><b>PARA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$para</b></th>
    </tr>
    <tr>
        <th><b>DE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$de</b></th>
    </tr>
    <tr>
        <th><b>ASUNTO: &nbsp;$periodo</b></th>
    </tr>
    <tr>
        <th><b>FECHA: &nbsp;&nbsp;&nbsp;&nbsp;$fecha</b></th>
    </tr>
</table>
<br>
<br>
<br>
<br>
    &nbsp;$cuerpo

<br>
<br>
<p style="font-size:12px;">              Sin mas que hacer referencia y agradeciendo de antemano receptividad ante esta solicitud.</p>
<br>
<br>
<br>
<br>
<table>
<tr style="text-align: center;"><th>Atentamente</th></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr style="text-align: center;">
    <th>__________________________<br/>$director <br/>DIRECTOR DE SEGURIDAD SOCIAL UNERG<br>C.I: $ce_dire<br>RESOLUCION N° $resolucion</th>
</tr>
</table>
<br>
<br>
<br>
<p align="left" style="font-size:10px;">C.C: $copia  
<?php 
</p>
EOD;
 $tcpdf->writeHTML($html, true, false, true, false, '');
 
 // ---------------------------------------------------------
 
 // Close and output PDF document
 // This method has several options, check the source code 
 //documentation for more information.
 $tcpdf->Output('example_001.pdf', 'I');
 exit;

 ?>