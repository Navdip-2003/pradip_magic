
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment_requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,array("X-Api-Key:test_d97f4f1609f4082ebe018738d2986caa",
										"X-Api-Token:test_eb9a71f87d4345a5ddcb62c10ed1a430"));

$payload = Array(
  'purpose' => 'FIFA 16',
  'amount' => '2',
  'buyer_name' => 'pradeep davara',
  'email' => 'davarapradeep@gmail.com',
  'phone' => '7567159902',
  'redirect_url' => 'http://www.example.com/redirect/',
  'send_email' => 'True',
  'allow_repeated_payments' => 'False',
);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response = json_decode($response);

	print_r($response);
	echo '<pre>'
?>