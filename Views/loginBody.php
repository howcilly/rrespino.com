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
	
	//including the necessary libraries
	include_once './Includes/RR_Utils.php';
	include_once './Includes/RR_Var.php';
	
	//instantiating the necessary classes
	$aUtil = new RR_Utils();	
	$aVar = new RR_Var();
	
	$trapStr = $aUtil->setSpamTrap();
	
	//creating variables for response
	$errName = $aVar->getErrName();
	$errEmail = $aVar->getErrEmail();
	$errMessage = $aVar->getErrMessage();
	$errHuman = $aVar->getErrHuman();
	$contactResult = $aVar->getResult();

        $date = new DateTime('now');
        $minuteString = $date->format('i');
		
	
	$content = "<!-- Callout -->
	<section id=\"services\" class=\"services bg-primary\">	
	<div id=\"callout_contact\" class=\"pad-section\">
	    <div class=\"container\">
			<div class=\"row\">
				<div class=\"text-vertical-center\">
					<h1></h1>
				</div>				
				<div class=\"col-md-12\">

						<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"\" accept-charset='UTF-8'>
							<div class=\"form-group\">
								<label for=\"email\" class=\"col-sm-2 control-label\">Email</label>
								<div class=\"col-sm-10\">
									<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"example@domain.com\" value=\"\">
									<p class='col-sm-2 control-label'>".$errEmail."</p>
								</div>
							</div>
							<div class=\"form-group\">
								<label for=\"spam trap\" class=\"col-sm-2 control-label\">Anti Spam</label>
								<div class=\"col-sm-10\">
								sqrt(49) + ".$minuteString." &#61;   &#63;
								</div>
								<div class=\"col-sm-10\">
									<input type=\"text\" class=\"form-control\" id=\"human\" name=\"human\" placeholder=\"Your Answer\">
									<p class='col-sm-2 control-label'>".$errHuman."</p>
								</div>
							</div>
							<div class=\"form-group\">
								<div class=\"col-sm-10 col-sm-offset-2\">
									<input id=\"submit\" name=\"submit\" type=\"submit\" value=\"Login\" class=\"btn btn-primary\">
								</div>
							</div>
							<div class=\"form-group\">
								<div class=\"col-sm-10 col-sm-offset-2\">
									".$contactResult." 
								</div>
							</div>
						</form>

				</div>
			</div>
		</div>
    </div>
	</section>";
	
	return $content;
}

?>