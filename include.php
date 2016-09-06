<?php
session_start();

function html($html){
	echo trim($html);
}

function starthtml(){
	html("<!DOCTYPE html>");
	html("<html lang=\"en\">");
  	html("	<head>");
    html("		<meta charset=\"utf-8\">");
    html("		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">");
    html("		<meta name=\"robots\" content=\"index, follow\">");
    html("		<meta name=\"revisit-after\" content=\"1 day\">");
    html("		<meta name=\"description\" content=\"Quotes from @Baconmuncher42\">");
	html("		<meta name=\"keywords\" content=\"AJ, Baconmuncher42, Ajisms, Ajism\">");
	html("		<title>AJISMS</title>");


	html("		<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">");
	html("		<link rel=\"stylesheet\" href=\"css/kustom.css\">");
	html("	</head>");
	html("	<body class=\"container\">");
	html("		<p class=\"big h1 text-center\">AJISMS</p> ");
	html("		<div style=\"margin-top:15.1337%;\">");	
}

function endpage(){
	html("</div>");
	html("        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->");
    html("    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>");
    html("    <!-- Include all compiled plugins (below), or include individual files as needed -->");
    html("    <script src=\"js/bootstrap.min.js\"></script>");
	html("	</body>");
	html("</html>");
}


function cleanmysql($string){
	global $db;
	return $db->real_escape_string($string);	
}

function getquote(){
	$array = array(
		"Decently average",
	 	"This ham is too dry it needs more mayo",
	 	"I am not always stupid I just am stupid",
	 	
	);
	$random = rand(0,count($array)-1);

	return $array[$random];

}

?>