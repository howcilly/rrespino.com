<?php
//---------------------------------------------------------------------------------
//ProjectName:  rrespino.com
//
//ModuleName: portfolioBody.php
//
//Purpose:  This is the body for the portfolio page
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
//				overviewSection()
//				embeddedSection()
//				scriptingSection()
//				webTechSection()
//
//Edits and Profreading done
// by:___________________  Date:__|__|__
//	 Note:_____________________________________
//
//
//---------------------------------------------------------------------------------

function getContent(){
	
	$content = overviewSection().embeddedSection().scriptingSection().webTechSection();
	
	return $content;
}

function overviewSection(){
	
	$overview_S = "<!-- first section - Overview -->
  <div id=\"overview\" class=\"pad-section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"text-vertical-center\">
            <h1>Lorem Ipsum Dolorem</h1>
        </div>		  
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
			  <div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#overview1\" class=\"panel-title\">
								Lorem Ipsum Dolorem
								
							</a>
						</h4>
					</div>
			  </div>
			</div>
		</div>
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#overview2\" class=\"panel-title\">
								Lorem Ipsum Dolorem
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#overview3\" class=\"panel-title\">
								Lorem Ipsum Dolorem
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#overview4\" class=\"panel-title\">
								Lorem Ipsum Dolorem
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#overview5\" class=\"panel-title\">
								Lorem Ipsum Dolorem
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
  <!-- end first section -->";
	
	return $overview_S;
}

function embeddedSection(){
	
	$embedded_S = "  <!-- second section - Embedded -->
  <div id=\"embedded\" class=\"pad-section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"text-vertical-center\">
            <h1>Embedded Systems</h1>
        </div>	  
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#embedded1\" class=\"panel-title\">
								X-Plane Plugin
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#embedded2\" class=\"panel-title\">
								Random Number Generator Using Assembly
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#embedded3\" class=\"panel-title\">
								i2c Temperature Sensor
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>	
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#embedded4\" class=\"panel-title\">
								T.I. Digital Lock Alarm
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#embedded5\" class=\"panel-title\">
								LCD Alarm System
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#embedded6\" class=\"panel-title\">
								ARMx86 Calculator
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
  <!-- end second section -->";
	
	return $embedded_S;
}

function scriptingSection(){
	
	$scripting_S = "  <!-- third section - Scripting -->
  <div id=\"scripting\" class=\"pad-section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"text-vertical-center\">
            <h1>Scripting SW Projects</h1>
        </div>	  
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#scripting1\" class=\"panel-title\">
								Python SDD Tracer
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#scripting2\" class=\"panel-title\">
								PERL SDD Tracer
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>		
      </div>
    </div>
  </div>
  <!-- end third section -->";
	
	return $scripting_S;
}

function webTechSection(){
	
	$webTech_S = "  <!-- fourth section - Web Technologies -->
  <div id=\"webTech\" class=\"pad-section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"text-vertical-center\">
            <h1>Web Technologies</h1>
        </div>	  
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#webTech1\" class=\"panel-title\">
								Web App for ABET Evaluation
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
				<div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#webTech2\" class=\"panel-title\">
								JSP Web Application Archive
								
							</a>
						</h4>
					</div>
					
				</div>
			</div>
		</div>		
      </div>
    </div>
  </div>
  <!-- end fourth section -->";
	
	return $webTech_S;
}
?>