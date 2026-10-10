
<?php
include_once 'classes/managers/class_manager_manager.php';
include_once 'classes/input_output/class_ui.php';
include_once 'classes/input_output/class_input.php';

$manager = new ManagerManager();

$choice = "";

while ($choice !== "x") {
    $manager->ui->main_menu();

    $choice = "";

    while (!in_array($choice, [1,2,3,4,5, 0], true)) {
        $choice = $manager->io->ask("Elige qué acción deseas realizar:", InputType::INT, $manager->ui);
    }

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
    }
}
?>