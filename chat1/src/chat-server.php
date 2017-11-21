<?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chat;

require dirname(__DIR__) . '/vendor/autoload.php';
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    8080
);

/*
cmd 简单的控制台操作
$ php bin/chat-server.php
$ telnet localhost 8080
$ telnet localhost 8080
 */
// $server = IoServer::factory(
//    new Chat(),
//    8080
// );
$server->run();

?>