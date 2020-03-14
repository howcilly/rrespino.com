<?php

//This the function to create the html head and meta elements
function htmlHead(){
	$metaElements = "<!DOCTYPE html>
	<html lang=\"en\">
		<head>
			<meta http-equiv=\"content-type\" content=\"text/html\" charset=\"utf-8\" />
			<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">			
			<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
			<meta name=\"description\" content=\"ronald espinozas portfolio and STAR project analysis\" />
			<meta name=\"keywords\" content=\"ronald espinozas portfolio and STAR project analysis\" />
			<meta name=\"author\" content=\"ronald espinoza\">";

	return $metaElements;
}

//This is the function to create the html title element with a variable passed down from the MasterController
function htmlTitle($title){
	$titleElement = "<title>".$title."</title>";
	
	return $titleElement;
}

//This is the function to create all the proper HTML Links with respect to page Assets
function htmlLinks(){
	
    $linkElements = "<!-- Bootstrap core CSS -->
    <link href=\"../Assets/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"../Assets/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">
    <!-- Custom styles sheets -->
	<link href=\"../Assets/flaticon.css\" rel=\"stylesheet\" type=\"text/css\">	
    <link href=\"../Assets/navbar-fixed-top.css\" rel=\"stylesheet\">
	<link href=\"../Assets/style.css\" rel=\"stylesheet\">	
    <link href=\"../Assets/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">	
    <link href=\"../Assets/font-awesome.css\" rel=\"stylesheet\" type=\"text/css\">		
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->";
	
	return $linkElements;
}

//This is the function to create the html Nav Bar element
function htmlNav($siteRoot, $links, $aboutNavLinks, $portfolioNavLinks){
	
	$linkCount = count($links);
	for ($x = 0; $x < $linkCount; $x++) {
		$linkBase[] = substr($links[$x], 0, -4);
	}
	
	$navElement = "<nav class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"".$siteRoot."\">rrespino</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"".$siteRoot."\">".$linkBase[0]."</a></li>
			<li><a href=\"".$links[4]."\">".$linkBase[4]."</a></li>
			<li><a href=\"".$links[2]."\">".$linkBase[2]."</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>";
	
	return $navElement;
	
}

//This is function to create the top container of the html body element
function htmlBody(){
	
	$bodyElement = "</head>
	<body id=\"top\">
		<!-- Main body of the WebPage determined by selected view referenced by URL-->";
		
	return $bodyElement;
}

//This is the function to create the html footer element, include necessary assets, and close all proper element tags
function htmlFooter(){
	$footerElement = "
	<footer>
		<a href=\"#\" class=\"scrollToTop\"><i class=\"fa fa-chevron-up fa-fw fa-1x\"></i></a>
	</footer>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"../Assets/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../Assets/jquery.min.js\"><\/script>')</script>
    <script src=\"../Assets/bootstrap.min.js\"></script>
    <!-- jQuery -->
    <script src=\"../Assets/jquery.js\"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src=\"../Assets/jquery.easing.min.js\"></script>
    <script src=\"../Assets/scrolling-nav.js\"></script>	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../Assets/ie10-viewport-bug-workaround.js\"></script>		
	<script>
		$('#panel_heading.panel-heading h4 span').click(function(){
		$(this).next('ul').slideToggle('500');
		$(this).find('i').toggleClass('fa-plus fa-minus')
	});
	</script>
	</body>
</html>";

	return $footerElement;
}

?>
