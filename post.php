<?php
include "config.php";
$postName = htmlspecialchars($_POST["name"]);
$postText = htmlspecialchars($_POST["post"]);
$sites = fopen('sites.html', 'a');
fwrite($sites, "<a href='$address/$postName'>$address/$postName</a><br>");
mkdir($postName);
chdir($postName);
file_put_contents("index.html", $postText);
echo("website is created at $address/$postName")
?>