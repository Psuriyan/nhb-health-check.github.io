<?php
require('../../inc/function_report.php');
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
$pdf->AddPage();
$pdf->SetFont('angsana','',16);
$pdf->SetTitle('Health check report');
 
   $pdf->Image('../../images/hos_logo.jpg', 90, 10, 35, 35, '');

   $pdf->SetFont('angsana','',48);
   $pdf->SetTextColor(0, 0, 255);
   $pdf->setXY(15, 40);
   $pdf->Cell( 180,40, iconv( 'UTF-8','cp874' , ' รายงานผลการตรวจสุขภาพ' ) , '' , '','C' );
    
	$pdf->SetFont('angsana','',36);	
    
	$pdf->setXY(15, 65);
    $pdf->Cell( 180,40, iconv( 'UTF-8','cp874' ,'ปีงบประมาณ '. $year ) , '' , '','C' );
	
	$pdf->SetFont('angsana','',20);
	$pdf->setXY(15, 100);
    $pdf->Cell( 180,10, iconv( 'UTF-8','cp874' ,' '. $result["pname"].$result["fname"].'   '.$result["lname"] ) , '' , '','C' );
	
	$pdf->setXY(15, 110);
    $pdf->Cell( 180,10, iconv( 'UTF-8','cp874' ,'CID :  '. $result["cid"]) , '' , '','C' );	
	
	$pdf->setXY(15, 120);
    $pdf->Cell( 180,10, iconv( 'UTF-8','cp874' ,'HN :  '. $result["hn"]) , '' , '','C' );
    
	$pdf->setXY(15, 130);
    $pdf->Cell( 180,10, iconv( 'UTF-8','cp874' ,''. $result10["Detail"]) , '' , '','C' );
		
	$pdf->Image('../../images/nbh.jpg', 5, 255, 200, 35, '');
	
	
$pdf->setXY(20, 280);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , ''), '', '');
    
$pdf->SetAutoPageBreak(TRUE);
	
$pdf->SetFont('angsana','',20);


$pdf->Image('../../images/hos_logo.jpg', 180, 2, 25, 25, ''); 

$pdf->SetTextColor(0,0,0);
$pdf->setXY(25, 3);
$pdf->Cell( 150,20, iconv( 'UTF-8','cp874' , 'รายงานการตรวจสุขภาพประจำปี โรงพยาบาลหนองบัวลำภู ' ) , '' , '','C' );

$pdf->SetFont('angsana','',14);
$pdf->setXY(25, 10);
$pdf->Cell( 150,20, iconv( 'UTF-8','cp874' , '199 หมู่ 13 ถนนวศวงศ์  ตำบลหนองบัว อำเภอเมือง จังหวัดหนองบัวลำภู 39000 โทร. 042311999' ), '' , '','C' );

$pdf->SetFont('angsana','',16);
$pdf->setXY(100, 30);
$pdf->Cell(100,10,iconv( 'UTF-8','TIS-620',''.thai_date($eng_date).'  '),'',0,'L');		

$pdf->setXY(15, 40);
$pdf->Cell( 150,10  , iconv( 'UTF-8','cp874' , 'เรียนคุณ' ) , '' , '','' );

$pdf->setXY(30, 40);
$pdf->Cell(100, 10, iconv( 'UTF-8','cp874' , $result["fname"] ), '', '');

$pdf->setXY(50, 40);
$pdf->Cell(100, 10, iconv( 'UTF-8','cp874' , $result["lname"] ), '', '');

$pdf->setXY(30, 50);
$pdf->Cell(50, 10, iconv( 'UTF-8','cp874' , 'ตามที่ท่านได้ไว้วางใจเข้ารับการตรวจสุขภาพประจำปีกับโรงพยาบาลหนองบัวลำภู ทางโรงพยาบาลได้ประมวลผล' ) , '' , '','' );

$pdf->setXY(15, 57);
$pdf->Cell(50, 10, iconv( 'UTF-8','cp874' , 'เป็นที่เรียบร้อยแล้วจึงขอรายงานผลการตรวจสุขภาพประจำปีดังแสดงข้างล่างนี้ ทั้งนี้ขอเรียนให้ทราบว่าผลการตรวจสุขภาพ' ) , '' , '','' );

