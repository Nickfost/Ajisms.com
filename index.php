<?php
require("include.php");
starthtml();
html("<div class=\"alert\">");
html("	<p>");
html("		<strong>".getquote()."</strong>");
html("	</p>");
html("</div>");
html("<br />");
html("<div class=\"text-right\">");
html("	<a href=\"/\"><button class=\"btn btn-large\" type=\"button\">NEXT</button></a>");
html("</div>");
endpage();
?>