<?php

declare(strict_types=1);

require_once __DIR__ . '/classes/managers/class_system_manager.php';

$manager = new SystemManager();

$choice = -1;

while ($choice !== 0) {
    $manager->ui->main_menu();

    $choice = $manager->io->ask("Elige qué acción deseas realizar:", InputType::INT, $manager->ui);

    switch ($choice) {
        case 1:
            $manager->create_package();
            break;

        case 2:
            $manager->create_deliveryman();
            break;

        case 3:
            $manager->assign_packet_to_dman();
            break;

        case 4:
            $manager->mark_packet_as_delivered();
            break;

        case 5:
            $manager->general_view();
            break;

        case 0:
            $manager->ui->print("Has salido del programa");
            break;

        default:
            $manager->ui->print("Opción no válida.");
    }
}
