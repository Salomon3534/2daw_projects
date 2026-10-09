<?php

include_once 'class_packet.php';
class ManagerPacket {
    public $packets = [];

    public function __construct() {
        $packets = [];
    }

    public function create_package(string $id, string $direction) {
        $pck = new Packet($id, $direction);

        $packets[] = $pck;

        return $pck;
    }
}
?>