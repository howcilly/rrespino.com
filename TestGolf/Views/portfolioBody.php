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
            <h1>Overview</h1>
        </div>		  
        <div class=\"col-sm-6\">
			<div class=\"panel-group\">
			  <div class=\"panel panel-default\">			  
					<div id=\"panel_heading\" class=\"panel-heading\">
						<h4>
							<a data-toggle=\"collapse\" href=\"#overview1\" class=\"panel-title\">
								Web App for ABET evaluation
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
				<div id=\"overview1\" class=\"panel-collapse collapse\">
				  <div class=\"panel-body lead\">
					<h3>Situation:<br/></h3>
					ET-435 Senior Capstone Project<br/>
					<h3>Task:<br/></h3>
					&#8226;	Complete the design, coding and implementation of a website for managing the accreditation documentation for the Engineering Technology department at NMSU<br/>
					&#8226;	Develop a database to track and support user access to all documentation in a way that is easy to navigate and enhances search speed and efficiency<br/>
					&#8226;	Design and implement a security solution that successfully limits access to the above mentioned documentation to authorized users<br/>
					<h3>Action:<br/></h3>
					&#8226; An initial design was done for the database as well as a process flow for the highest level state in the sites; This began with the login page or initial landing page<br/>
					&#8226; A Timeline and Gannt chart were then drawn up and tasks were assigned to each team members strengths<br/>
					&#8226; The logic methodologies for the database, back end, and front end designs were then created<br/>
					&#8226; A test criteria with respect to the deliverables outlined in the first bullet were then drafted<br/>
					&#8226; Implementation of the site was first done on a test server to debug and ensure all client requirements were met<br/>
					&#8226; Testing of the site using various browsers, window sizes, and locations were then done to ensure proper functionality<br/>
					<h3>Result:<br/></h3>
					&#8226; Implementation of the site was done by uploading the scripts to the public_html directory on the clients server<br/>
					&#8226; Testing was then done by the client and various faculty members<br/>
					&#8226; All errors and bugs found were then fixed and final launch of the site was achieved<br/>
					&#8226; A extensive report and presentation addressing all aspects of the project were prepared and turned in for the course<br/>
					&#8211; This project was written in PHP, SQL, HTML, JS, CSS, Ajax, and JQuery<br/>
				  </div>
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
								X-Plane Plugin
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"overview2\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>
							Internship Assignment at Bendix King by Honeywell<br/>
							<h3>Task:<br/></h3>
							&#8226;	Develop a Plugin for X-Plane to communicate with a C++ desktop GUI<br/>
							&#8226;	Create a multi threaded system to communicate data simultaneously with GUI and box<br/>
							<h3>Action:<br/></h3>
							&#8226; Met with scrum team and developed a set of deliverables<br/>
							&#8226; Desined an initial GUI for the desktop to display proper parameters<br/>
							&#8226; Tested and created a properly working executable for the GUI<br/>
							&#8226; Created a multi threaded system to communicate with box transferring ARNIC-429 data over an RS232 cable<br/>
							<h3>Result:<br/></h3>
							&#8226; Working GUI executable was handed over to scrum team members at the end of internship<br/>
							&#8226; Testing was then done to ensure validity of box response<br/>
							&#8211; This project was written in C and C++<br/>				
						</div>
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
								Random Number Generator Using Assembly
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"overview3\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>
							Assignment for ET-344 Micro Computer Architechture<br/>
							<h3>Task:<br/></h3>
							&#8226;	Develop a Random Number Generator written in the NIOS II Assembly language<br/>
							&#8226;	Demonstrate working board system to professor<br/>
							<h3>Action:<br/></h3>
							&#8226; Inital state machine design for the logic process flow was created<br/>
							&#8226; Implementation of software and debugging of system was then done<br/>
							&#8226; Testing of the board with on board switches and NIOS terminal was done to find any remaining bugs<br/>
							<h3>Result:<br/></h3>
							&#8226; Using the Altera Monitor Program to communicate with the board a working demonstration was done to show a working project<br/>
							&#8226; An A was recieved for this assignment<br/>
							&#8211; This project was written in NIOS II Assembly<br/>				
						</div>
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
								i2c Temperature Sensor
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"overview4\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>
							Senior Hardware Software Design project<br/>
							<h3>Task:<br/></h3>
							&#8226;	Using i2c communicate the data from an off board temperature sensor to off board seven segment displays<br/>
							<h3>Action:<br/></h3>
							&#8226; An initial state machine was developed for the VHDL implementation<br/>
							&#8226; All proper pins were soldered<br/>
							&#8226; The bread board was then properly wired to corresponding GPIOs <br/>
							&#8226; Software was then written in VHDL for the system and testing commenced fixing all clock errors<br/>
							<h3>Result:<br/></h3>
							&#8226; The working board and bread board system were then demonstrated to professor<br/>
							&#8226; A extensive report detailing the project was then turned in for the course<br/>
							&#8211; This project was written in VHDL<br/>				
						</div>
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
								JSP Web Application Archive
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"overview5\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>
							Internship Assignment at Bendix King by Honeywell<br/>
							<h3>Task:<br/></h3>
							&#8226;	Develop a web application to allow employees to enter total time worked on certain projects throughout their work week<br/>
							&#8226;	Apply proper permission levels for managerial and secreterial report generation detailing employee allocations<br/>
							<h3>Action:<br/></h3>
							&#8226; Initial desing of the sites skeleton was developed<br/>
							&#8226; Worked in a team to create all proper objects and database tables<br/>
							&#8226; Demonstrated a working prototype to manager<br/>
							&#8226; Code revisions were then done by team members to ensure proper and clean code structure<br/>
							&#8226; Demontrations and further testing were done with managers and secretary to ensure application requirements were met<br/>
							&#8226; Further debugging and code revisions were done to meet requirements<br/>
							<h3>Result:<br/></h3>
							&#8226; Working Web Application Archive was then deployed on an Apache Tomcat server in the office LAN<br/>
							&#8226; To my knowledge this system is still in use for their office automation<br/>
							&#8211; This project was written in Java, SQL, HTML, JS, CSS, Ajax, and JQuery utilizing JSP<br/>				
						</div>
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
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"embedded1\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
				<h3>Situation:<br/></h3>
				Internship Assignment at Bendix King by Honeywell<br/>
				<h3>Task:<br/></h3>
				&#8226;	Develop a Plugin for X-Plane to communicate with a C++ desktop GUI<br/>
				&#8226;	Create a multi threaded system to communicate data simultaneously with GUI and box<br/>
				<h3>Action:<br/></h3>
				&#8226; Met with scrum team and developed a set of deliverables<br/>
				&#8226; Desined an initial GUI for the desktop to display proper parameters<br/>
				&#8226; Tested and created a properly working executable for the GUI<br/>
				&#8226; Created a multi threaded system to communicate with box transferring ARNIC-429 data over an RS232 cable<br/>
				<h3>Result:<br/></h3>
				&#8226; Working GUI executable was handed over to scrum team members at the end of internship<br/>
				&#8226; Testing was then done to ensure validity of box response<br/>
				&#8211; This project was written in C and C++<br/>
				</div>
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
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"embedded2\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>
							Assignment for ET-344 Micro Computer Architechture<br/>
							<h3>Task:<br/></h3>
							&#8226;	Develop a Random Number Generator written in the NIOS II Assembly language<br/>
							&#8226;	Demonstrate working board system to professor<br/>
							<h3>Action:<br/></h3>
							&#8226; Inital state machine design for the logic process flow was created<br/>
							&#8226; Implementation of software and debugging of system was then done<br/>
							&#8226; Testing of the board with on board switches and NIOS terminal was done to find any remaining bugs<br/>
							<h3>Result:<br/></h3>
							&#8226; Using the Altera Monitor Program to communicate with the board a working demonstration was done to show a working project<br/>
							&#8226; An A was recieved for this assignment<br/>
							&#8211; This project was written in NIOS II Assembly<br/>
						</div>
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
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"embedded3\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>
							Senior Hardware Software Design project<br/>
							<h3>Task:<br/></h3>
							&#8226;	Using i2c communicate the data from an off board temperature sensor to off board seven segment displays<br/>
							<h3>Action:<br/></h3>
							&#8226; An initial state machine was developed for the VHDL implementation<br/>
							&#8226; All proper pins were soldered<br/>
							&#8226; The bread board was then properly wired to corresponding GPIOs <br/>
							&#8226; Software was then written in VHDL for the system and testing commenced fixing all clock errors<br/>
							<h3>Result:<br/></h3>
							&#8226; The working board and bread board system were then demonstrated to professor<br/>
							&#8226; A extensive report detailing the project was then turned in for the course<br/>
							&#8211; This project was written in VHDL<br/>				
						</div>
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
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"embedded4\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>			
							Assignment for ET-282 Digital Electronics<br/>
							<h3>Task:<br/></h3>
							&#8226;	Develop a T.I. Bread Board Implementation for a digital Lock and Alarm<br/>
							&#8226;	Demonstrate working board system to professor<br/>
							<h3>Action:<br/></h3>
							&#8226; Inital state machine design for the logic process flow was created<br/>
							&#8226; Implementation of state machine translation into wiring design was done<br/>
							&#8226; Testing and debugging of the bread was done with a voltmeter<br/>
							<h3>Result:<br/></h3>
							&#8226; Using the bread board and a 5 volt source a demonstration of the working project was done for the professor<br/>
							&#8226; An A was recieved for this assignment<br/>
							&#8211; This project was built using custom wiring and T.I. logic digital logic chips<br/>	
						</div>
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
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"embedded5\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>			
							Assignment for ET-398 Digital Systems<br/>
							<h3>Task:<br/></h3>
							&#8226;	Develop a LCD Alarm System using the Altera DE2 board<br/>
							&#8226;	Demonstrate working board system to professor<br/>
							<h3>Action:<br/></h3>
							&#8226; Inital state machine design for the logic process flow was created<br/>
							&#8226; Implementation of software and debugging of system was then done<br/>
							&#8226; A test demonstration displaying communication with the LCD screen via i2c was done<br/>
							&#8226; Testing of the board with on board switches and NIOS terminal was done to find any remaining bugs<br/>
							<h3>Result:<br/></h3>
							&#8226; Using the Altera Monitor Program and Onboard switches to communicate with the board a working demonstration was done to show a working project<br/>
							&#8226; An A was recieved for this assignment<br/>
							&#8211; This project was written in VHDL<br/>	
						</div>
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
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"embedded6\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>			
							Senior Hardware Software Design<br/>
							<h3>Task:<br/></h3>
							&#8226;	Develop a Calculator using the Altera DE0-nano board<br/>
							&#8226;	Demonstrate working board system to professor<br/>
							<h3>Action:<br/></h3>
							&#8226; Inital state machine design for the logic process flow was created<br/>
							&#8226; Implementation of software and debugging of system was then done<br/>
							&#8226; Testing of the board with the NIOS terminal was done to find any remaining bugs<br/>
							<h3>Result:<br/></h3>
							&#8226; Using the Altera Monitor Program and Onboard switches to communicate with the board a working demonstration was done to show a working project<br/>
							&#8226; An A was recieved for this assignment<br/>
							&#8211; This project was written in ARMx86 assembly language <br/>
						</div>
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
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"scripting1\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>			
							Internship Assignment at Bendix King by Honeywell<br/>
							<h3>Task:<br/></h3>
							&#8226;	Develop a Python GUI to trace Software Design and Requirements Documents to Software and visa versa<br/>
							&#8226;	Distrubute GUI to appropriate team members<br/>
							<h3>Action:<br/></h3>
							&#8226; Previous script was recieved and initial deliverables were outlined<br/>
							&#8226; Design of an initial GUI was done<br/>
							&#8226; Testing of logic for document parsing was done to find any errors<br/>
							&#8226; A code revision was done to ensure code cleanliness and readablility<br/>
							&#8226; Final testing was done with documents to assure requirements were met<br/>			
							<h3>Result:<br/></h3>
							&#8226; Distrubution of working software was done to proper team members<br/>
							&#8226; A final debugging process was done<br/>
							&#8226; To my knowledge this tool is still in use for the project<br/>			
							&#8211; This project was written in Python<br/>
						</div>
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
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"scripting2\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>			
							Internship Assignment at Bendix King by Honeywell<br/>
							<h3>Task:<br/></h3>
							&#8226;	Debug PERL SDD trace tool to fix an error<br/>
							&#8226;	Error was that the tool was not discovering all proper tags according to requirements<br/>
							<h3>Action:<br/></h3>
							&#8226; Previous script was recieved and initial deliverables were outlined<br/>
							&#8226; Debugging of the script and code revision was done<br/>
							&#8226; Errors were fixed and tool was redistributed back to teammembers<br/>
							&#8226; Final testing was done with documents to assure requirements were met<br/>			
							<h3>Result:<br/></h3>
							&#8226; The tool worked properly and allowed the team to meet the deadline for FAA Qual<br/>
							&#8226; To my knowledge this tool is still in use for the project<br/>			
							&#8211; This project was written in Perl<br/>
						</div>
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
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"webTech1\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>
							ET-435 Senior Capstone Project<br/>
							<h3>Task:<br/></h3>
							&#8226;	Complete the design, coding and implementation of a website for managing the accreditation documentation for the Engineering Technology department at NMSU<br/>
							&#8226;	Develop a database to track and support user access to all documentation in a way that is easy to navigate and enhances search speed and efficiency<br/>
							&#8226;	Design and implement a security solution that successfully limits access to the above mentioned documentation to authorized users<br/>
							<h3>Action:<br/></h3>
							&#8226; An initial design was done for the database as well as a process flow for the highest level state in the sites; This began with the login page or initial landing page<br/>
							&#8226; A Timeline and Gannt chart were then drawn up and tasks were assigned to each team members strengths<br/>
							&#8226; The logic methodologies for the database, back end, and front end designs were then created<br/>
							&#8226; A test criteria with respect to the deliverables outlined in the first bullet were then drafted<br/>
							&#8226; Implementation of the site was first done on a test server to debug and ensure all client requirements were met<br/>
							&#8226; Testing of the site using various browsers, window sizes, and locations were then done to ensure proper functionality<br/>
							<h3>Result:<br/></h3>
							&#8226; Implementation of the site was done by uploading the scripts to the public_html directory on the clients server<br/>
							&#8226; Testing was then done by the client and various faculty members<br/>
							&#8226; All errors and bugs found were then fixed and final launch of the site was achieved<br/>
							&#8226; A extensive report and presentation addressing all aspects of the project were prepared and turned in for the course<br/>
						</div>
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
								<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>
							</a>
						</h4>
					</div>
					<div id=\"webTech2\" class=\"panel-collapse collapse\">
						<div class=\"panel-body lead\">
							<h3>Situation:<br/></h3>
							Internship Assignment at Bendix King by Honeywell<br/>
							<h3>Task:<br/></h3>
							&#8226;	Develop a web application to allow employees to enter total time worked on certain projects throughout their work week<br/>
							&#8226;	Apply proper permission levels for managerial and secreterial report generation detailing employee allocations<br/>
							<h3>Action:<br/></h3>
							&#8226; Initial desing of the sites skeleton was developed<br/>
							&#8226; Worked in a team to create all proper objects and database tables<br/>
							&#8226; Demonstrated a working prototype to manager<br/>
							&#8226; Code revisions were then done by team members to ensure proper and clean code structure<br/>
							&#8226; Demontrations and further testing were done with managers and secretary to ensure application requirements were met<br/>
							&#8226; Further debugging and code revisions were done to meet requirements<br/>
							<h3>Result:<br/></h3>
							&#8226; Working Web Application Archive was then deployed on an Apache Tomcat server in the office LAN<br/>
							&#8226; To my knowledge this system is still in use for their office automation<br/>
							&#8211; This project was written in Java, SQL, HTML, JS, CSS, Ajax, and JQuery utilizing JSP<br/>				
						</div>
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