
<?php

include_once 'class_deliveryman.php';
include_once 'class_packet.php';

class SystemUi
{

    public function print($msg)
    {
        if (is_array($msg)) {
            foreach ($msg as $line) {
                echo $line . PHP_EOL;
            }
        } else {
            echo $msg . PHP_EOL;
        }
    }

    public function main_menu()
    {
        $this->print("");
        $this->print("MENU PRINCIPAL");
        $this->print("(1) registrar paquete");
        $this->print("(2) registrar repartidor");
        $this->print("(3) asignar paquete al repartidor");
        $this->print("(4) marcar paquete como entregado");
        $this->print("(5) listar paquetes y repartidores");
        $this->print("");
        $this->print("(x) salir");
    }

    public function general_view(ManagerDman $mdmans, ManagerPacket $mpcks)
    {
        $this->print("");
        $this->print("GENERAL VIEW OF BOTH PACKETS AND DELIVERYMANS");
        $this->print("");

        $this->general_view_deliverymans($mdmans);
        $this->general_view_packets($mpcks);
    }

    public function general_view_deliverymans(ManagerDman $dmanager)
    {
        $this->print($dmanager->list_dmans());
    }

    public function general_view_packets(ManagerPacket $pmanager)
    {
        $this->print($pmanager->list_packets());
    }
}
?>