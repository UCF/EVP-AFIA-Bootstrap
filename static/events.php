<?php

$events_url   = "https://events.ucf.edu";
$query_string = http_build_query($_GET);
$events_data  = wp_remote_retrieve_body( wp_remote_get( $events_url.'?'.$query_string ) );
print $events_data;

?>
