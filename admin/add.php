<? include ("./test.php"); ?>
<?
	if (isset($type))
	{
		include("./connect.php");
		
		if ($type == "univ")
		{
			$sql = "INSERT INTO tb_universities	(name, adresse, tel, fax, website, wilaya) VALUES ('".$name."', '".$adresse."', '".$tel."', '".$fax."', '".$website."', '".$wilaya."')";
			$result = mysql_query($sql);
			header("Location: ./univ.php");
		}
		else if ($type == "school")
		{
			$sql = "INSERT INTO tb_schools	(name, adresse, secondarysh, wilaya) VALUES ('".$name."', '".$adresse."', '".$secondarysh."', '".$wilaya."')";
			$result = mysql_query($sql);
			header("Location: ./school.php");
		}		
		else if ($type == "city")
		{
			$sql = "INSERT INTO tb_cities (name, adresse, wilaya) VALUES ('".$name."', '".$adresse."', '".$wilaya."')";
			$result = mysql_query($sql);
			header("Location: ./city.php");
		}	
		else if ($type == "student")
		{
			$dtBearth =  $_year."-".$_month."-".$_day; 
			$sql = "INSERT INTO tb_students (firstName, lastName, sexe, dtBearth, plBearth, nmFather, adresse, phone, mobile, email, blade, posteAccount , observations, ville, postalCode, wilaya, certificates, hobbies) VALUES ('".$firstName."', '".$lastName."', '".$sexe."', '".$dtBearth."', '".$plBearth."', '".$nmFather."', '".$adresse."', '".$phone."', '".$mobile."', '".$email."', '".$blade."', '".$posteAccount."' , '".$observations."', '".$ville."', '".$postalCode."', ".$wilaya.", '".$certificates."', '".$hobbies."')";
			$result = mysql_query($sql);
			header("Location: ./student.php");
		}	
		else if ($type == "trouble")
		{
			$sql = "INSERT INTO tb_troubles (page, link, comments , dt) VALUES ('".$page."', '".$link."', '".$comments."', now())";
			$result = mysql_query($sql);
			header("Location: ./thanks.php");
		}
		else if ($type == "contact")
		{
			$sql = "INSERT INTO tb_contacts (name, email, comments , dt) VALUES ('".$name."', '".$email."', '".$comments."', now())";
			$result = mysql_query($sql);
			header("Location: ./thanks.php");
		}	
		else if ($type == "univ_year")
		{	
			$sql = "select student from tb_univ_year where student=".$num." and oldyear=".($univ_year-1)." and year=".$univ_year; 
			$result = mysql_query($sql);			
			$rows = mysql_num_rows($result);
			if ($rows == 0)
			{
				$sql = "INSERT INTO tb_university (inscrit_num, speciality , bronche, level ,obs, numuniv) VALUES ('".$inscrit_num."', '".$speciality."', '".$bronche."', '".$level."', '".$obs."', ".$numuniv.")";
				$result = mysql_query($sql);
				
				$sql = "INSERT INTO tb_city (room, suite , complex, numcity, intern, nbr) VALUES ('".$room."', '".$suite."', '".$complex."', ".$numcity.", ".$intern.", ".$nbr.")";
				$result = mysql_query($sql);
				mysql_close();
			
				include("./connect.php");
				
				$num_univ = 0;
				$sql = "SELECT num_univ from tb_university where inscrit_num='".$inscrit_num."'";
				$result = mysql_query($sql);
				if ($col=mysql_fetch_row($result))					
					$num_univ = $col[0];

				$num_city = 0;
				$sql = "SELECT num_city from tb_city where room='".$room."' and suite='".$suite."' and complex='".$complex."' and numcity=".$numcity." and intern=".$intern." and nbr=".$nbr;
				$result = mysql_query($sql);
				if ($col=mysql_fetch_row($result))					
					$num_city = $col[0];

				$sql = "INSERT INTO tb_univ_year (student, oldyear, year, info_univ, info_city) VALUES (".$num.", ".($univ_year-1).", ".$univ_year.", ".$num_univ.", ".$num_city.")";
				$result = mysql_query($sql);
				header("Location: ./univ_year.php?num=$num");
			}
			else
				header("Location: ./univ_year.php?num=$num&error=true");
			
		}			
		else if ($type == "bac")
		{
			$sql = "INSERT INTO tb_bac (specialty, session, _year, average, nb, _school,  student) VALUES (".$specialty.", ".$session.", ".$_year.", ".$average.", ".$nb.", ".$_school.", ".$num.")";
			$result = mysql_query($sql);
			header("Location: ./student.php?act=view&num=$num");
		}
		else if ($type == "bac_branch")
		{
			$sql = "INSERT INTO tb_bac_branches (title) VALUES ('".$title."')";
			$result = mysql_query($sql);
			header("Location: ./bac_branches.php");
		}		
		else if ($type == "branch")
		{
			$sql = "INSERT INTO tb_branches (code, title) VALUES ('".$code."', '".$title."')";
			$result = mysql_query($sql);
			header("Location: ./branches.php");
		}		
		else if ($type == "level")
		{
			$sql = "INSERT INTO tb_univ_levels (code, title) VALUES ('".$code."', '".$title."')";
			$result = mysql_query($sql);
			header("Location: ./levels.php");
		}		
		else if ($type == "user")
		{
			if (session_is_registered("super"))
			{
				$sql = "INSERT INTO tb_users (account, password, first_name, last_name, mobile, email, level) VALUES ('".$user."', '".$password."', '".$first_name."', '".$last_name."', '".$mobile."', '".$email."', ".$level.")";
				$result = mysql_query($sql);
				header("Location: ./users.php");
			}
		}			
	}
?>