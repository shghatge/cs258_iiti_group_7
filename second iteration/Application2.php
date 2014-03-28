<?php
 session_start();
 if(!(isset($_SESSION['loginsession'])))
 echo "<script>window.open('login.php','_self');</script>";
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Application2</title>
<style type="text/css">
.lee {
	position: relative;
	font-size: 12px;
	text-align: right;
	margin-right:30px;
}
.CO {
	font-style: oblique;
	font-weight: bold;
}
input[type="text"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
}
body
	{height:100%;
   width:100%;
   background-image:url(Background1.jpg);/*your background image*/  
   background-repeat:no-repeat;/*we want to have one single image not a repeated one*/  
   background-size:cover;/*this sets the image to fullscreen covering the whole screen*/  
   /*css hack for ie*/     
   filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.image.jpg',sizingMethod='scale');
   -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.jpg',sizingMethod='scale')";
	}
gv{

}

p.aap
{
font-family: cursive;
color:#ccecd8;
line-height:120%;
} 
</style>
<link href="styles/p4.css" rel="stylesheet" type="text/css" />
</head>

<body>
<body background = "Background1.jpg">
<form action="page4.php" method="post" name="page3">
<table id="t1" class="gv" width="93%" bgcolor="white" align="center">
<p class = "aap"><b>PROVIDE THE FOLLOWING INFORMATION WITH THE APPLICATION</b>: (Indicate "NIL" if required; DO NOT omit/delete the following points. Your application may not be processed in the absence/incompleteness of the following information) 
 
 Note: 
	 i. For items ‘a’ through‘s’, use separate sheet for each sub-heading in the format indicated. 
	 ii. All annexure should be consecutively arranged and must bear your name. 
 
 
  a) List of publications: 
  
      List those PUBLISHED, ACCEPTED, and IN PREPARATION separately 
 
    		a. Papers in refereed journals (Please also include the journal impact factor) 
	
    		b. Papers in conference proceedings 
	
    		c. Papers presented in conferences but not published 
	
    		d. Books/Chapters in books 

     Please enclose reprints of maximum of three papers which in your judgment are your best. 
 
  b) Employment history: </p>
  <tr id="t1_h">
    <th scope="col" width="5%">SI.</th>
    <th scope="col" width="20%">Position</th>
    <th scope="col" width="30%">Organization or Institute</th>
    <th scope="col" width="10%">Date of joining</th>
    <th scope="col" width="10%">Date of leaving</th>
    <th scope="col" width="20%">Details</th>
	</tr>
    <tr>
    <td scope="col"><input type="text" id="p3_t1_r1_1" name="p3_t1_r1_1" value="1" readonly></td>
    <td scope="col"><input type="text" id="p3_t1_r1_2" name="p3_t1_r1_2" value = "NIL" required></td>
    <td scope="col"><input type="text" id="p3_t1_r1_3" name="p3_t1_r1_3" value = "NIL"></td>
    <td scope="col"><input type="text" id="p3_t1_r1_4" name="p3_t1_r1_4"value = "NIL"></td>
    <td scope="col" ><input type="text" id="p3_t1_r1_5" name="p3_t1_r1_5"value = "NIL"></td>
    <td scope="col"><input type="text" id="p3_t1_r1_6" name="p3_t1_r1_6"value = "NIL"></td>
    </tr>
</table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="FunctionInput(1)" id="ha" value="Add new"/>

<table class="gv"  width="93%" id="t2" bgcolor="white" align = "center">
<p class = "aap">
  c) Teaching Experience, Courses/Laboratories:
    (Indicate any special work done towards developing new course or laboratories)</p>
  
  <tr id="t2_h">
    <th scope="col" width="10%">SI.</th>
    <th scope="col" width="20%">Title of course taught</th>
    <th scope="col" width="30%">Postgraduate/Undergraduate</th>
    <th scope="col" width="30%">Sole instructor or with 
others 
</th>
    <th scope="col" width="10%">Year</th>
  </tr>
  <tr>
    <td><input type="text" id="p3_t2_r1_1" name="p3_t2_r1_1" value="1" readonly/></td>
    <td><input type="text" id="p3_t2_r1_2" name="p3_t2_r1_2" /></td>
    <td><input type="text" id="p3_t2_r1_3" name="p3_t2_r1_3" /></td>
    <td><input type="text" id="p3_t2_r1_4" name="p3_t2_r1_4" /></td>
    <td><input type="text" id="p3_t2_r1_5"  name="p3_t2_r1_5"/></td>
  </tr>
