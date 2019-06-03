<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.ico"/>
<title>โปรแกรมตรวจสุขภาพประจำปี</title>
<style type="text/css">
.submit {
	text-align: center;
}
.head {
	text-align: center;
}
.program_heading {
	text-align: center;
}
.capital {
	font-weight: bold;
}
.font36 {
	font-size: 36px;
}
.font24 {
	font-size: 24px;
}
.font_tahoma {
	font-family: Tahoma, Geneva, sans-serif;
}
.font_arial {
	font-family: Arial, Helvetica, sans-serif;
}
.cbc {
	text-align: center;
}
.font24 {
	font-size: 24px;
}
.font24bold {
	font-weight: bold;
}
.font24 {
	font-size: 24px;
	font-weight: bold;
}
#submit {
	text-align: center;
}
.font36 {
	font-size: 36px;
	color: #03C;
	font-weight: bold;
}
#form1 table {
	font-family: Tahoma, Geneva, sans-serif;
}
#autoSumForm table tr td {
	text-align: center;
}
#autoSumForm table tr th table tr td table tr td {
	text-align: center;
}
#autoSumForm table tr th table tr td table_1 {
	text-align: left;
}
</style>
</head>
<body>

<form action="pdf_interprete.php" method="post" name="autoSumForm" id="autoSumForm">
<p>&nbsp;</p>
<table width="900" border="1" align="center">
  <tr>
    <td colspan="4" align="center" bgcolor="#FFCCFF"><p class="font36" align="center">โปรแกรมแปลผลการตรวจสุขภาพประจำปี <br />
      โรงพยาบาลหนองบัวลำภู
      </p></td>
  </tr>
  <tr>
    <td height="40" colspan="4" bgcolor="#CCCCFF">      ชื่อ-นามสกุล
      <input type="text" name="name" id="name" size="20" value=""/>
      &nbsp;&nbsp;&nbsp;
      อายุ
  <input class="right" type="text" name="age1" value=""  size="3" maxlength="5" />
      ปี      เพศ
      <label for="sex"></label>
      <select name="sex" id="sex">
        <option>กรุณาเลือก</option>
        <option value="1">ชาย</option>
        <option value="2">หญิง</option>
      </select>
โรคประจำตัว
<input type="text" name="underlying" id="underlying" size="10" value=""/></td>
  </tr>
  <tr>
    <td height="40" colspan="4" bgcolor="#CCCCFF">น้ำหนัก
<input class="right" type="text" name="weight1" value=""  size="3"/>
Kg
      &nbsp;&nbsp; ส่วนสูง
      <input class="right" type="text" name="height1" value=""  size="3"/>
cm
      &nbsp;  BMI
      <input class="right" type="text" name="bmi1" value=""  size="3" maxlength="5" />
&nbsp;
      รอบเอว
      <input type="text" name="waist" id="waist" size="5" value=""/>
