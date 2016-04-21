<?php 


function curlBASE($search){
	
	$ch = curl_init();
	curl_setopt($ch , CURLOPT_URL, 'http://ajax.googleapis.com/ajax/services/search/web?v=1.0&hl=pt-br&cr=countryBR&'.$search);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$json = curl_exec($ch);
	$body = json_decode($json);
	$array = $body->responseData->results;
	curl_close($ch);

	return $array;
}

	if (isset($_GET['q'])) {
		$array = curlBASE(http_build_query([ 'q' => $_GET['q'] ]));
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="get">
	<input name="q" type="text"></input>
	<button type="submit" >send</button>
</form>

<ul>

<?php 
	if (isset($array)) {
		foreach ($array as $key) {
			echo "<li><a href='$key->url'>$key->title</a><p>$key->content</p></li>";
		}
	}
?>
 </ul>
</body>
</html>