</table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="FunctionInput(2)" id="hah" value="Add new"/>

<table width="93%"  id="t3" class="gv" bgcolor="white" align = "center"><p class = "aap">
d) Research Experience: (including Post doctoral)</p>
</p>  <tr id="t3_h">
    <th scope="col" width="10%">SI.</th>
    <th scope="col" width="10%">Position</th>
    <th scope="col" width="10%">Institute</th>
    <th scope="col" width="20%">Superviser</th>
    <th scope="col" width="20%">Topic</th>
    <th scope="col" width="10%">Date of joining</th>
    <th scope="col" width="10%">Date of leaving</th>
    <th scope="col" width="10%">Duration</th>
  </tr>
  <tr>
    <td><input type="text" readonly value="1" id="p3_t3_r1_1" name="p3_t3_r1_1" /></td>
    <td><input type="text" id="p3_t3_r1_2" name="p3_t3_r1_2" /></td>
    <td><input type="text" id="p3_t3_r1_3" name="p3_t3_r1_3" /></td>
    <td><input type="text" id="p3_t3_r1_4" name="p3_t3_r1_4" /></td>
    <td><input type="text" id="p3_t3_r1_5" name="p3_t3_r1_5"/></td>
    <td><input type="text" id="p3_t3_r1_6" name="p3_t3_r1_6" /></td>
    <td><input type="text" id="p3_t3_r1_7" name="p3_t3_r1_7"/></td>
    <td><input type="text" id="p3_t3_r1_8" name="p3_t3_r1_8" /></td>
  </tr>
</table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="FunctionInput(3)" id="haha" value="Add new"/>

<table width="93%" id="t4" bgcolor="white" align = "center"><p class = "aap">
e) Post Graduate Thesis Supervision:</p>
</p>  <tr id="t4_h">
    <th scope="col" width="10%">SI</th>
    <th scope="col" width="30%">Name of student/research scholar</th>
    <th scope="col" width="30%">Title of Thesis</th>
    <th scope="col" width="10%">Doctorate/Master’s</th>
    <th scope="col" width="10%">Year of Completion</th>
    <th scope="col" width="10%">Co-guide (If any) </th>
  </tr>
  <tr>
    <td><input type="text" contenteditable="false" value="1" readonly /> </td>
    <td><input type="text" id="p4_t1_r1_2" name="p4_t1_r1_2" /></td>
    <td><input type="text" id="p4_t1_r1_3" name="p4_t1_r1_3"/></td>
    <td><input type="text" id="p4_t1_r1_4" name="p4_t1_r1_4" /></td>
    <td><input type="text" id="p4_t1_r1_5" name="p4_t1_r1_5" /></td>
    <td><input type="text" id="p4_t1_r1_6" name="p4_t1_r1_6" /></td>
  </tr>
</table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="FunctionInput1(4)" id="h" value="Add new" />

<table width="93%" id="t5"bgcolor="white" align = "center"><p class = "aap">
f) Sponsored Projects Undertaken:        
</p>  <tr id="t5_h">
    <th scope="col" width="10%">SI</th>
    <th scope="col" width="20%">Sponsoring Agency</th>
    <th scope="col" width="40%">Title of Project</th>
    <th scope="col" width="10%">Amount of grant</th>
    <th scope="col" width="10%">Period</th>
    <th scope="col" width="10%">Co-investigator (if any )</th>
  </tr>
  <tr>
    <td><input type="text" contenteditable="false" value="1" readonly /> </td>
    <td><input type="text" id="p4_t2_r1_2" name="p4_t2_r1_2" /></td>
    <td><input type="text" id="p4_t2_r1_3" name="p4_t2_r1_3" /></td>
    <td><input type="text" id="p4_t2_r1_4" name="p4_t2_r1_4" /></td>
    <td><input type="text" id="p4_t2_r1_5" name="p4_t2_r1_5" /></td>
    <td><input type="text" id="p4_t2_r1_6" name="p4_t2_r1_6" /></td>
  </tr>

</table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="FunctionInput1(5)" id="ha" value="Add new" />

