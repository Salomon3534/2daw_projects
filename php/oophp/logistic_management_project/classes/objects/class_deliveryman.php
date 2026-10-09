<?php

class Deliveryman {
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        private array $packets_codes = []
    ) {}

    function set_package(packet $pck) {
        $packets_codes[] = $pck->code;
        $pck ->assign_to_route();
    }

    function get_packages() {
        return $this->packets_codes;
    }
}

?>