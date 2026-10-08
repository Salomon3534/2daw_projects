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


function general_view() {}

function general_view_deliverymans() {}
function general_view_packets() {}

?>