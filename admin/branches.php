<? include ("./test.php"); ?>
<?
	if (isset($act))
	{
		if ($act=="new")
		{
?>
			<html dir="rtl">
			<head>
				<title> ����� ���� - etubergan</title>
				<? include ("head.php"); ?>	
			<script language="javascript">
					function validate()
					{
						if (!document.form1.title.value) 
						{
							alert("��� ����� ����� ������");
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
			 <a href="index.php">������ ��������</a> >> <a href="_univ.php">�������</a> >> <a href="branches.php">�����</a> >> ����� ����
		</div><br> 
					<p align="center">����� ����</p>
				  <p> 
				  <form name="form1" method="post" action="add.php?type=branch">
					<table class="table" width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
            			<td class="td" ><strong>�����:</strong></td>
						<td class="td" ><input name="code" type="text" id="code"></td>
					  </tr>					
					  <tr> 
            			<td class="td" ><strong>�����:</strong></td>
						<td class="td" ><input name="title" type="text" id="title"></td>
					  </tr>
					  <tr> 
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
		else if ($act=="list")
		{
				include ("./connect.php");		
				$sql = "SELECT title from tb_branches where num=".$num;
				$result = mysql_query($sql);
				$name="";
				while ($col=mysql_fetch_row($result))
					$name= $col[0];
	?>
<html dir="rtl">
<head>
	<title>���� ���� <?=$name?> - etubergan</title>
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
			 <a href="index.php">������ ��������</a> >> <a href="_univ.php">�������</a> >> <a href="branches.php">�����</a> >> ���� ����
		</div> 
	<p align="center"><br>
       ���� ���� <?=$name?> : 
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
				$sql = "select num, firstName , lastName, dtBearth, ville, year from tb_students, tb_university, tb_univ_year where numuniv=info_univ and student=tb_students.num order by firstName asc";
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
			$sql = "SELECT count(num) from tb_university, tb_univ_year, tb_students where bronche =".$num." and num_univ=info_univ and student=num";
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
	<title>��� ������� - etubergan</title>
	<? include ("head.php"); ?>	
					<script language="javascript">
					function redirect()
					{
							location.href = "./branches.php?act=new";
					}
					function deleteit()
					{
						return confirm('�� ��� ����� �� ��� �')					
					}		
					function trydeleteit(link)
					{
						if (deleteit())
							location.href = link;
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
			 <a href="index.php">������ ��������</a> >> <a href="_univ.php">�������</a> >> �����
		</div> <p align="center"><br>
       ��� �������:
	   <input class="Button" type="button" OnClick="javascript: redirect();" value="   �����   "> </p>
      <p>
		<table border="1" align="center" width="80%" cellspacing="0">
			<tr>
				<th class="th" > ����� </th>
				<th class="th" > ����� </th>								
				<th class="th" > ������ </th>
				<th class="th" > ��� </th>
			</tr>
			<?
				include ("./connect.php");
				$sql = "select num, code, title from tb_branches order by title asc";
				$result = mysql_query($sql);	
		
				while ($col=mysql_fetch_row($result))					
				{
					$num = $col[0];
					$code = $col[1];
					$title = $col[2];			
			?>										
			<tr>
				<td class="td" ><?=$code?></td>
				<td class="td" ><?=$title?></td>
				<td class="td" ><a href="branches.php?act=list&num=<?=$num?>">������</a></td>
				<td class="td" ><a href OnClick="javascript: return trydeleteit('del.php?type=branch&num=<?=$num?>');" >���</a></td>
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