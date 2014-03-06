<?php

  function postcode_to_coords($postcode='') {
    $_SESSION['current_postcode'] = $postcode;
    //Contact the google maps api to get the lat & lng from the postcode
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($postcode) . '&sensor=false';
    $json = json_decode(file_get_contents($url));
    return array(
        'lat' => $json->results[0]->geometry->location->lat,
        'lng' => $json->results[0]->geometry->location->lng
    );
  }
  
?>
