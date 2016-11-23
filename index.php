<?php
require("include.php");
starthtml();
html("<script src='/js/index.js'></script>");
html("<div class=\"alert\">");
html("	<p>");
html("		<strong id='quote'>".getquote()."</strong>");
html("	</p>");
html("</div>");
html("<br />");
html("<div class=\"text-right\">");
html("	<div id='quotebtn' onclick=\"getquote()\" class=\"btn btn-large\" type=\"button\">NEXT</div>");
html("</div>");
endpage();
?>