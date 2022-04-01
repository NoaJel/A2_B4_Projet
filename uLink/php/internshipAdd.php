<?php
    include("database_connection.php");
    if(isset($_POST["insert"])) {

        $request = $connect->prepare("SELECT company_id FROM company WHERE name = :name");
        $request->execute(array('name'=>$_POST['company_name']));
        $row = $request->fetch();

        $request2 = $connect->prepare("SELECT id_address FROM address WHERE company_id = :company_id");
        $request2->execute(array('company_id'=>$row['company_id']));
        $row2 = $request2->fetch();

        $request3 = $connect->prepare("INSERT INTO internship (skills, places_available, promotions_concerned, id_address, company_id) VALUES (:skills, :places_available, :promotions_concerned, :id_address, :company_id)");
        $request3->execute(array('skills'=>$_POST['skills'], 'places_available'=>$_POST['place_available'], 'promotions_concerned'=>$_POST['promotions'], 'id_address'=>$row2['id_address'], 'company_id'=>$row['company_id']));
    }