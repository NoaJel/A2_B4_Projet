<?php
    include("database_connection.php");
    if(isset($_POST["insert"]))
    {
        $request = $connect->prepare("INSERT INTO company (name, business_sector, nb_interns_accepted) VALUES (:name, :business, :interns)");
        $request->execute(array('name'=>$_POST['name'], 'business'=>$_POST['business'], 'interns'=>$_POST['interns'])); 

        $request = $connect->prepare("INSERT INTO address (country, postal_code, city, street, street_number, address_complement, company_id) VALUES (:country, :postal_code, :city, :street, :street_number, :address_complement, :company_id)");
        $last_id_company = $connect->lastInsertId();
        $request->execute(array('country'=>$_POST['country'], 'postal_code'=>$_POST['postal'], 'city'=>$_POST['city'], 'street'=>$_POST['address'], 'street_number'=>$_POST['number'], 'address_complement'=>$_POST['complement'], 'company_id'=>$last_id_company));

        header("location:./index.php");
    }


    elseif (isset($_POST["update"])){
        $request = $connect->prepare("SELECT * FROM company NATURAL JOIN address WHERE company.name=:name");
        $request->execute(array('name'=>$_POST['company_name']));
        $row = $request->fetch();
        setcookie("company", $row['company.company_id'], time()+3600);
    }

    elseif (isset($_POST["valid_update"])){
        $request = $connect->prepare("UPDATE company, address SET name = :name, business_sector = :business, nb_interns_accepted = :interns, country = :country, postal_code = :postal_code, city = :city, street = :street, street_number = :street_number, address_complement = :address_complement WHERE company.company_id=address.company_id AND company.company_id = :company_id;");
        $request->execute( array('name'=>$_POST['company_name'], 'business'=>$_POST['business'], 'interns'=>$_POST['interns'], 'country'=>$_POST['country'], 'postal_code'=>$_POST['postal'], 'city'=>$_POST['city'], 'street'=>$_POST['address'], 'street_number'=>$_POST['number'], 'address_complement'=>$_POST['complement'], 'company_id'=> $_COOKIE['company']));
           
    }
  





/* $request = $connect->prepare("UPDATE company, address SET name = :name, business_sector = :business, nb_interns_accepted = :interns, WHERE company_id = :company_id;");
$request->execute( array('name' => $_POST['company_name'], 'business' => $_POST['business'], 'interns' => $_POST['interns'], 'company_id' => $_COOKIE['company']));

$request = $connect->prepare("SELECT * FROM address WHERE company_id = :company_id");
$request->execute( array('company_id' => $_COOKIE['company']));

$rows = $request->fetch();

foreach($rows as $row)
{
    $request = $connect->prepare("UPDATE address SET country = :country, postal_code = :postal_code, city = :city, street = :street, street_number = :street_number, address_complement = :address_complement WHERE id_address = :id_address");
    $request->execute( array('country' => $_POST['country'], 'postal_code' => $_POST['postal'], 'city' => $_POST['city'], 'street' => $_POST['address'], 'street_number' => $_POST['number'], 'address_complement' => $_POST['complement'], 'id_address' => $row['id_address'])); 
    
}   */
?>