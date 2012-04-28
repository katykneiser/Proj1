<!DOCTYPE html>
<html>
<head>
	<title>Katy Kneiser</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
<div id="Header"> 
<h1>Katy Kneiser</h1>
</div>

<?php

//send curl request and echo to page
$ch = curl_init("http://www.euronext.com/trader/summarizedmarketderivatives/summarizedmarketderivatives-2564-EN.html?euronextCode=I-LON-OPT");

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$html = curl_exec($ch);
curl_close($ch);

echo $html;


/*$fp = fopen("frontsRedsfirst.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);

curl_setopt($ch, CURLOPT_POST, $forminputs);


fclose($fp);

*/

?>

</body>
</html> 
