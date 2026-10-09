<?php

include_once 'class_deliveryman.php';
class ManagerDman {
    public $dmans = [];

    public function __construct() {
        $dmans = [];
    }

    public function create_dman(string $id, string $name) {
        $dman = new Deliveryman($id, $name);

        $dmans[] = $dman;

        return $dman;
    }

    public function assign_packet_to_dman(string $packet_to_assign_id, string $dman_id) {
        $this->get_dman_by_id($dman_id)->set_packet($packet_to_assign_id);
    }

    private function get_dman_by_id(string $id) {
        foreach ($this->dmans as $dman) {
            if ($dman->get_id() === $id) {
                return $dman;
            }
        }
        return null;
    }
} 
?>