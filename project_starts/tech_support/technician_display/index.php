<?php date_default_timezone_set('America/New_York');?>
<?php include "../view/header.php";?>
<?php
require('../model/database.php');
require ('../model/technician_database.php');

// require('../model/product_db.php');

$action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_technicians';
    }
}

if($action == 'list_technicians'){
        $techs = get_all_technicians();
    include('technicians_display.php');
}


else if ($action == 'delete_technician') {
    $techID = filter_input(INPUT_POST, 'techID');
    if ($techID == NULL || $techID == FALSE) {
        $error = "Missing or incorrect techID.";
        include('../errors/error.php');
    } else {
        delete_technician($techID);
        $action = NULL;
        header("Location: .");

    }
}

?>
<?php include "../view/footer.php"?>