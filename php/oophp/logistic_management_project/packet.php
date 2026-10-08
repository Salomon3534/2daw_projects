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

    function assign_to_route() {
        if ($this->status == PacketStatus::PENDING) {
            $this->status = PacketStatus::IN_ROUTE;
        }
    }
    
    function mark_as_delivered() {
        if ($this->status == PacketStatus::IN_ROUTE) {
            $this->status = PacketStatus::DELIVERED;
        }
    }
    
    function get_state() {
        return $this->status;
    }
}



?>