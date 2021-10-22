<?php
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
