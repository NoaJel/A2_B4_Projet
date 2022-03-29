<?php
require_once "database_connection.php";
if (!empty($_GET['action']) and $_GET["action"] == "delete")
{
    $param = $_GET["company_name"];
    $request = $connect->prepare("SELECT * FROM company NATURAL JOIN address WHERE company.name=:name");
    $request->execute(array('name'=>$param));
    $row = $request->fetch();
   
    $request2 = $connect->prepare("DELETE FROM address WHERE company_id = :company_id");
    $request2->execute(array('company_id'=>$row['company_id']));
    $request3 = $connect->prepare("DELETE FROM company WHERE company_id = :company_id");
    $request3->execute(array('company_id'=>$row['company_id']));
    header("location:./entity-management.php");
}
?>