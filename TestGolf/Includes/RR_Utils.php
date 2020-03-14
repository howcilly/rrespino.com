<?php
//---------------------------------------------------------------------------------
//ProjectName:  rrespino.com
//
//ModuleName: RR_Utils.php
//
//Purpose:  This is the utility class for the site
//
//Copywright 2017 &copy;
//Ronald R Espinoza | admin@rrespino.com 
// All rights reserved 	
//=================================================================================
//
//Includes:  	*.php	
//
//Functions:
//				aboutNav()
//				getTitle()
//
//
//Edits and Profreading done
// by:___________________  Date:__|__|__
//	 Note:_____________________________________
//
//
//---------------------------------------------------------------------------------

class RR_Utils{

	//function to determine the proper linking schema for the about page
	function aboutNav($title, $links){
		
		$navLinks = "";
		
		$linkCount = count($links);
		for ($x = 0; $x < $linkCount; $x++) {
			$linkBase[] = substr($links[$x], 0, -4);
		}
		
		if($title == "about.php"){
			$navLinks = "<li><a class=\"page-scroll\" href=\"#".$linkBase[12]."\">".$linkBase[12]."</a></li>".
				"<li><a class=\"page-scroll\" href=\"#".$linkBase[13]."\">".$linkBase[13]."</a></li>".
				"<li><a class=\"page-scroll\" href=\"#".$linkBase[15]."\">".$linkBase[15]."</a></li>".
				"<li><a class=\"page-scroll\" href=\"#".$linkBase[14]."\">".$linkBase[14]."</a></li>";
			
		}else{
			$navLinks = "<li><a href=\"".$links[1]."#".$linkBase[12]."\">".$linkBase[12]."</a></li>".
				"<li><a href=\"".$links[1]."#".$linkBase[13]."\">".$linkBase[13]."</a></li>".
				"<li><a href=\"".$links[1]."#".$linkBase[15]."\">".$linkBase[15]."</a></li>".
				"<li><a href=\"".$links[1]."#".$linkBase[14]."\">".$linkBase[14]."</a></li>";
		}
		
		return $navLinks;
	}

	//function to determine the proper linking schema for the portfolio page
	function portfolioNav($title, $links){
		
		$portfolioLinks = "";
		
		$linkCount = count($links);
		for ($x = 0; $x < $linkCount; $x++) {
			$linkBase[] = substr($links[$x], 0, -4);
		}
		
		if($title == "portfolio.php"){
			$portfolioLinks = "<li><a class=\"page-scroll\" href=\"#".$linkBase[11]."\">".$linkBase[11]."</a></li>".
			"<li><a class=\"page-scroll\" href=\"#".$linkBase[5]."\">".$linkBase[5]."</a></li>".
			"<li><a class=\"page-scroll\" href=\"#".$linkBase[6]."\">".$linkBase[6]."</a></li>".
			"<li><a class=\"page-scroll\" href=\"#".$linkBase[8]."\">".$linkBase[8]."</a></li>";
			
		}else{
			$portfolioLinks = "<li><a class=\"page-scroll\" href=\"".$links[3]."#".$linkBase[11]."\">".$linkBase[11]."</a></li>".
			"<li><a href=\"".$links[3]."#".$linkBase[5]."\">".$linkBase[5]."</a></li>".
                "<li><a href=\"".$links[3]."#".$linkBase[6]."\">".$linkBase[6]."</a></li>".
                "<li><a href=\"".$links[3]."#".$linkBase[8]."\">".$linkBase[8]."</a></li>";
		}
		
		return $portfolioLinks;
	}	
	
	//function to get the title for the page
	function getTitle(){
		$current_page_uri = "";
		$part_url = "";
		$page_name = "";
		$current_page_uri = $_SERVER['REQUEST_URI'];
		$part_url = explode("/", $current_page_uri);
		$page_name = end($part_url);
		$title = $page_name;
	
	return $title;
	}	
	
	//function for the contact form submission
	function setSpamTrap(){
		
		//including the necessary libraries
		include_once './Includes/RR_Var.php';

		//instantiating the necessary classes
		$aVar = new RR_Var();
		
		$spamString = $aVar->setSpamString();
		
		$trapString = bin2hex($spamString);
		
		return $trapString;
		
	}

	
}//end class
?>