$pdf->setXY(15, 64);
$pdf->Cell(50, 10, iconv( 'UTF-8','cp874' , 'เป็นการแสดงถึงภาวะสุขภาพของท่าน ณ เวลาที่ท่านเข้ารับการตรวจ หากมีข้อสงสัยหรือมีอาการผิดปกติของร่างกาย' ) , '' , '','' );

$pdf->setXY(15, 71);
$pdf->Cell(50, 10, iconv( 'UTF-8','cp874' , 'กรุณาติดต่อโรงพยาบาลหนองบัวลำภูเพื่อเข้ารับการตรวจและวินิจฉัยโรคเพิ่มเติม' ) , '' , '','' );

$pdf->setXY(15, 81);
$pdf->Cell(50, 10, iconv( 'UTF-8','cp874' , 'ข้อมูลทั่วไป : ' ) , '' , '','' );

$pdf->setXY(40, 81);
$pdf->Cell(50, 10, iconv( 'UTF-8','cp874' , 'อายุ  '.$result["age"].' ปี' ) , '' , '','' );

$pdf->setXY(57, 81);
$pdf->Cell(50, 10, iconv( 'UTF-8','cp874' , 'โรคประจำตัว' ) , '' , '','' );

$pdf->setXY(80, 81);
$pdf->Cell(10, 10, iconv( 'UTF-8','cp874' , $result["underlying"] ), '', '');

$pdf->setXY(125, 81);
$pdf->Cell(10, 10, iconv( 'UTF-8','cp874' , 'สูบบุหรี่' ) , '' , '','' );

$pdf->setXY(145, 81);
$pdf->Cell(50, 10, iconv( 'UTF-8','cp874' , $result10["smoking"] ), '', '');

$pdf->setXY(15, 88);
$pdf->Cell(10, 10, iconv( 'UTF-8','cp874' , 'ดื่มเครื่องดื่มแอลกอฮอล์' ) , '' , '','' );

$pdf->setXY(55, 88);
$pdf->Cell(50, 10, iconv( 'UTF-8','cp874' , $result10["alcohol"] ), '', '');

$pdf->setXY(120, 88);
$pdf->Cell(50, 10, iconv( 'UTF-8','cp874' , 'ออกกำลังกาย' ) , '' , '','' );

$pdf->setXY(143, 88);
$pdf->Cell(10, 10, iconv( 'UTF-8','cp874' , $result10["exercise"] ), '', '');

$pdf->setXY(15, 96);
$pdf->Cell(40, 10, iconv( 'UTF-8','cp874' , '1. ตรวจร่างกาย' ), '', '');  

$pdf->setXY(30, 104);
$pdf->Cell(100,10,iconv( 'UTF-8','TIS-620',' น้ำหนัก '.$result["weight"].' กิโลกรัม'.' ส่วนสูง '.$result["height"].' เซ็นติเมตร'.' ดัชนีมวลกาย '.$result["bmi"].' กก./ตร.ม '.'รอบเอว  '.$result["waist"].' เซ็นติเมตร'),'',0,'L');

$pdf->setXY(15, 112);
$pdf->Cell(40, 10, iconv( 'UTF-8','cp874' ,' ความดันโลหิต '.$result["systolic"].' / '.$result["diastolic"].'  มม.ปรอท'.' อัตราการเต้นของหัวใจ '.$result["PR"].' ครั้ง/นาที'.' อัตราการหายใจ '.$result["RR"].' ครั้ง/นาที' ), '', '');

$pdf->setXY(15, 120);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,'การแปลผล : '. $result7["BMI_1"] ), '', '');

$pdf->setXY(35, 128);
$pdf->Write(7, iconv( 'UTF-8','cp874' , $result7["BP"] ), '', '');

$pdf->setXY(15, 136);
$pdf->Write(7, iconv( 'UTF-8','cp874' , '2. ผลการตรวจความสมบูรณ์ของระบบโลหิต' ), '', '');

$pdf->setXY(15, 150);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' ,'รายการ (Items)'), 'TBLR','', 'C');

$pdf->setXY(105, 150);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,'ค่าที่ตรวจได้'), 'TBLR','', 'C');

$pdf->setXY(145, 150);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'ค่าปกติ'), 'TBLR','', 'C');

