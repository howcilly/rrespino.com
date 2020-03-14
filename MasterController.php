<?php 
//---------------------------------------------------------------------------------
//ProjectName:  rrespino.com
//
//ModuleName: MasterController.php
//
//Purpose:  This is the initial landing page that is first
//		 	presented to the user
//
//Copywright 2017 &copy;
//Ronald R Espinoza | admin@rrespino.com 
// All rights reserved 	
//=================================================================================
//
//Includes:  	*.php	
//			WebSkeleton.php
//			selected *Body.php
//
//Functions:	
//
//Edits and Profreading done
// by:___________________  Date:__|__|__
//	 Note:_____________________________________
//
//
//---------------------------------------------------------------------------------

//all included libraries to build the basic HTML chunk
include "Views/RR_WebSkeleton.php";
include_once './Includes/RR_Utils.php';
include_once './Includes/RR_Var.php';

//instantiating the necessary classes
$aUtil = new RR_Utils();
$aVar = new RR_Var();

//retrieving the proper variables from each respective class
$links = $aVar->navBarLinks();

$siteRoot = pathUrl(); //get the root directory

$pageIndex = $aVar->sitePages();
$page = $aVar->sitePages();

$title = $aUtil->getTitle();

//printing the standard html top container
print htmlHead();
print htmlTitle($title);
print htmlLinks();
print htmlBody();

//determing and printing the nav linking schema based on page view
$aboutNavLinks = $aUtil->aboutNav($title, $links);
$portfolioNavLinks = $aUtil->portfolioNav($title, $links);

print htmlNav($siteRoot, $links, $aboutNavLinks, $portfolioNavLinks);


//create the content for the selected view
//this is the content section based off which view the user is in
$pageContent = "";
$pageCount = sizeof($pageIndex);

for($i = 0; $i < $pageCount; $i++){

	//$title is a variable stripped from the URL
	if ($page[$i] ==  $title) {	
		include_once $pageIndex[$i]; //includes the proper page based on current view
									 //associated with page indice		
		$pageContent = getContent(); //selective from called view file
		print $pageContent;
		$url = $pageIndex[$i];
		break;
	} 
	
	if("" ==  $title){
		include_once $pageIndex[0];  //this is because the user is in the index url		
		$pageContent = getContent(); //selective from called view file
		print $pageContent;
		$url = $pageIndex[0];
		break;
	}
	else{//do nothing 
	}
}

print htmlFooter();

//function to get the sites URL This has to be in this file due to directory structure
function pathUrl($dir = __DIR__){

	$root = "";
	$dir = str_replace('\\', '/', realpath($dir));

	//HTTPS or HTTP
	$root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';

	//HOST
	$root .= '://' . $_SERVER['HTTP_HOST'];

	//ALIAS
	if(!empty($_SERVER['CONTEXT_PREFIX'])) {
		$root .= $_SERVER['CONTEXT_PREFIX'];
		$root .= substr($dir, strlen($_SERVER[ 'CONTEXT_DOCUMENT_ROOT' ]));
	} else {
		$root .= substr($dir, strlen($_SERVER[ 'DOCUMENT_ROOT' ]));
	}

	$root .= '/';

	return $root;
}

?>
