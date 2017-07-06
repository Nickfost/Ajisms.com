<?php
require("include.php");
starthtml();
html("<script>");
html("function getquote(el){");
html('	console.log("getting quote");');
html("	var xhr = new XMLHttpRequest();");
html("	xhr.open('GET', '/quote.php');");
html("	xhr.onload = function() {");
html("		if (xhr.status === 200) {");
html('			document.querySelector("#quote").innerHTML = xhr.responseText;');
html("		}");
html("		else {");
html("			console.log('Request failed.  Returned status of ' + xhr.status);");
html("		}");
html("	};");
html("	xhr.send();");
html("}");
html("</script>"); //*/

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