$pdf->setXY(15, 157);
$pdf->Cell(90, 14, iconv( 'UTF-8','cp874' , 'Hb (ฮีโมโกบิน)' ), 'BLR', '', '');

$pdf->setXY(105, 157);
$pdf->Cell(40, 14, iconv( 'UTF-8','cp874' ,$result2["Hb"] ), 'BLR','', 'C');

$pdf->setXY(145, 157);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'ชาย 14.00 - 18.00 gm' ), 'LR','', 'C');

$pdf->setXY(145, 164);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'หญิง  12.00 - 16.00 gm%' ), 'BLR','', 'C');

$pdf->setXY(15, 171);
$pdf->Cell(90, 14, iconv( 'UTF-8','cp874' , 'Hct (ความเข้มข้นของเม็ดแดง)' ), 'BLR', '', '');

$pdf->setXY(105, 171);
$pdf->Cell(40, 14, iconv( 'UTF-8','cp874' ,$result2["Hct"] ), 'BLR','', 'C');

$pdf->setXY(145, 171);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'ชาย   42.00 - 52.00 %' ), 'LR','', 'C');

$pdf->setXY(145, 178);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'หญิง  37.00 - 47.00 %' ), 'BLR','', 'C');

$pdf->setXY(15, 185);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , 'WBC (ปริมาณเม็ดเลือดขาว )' ), 'BLR', '', '');

$pdf->setXY(105, 185);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result2["WBC"] ), 'BLR','', 'C');

$pdf->setXY(145, 185);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'4,500.00 - 11,000.00 cell/cu.mm' ), 'BLR','', 'C');

$pdf->setXY(15, 192);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , 'WBC differential จำนวนเซลล์แยกย่อยของเม็ดเลือดขาว' ), 'BLR', '', '');

$pdf->setXY(15, 199);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'Neutrophil = '.$result2["PMN"].' (ค่าปกติ 55.0-70.0 %)'.'    Lymphocyte = '.$result2["Lymph"].' (ค่าปกติ 20.0-40.0 %)' ), 'LR','', '');

$pdf->setXY(15, 206);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'Eosinophil = '.$result2["Eos"].'(ค่าปกติ 1.0-4.0 %)'.'  Basophil = '.$result2["Baso"].' (ค่าปกติ 0.5-1.0 %)'.' Monocyte = '.$result2["Mono"].'(ค่าปกติ 2.0-8.0 %)'), 'LR','', '');

$pdf->setXY(15, 213);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'Band = '.$result2["Band"].' (ค่าปกติ 3.0-5.0 %)'.'  ปริมาณเกร็ดเลือด (Platelets) = '.$result2["Plt"].' (ค่าปกติ 140,000 - 400,000 %)' ), 'BLR','', '');

$pdf->setXY(15, 225);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'การแปลผล : '. $result7["cbc"]), '', '');

$pdf->setXY(20, 232);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , $result7["rbc1"]), '', '');

$pdf->setXY(20, 239);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , $result7["wbc1"] ), '', '');

$pdf->setXY(20, 246);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , $result7["plt1"] ), '', '');

$pdf->setXY(20, 280);
$pdf->Cell(180, 20, iconv( 'UTF-8','cp874' , ''), '', '');

$pdf->SetAutoPageBreak(TRUE);

$pdf->setXY(15, 15);
$pdf->Cell(180,10, iconv( 'UTF-8','cp874' , '3. ผลการตรวจปัสสาวะ (Urine analysis)' ), '', '');

$pdf->setXY(15, 25);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'ความถ่วงจำเพาะ = '.$result3["Spgr"].' (ค่าปกติ 1.005 - 1.030)'.'    pH = '.$result3["pH"].' (ค่าปกติ 4.50 - 8.00)' ), 'TLR','', '');

$pdf->setXY(15, 32);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'ปริมาณโปรตีน = '.$result3["Alb"].'(ค่าปกติ-ไม่มี)'.'  ปริมาณน้ำตาล = '.$result3["Sugar"].' (ค่าปกติ-ไม่มี)'), 'LR','', '');

$pdf->setXY(15, 39);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'จำนวนเม็ดเลือดขาว = '.$result3["Uwbc"].'(ค่าปกติ 0-1 cell/HPF)'.'  ปริมาณเม็ดเลือดแดง = '.$result3["Urbc"].' (ค่าปกติ 0-1 cell/HPF)' ), 'BLR','', '');

