<?php

declare(strict_types=1);

require_once __DIR__ . '/class_packet.php';

class Deliveryman {
    private array $packets = [];

    public function __construct(
        public readonly int $id,
        public readonly string $name
    ) {}

    public function set_package(Packet $pck): bool {
        if (!$pck->assign_to_route()) {
            return false;
        }
        $this->packets[] = $pck;
        return true;
    }

    public function get_packages(): array {
        return $this->packets;
    }
}
