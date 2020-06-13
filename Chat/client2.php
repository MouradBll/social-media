<?php
?>

<html>
    <body>
        <div align="center">
            <form method="POST" action="">
                <label for="message"> Entrez </label>
                <input type="text" name="textclient">
                <input type="submit" name="send">
                <?php
                    $host    = "127.0.0.1";
                    $port    = 5556;
                    $response="";
                    if(isset($_POST['send']))
                    {
                        $message=$_POST['textclient'];
                        // create socket
                        $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
                        // connect to server
                        $result = socket_connect($socket, $host, $port) or die("Could not connect to server\n");
                        // send string to server
                        socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
                        // get server response
                        $result = socket_read ($socket, 1024) or die("Could not read server response\n");
                        $result=trim($result);
                        $server= "Server send ".$result;
                        $response=$result;
                        echo $response;

                    }
                ?>
                <textarea rows="30" cols="20"> <?php echo $response;
                    ?></textarea>
            </form>
        </div>
    </body>
</html>
