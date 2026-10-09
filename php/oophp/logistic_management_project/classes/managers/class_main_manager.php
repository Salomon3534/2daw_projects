<?php
include_once 'class_system_io.php';
include_once 'class_system_ui.php';

include_once 'class_manager_packet.php';
include_once 'class_manager_dman.php';

class SystemManager {
    private SystemUi $ui;
    private SystemIO $io;

    private $mg_packets;
    private $mg_dmans;

    public function __construct() {
        $this->ui = new SystemUi();
        $this->io = new SystemIO();

        $this->mg_packets = new ManagerPacket();
        $this->mg_dmans = new ManagerDman();
    }

    public function create_package() {
        $this->ui->print("CREATE A PACKAGE");

        $p_cod = $this->io->ask("Package code:");
        $p_dir = $this->io->ask("Package direction:");

        $new_pck = new Packet($p_cod, $p_dir);
    }
}
?>