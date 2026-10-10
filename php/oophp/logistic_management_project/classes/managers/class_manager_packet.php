<?php

declare(strict_types=1);

require_once __DIR__ . '/../objects/class_packet.php';

class ManagerPacket {
    private array $packets = [];

    public function create_package(string $code, string $destination): ?Packet {
        if ($this->get_packet_by_code($code) !== null) {
            return null;
        }
        $pck = new Packet($code, $destination);
        $this->packets[] = $pck;
        return $pck;
    }

    public function get_packet_by_code(string $code): ?Packet {
        foreach ($this->packets as $p) {
            if ($p->code === $code) {
                return $p;
            }
        }
        return null;
    }

    public function list_packets(): array {
        $txt = [];
        foreach ($this->packets as $p) {
            $txt[] = "Código: " . $p->code
                . " | Destino: " . $p->destination
                . " | Estado: " . $p->get_state()->label();
        }
        return $txt;
    }

    public function mark_packet_as_delivered(string $code): bool {
        $pck = $this->get_packet_by_code($code);
        return $pck !== null && $pck->mark_as_delivered();
    }
}