cm </td>
  </tr>
  <tr>
    <td height="40" colspan="4" bgcolor="#CCCCFF">ความดันโหิต
      <input type="text" name="systolic" id="systolic" size="3" value=""/>
      /
  <input type="text" name="diastolic" id="diastolic" size="3" value=""/>
      มม.ปรอท&nbsp;      PR
  <input type="text" name="PR" id="PR" size="5" value=""/>
      ครั้ง/นาที  
      &nbsp; RR
      <input type="text" name="RR" id="RR" size="5" value=""/>
      ครั้ง/นาที &nbsp; Blood gr.
  <input type="text" name="bloodgrp" id="bloodgrp" size="5" value=""/></td>
  </tr>
  <tr>
    <td height="40" colspan="4" bgcolor="#CCCCFF"><p>คำแนะนำด้านรูปร่างตามดัชนีมวลกาย (BMI) 
      <textarea name="BMI_1" id="BMI_1" cols="80" rows="2"></textarea>
      </p>
      <p>คำแนะนำเรื่องความดันโลหิต
        <textarea name="BP" id="BP" cols="80" rows="2"></textarea>
      </p></td>
  </tr>
  <tr bgcolor="#FFE4E1">
    <td height="33" colspan="4" class="cbc">ความสมบูรณ์ของเม็ดเลือด (Complete Blood Count)</td>
  </tr>
  <tr bgcolor="#FFE4E1">
    <th width="227" height="40">รายการ (Items)</th>
    <th width="175" height="40">ค่าที่ได้</th>
    <th width="183" height="40">ค่าปกติ</th>
    <th width="287">แปลผลและคำแนะนำ</th>
  </tr>
  <tr bgcolor="#FFE4E1">
    <td height="40" align="left">&nbsp;&nbsp;<strong>Hb (Hemoglobin)&nbsp;</strong></td>
    <td height="40" align="center">
        <input type="text" name="Hb" id="Hb" value=""/>
    </td>
    <td height="40" align="left">ชาย &nbsp;: 14.00 - 18.00 gm%&nbsp;<br>หญิง : 12.00 - 16.00 gm%</td>
    <td rowspan="2" align="left" valign="middle">
      <p>
        <textarea name="rbc1" id="rbc1" cols="45" rows="2"></textarea>
      </p></td>
  </tr>
  <tr bgcolor="#FFE4E1">
    <td height="40" align="left">&nbsp;&nbsp;<strong>Hct (Hemotocrits)&nbsp;</strong></td>
    <td height="40" align="center">
        <input type="text" name="Hct" id="Hct" value=""/></td>
    <td height="40" align="left">ชาย&nbsp; : 40.50-50.80 %&nbsp;<br>      หญิง : 36.00-47.70 % </td>
    </tr>
  <tr bgcolor="#FFE4E1">
    <td height="40" align="left"><strong>WBC (White Blood Cell )</strong>&nbsp;</td>
    <td height="40" align="center"><input type="text" name="WBC" id="WBC" value=""/></td>
    <td height="40" align="left">4,600-10,600<br />
      cell/cu.mm</td>
    <td align="left" valign="top"><textarea name="wbc1" id="wbc1" cols="45" rows="2"></textarea></td>
  </tr>
  <tr bgcolor="#FFE4E1">
    <td height="40" align="left"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Plt (Platelets)</strong></td>
    <td height="40" align="center"><input type="text" name="Plt" id="Plt" value=""/></td>
    <td height="40" align="left">140,000.00-440,000.00 cells/cu.mm</td>
    <td align="left" valign="top"><textarea name="Plt1" id="Plt1" cols="45" rows="2"></textarea></td>
  </tr>
  <tr bgcolor="#FFE4E1">
    <td height="40" colspan="4"><strong>WBC differential&nbsp;</strong>จำนวนเซลล์แยกย่อยของเม็ดเลือดขาว</td>
    </tr>
  <tr bgcolor="#FFE4E1">
    <td height="40" align="left">&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Neutrophil</strong></td>
    <td height="40" align="center">
        <input type="text" name="PMN" id="PMN" value=""/></td>
    <td height="40" align="left">43.7-70.9 %</td>
    <td rowspan="3" align="left" valign="top">&nbsp;</td>
    </tr>
  <tr bgcolor="#FFE4E1">
    <td height="40" align="left">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<strong>Lymphocyte</strong></td>
    <td height="40" align="center">
        <input type="text" name="Lymph" id="Lymph" value=""/></td>
    <td height="40" align="left">20.1-44.5 %</td>
    </tr>
  <tr bgcolor="#FFE4E1">
    <td height="40" align="left">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<strong>Monocyte</strong></td>
    <td height="40" align="center">
        <input type="text" name="Mono" id="Mono" value=""/></td>
    <td height="40" align="left">3.4-9.8 %</td>
    </tr>
  <tr bgcolor="#FFE4E1">
    <td height="40" align="left">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<strong>Eosinophi</strong></td>
    <td height="40" align="center">
        <input type="text" name="Eos" id="Eos" value=""/></td>
    <td height="40" align="left">0.7-9.2 %</td>
    <td align="left" valign="middle">&nbsp;</td>
    </tr>
  <tr bgcolor="#FFE4E1">
    <td height="40" align="left">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<strong>Basophil</strong></td>
    <td height="40" align="center">
        <input type="text" name="Baso" id="Baso" value=""/></td>
    <td height="40" align="left">0.0-2.6 %</td>
    <td rowspan="2" align="left" valign="middle">&nbsp;</td>
    </tr>
  <tr bgcolor="#FFE4E1">
    <td height="40" align="left">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<strong>Band</strong></td>
    <td height="40" align="center">
        <input type="text" name="Band" id="Band" value=""/></td>
    <td height="40" align="left">3.00 - 5.00 %</td>
    </tr>
  <tr bgcolor="#FFFF99">
    <th height="40" colspan="3" bgcolor="#FFFFCC">การตรวจปัสสาวะ (Urine analysis)</th>
    <th height="40" bgcolor="#FFFFCC">แปลผลและคำแนะนำ</th>
  </tr>
  <tr bgcolor="#FFFF99">
    <th height="40" align="left" bgcolor="#FFFFCC">รายการ (Items)</th>
    <th height="40" bgcolor="#FFFFCC">ค่าที่ได้</th>
    <th height="40" bgcolor="#FFFFCC">ค่าปกติ</th>
    <td align="left" valign="top" bgcolor="#FFFFCC">
      <p>&nbsp;</p>
