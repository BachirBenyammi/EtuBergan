<? include ("./test.php"); ?>
<?
	if (isset($act))
	{
		if ($act=="new")
		{
?>
			<html dir="rtl">
			<head>
			<title> ����� ����� - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function validate()
					{
						if (!document.form1.name.value) 
						{
							alert("��� ����� ��� �������");
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
			 <a href="index.php">������ ��������</a> >> <a href="_univ.php">�������</a> >> <a href="univ.php">��������</a> >> ����� �����
		</div><br> 
					<p align="center">����� �����</p>
				  <p> 
				  <form name="form1" method="post" action="add.php?type=univ">
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
            			<td class="td" ><strong>����:</strong></td>
						<td class="td" ><input name="tel" type="text" id="tel" dir="ltr"> (00-00-00-000)</td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>����:</strong></td>
						<td class="td" ><input name="fax" type="text" id="fax" dir="ltr"> (00-00-00-000)</td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>���� �����:</strong></td>
						<td class="td" ><input name="website" type="text" value="http://" id="website" dir="ltr"></td>
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
			$sql = "SELECT * FROM tb_universities, tb_wilayas WHERE code = wilaya and num=".$univ;
			$result = mysql_query($sql);
			
			while ($col=mysql_fetch_row($result))					
			{
				$name = $col[1];	
				$adresse = $col[2];	
				$tel = $col[3];	
				$fax = $col[4];	
				$website = $col[5];	
				$wilaya = $col[8];		
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
							location.href = "del.php?type=univ&univ=<?=$univ?>";
					}	
					function studentlist()
					{
							location.href = "univ.php?act=list&univ=<?=$univ?>";
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
			 <a href="index.php">������ ��������</a> >> <a href="_univ.php">�������</a> >> <a href="univ.php">��������</a> >> ������ �����
		</div><br> 
				  <p align="center">������ �����</p>
				  <p> 
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
						<td class="td" ><strong>���:</strong></td>
						<td class="td" ><a href="<?=$website?>" target="_blank"><?=$name?></a></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>�����:</strong></td>
						<td class="td" ><?=$adresse?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>����:</strong></td>
						<td class="td" ><?=$tel?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>����:</strong></td>
						<td class="td" ><?=$fax?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>���� �����:</strong></td>
						<td class="td" ><a href="<?=$website?>" target="_blank"><?=$website?></a></td>
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
				$sql = "SELECT name from tb_universities where num=".$univ;
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
			 <a href="index.php">������ ��������</a> >> <a href="_univ.php">�������</a> >> <a href="univ.php">��������</a> >> ���� �����
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
				$sql = "select num, firstName , lastName, dtBearth, ville, year from tb_students, tb_university, tb_univ_year where numuniv=".$univ." and num_univ=info_univ and student=tb_students.num";
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
			$sql = "SELECT count(num) from tb_university, tb_univ_year, tb_students where numuniv =".$univ." and num_univ=info_univ and student=num";
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
<title>�������� - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function redirect()
					{
							location.href = "./univ.php?act=new";
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
			 <a href="index.php">������ ��������</a> >> <a href="_univ.php">�������</a> >> ����� ��������
		</div> <p align="center"><br>
       ����� ��������: 
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
				$sql = "select num, name, title from tb_universities, tb_wilayas where wilaya = code order by name desc";
				$result = mysql_query($sql);	
		
				while ($col=mysql_fetch_row($result))					
				{
					$num = $col[0];			
					$name = $col[1];	
					$wilaya = $col[2];
			?>										
			<tr>
				<td class="td" ><a href="univ.php?act=view&univ=<?=$num?>"><?=$name?></a></td>
				<td class="td" ><?=$wilaya?></td>
				<td class="td" ><a href="univ.php?act=list&univ=<?=$num?>">������</a></td>
				<td class="td" ><a href="univ.php?act=view&univ=<?=$num?>">������</a></td>
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