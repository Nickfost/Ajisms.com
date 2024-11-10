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
	"Does anyone want a used Whopper"
	"Employee grade hot dogs"
	"Do you want to round up on your Taco Bell order today? No, because I seen on the TV how Roundup can cause cancer"
	"Taxation is theft, jurors' duty is legalized slavery"
	"a huge bag of queefs"
	"go to www.beaverbelch.com"
	"just remember guys, if you get kicked in the balls enough, you'll become numb to it and it won't matter anymore"
	"Fuck you, bill gates - @nickfost_"
	"God damn drinks at QT went up another .10 today - Damnit @taquitosarah"
	"Congrats to 9 years of bullshit on this fucking trash ass platform that Elon fucking murdered"
	"Walking through Walmart and saw a couple of people walk by with matching shirts, one said Dr Puffer and the other Mountain Dewbie"
	"Competitive Air Queefing"
	"7 peanut butter cookies and four cheap shit beers - the dinner of someone who no longer gives a fuck about life anymore"
	"can't watch the goddamn golden girls tonight because @TCL_USA said that youtube needed to update and then it fucked my TV"
	"I kinda want to see a zebra eat a moose"
	"i just ate 6,530 calories in one setting at Burger King. Go fuck yourself @michelleobama"
	"you can have it queef when it starts a torrent and fart when it completes one - @letsgetturnip"
	"my body is an amazing machine. It will turn any type of food, doesn't matter what type of food, into shit. All ends up as poop out the end"
	"this retarded post is brought to you in part by Windows 11"
	"fuck you and your snow, and your cold shit. Go make a snow dildo and shove it up your snatch"
	"hey, you're a queer. Do you use reddit? -@nickfost"
	"Decently average",
	"Pardon me whilst i connect to the internet in a different way to download from the internet an internet river, so that i may connect to the internet in my original way i had anticipated"
	"Dick Cheetos"
	"7-Eleven is proof that if there is a god, he hates all of us for the pain and suffering that you go through eating a god damn roller hamburger"
	"Sarah is a racist"
	"queefing is just a sign that you need to plunger your puss harder"
	"i'll never forgive michelle obama for she took away my butter in high school for the dry hot rolls"
	"if my ass was to play an instrument, what would it be? A toss up between the heiney harmonica or the butt bassoon"
	"i have blasted Nick Foster with way too many lactose intolerance fueled farts"
	"your face looks like a poorly rendered image from a nintendo 64"
	"i farted and it sounded like i was tearing the pages out of a goddamn phone book"
	"i need a smoke break and i dont even smoke"
	"never underestimate the power of your irrelevance"
	"the power of oxyclean is not enough to clean the mac and cheese farts from my underpants"
	"i was trying to poop and then the farts just kept blasting out around the poop and then somehow the poop got stuck and i don't know how to feel about this. I am all out of farts and somehow stuck mid-poop."
	"when laudering money, what brand of washing machine do you prefer?"
	"i wish that the taco truck would tour my neigherhood like ice cream trucks"
	"Fuck shoptemu, that is all"
	"sometimes when i eat at arbys i need to poop directly afterwards. I don't know why i am tweeting this, but i just thought that everyone would like to know"
	"this tweet was tweeted while i was sitting on the shitter in stall number three while taking a huge steamy shit"
	"what kind of fucking hell is this bullshiti bastardistic asshole dickwad of a shitacular post of hog crap"
	"if this flag offends you, fucking leave - points to the Ken-Taco-Hut flag"
	"it is hot as fuck outside right now, and my work brought ice cream. If i eat it, my asshole retaliates. Fucking Fuck."
	"This ham is too dry it needs more mayo",
	"I am not always stupid I just am stupid",
	"i want to find a video toaster",
	"does anyone know how to spell bureau?",
	"60% of the time my thoughts are correct 100% of the time",
	"Almost choked to death on a fruit snack shaped like a panda",
	"my butt is unnaturally scratchy tonight",
	"once apon a time a lizard ran for president, got pneumonia, then died",
	"life isn't all bacon; ham and sausage is also involved",
	"holy fricken fritos",
	"if anyone needs me i am college prepping and by that i mean consuming large quantities of ramen noodels",
	"moo",
	"i made $6 dollars today",
	"boogers are like oil filters in a ford. constantly leaky and full of shit",
	"I don't speak mexican sarah",
	"Linux is extraordinarily user friendly its just picky about who it's friends are",
	"@lastpass? is that a type of laxative?",
	"yo momma so fat she can file share conveniently very large files on a heavily fragmented disk drive",
	"yo momma so fat she couldn't be converted to ntfs",
	"Do they have mexican hippies?",
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
	"taco doritos and salsa isn't what i thought it would be. it still tastes like SHIT.",
	"anyone know what to do if you shat green? It was weird and kinda made me scared",
	"If I could poop fire that would really be a pain in the ass",
	"Hey @Nickfost_ remember that blue cupcake? I ate 4 bags of skittles so am I gonna shart the rainbow?",
	"yo @drpepper thanks for your support. my heartburn and assquakes were very warming.",
	"admit it. we all have that crazy uncle who's farts sound like a fucking chainsaw.",
	"75% of the time shoving gold bars up your ass so the government can't get them works 100% of the time.",
	"well today has been shat on twice already, but i do have donuts",
	"This product brought to you in part by Microsoft PowerPorn",
	"well i just peed brown, will i poop yellow?",
	"thanks to a previous tweet i may have burns on my ass now",
	"why does a MS-DOS install floppy always break but a floppy with some 1990s bloatware work for eternity?",
	"i just #farted and it smelled so bad the mold on this cheese beside me died.",
	"I have made a noteworthy movement in the downstairs congress",
	
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
