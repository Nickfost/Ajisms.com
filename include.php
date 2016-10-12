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
	html("		<link rel=\"shortcut icon\" href=\"https://ajisms.com/images/favicon.ico\" type=\"image/x-icon\">");
	html("		<title>AJISMS</title>");
	html("		<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">");
	html("		<link rel=\"stylesheet\" href=\"css/kustom.css\">");
	html("		<meta property=\"og:title\" content=\"AJISMS\" />");
	html("		<meta property=\"og:url\" content=\"https://ajisms.com\" />");
	html("		<meta property=\"og:type\" content=\"website\" />");
	html("		<meta property=\"og:description\" content=\"Quotes from @Baconmuncher42\" />");
	html("		<meta property=\"og:image\" content=\"http://ajisms.com/images/og.jpg\">");
	html("		<meta name=\"twitter:card\" content=\"summary\">");
	html("		<meta name=\"twitter:title\" content=\"AJISMS\">");
	html("		<meta name=\"twitter:description\" content=\"Quotes from @Baconmuncher42\">");
	html("		<meta name=\"twitter:url\" content=\"https://ajisms.com\" />");
	html("		<meta name=\"twitter:image\" content=\"https://ajisms.com/images/og.jpg\" />");
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
	 	"i want to find a video toaster",
	 	"does anyone know how to spell bureau?",
	 	"Almost called plattsburg high school to tell the secretary that my sister had explosive diarrhea and Reid got hit by the shrapnel",
	 	"60% of the time my thoughts are correct 100% of the time",
	 	"Almost choked to death on a fruit snack shaped like a panda",
	 	"my butt is unnaturally scratchy tonight",
	 	"once apon a time a lizard ran for president, got pneumonia, then died",
	 	"life isn't all bacon; ham and sausage is also involved",
	 	"holy fricken fritos",
	 	"if anyone needs me i am college prepping and by that i mean consuming large quantities of ramen noodels",
	 	"moo",
	 	"due to #BasketOfDeplorables inflation, Kmart has sold out of baskets",
	 	"i made $6 dollars today",
	 	"boogers are like oil filters in a ford. constantly leaky and full of shit",
	 	"I don't speak mexican sarah",
	 	"Linux is extraordinarily user friendly its just picky about who it's friends are",
	 	"@lastpass? is that a type of laxative?",
	 	"yo momma so fat she can file share conveniently very large files on a heavily fragmented disk drive",
		"yo momma so fat she couldn't be converted to ntfs",
		"Do they have mexican hippies?",
		"I miss the rape van",
	);
	$random = rand(0,count($array)-1);

	return $array[$random];

}

?>