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

    private function get_packet_by_id(int $id) {
        foreach ($this->packets as $p) {
            if ($p->id === $id) {
                return $p;
            }
        }
        return null;
    }

    public function list_packets() {
        $txt = [];
        foreach ($this->packets as $p) {
            $line = "ID: " . $p->id . " Direction: " . $p->direction;
            $txt[] = $line;
        }
        return $txt;
    }

    public function mark_packet_as_delivered(int $pid) {
        return $this->get_packet_by_id($pid)->mark_as_delivered();
    }
}
?>