<?php
include_once 'class_system_io.php';
include_once 'class_system_ui.php';

include_once 'class_manager_packet.php';
include_once 'class_manager_dman.php';

class ManagerManager {
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

        $this->ui->general_view_packets($this->mg_packets);

        $p_cod = $this->io->ask("Package code:", InputType::INT, $this->ui);
        $p_dir = $this->io->ask("Package direction:", InputType::STRING, $this->ui);

        $this->mg_packets->create_package($p_cod, $p_dir);
    }

    public function create_deliveryman() {
        $this->ui->print("CREATE A DELIVERYMAN");

        $dm_id = $this->io->ask("Deliveryman id:", InputType::INT, $this->ui);
        $dm_dir = $this->io->ask("Deliveryman name:", InputType::STRING, $this->ui);

        $this->mg_dmans->create_dman($dm_id, $dm_dir);
    }

    public function assign_packet_to_dman() {
        $this->ui->print("ASSIGN A PACKET TO A DELIVERY DRIVER");
        
        $this->mg_dmans->assign_packet_to_dman(
           $this->io->ask("Wich delivery driver would you like to assign the package?", InputType::INT, $this->ui),
           $this->io->ask("Wich package would you like to assign to the delivery driver?", InputType::INT, $this->ui)
        );
    }

    public function mark_packet_as_delivered() {
        $this->mg_packets->mark_packet_as_delivered($this->io->ask("Wich packet would you like to mark as delivered?", InputType::INT, $this->ui));
    }

    public function general_view() {
        $this->ui->general_view($this->mg_dmans, $this->mg_packets);
    }
}
?>