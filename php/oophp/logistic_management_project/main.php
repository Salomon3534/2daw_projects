
<?php
include_once 'classes/managers/class_main_manager.php';
include_once 'classes/input_output/class_ui.php';
include_once 'classes/input_output/class_input.php';

$manager = new SystemManager();
$ui = new SystemUi();
$io = new SystemIO();

$choice = "";

while ($choice !== "x") {
    $ui->general_view();

    $choice = "";

    while (!in_array($choice, ["1", "2", "3", "4", "5", "x"], true)) {
        $choice = $io->ask("Elige qué acción deseas realizar: ");
    }

    switch ($choice) {
        case "1":
            // TODO: Ejecutar la acción 1.
            break;

        case "2":
            // TODO: Ejecutar la acción 2.
            break;

        case "3":
            // TODO: Ejecutar la acción 3.
            break;

        case "4":
            // TODO: Ejecutar la acción 4.
            break;

        case "5":
            // TODO: Ejecutar la acción 5.
            break;

        case "x":
            echo "Saliendo del programa..." . PHP_EOL;
            break;
    }
}
?>