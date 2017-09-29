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

$quote = array(
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
	"That's a nice tv, It'll make a great boat anchor",
	"I farted.  The hole in my pants is now larger than it was originally",
	"anyone have any decient low dinsity floppy diskettes for sale? preferably without mold growing on them",
	"#windows2000forever",
	"#poopin",
	"free CRT monitors only $2.00",
	"just wiped my ass with the toilet paper roll because my brother didn't change it out",
	"Nothing quite like a ice cold honeydew to the armpit",
	"What do you call a duck that can't swim? Dead.",
	"So now I have a carburetor bowl of raisins. What the hell am I supposed to do with that?",
	"hey @LonelyGoomba i shipped an Atari 2600 and a copy of ET your way. that aughta be shitty enough for you.",
	"taco doritos and salsa isn't what i thought it would be. it still tastes like SHIT.",
	"anyone know what to do if you shat green? It was weird and kinda made me scared"
	"If I could poop fire that would really be a pain in the ass",
	"Hey @Nickfost_ remember that blue cupcake? I ate 4 bags of skittles so am I gonna shart the rainbow?",
	"yo @drpepper thanks for your support. my heartburn and assquakes were very warming.",
	"admit it. we all have that crazy uncle who's farts sound like a fucking chainsaw.",
	"ford can't post 1/4 mile strip videos on instagram any more. They limited video time to 15 seconds.",
	"i have farted entirely too much today. Its like Auschwitz in my room right now.",
	"75% of the time shoving gold bars up your ass so the government can't get them works 100% of the time.",
	"well today has been shat on twice already, but i do have donuts",
	"This product brought to you in part by Microsoft PowerPorn",
	"well i just peed brown, will i poop yellow?",
	"thanks to a previous tweet i may have burns on my ass now",
	"why does a MS-DOS install floppy always break but a floppy with some 1990s bloatware work for eternity?",
	"i just #farted and it smelled so bad the mold on this cheese beside me died.",
	"I have made a noteworthy movement in the downstairs congress"
	
);
function getquote(){
	global $quote;
	$random = rand(0,count($quote)-1);
	return $quote[$random];
}
function allquotes($specific = null){
	global $quote;
	if($specific !== null){
		return $quote[$specific];
	} else {
		return $quote;
	}
}

?>
