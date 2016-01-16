<?
	session_start();
	if (!session_is_registered("account"))
	{
		$Page = getenv("REQUEST_URI");
		if (empty($Page)) 
			$Page = "Unknoun";			
		$link = getenv("HTTP_REFERER");
		if (empty($link)) 
			$link = "Unknoun";			
		$lang = getenv("HTTP_ACCEPT_lang");
		if (empty($lang)) 							
			$lang = "Unknoun";			
		$IpAddress = getenv("REMOTE_ADDR");		
		if (empty($IpAddress))
			$IpAddress = getenv("HTTP_X_FORWARDED_FOR");
		if (empty($IpAddress))
			$IpAddress = getenv("SERVER_ADDR");			
		if (empty($IpAddress)) 
			$IpAddress = "Unknoun";
			
		$HUA = getenv("HTTP_USER_AGENT");
		if((strstr($HUA, "Nav")) || 
			(strstr($HUA, "Gold")) || 
				(strstr($HUA, "X11")) || 
					(strstr($HUA, "Mozilla")) || 
						(strstr($HUA, "Netscape")) AND 
							(!strstr($HUA, "IE"))) 
								$browser = "Netscape";
		elseif(strstr($HUA, "MSIE")) $browser = "MSIE";
		elseif(strstr($HUA, "Lynx")) $browser = "Lynx";
		elseif(strstr($HUA, "Opera")) $browser = "Opera";
		elseif(strstr($HUA, "WebTV")) $browser = "WebTV";
		elseif(strstr($HUA, "Konqueror")) $browser = "Konqueror";
		elseif((stristr($HUA, "bot")) || 
			(strstr($HUA, "Google")) || 
				(strstr($HUA, "Slurp")) || 
					(strstr($HUA, "Scooter")) || 
						(stristr($HUA, "Spider")) || 
							(stristr($HUA, "Infoseek"))) 
								$browser = "Bot";
		else $browser = "Unknoun";
		if(strstr($HUA, "Win")) $os = "Windows";
		elseif((strstr($HUA, "Mac")) || 
			(strstr($HUA, "PPC"))) $os = "Mac";
		elseif(strstr($HUA, "Linux")) $os = "Linux";
		elseif(strstr($HUA, "FreeBSD")) $os = "FreeBSD";
		elseif(strstr($HUA, "SunOS")) $os = "SunOS";
		elseif(strstr($HUA, "IRIX")) $os = "IRIX";
		elseif(strstr($HUA, "BeOS")) $os = "BeOS";
		elseif(strstr($HUA, "OS/2")) $os = "OS/2";
		elseif(strstr($HUA, "AIX")) $os = "AIX";
		else $os = "Unknoun";
		
		mysql_connect("localhost","root","");
		mysql_select_db("bs_students");
		$sql = "insert into tb_visitors (Page, link, lang, Ip_Adresse, browser, os, dt) 
								 values ('".$Page."', '".$link."', '".$lang."', '".$IpAddress."', '".$browser."', '".$os."', now())";				
		$result = mysql_query($sql);
		
		header ("Location: login.php");
	}	
?>