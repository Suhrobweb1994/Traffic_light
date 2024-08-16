<?php
function processTrafficData($trafficData) {
    $congestedAreas = [];

    // Example: Loop through the traffic data to find congested areas
    foreach ($trafficData['results'] as $data) {
        if ($data['congestion_level'] === 'heavy') {
            $congestedAreas[] = [
                'location' => $data['location'],
                'delay' => $data['delay'],
                'description' => $data['description']
            ];
        }
    }

    return $congestedAreas;
}

// Example usage
$congestedAreas = processTrafficData($trafficData);

foreach ($congestedAreas as $area) {
    echo "Location: " . $area['location'] . "\n";
    echo "Delay: " . $area['delay'] . " minutes\n";
    echo "Description: " . $area['description'] . "\n\n";
}
?>
