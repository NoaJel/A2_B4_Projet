<?php
require_once "database_connection.php";
if (!empty($_GET['action']) and $_GET["action"] == "delete")
{
    if (!empty($_GET['company_name']))
    {
        echo "del company";
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
    elseif (!empty($_GET['user_id']))
    {
        echo "del user";
        $request = $connect->prepare("DELETE FROM be WHERE id_user = :id_user");
        $request->execute(array('id_user'=>$_GET["user_id"]));
        $request = $connect->prepare("DELETE FROM user WHERE id_user = :id_user");
        $request->execute(array('id_user'=>$_GET["user_id"]));
        $request = $connect->prepare("DELETE FROM possess WHERE id_user = :id_user");
        $request->execute(array('id_user'=>$_GET["user_id"]));
        $request = $connect->prepare("DELETE FROM link_to WHERE id_user = :id_user");
        $request->execute(array('id_user'=>$_GET["user_id"]));
        header("location:./entity-management.php");
    }
}
?>