$pdf->setXY(15, 49);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'การแปลผล : '. $result7["UA"]), '', '');

$pdf->setXY(20, 56);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , $result7["Uwbc1"]), '', '');

$pdf->setXY(20, 63);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , $result7["Urbc1"] ), '', '');

$pdf->setXY(20, 70);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , $result7["Ualb1"] ), '', '');

$pdf->setXY(20, 77);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , $result7["Usugar1"] ), '', '');

$pdf->setXY(15, 87);
$pdf->Cell(180,10, iconv( 'UTF-8','cp874' , '4. ผลการตรวจอุจจาระ (Stool examination)' ), '', '');

$pdf->setXY(15, 97);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'ลักษณะทั่วไป = '.$result5["context"].'    สีของอุจจาระ = '.$result5["colour"] ), 'TLR','', '');

$pdf->setXY(15, 104);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'จำนวนเม็ดเลือดแดง ='.$result5["sRBC"].'  จำนวนเม็ดเลือดขาว = '.$result5["sWBC"]), 'LR','', '');

$pdf->setXY(15, 111);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'พยาธิ  = '.$result5["parasite"]), 'BLR','', '');

$pdf->setXY(15, 121);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'การแปลผล : '. $result7["stool"]), '', '');

$pdf->setXY(20, 128);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , $result7["stool_1"]), '', '');

$pdf->setXY(20, 135);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , $result7["stool_2"]), '', '');

$pdf->setXY(20, 142);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , $result7["stool_3"]), '', '');

$pdf->setXY(20, 149);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , $result7["other"]), '', '');

$pdf->setXY(15, 159);
$pdf->Write(10, iconv( 'UTF-8','cp874' , '5. การตรวจสารเคมีในเลือด' ), '', '');

$pdf->setXY(15, 169);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' ,'รายการ (Items)'), 'TBLR','', 'C');

$pdf->setXY(105, 169);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,'ค่าที่ตรวจได้'), 'TBLR','', 'C');

$pdf->setXY(145, 169);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'ค่าปกติ'), 'TBLR','', 'C');

$pdf->setXY(15, 176);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , 'ระดับน้ำตาลในเลือดหลังงดน้ำและอาหาร(FBS)'), 'BLR', '', '');

$pdf->setXY(105, 176);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["FBS"]), 'BLR','', 'C');

$pdf->setXY(145, 176);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'น้อยกว่า 110.00 mg/dl'), 'BLR','', 'C');

$pdf->setXY(15, 183);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'การทำงานของไต'), 'BLR','', '');

$pdf->setXY(15, 190);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , '     BUN' ), 'BLR', '', '');

$pdf->setXY(105, 190);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["BUN"]), 'BLR','', 'C');

$pdf->setXY(145, 190);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'10.00 - 20.00 mg/dl' ), 'BLR','', 'C');

$pdf->setXY(15, 197);
$pdf->Cell(90, 14, iconv( 'UTF-8','cp874' , '     Creatinine'), 'BLR', '', '');

$pdf->setXY(105, 197);
$pdf->Cell(40, 14, iconv( 'UTF-8','cp874' ,$result4["Cr"]), 'BLR','', 'C');

$pdf->setXY(145, 197);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'ชาย : 0.60 - 1.20 mg/dl' ), 'LR','', 'C');

$pdf->setXY(145, 204);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'หญิง : 0.50 - 1.10 mg/dl' ), 'BLR','', 'C');

$pdf->setXY(15, 211);
$pdf->Cell(90, 14, iconv( 'UTF-8','cp874' , 'ตรวจโรคเก๊าท์ (Uric acid)'), 'BLR', '', '');

$pdf->setXY(105, 211);
$pdf->Cell(40, 14, iconv( 'UTF-8','cp874' ,$result4["Uric"]), 'BLR','', 'C');

$pdf->setXY(145, 211);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'ชาย : 4.00 - 8.50' ), 'LR','', 'C');

$pdf->setXY(145, 218);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'หญิง : 2.70 - 7.30' ), 'BLR','', 'C');

$pdf->setXY(15, 225);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'ระดับไขมันเลือด'), 'BLR','', '');

