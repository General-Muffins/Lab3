<?php

require_once("Template.php");

$page = new Template("form");
$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Please fill out the following form.</h1>\n";


print "<form method='post' action='result.php'>  
			E-mail: <input type='text' name='email'>
			<span class='error'>*</span>
		<br><br>
			Number: <input type='text' name='number'>
			<span class='error'></span>
		<br><br>
			Website: <input type='text' name='website'>
			<span class='error'></span>
		<br><br>
		<input type='submit' name='submit' value='Submit'>  
		</form>";


print $page->getBottomSection();