</td>
  </tr>
  <tr bgcolor="#FFFF99">
    <td height="40" align="left" bgcolor="#FFFFCC"><strong>SpGr.</strong></td>
    <td height="40" align="center" bgcolor="#FFFFCC">
      <input type="text" name="Spgr" id="Spgr" value=""/></td>
    <td height="40" align="left" bgcolor="#FFFFCC">1.005 - 1.030</td>
    <td align="left" valign="top" bgcolor="#FFFFCC">&nbsp;&nbsp;&nbsp; </td>
    </tr>
  <tr bgcolor="#FFFF99">
    <td height="40" align="left" bgcolor="#FFFFCC"><strong>pH&nbsp;</strong></td>
    <td height="40" align="center" bgcolor="#FFFFCC">
      <input type="text" name="pH" id="pH" value=""/></td>
    <td height="40" align="left" bgcolor="#FFFFCC">6.5 - 7.5</td>
    <td align="left" valign="top" bgcolor="#FFFFCC">&nbsp;</td>
    </tr>
  <tr bgcolor="#FFFF99">
    <td height="40" align="left" bgcolor="#FFFFCC"><strong>Albumin&nbsp;</strong></td>
    <td height="40" align="center" bgcolor="#FFFFCC">
      <input type="text" name="Alb" id="Alb" value=""/></td>
    <td height="40" align="left" bgcolor="#FFFFCC">Negative</td>
    <td align="left" valign="top" bgcolor="#FFFFCC"><textarea name="Ualb1" id="Ualb1" cols="45" rows="2"></textarea></td>
    </tr>
  <tr bgcolor="#FFFF99">
    <td height="40" align="left" bgcolor="#FFFFCC"><strong>Sugar&nbsp;</strong></td>
    <td height="40" align="center" bgcolor="#FFFFCC">
      <input type="text" name="Sugar" id="Sugar" value=""/></td>
    <td height="40" align="left" bgcolor="#FFFFCC">Negative</td>
    <td align="left" valign="top" bgcolor="#FFFFCC"><textarea name="Usugar1" id="Usugar1" cols="45" rows="2"></textarea></td>
    </tr>
  <tr bgcolor="#FFFF99">
    <td height="40" align="left" bgcolor="#FFFFCC"><strong>WBC&nbsp;</strong></td>
    <td height="40" align="center" bgcolor="#FFFFCC">
      <input type="text" name="Uwbc" id="Uwbc" value=""/></td>
    <td height="40" align="left" bgcolor="#FFFFCC">0-3 cell/HPF</td>
    <td align="left" valign="top" bgcolor="#FFFFCC"><textarea name="Uwbc1" id="Uwbc1" cols="45" rows="2"></textarea></td>
    </tr>
  <tr bgcolor="#FFFF99">
    <td height="40" align="left" bgcolor="#FFFFCC"><strong>RBC&nbsp;</strong></td>
    <td height="40" align="center" bgcolor="#FFFFCC"><input type="text" name="Urbc" id="Urbc" value=""/></td>
    <td height="40" align="left" bgcolor="#FFFFCC">0-3 cell/HPF</td>
    <td align="left" valign="top" bgcolor="#FFFFCC"><textarea name="Urbc1" id="Urbc1" cols="45" rows="2"></textarea></td>
    </tr>
  <tr bgcolor="#FFFF99">
    <td height="40" colspan="3" align="left" bgcolor="#FFFF99">การตรวจอุจจาระ ( Stool Exam)</td>
    <th height="40" bgcolor="#FFFF99">แปลผลและคำแนะนำ</th>
    </tr>
  <tr bgcolor="#FFFF99">
    <th height="40" align="left" bgcolor="#FFFF99">รายการ (Items)</th>
    <th height="40" bgcolor="#FFFF99">ค่าที่ได้</th>
    <th height="40" bgcolor="#FFFF99">ค่าปกติ</th>
    <th align="left" valign="top" bgcolor="#FFFF99">
      <p>&nbsp;</p>
      </th>
  </tr>
  <tr bgcolor="#FFFF99">
    <td height="40" align="left" bgcolor="#FFFF99">ลักษณะทั่วไป ( Context )</td>
    <td height="40" align="center" bgcolor="#FFFF99"><input type="text" name="context" id="context" value=""/></td>
    <td height="40" align="left" bgcolor="#FFFF99">Soft </td>
    <th align="left" valign="top" bgcolor="#FFFF99">&nbsp;</th>
    </tr>
  <tr bgcolor="#FFFF99">
    <td height="40" align="left">สีของอุจจาระ</td>
    <td height="40" align="center"><input type="text" name="colour" id="colour" value=""/></td>
    <td height="40" align="left"> yellow</td>
    <th align="left" valign="top" bgcolor="#FFFF99">&nbsp;</th>
    </tr>
  <tr bgcolor="#FFFF99">
    <td height="40" align="left" bgcolor="#FFFF99">จำนวนเม็ดเลือดแดง ( RBC )</td>
    <td height="40" align="center" bgcolor="#FFFF99"><input type="text" name="sRBC" id="sRBC" value=""/></td>
    <td height="40" align="left" bgcolor="#FFFF99">Negative</td>
    <th align="left" valign="top" bgcolor="#FFFF99"><textarea name="stool_1" id="stool_1" cols="45" rows="2"></textarea></th>
    </tr>
  <tr bgcolor="#FFFF99">
    <td height="40" align="left" bgcolor="#FFFF99">จำนวนเม็ดเลือดขาว ( WBC )</td>
    <td height="40" align="center" bgcolor="#FFFF99"><input type="text" name="sWBC" id="sWBC" value=""/></td>
    <td height="40" align="left" bgcolor="#FFFF99">Negative</td>
    <th align="left" valign="top" bgcolor="#FFFF99"><textarea name="stool_2" id="stool_2" cols="45" rows="2"></textarea></th>
    </tr>
  <tr bgcolor="#FFFF99">
    <td height="40" align="left" bgcolor="#FFFF99">พยาธิ ( Parasite )</td>
    <td height="40" align="center" bgcolor="#FFFF99"><input type="text" name="parasite" id="parasite" value=""/></td>
    <td height="40" align="left" bgcolor="#FFFF99">Negative</td>
    <th align="left" valign="top" bgcolor="#FFFF99"><textarea name="stool_3" id="stool_3" cols="45" rows="2"></textarea></th>
    </tr>
  <tr bgcolor="#FFFF99">
    <td height="42" align="left" bgcolor="#FFFF99"> Stool occult blood</td>
    <td height="42" align="center" bgcolor="#FFFF99"><input type="text" name="occult_blood" id="occult_blood" value=""/></td>
    <td height="42" align="left" bgcolor="#FFFF99">Negative</td>
    <th align="left" valign="top" bgcolor="#FFFF99"><textarea name="other" id="other" cols="45" rows="3" placeholder="ข้อคิดเห็นเพิ่มเติม"></textarea></th>
    </tr>
  <tr bgcolor="#CCFFCC">
    <th height="40" colspan="3">การตรวจสารเคมีในเลือด และภูมิคุ้มกันวิทยา</th>
    <th height="40">แปลผลและคำแนะนำ</th>
  </tr>
  <tr bgcolor="#CCFFCC">
    <th height="40" align="left">รายการ (Items)</th>
    <th height="40">ค่าที่ได้</th>
    <th height="40">ค่าปกติ</th>
    <th height="40">&nbsp;</th>
  </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left"><strong>FBS </strong></td>
    <td height="40" align="center">
        <input type="text" name="FBS" id="FBS" value=""/></td>
    <td height="40" align="left">74-106 mg/dl</td>
    <td height="40" align="center">
        <textarea name="FBS1" id="FBS1" cols="45" rows="2"></textarea>
      </p></td>
  </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" colspan="3" align="left"><strong>การทำงานของไต</strong></td>
    <td height="40" align="left">&nbsp;</td>
  </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;BUN</td>
    <td height="40" align="center">
        <input type="text" name="BUN" id="BUN" value=""/></td>
    <td height="40" align="left">10.00 - 20.00 mg/dl</td>
    <td rowspan="3" align="center"><textarea name="renal" id="renal" cols="45" rows="5"></textarea></td>
  </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Creatinine </td>
    <td height="40" align="center">
        <input type="text" name="Cr" id="Cr" value="" /></td>
    <td height="40" align="left">ชาย : 0.67-1.17 mg/dl&nbsp;<br>      
      หญิง : 0.51-0.95 mg/dl</td>
    </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; อัตราการกรองของไต(eGFR)</td>
    <td height="40" align="center"><input type="text" name="eGFR" id="eGFR" value="" /></td>
    <td height="40" align="left">&nbsp;</td>
    </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Uric acid </td>
    <td height="40" align="center">
        <input type="text" name="Uric" id="Uric" value=""/></td>
    <td height="40" align="left">ชาย &nbsp;: 3.5-7.2 mg/dl<br>
      หญิง : 2.6-6.0 mg/dl</td>
    <td height="40" align="center">
 <textarea name="uric1" id="uric1" cols="45" rows="2"></textarea>
      </label></td>
  </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" colspan="3" align="left"><strong>ระดับไขมันในเลือด</strong></td>
    <th height="40" align="center">แปลผลและคำแนะนำ</th>
  </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Cholesterol</td>
    <td height="40" align="center">
        <input type="text" name="Chol1" id="Chol1" value=""/></td>
    <td height="40" align="left">0- 200.0 mg/dl</td>
    <td rowspan="4" align="center" valign="top"><label>
      <input type="radio" name="lipid" value="ไม่ได้ตรวจ" id="lipid_2" />
