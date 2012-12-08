<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript"> 
 function chcol(nama) {
document.getElementById('number').innerHTML = '<?php echo "02"; ?>';
//Here ur php code for checking if he has already liked it n based on that sending in suitable no follows
}

function retcol(nama) {
nama.style.backgroundColor = '#ffffff';
return true;
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
	color:#FFF;
	}
</style>
<body>
<table><tr>
<td class=<?php if(1){echo 'table';} else { echo 'table2' ;}?> onmousedown="chcol(this)">Wow !</td>
<td class=<?php if(1){echo 'table2';} else { echo 'table' ;}?> id="number"><a>01</a></td>
</tr></table>
</body>
</html>