<table width="93%" id="t6"bgcolor="white" align = "center"><p class = "aap">
g) Consultancy Work Done:
</p>  <tr id="t6_h">
    <th scope="col" width="10%">SI</th>
    <th scope="col" width="30%">Organization</th>
    <th scope="col" width="30%">Title of Project</th>
    <th scope="col" width="10%">Amount of grant</th>
    <th scope="col" width="10%">Period</th>
    <th scope="col" width="10%">Co-investigator (if any )</th>
  </tr>
  <tr>
    <td><input type="text" contenteditable="false" value="1" readonly /> </td>
    <td><input type="text" id="p4_t3_r1_2" name="p4_t3_r1_2" /></td>
    <td><input type="text" id="p4_t3_r1_3" name="p4_t3_r1_3" /></td>
    <td><input type="text" id="p4_t3_r1_4" name="p4_t3_r1_4" /></td>
    <td><input type="text" id="p4_t3_r1_5" name="p4_t3_r1_5" /></td>
    <td><input type="text" id="p4_t3_r1_6" name="p4_t3_r1_6" /></td>
  </tr>

</table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="FunctionInput1(6)" id="hah" value="Add new" />

<table width="93%" border="0" id="t7"bgcolor="white" align = "center"><p class = "aap">
h) Industrial Experience Interaction:
</p>  <tr id="t7_h">
    <th scope="col" width="10%">SI</th>
    <th scope="col" width="40%">Organization</th>
    <th scope="col" width="40%">Nature Of Work</th>
    <th scope="col" width="10%">Period</th>
  </tr>
  <tr>
    <td><input type="text" value="1" readonly="readonly" /></td>
    <td><input type="text" id="p4_t4_r1_2" namr="p4_t4_r1_2" /></td>
    <td><input type="text" id="p4_t4_r1_3" name="p4_t4_r1_3" /></td>
    <td><input type="text" id="p4_t4_r1_4" name="p4_t4_r1_4" /></td>
  </tr>
</table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="FunctionInput1(7)" id="hah" value="Add new" />

<table width="93%" border="0" id="t8"bgcolor="white" align = "center"><p class = "aap">
i) Professional Training Received:
</p>  <tr id="t8_h">
    <th scope="col" width="10%">SI.</th>
    <th scope="col" width="40%">Name of Training</th>
    <th scope="col" width="30%">Organization where training was received</th>
    <th scope="col" width="10%">Year</th>
    <th scope="col" width="10%">Duration</th>
  </tr>
  <tr>
    <td><input type="text" id="p4_t5_r1_1" name="p4_t5_r1_1" readonly value="1" /></td>
    <td><input type="text" id="p4_t5_r1_2" name="p4_t5_r1_2" /></td>
    <td><input type="text" id="p4_t5_r1_3" name="p4_t5_r1_3" /></td>
    <td><input type="text" id="p4_t5_r1_4" name="p4_t5_r1_4" /></td>
    <td><input type="text" id="p4_t5_r1_5" name="p4_t5_r1_5" /></td>
  </tr>
</table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="FunctionInput1(8)" id="hah" value="Add new" />

<table width="93%" border="0" id="t9"bgcolor="white" align = "center"><p class = "aap">
j) Membership of Professional Bodies/Organizations:
</p>  <tr id="t9_h">
    <th scope="col" width="10%">SI.</th>
    <th scope="col" width="50%">Name Of The Professional Body</th>
    <th scope="col" width="40%">Membership Status</th>
  </tr>
  <tr>
    <td><input type="text" id="p4_t6_r1_1" name="p4_t6_r1_1" readonly value="1" /></td>
    <td><input type="text" id="p4_t6_r1_2" name="p4_t6_r1_2" /></td>
    <td><input type="text" id="p4_t6_r1_3" name="p4_t6_r1_3" /></td>
  </tr>
</table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="FunctionInput1(9)" id="hah" value="Add new" />
	
<table width="93%" border="0" id="t10"bgcolor="white" align = "center"><p class = "aap">
k) Important Conferences/Seminars Attended:
</p>  <tr id="t10_h">
    <th scope="col" width="10%">SI.</th>
    <th scope="col" width="40%">Conference/Seminar</th>
    <th scope="col" width="40%">Title of paper read (if any)</th>
    <th scope="col" width="10%">Year</th>
  </tr>
  <tr>
    <td><input type="text" id="p4_t7_r1_1" name="p4_t7_r1_1" readonly value="1" /></td>
    <td><input type="text" id="p4_t7_r1_2" name="p4_t7_r1_2" /></td>
    <td><input type="text" id="p4_t7_r1_3" name="p4_t7_r1_3" /></td>
    <td><input type="text" id="p4_t7_r1_4" name="p4_t7_r1_4" /></td>
  </tr>
