<?php
function k_to_f($temp) {
    if ( !is_numeric($temp) ) { return false; }
    return round((($temp - 273.15) * 1.8) + 32);
}

function k_to_c($temp) {
	if ( !is_numeric($temp) ) { return false; }
	return round(($temp - 273.15));
}

if(isset($_POST['submit'])){
	$lat = $_POST['lat'];
	$lon = $_POST['lon'];
	
	if(is_numeric($lat) and is_numeric($lon)){
		$url = "http://vibodha-laptop:8280/services/esb?lat=".$lat."&lon=".$lon;
    
		$client = curl_init($url);
    
    	curl_setopt($client,CURLOPT_RETURNTRANSFER, 1);
    	$response = curl_exec($client);
    	echo $response;
   		$result = json_decode($response);

		if ($result->Error == "Canot find the city"){
			header("Location: index.php?err=".$result->Error);
		}
		else{
			$city = $result->name;
		$country = $result->sys->country;
		$wind = $result->wind->speed; 
    	$temp = k_to_c($result->main->temp) ; 
    	$humidity = $result->main->humidity;
    	$clouds = $result->clouds->all;

    	header("Location: view.php?city=".$city."&country=".$country."&wind=".$wind."&temp=".$temp."&humidity=".$humidity."&clouds=".$clouds); 
		}
		 		
	}

	else{
		header("Location: index.php?id=1");
	}
	
}
?>
 