<?php

    
$name="";
$username="";
$pass="";


    $name=$_POST['name'];
    $username=$_POST['username'];
    $pass=$_POST['password'];
    


echo $name;
echo"<br>".$username;
echo"<br>".$pass;

$base_url = 'http://localhost:8080/ADMINWEBSERVICES/v1/createstudent';
$query_string = '';
$params = array (
'name' => $name,
'username' => $username,
'password' => $pass
);
$query_string = http_build_query($params);
$url = $base_url . '?' . $query_string;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
$response = curl_exec($ch);
curl_close($ch);
$result=  json_decode($response);
echo $response;
?>