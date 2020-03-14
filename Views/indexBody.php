<?php
//---------------------------------------------------------------------------------
//ProjectName:  rrespino.com
//
//ModuleName: indexBody.php
//
//Purpose:  This is the body for index page
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
	
	$codeExample1 = codeExamplePanel1();
	$codeExample2 = codeExamplePanel2();
	$codeExample3 = codeExamplePanel3();
	$codeExample4 = codeExamplePanel4();
	$codeExample5 = codeExamplePanel5();	
	
	$content = "    <!-- About -->
    <section id=\"about\" class=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <!-- Callout -->
	<section id=\"services\" class=\"services bg-primary\">
	<div id=\"callout\" class=\"pad-section\">
		<div class=\"container\">
		  <div class=\"row\">
			<div class=\"col-lg-10 col-lg-offset-1\">
				<div class=\"panel-group\">
				  <div class=\"panel panel-default\">			  
						<div id=\"panel_heading\" class=\"panel-heading\">
							<h4>
								<a data-toggle=\"collapse\" href=\"#codeExample1\" class=\"panel-title\">
									Please Login
									<!--<span style=\"float:right;\"><i class=\"fa fa-plus\"></i></span>-->
								</a>
							</h4>
						</div>
					<div id=\"codeExample1\" class=\"panel-collapse collapse\">
					  <div class=\"panel-body lead\">
						  
					  </div>
					</div>
				  </div>
				</div>
			</div>
		  </div>		
		</div>
    </div>
    </section>
";
	
	return $content;
}

function codeExamplePanel1(){
	
	$codeExample1 = "<iframe src=\"../Views/phpCodeExample1.html\"></iframe><iframe src=\"../Views/phpCodeExample2.html\"></iframe><iframe src=\"../Views/phpCodeExample3.html\"></iframe>";
	
	return $codeExample1;
}

function codeExamplePanel2(){
	
	$codeExample2 = "<iframe src=\"../Views/cCodeExample.c.html\"></iframe>";
	
	return $codeExample2;
}

function codeExamplePanel3(){
	
	$codeExample3 = "<iframe src=\"../Views/javaCodeExample_indexJSP.jsp.html\"></iframe><iframe src=\"../Views/javaCodeExample_LoginServlet.java.html\"></iframe><iframe src=\"../Views/javaCodeExample_LogoutServlet.java.html\"></iframe>";
	
	return $codeExample3;
}

function codeExamplePanel4(){
	
	$codeExample4 = "<iframe src=\"../Views/I2C_controller.vhd.html\"></iframe><iframe src=\"../Views/bcd.vhd.html\"></iframe>";
	
	return $codeExample4;
}

function codeExamplePanel5(){
	
	$codeExample5 = "<iframe src=\"../Views/pyCodeExample.py.html\"></iframe><iframe src=\"../Views/indeedJobSearch.py.html\"></iframe>";
	
	return $codeExample5;
}

?>