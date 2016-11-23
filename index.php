<?php
require("include.php");
starthtml();
html("<script src='/js/index.js'></script>");
html("<div class=\"alert\">");
html("	<p>");
if(isset($_GET["specific"]) && $_GET["specific"] !== ""){
	html("		<strong id='quote'>".allquotes($_GET["specific"])."</strong>");
} elseif(isset($_GET["all"])){
	$allquotes = "";
	foreach (allquotes() as $quote) {
		$allquotes .= $quote."<br/>";
	}
	html("		<strong id='quote'>".$allquotes."</strong>");
} else {
	html("		<strong id='quote'>".getquote()."</strong>");
}
html("	</p>");
html("</div>");
html("<br />");
html("<div class=\"text-right\">");
html("	<div id='quotebtn' onclick=\"getquote()\" class=\"btn btn-large\" type=\"button\">NEXT</div>");
html("</div>");
endpage();
?>