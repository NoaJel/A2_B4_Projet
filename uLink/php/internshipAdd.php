<?php
include("database_connection.php");
    if(isset($_POST["insert"]))
    {

        $request = $connect->prepare("SELECT company_id FROM company WHERE name = :name");
        $request->execute(array('name'=>$_POST['company_name']));
        $row = $request->fetch();

        $request2 = $connect->prepare("SELECT id_address FROM address WHERE company_id = :company_id");
        $request2->execute(array('company_id'=>$row['company_id']));
        $row2 = $request2->fetch();

        $request3 = $connect->prepare("INSERT INTO internship (skills, places_available, promotions_concerned, id_address, company_id) VALUES (:skills, :places_available, :promotions_concerned, :id_address, :company_id)");
        $request3->execute(array('skills'=>$_POST['skills'], 'places_available'=>$_POST['place_available'], 'promotions_concerned'=>$_POST['promotions'], 'id_address'=>$row2['id_address'], 'company_id'=>$row['company_id'])); 


        /* $request = $connect->prepare("INSERT INTO company (name, business_sector, nb_interns_accepted) VALUES (:name, :business, :interns)");
        $request->execute(array('name'=>$_POST['name'], 'business'=>$_POST['business'], 'interns'=>$_POST['interns'])); 

        $request = $connect->prepare("INSERT INTO address (country, postal_code, city, street, street_number, address_complement, company_id) VALUES (:country, :postal_code, :city, :street, :street_number, :address_complement, :company_id)");
        $last_id_company = $connect->lastInsertId();
        $request->execute(array('country'=>$_POST['country'], 'postal_code'=>$_POST['postal'], 'city'=>$_POST['city'], 'street'=>$_POST['address'], 'street_number'=>$_POST['number'], 'address_complement'=>$_POST['complement'], 'company_id'=>$last_id_company));

 */









    }