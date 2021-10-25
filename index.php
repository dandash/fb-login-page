<?php
session_start();
require_once('miniRouter.php');
//require_once('filters.php');
include_once './dbstalker/core/stalker_configuration.core.php';
include_once './dbstalker/core/stalker_registerar.core.php';
include_once './dbstalker/core/stalker_schema.core.php';
include_once './dbstalker/core/stalker_validator.core.php';
include_once './dbstalker/core/stalker_database.core.php';
include_once './dbstalker/core/stalker_information_schema.core.php';
include_once './dbstalker/core/stalker_query.core.php';
include_once './dbstalker/core/stalker_migrator.core.php';
include_once './dbstalker/core/stalker_backup.core.php';
include_once './dbstalker/core/stalker_table.core.php';
include_once './dbstalker/core/stalker_seed.core.php';
include_once './dbstalker/core/stalker_seeder.core.php';
include_once './dbstalker/core/stalker_view.core.php';
include_once './classes/server_control.php';
$control = new Server_Control();






foreach (glob("./dbstalker/tables/*.table.php") as $file) {
    require_once $file;
}
foreach (glob("../dbstalker/views/*.view.php") as $file) {
    require_once $file;
}

foreach (glob("../dbstalker/seeds/*.seed.php") as $file) {
    require_once $file;
}

Stalker_Registerar::auto_register();
if (Stalker_Migrator::need_migration()) {
    Stalker_Migrator::migrate();
}

$router = new miniRouter();

$router->group("starkid/fb-login-page", function ($router) {

    $router->get('/', function () {
        include 'fb_index.php';
    });
    $router->get('/home', function () {
        include './classes/home.php';
    });
    $router->post(
        '/login',
        [new Server_Control(), 'login'],
        //"isLoggedIn"
    );

    $router->post('/signup', [new Server_Control(), 'signup']);
    $router->post('/logout', [new Server_Control(), 'logout']);
});
$router->fallback(function () {
    echo "Page Not Found";
});


$router->start_routing();
