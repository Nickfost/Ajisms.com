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
html("	<div onclick=\"location.href='/';\" class=\"btn btn-large\" type=\"button\">NEXT</div>");
html("</div>");
endpage();
?>