<?php
include("request.php");
include("interprete_function.php");	
include('function_report.php');	
include('insert.php');		
define('FPDF_FONTPATH','font/'); 
require('fpdf17/fpdf.php'); 

class PDF extends FPDF
{
	//Override คำสั่ง (เมธอด) Header
	function Header(){
        $this->AddFont('angsana','','angsa.php'); 
		//ใช้ตัวอักษร Arial ตัวเอียง ขนาด 5
		$this->SetFont('angsana','',16);   
}
 //Override คำสั่ง (เมธอด) Footer
	function Footer()	{
        $this->AddFont('angsana','','angsa.php'); 
		//ใช้ตัวอักษร Arial ตัวเอียง ขนาด 5
		$this->SetFont('angsana','',16);
		//นับจากขอบกระดาษด้านล่างขึ้นมา 10 มม.
		$this->SetY( -20 );
 
		//กำหนดใช้ตัวอักษร Arial ตัวเอียง ขนาด 5
		$this->SetFont('angsana','',16);
        //พิมพ์ หมายเลขหน้า ตรงมุมขวาล่าง
		$this->Cell(0,23,iconv( 'UTF-8','cp874','หน้า ') .$this->PageNo().'' ,0,0,'R');		       
}
}
		
//เรียกใช้งาน เราจะเรียกใช้คลาสใหม่ของเราแทน
$pdf=new PDF();
$pdf->SetMargins( 40,30,10 );
$pdf->AddPage();
$pdf->SetFont('angsana','',16);
$pdf->SetTitle('Health check report');
 
$pdf->Image('../images/hos_logo.jpg', 90, 5, 35, 35, '');

$pdf->setXY(100, 45);
$pdf->Cell(100,10,iconv( 'UTF-8','TIS-620',''.thai_date($eng_date).'  '),'',0,'L');			
	
$pdf->setXY(30, 60);
$pdf->Write(10, iconv( 'UTF-8','cp874' , 'เรียนคุณ  '.$name.' ผลการตรวจสุขภาพของท่านสามารถประมวลผลได้ดังนี้ '), '', '');

$pdf->setXY(20, 70);
$pdf->Write(10, iconv( 'UTF-8','cp874' , 'ข้อมูลทั่วไป :'), '', '');

$pdf->setXY(30, 80);
$pdf->Write(10, iconv( 'UTF-8','cp874' ,' เลือดกรุ๊ป '.$bloodgrp.' อายุ '.$age.' ปี'.' โรคประจำตัว '.$underlying.'  น้ำหนัก  '.$weight.' กก. '.' ส่วนสูง '.$height.' ซม.'  ), '', '');

$pdf->setXY(20, 90);
$pdf->Cell(50, 10, iconv( 'UTF-8','cp874' , 'ดัชนีมวลกาย '.$bmi.' กก/ตร.ม'.' รอบเอว '.$waist .' ซม.'.' ความดันโลหิต '.$systolic.' / '.$diastolic.'  มม.ปรอท'  ), '', '');

$pdf->setXY(20, 100);
$pdf->Cell(50, 10, iconv( 'UTF-8','cp874' , ' อัตราการเต้นของหัวใจ '.$PR.' ครั้ง/นาที'.' อัตราการหายใจ '.$RR.' ครั้ง/นาที' ), '', '');

$pdf->setXY(20, 110);
$pdf->Write(10, iconv( 'UTF-8','cp874' ,'ผลตรวจสุขภาพ : '), '', '');

$pdf->setXY(30, 120);
$pdf->Write(10, iconv( 'UTF-8','cp874' ,'1.'. $BMI_Text ), '', '');

$pdf->setXY(30, 130);
$pdf->Write(10, iconv( 'UTF-8','cp874' ,'2.'. $BPText ), '', '');

$pdf->setXY(30, 140);
$pdf->Cell(180, 10, iconv( 'UTF-8','cp874' ,'3.'. 'ความสมบูรณ์ของโลหิต'), '', '');

$pdf->setXY(35, 150);
$pdf->Write(10, iconv( 'UTF-8','cp874' ,'3.1 '. $rbc1Text), '', '');

$pdf->setXY(35, 160);
$pdf->Write(10, iconv( 'UTF-8','cp874' ,'3.2 '. $wbc1Text), '', '');

$pdf->setXY(35, 170);
$pdf->Write(10, iconv( 'UTF-8','cp874' ,'3.3 '. $Plt1Text), '', '');

$pdf->setXY(30, 180);
$pdf->Cell(180, 10, iconv( 'UTF-8','cp874' ,'4.'. 'ผลตรวจปัสสาวะ'), '', '');

$pdf->setXY(35, 190);
$pdf->Write(10, iconv( 'UTF-8','cp874' ,'4.1 โปรตีนในปัสสาวะ : '. $UalbText), '', '');

$pdf->setXY(35, 200);
$pdf->Write(10, iconv( 'UTF-8','cp874' ,'4.2 น้ำตาลในปัสสาวะ : '. $UsugarText), '', '');

$pdf->setXY(35, 210);
$pdf->Write(10, iconv( 'UTF-8','cp874' ,'4.3 เม็ดเลือดขาวในปัสสาวะ : '. $UwbcText), '', '');

$pdf->setXY(35, 220);
$pdf->Write(10, iconv( 'UTF-8','cp874' ,'4.4 เม็ดเลือดแดงในปัสสาวะ : '. $UrbcText), '', '');


 
$pdf->setXY(20, 280);
$pdf->Cell(180, 10, iconv( 'UTF-8','cp874' , ''), '', '');    
$pdf->SetAutoPageBreak(TRUE);

$pdf->Output($name,'I');

?>
