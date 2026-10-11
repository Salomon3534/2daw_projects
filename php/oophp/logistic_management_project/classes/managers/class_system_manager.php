<?php

declare(strict_types=1);

require_once __DIR__ . '/../input_output/class_input.php';
require_once __DIR__ . '/../input_output/class_ui.php';
require_once __DIR__ . '/class_manager_packet.php';
require_once __DIR__ . '/class_manager_dman.php';

class SystemManager {
    public SystemUi $ui;
    public SystemIO $io;

    public ManagerPacket $mg_packets;
    public ManagerDman $mg_dmans;

    public function __construct() {
        $this->ui = new SystemUi();
        $this->io = new SystemIO();

        $this->mg_packets = new ManagerPacket();
        $this->mg_dmans = new ManagerDman();
    }

    public function create_package(): void {
        $this->ui->print("REGISTRAR PAQUETE");

        $p_cod = $this->io->ask("Código del paquete:", InputType::STRING, $this->ui);
        $p_dir = $this->io->ask("Dirección de destino:", InputType::STRING, $this->ui);

        if ($this->mg_packets->create_package($p_cod, $p_dir) === null) {
            $this->ui->print("Ya existe un paquete con el código $p_cod.");
            return;
        }
        $this->ui->print("Paquete $p_cod registrado (Pendiente).");
    }

    public function create_deliveryman(): void {
        $this->ui->print("REGISTRAR REPARTIDOR");

        $dm_id = $this->io->ask("ID del repartidor:", InputType::INT, $this->ui);
        $dm_name = $this->io->ask("Nombre del repartidor:", InputType::STRING, $this->ui);

        if ($this->mg_dmans->create_dman($dm_id, $dm_name) === null) {
            $this->ui->print("Ya existe un repartidor con el ID $dm_id.");
            return;
        }
        $this->ui->print("Repartidor $dm_name registrado con ID $dm_id.");
    }

    public function assign_packet_to_dman(): void {
        $this->ui->print("ASIGNAR PAQUETE A REPARTIDOR");

        $dm_id = $this->io->ask("ID del repartidor:", InputType::INT, $this->ui);
        if ($this->mg_dmans->get_dman_by_id($dm_id) === null) {
            $this->ui->print("No existe ningún repartidor con el ID $dm_id.");
            return;
        }

        $p_cod = $this->io->ask("Código del paquete:", InputType::STRING, $this->ui);
        $pck = $this->mg_packets->get_packet_by_code($p_cod);
        if ($pck === null) {
            $this->ui->print("No existe ningún paquete con el código $p_cod.");
            return;
        }

        if (!$this->mg_dmans->assign_packet_to_dman($pck, $dm_id)) {
            $this->ui->print("El paquete $p_cod no está pendiente, no se puede asignar.");
            return;
        }
        $this->ui->print("Paquete $p_cod asignado al repartidor $dm_id. Estado: En ruta.");
    }

    public function mark_packet_as_delivered(): void {
        $this->ui->print("MARCAR PAQUETE COMO ENTREGADO");

        $p_cod = $this->io->ask("Código del paquete:", InputType::STRING, $this->ui);
        if ($this->mg_packets->get_packet_by_code($p_cod) === null) {
            $this->ui->print("No existe ningún paquete con el código $p_cod.");
            return;
        }

        if (!$this->mg_packets->mark_packet_as_delivered($p_cod)) {
            $this->ui->print("El paquete $p_cod no está en ruta, no se puede marcar como entregado.");
            return;
        }
        $this->ui->print("Paquete $p_cod marcado como entregado.");
    }

    public function general_view(): void {
        $this->ui->general_view($this->mg_dmans, $this->mg_packets);
    }
}
