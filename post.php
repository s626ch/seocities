<?php
include "config.php";
$postName = htmlspecialchars($_POST["name"]);
$postText = htmlspecialchars($_POST["post"]);
$title = strlen($postName);
$sites = fopen('sites.html', 'a');
if ($title > 21) exit("Your site name cannot be longer than 20 characters.");
if ($postName = null || $postText = null) exit("You forgot to input on one of the fields.");
fwrite($sites, "<li><a href='$address/$postName'>$postName</a></li><br>");
mkdir($postName);
chdir($postName);
file_put_contents("index.html", $postText);
echo("website is created at $address/$postName")
?>