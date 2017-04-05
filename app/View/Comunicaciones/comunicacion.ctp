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
$tcpdf->SetFont('helvetica', '', 14); 

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
$fecha = $post['Comunicacione']['fecha'];
//$fec = $fecha[date('%Y')];//<?php echo h($comunicacione['Comunicacione']['asunto']); 
$html = <<<EOD
<table border="1">
    <tr>
        <th>PARA: $para</th>
    </tr>
    <tr>
        <th>DE: $de</th>
    </tr>
    <tr>
        <th>ASUNTO: $periodo</th>
    </tr>
    <tr>
        <th>FECHA: $fecha</th>
    </tr>
</table>
<table tyle="margin:0 auto; width: 100%;">
<tr>
   <td width="25%"></td>
    <th style="text-align: center; font-size: 9pt; font-weight: bold;">
        REPÚBLICA BOLIVARIANA DE VENEZUELA<br />
        U.E.C colegio_nombre<br />
        SAN JUAN DE LOS MORROS<br />
        ESTADO GUARICO
    </th>
</tr>
</table>
<table><tr><th></th></tr><tr><th></th></tr><tr><th></th></tr></table>
<h3 style="text-align: center; ">CONSTANCIA DE ESTUDIOS</h3>
<br/>
<table><tr><th></th></tr></table>
<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quien suscribe, Prof. directora cargo portadora de la cedula de identidad N° cedu,  de la U.E.C "colegio_nombre", hace constar a través de la presente que el (la) alumno(a): alumno_info estudia en esta institución cursando el (grado) grado, del año escolar periodo <br><br>
<table><tr><th></th></tr></table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Constancia que se pide a petición de la parte interesada en la ciudad de san juan de los morros, a los dias dias del mes de mes del año: año </p><br><br><br><br> 
<table><tr><th></th></tr><tr><th></th></tr><tr><th></th></tr></table>
<table><tr><th></th></tr><tr><th></th></tr><tr><th></th></tr></table> 
<table>
<tr style="text-align: center;">
    <th>__________________________<br/>Profe. directora <br/>DIRECTORA</th>
</tr>
</table>

EOD;
 $tcpdf->writeHTML($html, true, false, true, false, '');
 
 // ---------------------------------------------------------
 
 // Close and output PDF document
 // This method has several options, check the source code 
 //documentation for more information.
 $tcpdf->Output('example_001.pdf', 'I');
 exit;

 ?>