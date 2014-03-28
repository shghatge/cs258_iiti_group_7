<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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

gv{
}


</style>
<link href="styles/p4.css" rel="stylesheet" type="text/css" />
</head>

<body><div class="lee">Page 3</div>
</body>
<form action="page4.php" method="post" name="page3">
<table id="t1" class="gv" width="90%">
<b>PROVIDE THE FOLLOWING INFORMATION WITH THE APPLICATION</b>: (Indicate "NIL" if required; DO NOT omit/delete the following points. Your application may not be processed in the absence/incompleteness of the following information) 
 
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
 
  b) Employment history: 

  <tr id="t1_h">
    <th scope="col" width="10%">SI.</th>
    <th scope="col" width="20%">Position</th>
    <th scope="col" width="30%">Organization or Institute</th>
    <th scope="col" width="10%">Date of joining</th>
    <th scope="col" width="10%">Date of leaving</th>
    <th scope="col" width="20%">Details</th>
	</tr>
    <tr>
    <td scope="col"><input type="text" id="p3_t1_r1_1" name="p3_t1_r1_1" value="1" readonly></td>
    <td scope="col"><input type="text" id="p3_t1_r1_2" name="p3_t1_r1_2"></td>
    <td scope="col"><input type="text" id="p3_t1_r1_3" name="p3_t1_r1_3"></td>
    <td scope="col"><input type="text" id="p3_t1_r1_4" name="p3_t1_r1_4"></td>
    <td scope="col" ><input type="text" id="p3_t1_r1_5" name="p3_t1_r1_5"></td>
    <td scope="col"><input type="text" id="p3_t1_r1_6" name="p3_t1_r1_6"></td>
    </tr>
</table><input type="button" onclick="FunctionInput(1)" id="ha" value="Add new"/><br /><input type="button" onclick="FunctionInput2(1)" id="hahah1" value="Delete"/><br />

<table class="gv"  width="90%" id="t2">
  c) Teaching Experience, Courses/Laboratories:
    (Indicate any special work done towards developing new course or laboratories)<br />
    <br />
  
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
</table><input type="button" onclick="FunctionInput(2)" id="hah" value="Add new"/><br />
<input type="button" onclick="FunctionInput2(2)" id="hahah2" value="Delete"/><br />


<table width="90%"  id="t3" class="gv">
d) Research Experience: (including Post doctoral)<br /><br />
  <tr id="t3_h">
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
</table><input type="button" onclick="FunctionInput(3)" id="haha" value="Add new"/>
<input type="button" onclick="FunctionInput2(3)" id="hahah1" value="Delete"/><br /><br />


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
	newcont.id="r"+tableid+r;
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

function FunctionInput2(table)
{
	var r;
	var tableid = "t"+table;
	if(tableid=="t1")
	{
		//countRowst1+=1;
		r = countRowst1;
	}
	else if(tableid=="t2")
	{
		//countRowst2+=1;
		r = countRowst2;
	}
	else if(tableid=="t3")
	{
		//countRowst3+=1;
		r = countRowst3;
	}
	
	print('hey');
	var mydiv= document.getElementById(tableid);
	var ry = "r"+tableid+r;
	var newcont = document.getElementById(ry);
	mydiv.removeChild(newcont);
	if(tableid=="t1")
	{
		countRowst1-=1;
		
	}
	else if(tableid=="t2")
	{
		countRowst2-=1;
		
	}
	else if(tableid=="t3")
	{
		countRowst3-=1;
		
	}
}
</script>   
</form>
<a href="page4.php">Click Here To Go To Next Page</a>
</html>