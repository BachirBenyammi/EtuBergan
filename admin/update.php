<? include ("./test.php"); ?>
<?
	if (isset($type))
	{
		include("./connect.php");
		
		if ($type == "student")
		{
			$sql = "UPDATE tb_students set firstName='".$firstName."', lastName='".$lastName."', sexe='".$sexe."', dtBearth='".$dtBearth."', plBearth='".$plBearth."', nmFather='".$nmFather."', adresse='".$adresse."', phone='".$phone."', mobile='".$mobile."', email='".$email."', blade='".$blade."', posteAccount='".$posteAccount."' , observations='".$observations."', ville='".$ville."', postalCode='".$postalCode."', wilaya=".$wilaya.", certificates='".$certificates."', hobbies='".$hobbies."' where num=".$num;
			$result = mysql_query($sql);
			header("Location: ./student.php?act=view&num=".$num);
		}	
		if ($type == "user")
		{
			$sql = "UPDATE tb_users set first_name='".$first_name."', last_name='".$last_name."', password='".$password."', level=".$level.", email='".$email."', mobile='".$mobile."' where account='".$user."'";																																																																																												
			$result = mysql_query($sql);
			header("Location: ./users.php?act=view&user=".$user);
		}			
	}
?>