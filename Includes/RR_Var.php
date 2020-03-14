<?php
//---------------------------------------------------------------------------------
//ProjectName:  rrespino.com
//
//ModuleName: RR_Var.php
//
//Purpose:  This class is used to create a more global variable access for the site
//
//Copywright 2017 &copy;
//Ronald R Espinoza | admin@rrespino.com 
// All rights reserved 	
//=================================================================================
//
//Includes:  	*.php	
//
//Functions:
//				navBarLinks()
//				sitePages()
//
//Edits and Profreading done
// by:___________________  Date:__|__|__
//	 Note:_____________________________________
//
//
//---------------------------------------------------------------------------------

class RR_Var{
	
	function navBarLinks(){
		//creating nav bar links
		$links = [
			$homeLink = "home.php",//0
			$aboutLink = "about.php",//1
			$contactLink = "contact.php",//2
			$portfolioLink = "portfolio.php",//3
			$loginLink = "login.php",//4
			$embeddedLink = "embedded.php",//5
			$scriptingLink = "scripting.php",//6
			$ideLink = "ide.php",//7
			$webTechLink = "webTech.php",//8
			$swDevLink = "swDev.php",//9
			$serialLink = "serial.php",//10
			$otherLink = "overview.php",//11
			$objectivesLink = "objectives.php",//12
			$educationLink = "education.php",//13
			$volunteerLink = "volunteer.php",//14
			$hobbiesLink = "hobbies.php",//15
			$resumeLink = "resume.php", //16
			$projectsLink = "projects.php"//17
		];
	
	return $links;
	}
	
	function sitePages(){
		
		//string for page name to be appended to the URL
		$pages=[
			"index.php",
			"about.php",
			"contact.php",
			"portfolio.php",
			"login.php",
			"embedded.php",
			"scripting.php",
			"ide.php",
			"webTech.php",
			"swDev.php",
			"serial.php",
			"other.php",
			"objectives.php",
			"education.php",
			"volunteer.php",
			"hobbies.php",
			"resume.php",
			"projects.php"
		]; 
		
		return $pages;
	}
	
	//setting spam string
	function setSpamString(){
		$min = "";
		$minute = new DateTime(i);
		$min = $minute->format('i');
		$spamString = "Ohms Law V=I*R $min";		
	return $spamString;
	}
	
	//////////////////////////////////////////////////////////////////////////////
	//Setters for contact form session variables
	function setErrName($name){$_SESSION['contact_name']  = $name;}	
	function setErrEmail($email){$_SESSION['contact_email']  = $email;}	
	function setErrMessage($message){$_SESSION['contact_message']  = $message;}	
	function setErrHuman($human){$_SESSION['contact_human']  = $human;}		
	function setResult($result){$_SESSION['contact_result']  = $result;}	
	
	//////////////////////////////////////////////////////////////////////////////
	//Getters for contact form session variables	
	function getErrName(){return isset($_SESSION['contact_name'])?$_SESSION['contact_name']:'';}
	function getErrEmail(){return isset($_SESSION['contact_email'])?$_SESSION['contact_email']:'';}
	function getErrMessage(){return isset($_SESSION['contact_message'])?$_SESSION['contact_message']:'';}
	function getErrHuman(){return isset($_SESSION['contact_human'])?$_SESSION['contact_human']:'';}		
	function getResult(){return isset($_SESSION['contact_result'])?$_SESSION['contact_result']:'';}	
	
	
}//end class

?>