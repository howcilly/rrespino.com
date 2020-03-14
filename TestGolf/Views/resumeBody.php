<?php
//---------------------------------------------------------------------------------
//ProjectName:  rrespino.com
//
//ModuleName: contactBody.php
//
//Purpose:  This is the body for contact page
//
//Copywright 2017 &copy;
//Ronald R Espinoza | admin@rrespino.com 
// All rights reserved 	
//=================================================================================
//
//Includes:  	*.php	
//
//Functions:
//				getContent()
//
//Edits and Profreading done
// by:___________________  Date:__|__|__
//	 Note:_____________________________________
//
//
//---------------------------------------------------------------------------------

function getContent(){
	
	$resume = resumePanel();
	
	$content = "<!-- Callout -->
	<div id=\"callout_contact\" class=\"pad-section\">
	    <div class=\"container\">
<!-- Callout -->
	<div id=\"callout\" class=\"pad-section\">
		<div class=\"container\">
		  <div class=\"row\">
			<div class=\"col-md-12\">
				<div class=\"panel-group\">
				  <div class=\"panel panel-default\">
					<div id=\"resume\" class=\"\">
					  <div class=\"panel-body lead\">
						  ".$resume."
					  </div>
					</div>
				  </div>
				</div>
			</div>			
		  </div>		
		</div>
    </div>
		</div>
    </div>";
	
	return $content;
}

function resumePanel(){
	
	$resume = "<iframe src=\"../Views/resume_2017.htm\"></iframe>";
	
	return $resume;
}

?>