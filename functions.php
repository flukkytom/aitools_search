<?php
### Olutola Obembe
###
################
function sendPostRequest($url, $postData) {
  $ch = curl_init();

  // Set the URL and other options
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  // Execute the POST request
  $response = curl_exec($ch);

  // Check for any cURL errors
  if (curl_errno($ch)) {
      echo 'Error: ' . curl_error($ch);
  }

  // Close cURL resource
  curl_close($ch);

  // Decode the JSON response
  $responseData = json_decode($response, true);

  return $responseData;
}


function getRecentSearch($recent_api) {
  $url = $recent_api; // Replace with your endpoint URL
  $postData = "";
  $responseData = sendPostRequest($url, $postData);

  return $responseData;
}

function getCategoryGroup($category_api) {
  $url = $category_api; // Replace with your endpoint URL
  $postData = "";
  $responseData = sendPostRequest($url, $postData);

  return $responseData;
}

?>
