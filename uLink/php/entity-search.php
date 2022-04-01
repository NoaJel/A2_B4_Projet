<?php
    $increment = 1;
    require_once "./php/database_connection.php";
    
    if (isset($_POST["search"])) {
        if (isset($_POST["all"])) {
            $search = $_POST['search'];
            $param = "%$search%";
            $request = $connect->prepare("SELECT * FROM company WHERE name LIKE :company_name LIMIT 3");
            $request2 = $connect->prepare("SELECT * FROM user WHERE name LIKE :name OR first_name LIKE :first_name LIMIT 3");
            $request->execute(array('company_name' =>  $param));
            $request2->execute(array('name' => $param,'first_name' => $param));
        }
        if (isset($_POST["company"])) {
            echo "company";
            $search = $_POST['search'];
            $param = "%$search%";
            echo $param;
            $request = $connect->prepare("SELECT * FROM company WHERE name LIKE :company_name LIMIT 5");
            $request->execute(array('company_name' => $param));
        } elseif (isset($_POST["pilot"])) {
            echo "pilot";
            $search = $_POST['search'];
            $param = "%$search%";
            $request = $connect->prepare("SELECT * FROM user NATURAL JOIN be NATURAL JOIN roles WHERE roles = 'pilot' AND (name LIKE :name OR first_name LIKE :first_name) LIMIT 5");
            $request->execute(array('name' => $param,'first_name' => $param));
        } elseif (isset($_POST["delegate"])) {
            echo "delegate";
            $search = $_POST['search'];
            $param = "%$search%";
            $request = $connect->prepare("SELECT * FROM user NATURAL JOIN be NATURAL JOIN roles WHERE roles = 'delegate' AND (name LIKE :name OR first_name LIKE :first_name) LIMIT 5");
            $request->execute(array('name' => $param,'first_name' => $param));
        } elseif (isset($_POST["student"])) {
            echo "student";
            $search = $_POST['search'];
            $param = "%$search%";
            $request = $connect->prepare("SELECT * FROM user NATURAL JOIN be NATURAL JOIN roles WHERE roles = 'student' AND (name LIKE :name OR first_name LIKE :first_name) LIMIT 5");
            $request->execute(array('name' => $param,'first_name' => $param));
        } else {
            echo "no result";
        }
    }