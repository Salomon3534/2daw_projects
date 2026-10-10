<?php

declare(strict_types=1);

require_once __DIR__ . '/../objects/class_deliveryman.php';

class ManagerDman {
    private array $dmans = [];

    public function create_dman(int $id, string $name): ?Deliveryman {
        if ($this->get_dman_by_id($id) !== null) {
            return null;
        }
        $dman = new Deliveryman($id, $name);
        $this->dmans[] = $dman;
        return $dman;
    }

    public function get_dman_by_id(int $id): ?Deliveryman {
        foreach ($this->dmans as $dman) {
            if ($dman->id === $id) {
                return $dman;
            }
        }
        return null;
    }

    public function list_dmans(): array {
        $txt = [];
        foreach ($this->dmans as $dman) {
            $txt[] = "ID: " . $dman->id . " | Nombre: " . $dman->name;

            $packages = $dman->get_packages();
            if ($packages === []) {
                $txt[] = "    (sin paquetes asignados)";
                continue;
            }
            foreach ($packages as $p) {
                $txt[] = "    - " . $p->code
                    . " -> " . $p->destination
                    . " [" . $p->get_state()->label() . "]";
            }
        }
        return $txt;
    }

    public function assign_packet_to_dman(Packet $pck, int $dman_id): bool {
        $dman = $this->get_dman_by_id($dman_id);
        return $dman !== null && $dman->set_package($pck);
    }
}
