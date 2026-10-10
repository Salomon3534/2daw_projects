<?php

declare(strict_types=1);

enum PacketStatus {
    case PENDING;
    case IN_ROUTE;
    case DELIVERED;

    public function label(): string {
        return match ($this) {
            self::PENDING => 'Pendiente',
            self::IN_ROUTE => 'En ruta',
            self::DELIVERED => 'Entregado',
        };
    }
}

class Packet {
    private PacketStatus $status = PacketStatus::PENDING;

    public function __construct(
        public readonly string $code,
        public readonly string $destination
    ) {}

    public function assign_to_route(): bool {
        if ($this->status !== PacketStatus::PENDING) {
            return false;
        }
        $this->status = PacketStatus::IN_ROUTE;
        return true;
    }

    public function mark_as_delivered(): bool {
        if ($this->status !== PacketStatus::IN_ROUTE) {
            return false;
        }
        $this->status = PacketStatus::DELIVERED;
        return true;
    }

    public function get_state(): PacketStatus {
        return $this->status;
    }
}