</table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="FunctionInput1(10)" id="hah" value="Add new" />
<p class = "aap">
l) Contributions (teaching) to Continuing Education Programs
        
m) Short-term Course/Workshop/Seminars etc. organized
       
n) Other academic and corporate activities
       
o) Awards and recognitions
       
p) Please list the type of undergraduate courses that you will like to develop and/or teach at IIT Indore (attention is drawn to our UG syllabi posted at <a href="http://www.iiti.ac.in/docs/downloads/2012%28July%29_BTech-Course-of-Studies.pdf" style="color: #e7e012">http://www.iiti.ac.in/docs/downloads/2012%28July%29_BTech-Course-of-Studies.pdf</a>). You may additionally include the postgraduate courses that you may like to develop at IIT Indore.
		
q) Please attach a brief statement (less than 2 pages) on your immediate short-term research plans (2-3 year time frame). Additionally, please also include the research facilities (equipment, space, funds, manpower) that you will need for your research work.
        
r) Please write briefly why you wish to be considered for a faculty position at IITI and how do your long-term career objectives tie in with a position at IITI? Briefly, also write about how you propose to contribute to IITI, and how the Institute can help for your best possible professional growth (300 words).
        
s) Any other relevant information you may like to furnish.
</p>
<script>
var countRowst1=1;
var countRowst2=1;
var countRowst3=1;

function FunctionInput(table)
{	
	var tableid = "t"+table;
	var r;
	if(tableid=="t1")
	{
		countRowst1+=1;
		r = countRowst1;
	}
	else if(tableid=="t2")
	{
		countRowst2+=1;
		r = countRowst2;
	}
	else if(tableid=="t3")
	{
		countRowst3+=1;
		r = countRowst3;
	}
	var id = tableid+"_h";
	var mydiv= document.getElementById(tableid);
	var header = document.getElementById(id);
	var x = header.childNodes;
	var l = x.length;
	l = (l-1)/2;
	var newcont = document.createElement('tr');
	var i=1;
	var u = "p4_"+tableid+'_r'+r+'_'+i;
	newcont.innerHTML+='<td><input type="text" name="'+u+'" readonly value="'+r+'" id="'+u+'"></td>';
	i = i+1;
	
	while(i<=l)
	{
	var u = "p4_"+tableid+'_r'+r+'_'+i;
	newcont.innerHTML+='<td><input type="text" name="'+u+'" id="'+u+'"></td>';
	i = i+1;
	}
	mydiv.appendChild(newcont);
	
}
var countRowst14=1;
var countRowst24=1;
var countRowst34=1;
var countRowst44=1;
var countRowst54=1;
var countRowst64=1;
var countRowst74=1;

function FunctionInput1(table)
{	
	var tableid = "t"+table;
	var r;
	if(tableid=="t4")
	{
		countRowst14+=1;
		r = countRowst14;
	}
	else if(tableid=="t5")
	{
		countRowst24+=1;
		r = countRowst24;
	}
	else if(tableid=="t6")
	{
		countRowst34+=1;
		r = countRowst34;
	}
	else if(tableid=="t7")
	{
		countRowst44+=1;
		r = countRowst44;
	}
	else if(tableid=="t8")
	{
		countRowst54+=1;
		r = countRowst54;
	}
	else if(tableid=="t9")
	{
		countRowst64+=1;
		r = countRowst64;
	}
	else if(tableid=="t10")
	{
		countRowst74+=1;
		r = countRowst74;
	}
	var id = tableid+"_h";
	var mydiv= document.getElementById(tableid);
	var header = document.getElementById(id);
	var x = header.childNodes;
	var l = x.length;
	l = (l-1)/2;
	var newcont = document.createElement('tr');
	var i=1;
	var u = "p4_"+tableid+'_r'+r+'_'+i;
	newcont.innerHTML+='<td><input type="text" name="'+u+'" readonly value="'+r+'" id="'+u+'"></td>';
	i = i+1;
	
	while(i<=l)
	{
	var u = "p4_"+tableid+'_r'+r+'_'+i;
	newcont.innerHTML+='<td><input type="text" name="'+u+'" id="'+u+'"></td>';
	i = i+1;
	}
	mydiv.appendChild(newcont);
	
}
</script>   
<input type="button" value="Submit" />
</form>
<body background = "Background1.jpg">
</body>
</html>