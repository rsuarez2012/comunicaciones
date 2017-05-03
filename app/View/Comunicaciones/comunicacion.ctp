<?php 
App::import('Vendor','tcpdf/tcpdf');  
class MYTCPDF extends TCPDF {

  

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
 
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
$tcpdf->setPrintFooter(FALSE);

//$tcpdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$tcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$tcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$tcpdf->setHeaderMargin(4);
$tcpdf->getAliasNumPage();
$tcpdf->SetLeftMargin(25);
$tcpdf->SetTopMargin(25);
$tcpdf->SetRightMargin(22);
$tcpdf->SetAutoPageBreak(TRUE, 50);
$tcpdf->AddPage();
$tcpdf->SetFont('helvetica', '', 12); 

$tcpdf->StartTransform();
$tcpdf->Rotate(90,90,100);

$texto = 'No debe tratarse más de un asunto en cada oficio';

$tcpdf->Cell(60,0,$texto,0,1,'L',0,'',1.5);

$tcpdf->StopTransform();

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
$nume = str_pad($post['Comunicacione']['numero_comuni'],3, '0', STR_PAD_LEFT);
$director = $post['Directivo']['director'];
$ce_dire = $post['Directivo']['cedula'];
$resolucion = $post['Directivo']['resolucion'];
//$copia = $post['Comunicacione']['copia_a'];

$da=date('g:i  A');
$di = date('d/m/Y');

$html = <<<EOD
<table><tr><td><img src="../webroot/img/UNERG.jpg" width="180px" height="80px" align="left"></td><td><p align="center" style="font-size:10px; text-align:center;">
Republica Bolivariana de Venezuela<br>
UNIVERSIDAD NACIONAL EXPERIMENTAL <br>
"ROMULO GALLEGOS"<br> 
Direccion de Seguridad Social<br>
Estado Guarico</p></td></tr></table>

<br>
<br>
<table border="">
    <tr>
        <th><b>40-20-VRAD-DISESO-. &nbsp;$nume</b></th>
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
    <p text-align="left" style="text-align:justify;">&nbsp;&nbsp;&nbsp;$cuerpo</p>

<br>
<br>
<p style="font-size:12px;">              Esperando su pronta respuesta, se se despide de usted orgulloso de ser Unergista.</p>
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

<!--<p align="left" style="font-size:10px;">C.C: </p>
<p style="font-size:10px;">RQ/ib</p>
<b style="font-size:10px"></b>-->

EOD;
$html2 = <<<EOD
<table>
<tr><th style="font-size:10px;">C.C.:</th></tr>
EOD;
$i = 1;
foreach ($copias as $po) {
    # code...
    $html2=$html2.'
    <tr>
        <td style="font-size:10px;">'.$po['Dependencia']['nombre'].'</td>
    </tr>
    ';
    $i++;
}
$html2 = $html2.'</table>';
$html3 =<<<EOD
<p style="font-size:10px;">RQ/ib</p>
<b style="font-size:10px">$di - $da</b>
EOD;



$tcpdf->writeHTML($html, true, false, true, false, '');
$tcpdf->writeHTML($html2, true, false, true, false, '');
$tcpdf->writeHTML($html3, true, false, true, false, '');

 
 // ---------------------------------------------------------
 
 // Close and output PDF document
 // This method has several options, check the source code 
 //documentation for more information.
 $tcpdf->Output('comunicacion.pdf', 'I');
 exit;

 ?>