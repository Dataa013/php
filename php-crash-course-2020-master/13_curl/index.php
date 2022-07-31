<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
 $resurce = curl_init();
 curl_setopt($resurce, CURLOPT_URL, $url);
 curl_setopt($resurce, CURLOPT_RETURNTRANSFER, true);
 $result = curl_exec($resurce);
 echo '<pre>';
    print_r($result);
echo '</pre>';
// Get response status code

// set_opt_array

// Post request