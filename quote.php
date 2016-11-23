<?php
require("include.php");
if(isset($_GET["all"])){
	foreach (allquotes() as $quote) {
		echo $quote."<br/>";
	}
} elseif(isset($_GET["specific"])){
	print allquotes($_GET["specific"]);
} else {
	print getquote();
}
?>