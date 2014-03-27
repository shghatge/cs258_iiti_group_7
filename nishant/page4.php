<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="styles/p4.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
input[type="text"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
}

.lee {
	position: relative;
	font-size: 12px;
	text-align: right;
	margin-right:30px;
}
</style>
<body>
<form name="f4" action="update.php" method="Post">
<div class="lee">Page 4</div>
		e) Post Graduate Thesis Supervision:
	<table width="90%" id="t1">
  <tr id="t1_h">
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
</table>
<input type="button" onclick="FunctionInput(1)" id="h" value="Add new" />

        	f) Sponsored Projects Undertaken:
        
<table width="90%" id="t2">
  <tr id="t2_h">
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

</table>
<input type="button" onclick="FunctionInput(2)" id="ha" value="Add new" />

		g) Consultancy Work Done:

<table width="90%" id="t3">
  <tr id="t3_h">
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

</table>
<input type="button" onclick="FunctionInput(3)" id="hah" value="Add new" />

		h) Industrial Experience Interaction:
        
        <table width="90%" border="0" id="t4">
  <tr id="t4_h">
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
</table>
<input type="button" onclick="FunctionInput(4)" id="hah" value="Add new" />

		i) Professional Training Received:
        
        <table width="90%" border="0" id="t5">
  <tr id="t5_h">
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
</table>
<input type="button" onclick="FunctionInput(5)" id="hah" value="Add new" />

		j) Membership of Professional Bodies/Organizations:
        
        <table width="90%" border="0" id="t6">
  <tr id="t6_h">
    <th scope="col" width="10%">SI.</th>
    <th scope="col" width="50%">Name Of The Professional Body</th>
    <th scope="col" width="40%">Membership Status</th>
  </tr>
  <tr>
    <td><input type="text" id="p4_t6_r1_1" name="p4_t6_r1_1" readonly value="1" /></td>
    <td><input type="text" id="p4_t6_r1_2" name="p4_t6_r1_2" /></td>
    <td><input type="text" id="p4_t6_r1_3" name="p4_t6_r1_3" /></td>
  </tr>
</table>
<input type="button" onclick="FunctionInput(6)" id="hah" value="Add new" />
	
    		k) Important Conferences/Seminars Attended:
        
        <table width="90%" border="0" id="t7">
  <tr id="t7_h">
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
</table>
<input type="button" onclick="FunctionInput(7)" id="hah" value="Add new" />


</body>
<script>
var countRowst1=1;
var countRowst2=1;
var countRowst3=1;
var countRowst4=1;
var countRowst5=1;
var countRowst6=1;
var countRowst7=1;

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
	else if(tableid=="t4")
	{
		countRowst4+=1;
		r = countRowst4;
	}
	else if(tableid=="t5")
	{
		countRowst5+=1;
		r = countRowst5;
	}
	else if(tableid=="t6")
	{
		countRowst6+=1;
		r = countRowst6;
	}
	else if(tableid=="t7")
	{
		countRowst7+=1;
		r = countRowst7;
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
</form>
<a href="page5.php">Click Here To Go To Next Page </a>
</html>
