<?php
echo "<h1>Server config</h1>";
$commandsText = file_get_contents("http://169.254.169.254/latest/meta-data");
$commands  = explode(PHP_EOL, $commandsText);
echo "<ul>";
foreach($commands as $command){
	$response = file_get_contents("http://169.254.169.254/latest/meta-data/$command");
	echo "<li><b>$command</b>: ";
	echo "$response</li>";
}
echo "</ul>"
?>