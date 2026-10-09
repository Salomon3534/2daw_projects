<?php
include_once 'class_system_io.php';
include_once 'class_system_ui.php';

include_once 'class_manager_packet.php';
include_once 'class_manager_dman.php';

class SystemManager {
    public SystemUi $ui;
    public SystemIO $io;

    public ManagerPacket $mg_packets;
    public ManagerDman $mg_dmans;

    public function __construct() {
        $ui = new SystemUi();
        $io = new SystemIO();

        $mg_packets = new ManagerPacket();
        $mg_dmans = new ManagerDman();
    }

    public function create_package() {
        $this->ui->print("CREATE A PACKAGE");

        $p_cod = $this->io->ask("Package code:");
        $p_dir = $this->io->ask("Package direction:");

        $this->mg_packets->create_package($p_cod, $p_dir);
    }

    public function create_deliveryman() {
        $this->ui->print("CREATE A DELIVERYMAN");

        $dm_id = $this->io->ask("Deliveryman id:");
        $dm_dir = $this->io->ask("Deliveryman name:");

        $this->mg_dmans->create_dman($dm_id, $dm_dir);
    }

    public function assign_packet_to_dman() {
        $this->ui->print("ASSIGN A PACKET TO A DELIVERY DRIVER");

    }
}
?>