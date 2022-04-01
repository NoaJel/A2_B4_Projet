<?php
require_once "database_connection.php";

if (
    isset($_GET['id'])
    ) {
        $request2 = $connect->prepare(<<<EOD
        DELETE
        FROM wish 
        WHERE id_user = :id_user
        AND internship_id = :internship_id
        EOD
    );
    $request2->execute(array('id_user' => $_COOKIE['type'], 'internship_id' => $_GET['id']));
}

/* $request = $connect->prepare(<<<EOD
    SELECT *
    FROM address 
    NATURAL JOIN company 
    NATURAL JOIN internship 
    NATURAL JOIN wish
    WHERE id_user = :id_user
    EOD
);
$request->execute(array('id_user' => $_COOKIE['type'])); */