$pdf->setXY(15, 232);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , '     ระดับคลอเลสเตอรอล'), 'BLR', '', '');

$pdf->setXY(105, 232);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["Chol"]), 'BLR','', 'C');

$pdf->setXY(145, 232);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'น้อยกว่า 200.00 mg/dl'), 'BLR','', 'C');

$pdf->setXY(15, 239);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , '     ไตรกลีเซอไรด์'), 'BLR', '', '');

$pdf->setXY(105, 239);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["TG"]), 'BLR','', 'C');

$pdf->setXY(145, 239);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'น้อยกว่า 150.00 mg/dl'), 'BLR','', 'C');

$pdf->setXY(15, 246);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , '     ไขมันชนิดดี (HDL)'), 'BLR', '', '');

$pdf->setXY(105, 246);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["HDL"]), 'BLR','', 'C');

$pdf->setXY(145, 246);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'มากกว่า 60.00 mg/dl'), 'BLR','', 'C');

$pdf->setXY(15, 253);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , '     ไขมันชนิดร้าย (LDL)'), 'BLR', '', '');

$pdf->setXY(105, 253);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["LDL"]), 'BLR','', 'C');

$pdf->setXY(145, 253);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'น้อยกว่า 100.00 mg/dl'), 'BLR','', 'C');

$pdf->setXY(15, 280);
$pdf->Cell(180, 20, iconv( 'UTF-8','cp874' ,''), '', '');

$pdf->SetAutoPageBreak(TRUE);

$pdf->setXY(15, 15);
$pdf->Write(7, iconv( 'UTF-8','cp874' , '5. การตรวจสารเคมีในเลือด (ต่อ)' ), '', '');

$pdf->setXY(15, 25);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' ,'รายการ (Items)'), 'TBLR','', 'C');

$pdf->setXY(105, 25);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,'ค่าที่ตรวจได้'), 'TBLR','', 'C');

$pdf->setXY(145, 25);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'ค่าปกติ'), 'TBLR','', 'C');

$pdf->setXY(15, 32);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'การทำงานของตับ'), 'BLR','', '');

$pdf->setXY(15, 39);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , '     Alkaline phosphatase' ), 'BLR', '', '');

$pdf->setXY(105, 39);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["Alp"]), 'BLR','', 'C');

$pdf->setXY(145, 39);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'30.00 - 120.00 U/L' ), 'BLR','', 'C');

$pdf->setXY(15, 46);
$pdf->Cell(90, 14, iconv( 'UTF-8','cp874' , '     SGOT หรือ AST'), 'BLR', '', '');

$pdf->setXY(105, 46);
$pdf->Cell(40, 14, iconv( 'UTF-8','cp874' ,$result4["SGOT"]), 'BLR','', 'C');

$pdf->setXY(145, 46);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'ชาย : 8.00 - 46.00 U/L' ), 'LR','', 'C');

$pdf->setXY(145, 53);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'หญิง : 7.00 - 34.00 U/L' ), 'BLR','', 'C');

$pdf->setXY(15, 60);
$pdf->Cell(90, 14, iconv( 'UTF-8','cp874' , '      SGPT หรือ ALT'), 'BLR', '', '');

$pdf->setXY(105, 60);
$pdf->Cell(40, 14, iconv( 'UTF-8','cp874' ,$result4["SGPT"]), 'BLR','', 'C');

$pdf->setXY(145, 60);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'ชาย : ไม่เกิน 30.00 U/L' ), 'LR','', 'C');

$pdf->setXY(145, 67);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'หญิง : ไม่เกิน 19.00 U/L ' ), 'BLR','', 'C');

$pdf->setXY(15, 77);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'การแปลผล'), '', '');

$pdf->setXY(20, 84);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , 'ระดับน้ำตาลในเลือด: '. $result7["FBS1"]), '', '');

$pdf->setXY(20, 91);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , 'การทำงานของไต : '. $result7["renal"]), '', '');

$pdf->setXY(20, 98);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , 'โรคเก๊าท์ (กรดยูริค) : '. $result7["uric1"]), '', '');

$pdf->setXY(20, 105);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , 'ระดับไขมันในเลือด : '. $result7["lipid"]), '', '');

