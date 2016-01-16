var ddate, ddelay, ttime, tdelay;
function debuteDate() {
  if (!document.layers&&!document.all&&!document.getElementById)
  return
  var adate, date, amonth, aday;
  ddelay = 10000;
  adate = new Date();
  aday = adate.getDay()+1;
    if (aday == 1) date = "الأحد";
  else if (aday == 2) date = "الإثنين";
  else if (aday == 3) date = "الثلاثاء";
  else if (aday == 4) date = "الإربعاء";
  else if (aday == 5) date = "الخميس";
  else if (aday == 6) date = "الجمعة";
  else if (aday == 7) date = "السبت";
  date += " "+adate.getDate();
  amonth = adate.getMonth()+1;
  if (amonth == 1) date += " جانفي";
  else if (amonth == 2) date += " فيفري";
  else if (amonth == 3) date += " مارس";
  else if (amonth == 4) date += " أفريل";
  else if (amonth == 5) date += " ماي";
  else if (amonth == 6) date += " جوان";
  else if (amonth == 7) date += " جويلية";
  else if (amonth == 8) date += " أوت";
  else if (amonth == 9) date += " سبتمبر";
  else if (amonth == 10) date += "أكتوبر";
  else if (amonth == 11) date += "نوفمبر";
  else if (amonth == 12) date += " ديسمبر";
  
  if (adate.getYear() > 1999)
    date += " " + adate.getYear();
  else date += "  " + (1900 + adate.getYear());
  date = "  " + date;
  if (document.layers){
  document.layers.jour.document.write(date)
  document.layers.jour.document.close()
  }
  else if (document.all)
  jour.innerHTML=date
  else if (document.getElementById)
  document.getElementById("jour").innerHTML=date
  ddate = setTimeout("debuteDate(ddelay)",ddelay);
}

function debuteTemps() {
  if (!document.layers&&!document.all&&!document.getElementById)
  return
  var hhmmss = "  ", mymin, sec;
  tdelay = 60000;
  adate = new Date();
  hhmmss += adate.getHours();
  mymin = adate.getMinutes();
  if (mymin < 10) hhmmss += ":0" + mymin;
  else hhmmss += ":" + mymin;
  if (document.layers){
  document.layers.heure.document.write(hhmmss)
  document.layers.heure.document.close()
  }
  else if (document.all)
  heure.innerHTML=hhmmss
  else if (document.getElementById)
  document.getElementById("heure").innerHTML=hhmmss
  ttime = setTimeout("debuteTemps(tdelay)",tdelay);
}

			function mmLoadMenus() {
		        window.mm_menu_univ = new Menu("root",75,20,"Verdana, Arial, Helvetica, sans-serif",12,"#000","#fff","#EFEFEF","#ADADAD","middle","middle",1,0,50,-5,7,true,true,true,0,true,true);
			mm_menu_univ.addMenuItem("&nbsp;  الجامعات","location='./univ.php'");
			mm_menu_univ.addMenuItem("&nbsp;  الإقامات","location='./city.php'");
			mm_menu_univ.addMenuItem("&nbsp;  الشعب","location='./branches.php'");
			mm_menu_univ.addMenuItem("&nbsp;  المستويات","location='./levels.php'");	
			mm_menu_univ.fontWeight="none";
			mm_menu_univ.hideOnMouseOut=true;
			mm_menu_univ.menuBorder=1;
			mm_menu_univ.menuLiteBgColor='#EAEAEA';
			mm_menu_univ.menuBorderBgColor='#EAEAEA';
			mm_menu_univ.bgColor='#BFBFBF'; 
			//mm_menu_univ.writeMenus(); 
		    
			window.mm_menu_bac = new Menu("root",75,20,"Verdana, Arial, Helvetica, sans-serif",12,"#000","#fff","#EFEFEF","#ADADAD","middle","middle",1,0,50,-5,7,true,true,true,0,true,true);
			mm_menu_bac.addMenuItem("&nbsp;  الشعب","location='./bac_branches.php'");
			mm_menu_bac.addMenuItem("&nbsp;  المدارس","location='./school.php'");
			mm_menu_bac.fontWeight="none";
			mm_menu_bac.hideOnMouseOut=true;
			mm_menu_bac.menuBorder=1;
			mm_menu_bac.menuLiteBgColor='#EAEAEA';
			mm_menu_bac.menuBorderBgColor='#EAEAEA';
			mm_menu_bac.bgColor='#BFBFBF'; 
			mm_menu_bac.writeMenus(); 			
		} 