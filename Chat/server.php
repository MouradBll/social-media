<?php
// set some variables
$host = "127.0.0.1";
$port = 5555;
// don't timeout!
set_time_limit(0);
// create socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
// bind socket to port
$result = socket_bind($socket, $host, $port) or die("Could not bind to socket\n");
// start listening for connections
$result = socket_listen($socket, 3) or die("Could not set up socket listener\n");

do {
// accept incoming connections
// spawn another socket to handle communicationphp
    $spawn = socket_accept($socket) or die("Could not accept incoming connection\n");

// read client input
    $input = socket_read($spawn, 1024) or die("Could not read input\n");
// clean up input string
    $input = trim($input);
    echo "Client Message : " . $input."\n";
// reverse client input and send back
    //$output = strrev($input) . "\n";
    $output = readline("Reponse ");
    readline_add_history($output);
    socket_write($spawn, $output, strlen($output)) or die("Could not write output\n");

}while(true);
// close sockets
socket_close($spawn);
socket_close($socket);