$pdf->setXY(20, 112);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' , 'การทำงานของตับ : '. $result7["liver"]), '', '');

$pdf->setXY(20, 119);
$pdf->Write(7, iconv( 'UTF-8','cp874' , '     '. $result7["lipid_other"]), '', '');

$pdf->setXY(15, 140);
$pdf->Write(7, iconv( 'UTF-8','cp874' , '6. ผลการตรวจภูมิคุ้มกันวิทยา' ), '', '');

$pdf->setXY(15, 150);
$pdf->Cell(60, 7, iconv( 'UTF-8','cp874' ,'รายการ (Items)'), 'TBLR','', 'C');

$pdf->setXY(75, 150);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,'ค่าที่ตรวจได้'), 'TBLR','', 'C');

$pdf->setXY(115, 150);
$pdf->Cell(80, 7, iconv( 'UTF-8','cp874' ,'แปลผล'), 'TBLR','', 'C');

$pdf->setXY(15, 157);
$pdf->Cell(60, 7, iconv( 'UTF-8','cp874' ,'ไวรัสตับอักเสบชนิด บี'), 'BLR','', 'C');

$pdf->setXY(75, 157);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["HBsAg"]), 'BLR','', 'C');

$pdf->setXY(115, 157);
$pdf->Cell(80, 7, iconv( 'UTF-8','cp874' ,$result7["HBsAg1"]), 'BLR','', 'C');

$pdf->setXY(15, 164);
$pdf->Cell(60, 7, iconv( 'UTF-8','cp874' ,'ภูมิต้านทานต่อไวรัสตับอักเสบชนิด บี'), 'BLR','', 'C');

$pdf->setXY(75, 164);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["HBsAb"]), 'BLR','', 'C');

$pdf->setXY(115, 164);
$pdf->Cell(80, 7, iconv( 'UTF-8','cp874' ,$result7["HBsAb1"]), 'BLR','', 'C');

$pdf->setXY(15, 171);
$pdf->Cell(60, 7, iconv( 'UTF-8','cp874' ,'ภูมิต้านทานต่อไวรัสตับอักเสบชนิด ซี'), 'BLR','', 'C');

$pdf->setXY(75, 171);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["HCVAb"]), 'BLR','', 'C');

$pdf->setXY(115, 171);
$pdf->Cell(80, 7, iconv( 'UTF-8','cp874' ,$result7["HCVAb1"]), 'BLR','', 'C');

$pdf->setXY(15, 181);
$pdf->Write(10, iconv( 'UTF-8','cp874' , '7. ผลการตรวจเพิ่มเติม' ), '', '');

$pdf->setXY(15, 191);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' ,'รายการ (Items)'), 'TBLR','', 'C');

$pdf->setXY(105, 191);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,'ค่าที่ตรวจได้'), 'TBLR','', 'C');

$pdf->setXY(145, 191);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'ค่าปกติ'), 'TBLR','', 'C');

$pdf->setXY(15, 198);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , 'CEA (มะเร็งลำไส้)'), 'BLR', '', '');

$pdf->setXY(105, 198);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["CEA"]), 'BLR','', 'C');

$pdf->setXY(145, 198);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'น้อยกว่า 5.00 ng/ml'), 'BLR','', 'C');

$pdf->setXY(15, 205);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , 'AFP (มะเร็งตับ)'), 'BLR', '', '');

$pdf->setXY(105, 205);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["AFP"]), 'BLR','', 'C');

$pdf->setXY(145, 205);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'น้อยกว่า 15.00 ng/ml'), 'BLR','', 'C');

$pdf->setXY(15, 212);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , 'CA15-3 (มะเร็งเต้านม)'), 'BLR', '', '');

$pdf->setXY(105, 212);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["CA153"]), 'BLR','', 'C');

$pdf->setXY(145, 212);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'น้อยกว่า 22.00 u/ml'), 'BLR','', 'C');

$pdf->setXY(15, 219);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , 'PSA (มะเร็งต่อมลูกหมาก)'), 'BLR', '', '');

$pdf->setXY(105, 219);
$pdf->Cell(40, 7, iconv( 'UTF-8','cp874' ,$result4["PSA"]), 'BLR','', 'C');

$pdf->setXY(145, 219);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' ,'น้อยกว่า 4.00 u/ml'), 'BLR','', 'C');

