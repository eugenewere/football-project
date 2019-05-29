<?php 
  // generate access token

  $consumerKey='vnFsVbKhgHajFA1JA2DoA2Y5qo3UZGxk';
  $consumerSecret='MD6Di6y8nTJbyDIs';
 
  $headers =["Content_Type:application/json; charset=utf8"];

  $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_HTTPHEADER,$headers);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

  //REMOVE HEADER
  curl_setopt($curl, CURLOPT_HEADER, FALSE);
  
  curl_setopt($curl, CURLOPT_USERPWD, $consumerKey. ':' .$consumerSecret );

  $result = curl_exec($curl);

  $status =curl_getinfo($curl, CURLINFO_HTTP_CODE);
  $result = json_decode($result);

  //get access token
  $access_token = $result->access_token;

  //print access token
  echo $access_token;
  
  curl_close($curl);








 ?>