<?php

    // Include bootstrap file to initialization
    require_once './src/bootstrap.php';

    // Set header as plain text
    header('Content-Type: text/plain');

    // Get blacklisted IPs as array
    $blacklist = getBlacklistAsPlain();

    // Print blacklisted IPs to screen
    echo $blacklist;