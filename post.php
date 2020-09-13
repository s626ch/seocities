<?php
$postName = htmlspecialchars($_POST["name"]);
$postText = htmlspecialchars($_POST["post"]);
mkdir($postName);
chdir($postName);
file_put_contents("index.html", $postText);
echo("website is created at https://funshitposting.xyz/seocities/$postName")
?>