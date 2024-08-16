<?php
function getTrafficData($apiUrl, $apiKey, $location) {
    $url = $apiUrl . "?location=" . urlencode($location) . "&key=" . $apiKey;

    // Initialize a CURL session.
    $ch = curl_init();

    // Return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Set the URL to fetch
    curl_setopt($ch, CURLOPT_URL, $url);

    // Execute the request
    $result = curl_exec($ch);

    // Close the CURL session
    curl_close($ch);

    return json_decode($result, true);
}

// Example usage
$apiUrl = "https://maps.googleapis.com/maps/api/traffic"; // Example API URL
$apiKey = "YOUR_API_KEY"; // Your API key
$location = "New York, NY"; // Location to check

$trafficData = getTrafficData($apiUrl, $apiKey, $location);

print_r($trafficData); // Output the traffic data
?>
