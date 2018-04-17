<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JSON-HTML</title>
</head>

<body>
<pre>

<?php
	$json = file_get_contents ( 'json.json');
	$json = json_decode ( $json, true);
	//print_r ($json);
	echo '<table border="1">
			<tr>';
	foreach ($json[0] as $key => $val )
	{
		echo '<th> ' . $key . ' </th>';
	}
	echo '</tr>';
	
	
	foreach ($json as $key => $val ){
		//print_r ($val);
		echo '<tr>';
		foreach ($json [0] as $pole => $about ){
			//echo $pole . "\n";
			echo '<td> ' . ($val [$pole]) . '</td>';
		}
		echo '</tr>';
	
	}
	echo '</table>'
	
	
	
	
	
		
		
?>

</body>
</html>