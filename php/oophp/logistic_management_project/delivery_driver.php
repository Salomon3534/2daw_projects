<?php

class DeliveryDriver {
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        private array $packets = []
    ) {}

    function set_package(packet $pck) {
        $packets[] = $pck;
        $pck ->assign_to_route();
    }

    function get_packages() {
        return $this->packets;
    }
}



?>