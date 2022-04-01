<?php
    include("database_connection.php");

    if (isset($_POST["insert"])) {
        $request = $connect->prepare(<<<EOD
            INSERT INTO company (name, business_sector, nb_interns_accepted)
            VALUES (:name, :business, :interns);
            EOD
        );
        $request->execute(array(
            'name'=>$_POST['name'],
            'business'=>$_POST['business'],
            'interns'=>$_POST['interns']
        ));
        $request = $connect->prepare(<<<EOD
            INSERT INTO address (country, postal_code, city, street, street_number, address_complement, company_id)
            VALUES (:country, :postal_code, :city, :street, :street_number, :address_complement, :company_id);
            EOD
        );
        $last_id_company = $connect->lastInsertId();
        $request->execute(array(
            'country'=>$_POST['country'],
            'postal_code'=>$_POST['postal'],
            'city'=>$_POST['city'],
            'street'=>$_POST['address'],
            'street_number'=>$_POST['number'],
            'address_complement'=>$_POST['complement'],
            'company_id'=>$last_id_company
        ));

        header("location:./entity-management.php");
    } elseif (isset($_POST["valid_update"])){
        $request = $connect->prepare(<<<EOD
            UPDATE company, address
            SET name = :name, business_sector = :business, nb_interns_accepted = :interns, country = :country, postal_code = :postal_code, city = :city, street = :street, street_number = :street_number, address_complement = :address_complement
            WHERE company.company_id=address.company_id
            AND company.company_id = :company_id;
            EOD
        );
        $request->execute(array(
            'name'=>$_POST['name'],
            'business'=>$_POST['business'],
            'interns'=>$_POST['interns'],
            'country'=>$_POST['country'],
            'postal_code'=>$_POST['postal'],
            'city'=>$_POST['city'],
            'street'=>$_POST['address'],
            'street_number'=>$_POST['number'],
            'address_complement'=>$_POST['complement'],
            'company_id'=> $_COOKIE['company']
        ));
        setcookie("company", "", time() - 3600);
        header("location:./entity-management.php");
    } elseif (
        !empty($_GET['action'])
        && $_GET["action"] == "update"
    ) {
        if(!empty($_COOKIE["company"])) {
            setcookie("company", "", time() - 3600);  
        }
        $param = $_GET["company_name"];
        $request = $connect->prepare(<<<EOD
            SELECT * FROM company NATURAL JOIN address WHERE company.name=:name
            EOD
        );
        $request->execute(array('name'=>$param));
        $row = $request->fetch();
        setcookie("company", $row['company_id'], time() + 3600);
    }