ไม่ได้ตรวจ
<input type="radio" name="lipid" value="ปกติ" id="lipid_0" />
      ปกติ
  <input type="radio" name="lipid" value="ไขมันในเลือดสูง      -ทำให้อัตราเสี่ยงของการเกิดโรคหัวใจและหลอดเลือดสูงขึ้น" id="lipid_1" />
  ไขมันในเลือดสูง<br />
</label>

<p align="center">
  <label for="lipid_other"></label>
  <textarea name="lipid_other" id="lipid_other" cols="45" rows="5" placeholder="ข้อคิดเห็นเพิ่มเติม"></textarea>
</p>
<label></label></td>
  </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Triglyceride</td>
    <td height="40" align="center">
        <input type="text" name="TG" id="TG" value=""/></td>
    <td height="40" align="left">0-150.0 mg/dl</td>
    </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HDL </td>
    <td height="40" align="center"> 
        <input type="text" name="HDL" id="HDL" value=""/></td>
    <td height="40" align="left">40-60.00 mg/dl</td>
    </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LDL </td>
    <td height="40" align="center">
        <input type="text" name="LDL" id="LDL" value=""/></td>
    <td height="40" align="left">0-159 mg/dl</td>
    </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" colspan="3" align="left"><strong>การทำงานของตับ</strong></td>
    <th height="40" align="center">แปลผลและคำแนะนำ</th>
  </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left" valign="top">&nbsp;Alk. phos. หรือ ALP<br />
      <br />
      <br />
      <p>&nbsp;SGOT หรือ AST<br />
        <br />
      </p>
      <p>&nbsp;SGPT หรือ ALT</p></td>
    <td height="40" align="center" valign="top">
      <p>
        <input type="text" name="Alp" id="Alp" value=""/>
        <br />
        <br />
      </p>
      <p>
        <input type="text" name="SGOT" id="SGOT" value=""/>
        <br />
        <br />
      </p>
      <p>
        <input type="text" name="SGPT" id="SGPT" value=""/>
      </p></td>
    <td height="40" align="left" valign="top"><p>46-116 U/L<br />
        <br />
        <br />
        15-37 U/L<br />
        <br />
        ชาย : 16-63 U/L    <br />
      หญิง : 14-59 U/L    </p></td>
    <th align="center" valign="top"><label>
      <input type="radio" name="liver" value="ไม่ได้ตรวจ" id="liver_2" />
