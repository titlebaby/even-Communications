 <?php

    /* Create new queue object */
    $queue = new ZMQSocket(new ZMQContext(), ZMQ::SOCKET_REQ, "MySock1");

    /* Connect to an endpoint */
    $queue->connect("tcp://127.0.0.1:5555");

    /* send and receive */
    var_dump($queue->send("hello there, using socket 1")->recv());

    ?>