<?php
$url = 'https://wheredoivote.co.uk/api/beta/postcode/SW1A1AA.json';
$data = file_get_contents($url);
$councils = json_decode($data, true);

foreach ($councils as $council) {
	echo $council['name'];
	echo $council['address'];
	echo $council['postcode'];
	echo $council['website'];
	echo $council['email'];
	echo $council['phone'];
}	
?>