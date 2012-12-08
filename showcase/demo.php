<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript"> 
 function type(n) {
switch(n)
{
case 1:
document.getElementById('number1').innerHTML = '<?php echo "02"; ?>';
break;
case 2:
document.getElementById('number2').innerHTML = '<?php echo "03"; ?>';
break;
case 3:
document.getElementById('number3').innerHTML = '<?php echo "01"; ?>';
break;
case 4:
document.getElementById('number4').innerHTML = '<?php echo "06"; ?>';
break;
case 5:
document.getElementById('number5').innerHTML = '<?php echo "07"; ?>';
break;
}
//Here ur php code for checking if he has already liked it n based on that sending in suitable no follows
}
</script>
<style>
.table{
	background-image:url(wow.jpg);
	width:50px;
	height:37px;
	text-align:center;
	color:#FFF;
	}
.table2{
	background-image:url(number.jpg);
	width:50px;
	height:37px;
	text-align:center;
	color:#06C;
	}
</style>
<body>
<table><tr>
<td class="table" onmousedown="type(1)">Wow !</td>
<td class="table2" id="number1"><a><?php ?>01</a></td>
<td class="table" onmousedown="type(2)">Omg !</td>
<td class="table2" id="number2"><a><?php ?>02</a></td>
<td class="table" onmousedown="type(3)">Lol !</td>
<td class="table2" id="number3"><a><?php ?>00</a></td>
<td class="table" onmousedown="type(4)">Sweet !</td>
<td class="table2" id="number4"><a><?php ?>05</a></td>
<td class="table" onmousedown="type(5)">Wtf !</td>
<td class="table2" id="number5"><a><?php ?>06</a></td>
</tr></table>
</body>
</html>
<!--U can put ur PHP code and respective conditions in the php tags over there-->
