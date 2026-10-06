<?php
include_once 'delivery_driver.php';
include_once 'packet.php';

class System {
    public function __construct(
        public array $all_packets,
        public array $all_delivery_drivers
    ) {}
}

$system = new System();

function assign_packet_to_deliveryman(Packet $pck, DeliveryDriver $dd) {
    $dd -> $packets[] = $pck;
    $pck -> $status = PacketStatus::IN_ROUTE;
}

function packet_delivered(Packet $pck) {
    if ($pck -> $status === PacketStatus::IN_ROUTE) {
        $pck->$status = PacketStatus::DELIVERED;
    }
}


function general_view() {}

function general_view_deliverymans() {}
function general_view_packets() {}

?>