ไม่ได้ตรวจ
<input type="radio" name="liver" value="ปกติ" id="liver_0" />
      ปกติ</label>
      <label>
        <input type="radio" name="liver" value="ผิดปกติ     -เอ็นไซม์ตับสูงกว่าปกติอาจมีโรคใดหรือสภาวะใดที่กระทบต่อตับ หัวใจ หรือกล้ามเนื้อ" id="liver_1" />
        ผิดปกติ<br />
      </label>
      <p align="center">
        <label for="liver_other"></label>
        <textarea name="liver_other" id="liver_other" cols="45" rows="5" placeholder="ข้อคิดเห็นเพิ่มเติม"></textarea>
        </p>
      </th>
  </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left"><strong>CEA (มะเร็งลำไส้)</strong></td>
    <td height="40" align="center">
      <input type="text" name="CEA" id="CEA" value=""/></td>
    <td height="40" align="left">0-5 ng/ml</td>
    <td align="center" valign="middle">    
    <textarea name="CEA1" id="CEA1" cols="45" rows="3"></textarea>    
    </td>
  </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left"><strong>AFP (มะเร็งตับ)</strong></td>
    <td height="40" align="center">
        <input type="text" name="AFP" id="AFP" value=""/></td>
    <td height="40" align="left">0-13.4 ng/ml</td>
    <td align="center" valign="middle">
        <textarea name="AFP1" id="AFP1" cols="45" rows="3"></textarea>
      </p></td>
    </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left"><strong>CA15-3 (มะเร็งเต้านม)</strong></td>
    <td height="40" align="center">
        <input type="text" name="CA153" id="CA153" value=""/></td>
    <td height="40" align="left">น้อยกว่า 22.00 u/ml</td>
    <td align="center" valign="middle">
        <textarea name="CA1531" id="CA1531" cols="45" rows="3"></textarea>
      </p></td>
    </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left"><strong>PSA (มะเร็งต่อมลูกหมาก)</strong></td>
    <td height="40" align="center"><input type="text" name="PSA" id="PSA" value=""/></td>
    <td height="40" align="left">น้อยกว่า 4.00 u/ml</td>
    <td align="center" valign="middle">
        <textarea name="PSA1" id="PSA1" cols="45" rows="3"></textarea>
      </p></td>
    </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left"><strong>HBsAg(ไวรัสตับอักเสบชนิด บี)</strong></td>
    <td height="40" align="center"><input type="text" name="HBsAg" id="HBsAg" value=""/></td>
    <td height="40" align="left">&nbsp;</td>
    <td align="center" valign="middle">
  <textarea name="HBsAg1" id="HBsAg1" cols="45" rows="2"></textarea>
</label></td>
    </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left"><strong>HBsAb (ภูมิต้านทานต่อไวรัสตับอักเสบชนิด บี)</strong></td>
    <td height="40" align="center"><input type="text" name="HBsAb" id="HBsAb" value=""/></td>
    <td height="40" align="left">&nbsp;</td>
    <td align="center" valign="middle">
        <textarea name="HBsAb1" id="HBsAb1" cols="45" rows="2"></textarea>
      </p></td>
    </tr>
  <tr bgcolor="#CCFFCC">
    <td height="40" align="left"><strong>HCVAb (ภูมิต้านทานต่อไวรัสตับอักเสบชนิด ซี)</strong></td>
    <td height="40" align="center"><input type="text" name="HCVAb" id="HCVAb" value=""/></td>
    <td height="40" align="left">&nbsp;</td>
    <td align="center" valign="middle">
      <p>
        <textarea name="HCVAb1" id="HCVAb1" cols="45" rows="2"></textarea>
      </p></td>
    </tr>
  <tr >
    <th height="40" colspan="4"  bgcolor="#FFFF99"><input type="submit" name="submit" id="submit" value="แปลผลการตรวจ" />
      &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</th>
  </tr>
</table>
</p>
</form> 
<p></p>

</body>
</html>