$pdf->setXY(15, 229);
$pdf->Cell(180, 7, iconv( 'UTF-8','cp874' ,'การแปลผล'), '', '');

$pdf->setXY(20, 236);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,'CEA (มะเร็งลำไส้) :'. $result7["CEA1"]), '', '');

$pdf->setXY(20, 250);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,'AFP (มะเร็งตับ) :'. $result7["AFP1"]), '', '');

$pdf->setXY(20, 264);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,'CA15-3 (มะเร็งเต้านม) :'. $result7["CA1531"]), '', '');

$pdf->setXY(20, 278);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,'PSA (มะเร็งต่อมลูกหมาก) :'. $result7["PSA1"]), '', '');

$pdf->setXY(15, 292);
$pdf->Cell(180, 10, iconv( 'UTF-8','cp874' ,''), '', '');

$pdf->SetAutoPageBreak(TRUE);

$pdf->setXY(15, 15);
$pdf->Write(7, iconv( 'UTF-8','cp874' , '8. การตรวจมะเร็งปากมดลูก (Pap smear)' ), '', '');

$pdf->setXY(15, 25);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,'     '. $result9["pap"]), '', '');

$pdf->setXY(15, 35);
$pdf->Write(7, iconv( 'UTF-8','cp874' , '9. เอ็กซเรย์ปอด ( CXR ):' ), '', '');

$pdf->setXY(15, 42);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,'     '. $result6["cxr"]), '', '');

$pdf->setXY(15, 49);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,'     '. $result7["xray"]), '', '');

$pdf->setXY(15, 59);
$pdf->Cell(180, 7, iconv(  'UTF-8','cp874' , 'สรุปผลการตรวจสุขภาพ:         '. $result7["summary"] ), '', '', 'C');

$pdf->setXY(15, 69);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,$result7["summary1"]), '','', '');

$pdf->setXY(15, 90);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,$result7["summary2"]), '','', '');

$pdf->setXY(15, 104);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,$result7["summary3"]), '','', '');

$pdf->setXY(15, 118);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,$result7["summary4"]), '','', '');

$pdf->setXY(15, 125);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,$result7["summary5"]), '','', '');

$pdf->setXY(15, 132);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,$result7["summary6"]), '','', '');

$pdf->setXY(15, 155);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,$result7["summary_text"]), '','', '');

$pdf->setXY(15, 170);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , 'การนัดหมาย  : '.$result["status"]), 'TBLR', '', '');

$pdf->setXY(105, 170);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' ,'วันนัด : '.substr($result8["app_date"],8,2).'-'.substr($result8["app_date"],5,2).'-'.substr($result8["app_date"]+543,0,4)),'TBLR','', '');

$pdf->setXY(15, 185);
$pdf->Write(7, iconv( 'UTF-8','cp874' ,'รายการตรวจก่อนพบแพทย์  : '.$result8["fcbc"].'  '.$result8["fua"].'  '.$result8["fstool"].'  '.$result8["fbs"].'  '.$result8["fcr"].'  '.$result8["fLFT"].'  '.$result8["fAST"].'  '.$result8["fchol_TG"].'  '.$result8["fHDL_LDL"].'  '.$result8["fcxr"].'  '.$result8["other_lab"]), '','', '');

$pdf->setXY(15, 210);
$pdf->Cell(90, 7, iconv( 'UTF-8','cp874' , 'หมายเหตุ  : '.$result8["notice"]), '', '', '');

$pdf->setXY(115, 250);
$pdf->Cell(60, 7, iconv( 'UTF-8','cp874' , 'ลงชื่อ : ........................................................'), '', '', '');

$pdf->setXY(130, 260);
$pdf->Cell(50, 7, iconv( 'UTF-8','cp874' , $result["doctor"]), '', '', '');

$pdf->setXY(15, 280);
$pdf->Cell(60, 7, iconv( 'UTF-8','cp874' , 'สอบถามข้อมูลเพิ่มเติม : กลุ่มงานอาชีวเวชกรรม โทร. 042-311999 ต่อ 1216 , 1217'), '', '', '');

$name = 'รายงานการตรวจสุขภาพประจำปี.pdf';
$pdf->Output($name,'I'); 

?>
