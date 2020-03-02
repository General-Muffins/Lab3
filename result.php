<?php

require_once("Template.php");

$page = new Template("Home");
$page->addHeadElement("<script src='hello.js'></script>");
$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Results</h1>\n";


if (isset($_POST['email'])){
	// Validate e-mail
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		echo("$email is a valid email address");
	} else {
		echo("Not a valid email address");
	}
}

print "<br>";

if(isset($_POST['number'])){
	// Validate number
	if (filter_var($_POST['number'], FILTER_VALIDATE_INT)) {
		$number = filter_var($_POST['number'], FILTER_SANITIZE_NUMBER_INT);
		echo("$number is a valid number");
	} else {
		echo("Not a valid number");
	}
}

print "<br>";

if(isset($_POST['website'])){
	// Validate URL
	if (filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
		$website = filter_var($_POST['website'], FILTER_SANITIZE_URL);
		echo("$website is a valid website");
	} else {
		echo("Not a valid website");
	}
}


print $page->getBottomSection();