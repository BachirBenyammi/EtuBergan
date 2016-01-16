<? include ("./test.php"); ?>
<?
	if (isset($type))
	{
		include("./connect.php");
		
		if ($type == "univ")
		{
			$sql = "DELETE FROM tb_universities WHERE num=".$univ;
			$result = mysql_query($sql);		
			header("Location: ./univ.php");
		}
		else if ($type == "school")
		{
			$sql = "DELETE FROM tb_schools WHERE num=".$school;
			$result = mysql_query($sql);		
			header("Location: ./school.php");
		}		
		else if ($type == "city")
		{
			$sql = "DELETE FROM tb_cities WHERE num=".$city;
			$result = mysql_query($sql);		
			header("Location: ./city.php");
		}	
		else if ($type == "bac")
		{	
			$sql = "DELETE FROM tb_bac WHERE num_bac=".$num_bac;
			$result = mysql_query($sql);
			header("Location: ./student.php?act=view&num=".$num);
		}			
		else if ($type == "info_univ")
		{	
			$sql = "DELETE FROM tb_university WHERE num_univ=".$num_univ;
			$result = mysql_query($sql);
			header("Location: ./student.php?act=view&num=".$num);
		}	
		else if ($type == "info_city")
		{	
			$sql = "DELETE FROM tb_city WHERE num_city=".$num_city;
			$result = mysql_query($sql);
			header("Location: ./student.php?act=view&num=".$num);
		}			
		else if ($type == "student")
		{
			$num_univ = "";
			$num_city = "";
			$sql = "SELECT info_univ, info_city from tb_univ_year WHERE student =".$num;	
			$result = mysql_query($sql);	
			while ($col=mysql_fetch_row($result))					
			{
				$num_univ = $num_univ . " " . $col[0];
				$num_city = $num_city . " " . $col[1];								
			}
			$sql = "DELETE FROM tb_university WHERE num_univ in ".$num_univ;	
			$result = mysql_query($sql);	
			
			$sql = "DELETE FROM tb_city WHERE num_city in ".$num_city;	
			$result = mysql_query($sql);			
					
			$sql = "DELETE FROM tb_univ_year WHERE student =".$num;	
			$result = mysql_query($sql);		
			
			$sql = "DELETE FROM tb_bac WHERE student=".$num;
			$result = mysql_query($sql);	
			
			$sql = "DELETE FROM tb_students WHERE num=".$num;
			$result = mysql_query($sql);		
			header("Location: ./student.php");
		}	
		else if ($type == "univ_year")
		{
			$num_univ = 0;
			$num_city = 0;
			$sql = "SELECT info_univ, info_city from tb_univ_year WHERE student =".$num." and oldyear=".($year-1)." and year=".$year;	
			$result = mysql_query($sql);	
			if ($col=mysql_fetch_row($result))					
			{
				$num_univ = $col[0];
				$num_city = $col[1];
			}
					
			$sql = "DELETE FROM tb_university WHERE num_univ =".$num_univ;	
			$result = mysql_query($sql);	
			
			$sql = "DELETE FROM tb_city WHERE num_city =".$num_city;	
			$result = mysql_query($sql);	
			
			$sql = "DELETE FROM tb_univ_year WHERE student =".$num." and oldyear=".($year-1)." and year=".$year;	
			$result = mysql_query($sql);		
			header("Location: ./univ_year.php?num=$num");
		}
		else if ($type == "bac_branch")
		{
			$sql = "DELETE FROM tb_bac_branches WHERE num=".$num;
			$result = mysql_query($sql);		
			header("Location: ./bac_branches.php");
		}	
		else if ($type == "branch")
		{
			$sql = "DELETE FROM tb_branches WHERE num=".$num;
			$result = mysql_query($sql);		
			header("Location: ./branches.php");
		}		
		else if ($type == "level")
		{
			$sql = "DELETE FROM tb_univ_levels WHERE num=".$num;
			$result = mysql_query($sql);		
			header("Location: ./levels.php");
		}	
		else if ($type == "user")
		{
			if (session_is_registered("super"))
				if ($user != "benbac")
				{
					$sql = "DELETE FROM tb_users WHERE account='".$user."'";
					$result = mysql_query($sql);		
				}
			header("Location: ./users.php");				
		}	
		else if ($type == "record")
		{
			if (session_is_registered("super"))
			{
				if ($user == "nul")
					$sql = "DELETE FROM tb_access";
				else			
					$sql = "DELETE FROM tb_access WHERE account='".$user."'";
				$result = mysql_query($sql);		
			}
			header("Location: ./users.php");			
		}		
		else if ($type == "visitors")
		{		
				$sql = "DELETE FROM tb_visitors";
				$result = mysql_query($sql);		
				header("Location: ./stats.php");
		}		
	}
?>