<?php
spl_autoload_register(function ($class) {
    $classFilename = __DIR__ . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR
        . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    require $classFilename;
});

$eventIds = [14, 21, 587, 82];

foreach ($eventIds as $eventId) {
    $obj = \Tickets\Factory::createReserveObject($eventId);
    $obj->reserving();
    echo '--------------------' . PHP_EOL;
}
