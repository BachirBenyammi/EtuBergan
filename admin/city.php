<? include ("./test.php"); ?>
<?
	if (isset($act))
	{
		if ($act=="new")
		{
?>
			<html dir="rtl">
			<head>
			<title> ����� ����� ������ - etubergan</title>
<? include ("head.php"); ?>		
					<script language="javascript">
					function validate()
					{
						if (!document.form1.name.value) 
						{
							alert("��� ����� ��� ������� ��������");
							return false;
						}
						if (!document.form1.wilaya.value) 
						{
							alert("��� ����� ����� �� �������");
							return false;
						}						
						document.form1.submit();
					}							
					</script>			
			</head>

			<body onLoad="debuteDate();debuteTemps()" onUnload="clearTimeout(ddate);clearTimeout(ttime)" bgcolor="#EEEEEE">
			<table width="90%" align="center" height="610" cellspacing="0" background="./style/background.png">
			<tr>
				<td  colspan="2" valign="top" height="100">
					<? include ("top.php"); ?>	
				</td>
			</tr>
			  <tr>
				<td valign="top"> 
					<?include("./menu.php")?>
				</td>
				
				    <td width="80%" valign="top" bgcolor="green">
		<div id="footer" align="left">
			 <a href="index.php">������ ��������</a> >> <a href="_univ.php">�������</a> >> <a href="city.php">��������</a> >> ����� ����� ������
		</div><br> 
					<p align="center">����� ����� ������</p>
				  <p> 
				  <form name="form1" method="post" action="add.php?type=city">
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
						
            			<td class="td" ><strong>���:</strong></td>
						<td class="td" ><input name="name" type="text" id="name"></td>
					  </tr>
					  <tr> 
						
            			<td class="td" ><strong>�����:</strong></td>
						<td class="td" ><textarea name="adresse" cols="35" rows="5" id="adresse"></textarea></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>�����:</strong></td>
						<td class="td" >	
							<select name="wilaya">
								<option value=""></option>
							<?
								include("./connect.php");
								$sql = "select * from tb_wilayas";
								$result = mysql_query($sql);
								
								while ($col=mysql_fetch_row($result))					
								{
							?>
								<option value="<? print $col[0];?>"><? print $col[1];?></option>
								<?}?>
							</select>
						<td class="td" >
					  </tr>
					</table>
					<p align="center"> 
					  <input class="Button" type="button" value="   �����   " onClick="javascript: return validate();"> 
					  <input class="Button" type="reset" value="   ���   "> 
					  <input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   ����   ">
					</p>
				  </form>
				  </td>
			  </tr>
			  <? include ("footer.php"); ?>
			</table>
			
			</body>
			</html>
			<?
		}		
		else if ($act=="view")
		{
			include("./connect.php");
			$sql = "SELECT name, adresse, title FROM tb_cities, tb_wilayas WHERE code = wilaya and num=".$city;
			$result = mysql_query($sql);
			
			while ($col=mysql_fetch_row($result))					
			{
				$name = $col[0];	
				$adresse = $col[1];	
				$wilaya = $col[2];		
			}
		?>

			<html dir="rtl">
			<head>
			<title><?=$name?> - etubergan</title>
<? include ("head.php"); ?>			
					<script language="javascript">
					function deleteit()
					{
						return confirm('�� ��� ����� �� ��� �')					
					}		
					function redirect()
					{
						if (deleteit())
							location.href = "del.php?type=city&city=<?=$city?>";
					}			
					function studentlist()
					{
							location.href = "city.php?act=list&city=<?=$city?>";
					}						
					</script>
			</head>

			<body onLoad="debuteDate();debuteTemps()" onUnload="clearTimeout(ddate);clearTimeout(ttime)" bgcolor="#EEEEEE">
			<table width="90%" align="center" height="610" cellspacing="0" background="./style/background.png">
			<tr>
				<td colspan="2" valign="top" height="100">
					<? include ("top.php"); ?>	
				</td>
			</tr>
			  <tr>
				<td valign="top">
				  <?include("./menu.php")?>
				</td>
				    <td width="80%" valign="top" bgcolor="green">
		<div id="footer" align="left">
			 <a href="index.php">������ ��������</a> >> <a href="_univ.php">�������</a> >> <a href="city.php">��������</a> >> ������ ����� ������
		</div><br> 
				  <p align="center">������ ����� ������</p>
				  <p> 
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
						<td class="td" ><strong>���:</strong></td>
						<td class="td" ><?=$name?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>�����:</strong></td>
						<td class="td" ><?=$adresse?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>�����:</strong></td>
						<td class="td" ><?=$wilaya?></td>
					  </tr>
					</table>
					</p>
					<p align="center">
						<input class="Button" type="button" OnClick="javascript: redirect();" value="   ���   "> 
						<input class="Button" type="button" OnClick="javascript: studentlist();" value="   ������   "> 					
						<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   ����   ">
					</p>
				  </td>
			  </tr>
			  <? include ("footer.php"); ?>
			</table>			
			</body>
			</html>
		<?
		}
		else if ($act=="list")
		{
				include ("./connect.php");		
				$sql = "SELECT name from tb_cities where num=".$city;
				$result = mysql_query($sql);
				$name="";
				while ($col=mysql_fetch_row($result))
					$name= $col[0];
	?>
<html dir="rtl">
<head>
<title>���� ����� <?=$name?> - etubergan</title>
<? include ("head.php"); ?>	
</head>

<body onLoad="debuteDate();debuteTemps()" onUnload="clearTimeout(ddate);clearTimeout(ttime)" bgcolor="#EEEEEE">
<table width="90%" align="center" height="610" cellspacing="0" background="./style/background.png">
<tr>
	<td colspan="2" valign="top" height="100">
		<? include ("top.php"); ?>	
	</td>
</tr>
  <tr>
    <td valign="top"> 
      <?include("./menu.php")?>
    </td>
        <td width="80%" valign="top" bgcolor="green">
		<div id="footer" align="left">
			 <a href="index.php">������ ��������</a> >> <a href="_univ.php">�������</a> >> <a href="city.php">��������</a> >> ���� �����
		</div> 
	<p align="center"><br>
       ���� ����� <?=$name?> : 
	  </p>
      <p>
		<table border="1" align="center" width="80%" cellspacing="0">
			<tr>
				<th class="th" > ��� </th>
				<th class="th" > ����� �������� </th>	
				<th class="th" > ����� </th>					
				<th class="th" > ����� </th>
				<th class="th" > ������ </th>
				<th class="th" > ����� </th>				
			</tr>
			<?
				include ("./connect.php");
				$sql = "select num, firstName , lastName, dtBearth, ville, year from tb_students, tb_city, tb_univ_year where numcity=".$city." and num_city=info_city and student=tb_students.num";
				$result = mysql_query($sql);	
		
				while ($col=mysql_fetch_row($result))					
				{
					$num = $col[0];			
					$name = $col[1] . " " . $col[2];	
					$dtbearth = $col[3];	
					$ville = $col[4];	
					$year = $col[5];	
			?>										
			<tr>
				<td class="td" ><a href="student.php?act=view&num=<?=$num?>"><?=$name?></a></td>
				<td class="td" ><?=$dtbearth?></td>
				<td class="td" ><?=$ville?></td>
				<td class="td" ><?=$year?></td>
				<td class="td" ><a href="student.php?act=view&num=<?=$num?>">������</a></td>
				<td class="td" ><a href="student.php?act=update&num=<?=$num?>">�����</a></td>
			</tr>	
			<?
				}
			?>	
		</table>
	  </p>
	  <p align="center">
		<?
			include ("./connect.php");
			$sql = "SELECT count(num) from tb_city, tb_univ_year, tb_students where numcity =".$city." and num_city=info_city and student=num";
			$result = mysql_query($sql);
			$nbr = mysql_num_rows($result);
		?>				
		��� ������: <?=$nbr?>
	  </p>
		<p align="center">
			<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   ����   ">
		</p>	  
	 </td>
  </tr>
	<? include ("footer.php"); ?>   
</table>

</body>
</html>
	
	<?
		}
		
	}
	else
	{		
		?>
<html dir="rtl">
<head>
<title>�������� �������� - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function redirect()
					{
							location.href = "./city.php?act=new";
					}
					</script>
</head>

<body onLoad="debuteDate();debuteTemps()" onUnload="clearTimeout(ddate);clearTimeout(ttime)" bgcolor="#EEEEEE">
<table width="90%" align="center" height="610" cellspacing="0" background="./style/background.png">
<tr>
	<td colspan="2" valign="top" height="100">
		<? include ("top.php"); ?>	
	</td>
</tr>
  <tr>
    <td valign="top"> 
      <?include("./menu.php")?>
    </td>
        <td width="80%" valign="top" bgcolor="green">
		<div id="footer" align="left">
			 <a href="index.php">������ ��������</a> >> <a href="_univ.php">�������</a> >> ����� �������� ��������
		</div> <p align="center"><br>
       ����� �������� ��������: 
	   <input class="Button" type="button" OnClick="javascript: redirect();" value="   �����   "> </p>
      <p>
		<table border="1" align="center" width="80%" cellspacing="0">
			<tr>
				<th class="th" > ��� </th>
				<th class="th" > ����� </th>
				<th class="th" > ������ </th>
				<th class="th" > ������ </th>								
			</tr>
			<?
				include ("./connect.php");
				$sql = "select num, name, title from tb_cities, tb_wilayas where code = wilaya order by name asc";
				$result = mysql_query($sql);	
		
				while ($col=mysql_fetch_row($result))					
				{
					$num = $col[0];			
					$name = $col[1];	
					$wilaya = $col[2];	
			?>										
			<tr>
				<td class="td" ><a href="city.php?act=view&city=<?=$num?>"><?=$name?></a></td>
				<td class="td" ><?=$wilaya?></td>
				<td class="td" ><a href="city.php?act=list&city=<?=$num?>">������</a></td>				
				<td class="td" ><a href="city.php?act=view&city=<?=$num?>">������</a></td>
			</tr>	
			<?
				}
			?>	
		</table>
	  </p>
	 </td>
  </tr>
	<? include ("footer.php"); ?>   
</table>

</body>
</html>
		
		<?
	}
		?>