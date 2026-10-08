<?php

enum PacketStatus {
    case PENDING;
    case IN_ROUTE;
    case DELIVERED;
}

class Packet {
    public function __construct(
        public readonly string $code,
        public readonly string $destination,
        public PacketStatus $status = PacketStatus::PENDING
    ) {}
}

function assign_to_route()

?>