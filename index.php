<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/db-config.php";

global $dbHost, $dbPort, $dbUser, $dbPassword, $dbName;



//$connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName, $dbPort);

$html = <<<HTML
<html>
<head>

</head>
<body>
<h1>Search Tool</h1>
<br>
<label for = "text">search text</label> 
<input type = "text" id="text" value = "roses">   &nbsp; &nbsp; &nbsp; &nbsp;
<label for = "element">choose an element</label>
<select name = "element" id = "element" > 
<option value = "repository">repository</option>
<option value = "user">user</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type = "button" value="search">
</body>
</html>
HTML;

echo $html;





