<?php
    require_once("database.php");

    $db = new Database();
    echo $db->isConnected() ? "DB Connected" . PHP_EOL : "DB not Connected" . PHP_EOL;

    //if not connected to DB then through an error
    if(!$db->isConnected()){
        echo $db->getError();
        die('Unable to Connect to DB');
    }
    //set query
    $db->query("SELECT * FROM tbl_oo_test");
    //execute resultset
    var_dump( $db->resultSet());

    //count the row number
    echo "Rows: " . $db->rowCount();
    //fetch single row
    var_dump( $db->single());

    //fetch specific record
    $db->query("SELECT * FROM tbl_oo_test where id = :id");
    $db->bind(':id', 2); //will show the number 2 row
    var_dump($db->single());


?>