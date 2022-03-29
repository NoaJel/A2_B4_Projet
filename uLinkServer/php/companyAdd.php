<?php

            $servname = 'localhost';
            $dbname = 'a2_web_projet1';
            $user = 'admin';
            $pass = '123456';

            try {
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                echo "connexion réussie";

                
            }

            catch (PDOException $e)
            {
                echo $e->getMessage()."\n";
                die;
            }





            $rcomp = $dbco->prepare("INSERT INTO company (name, business_sector, nb_interns_accepted) VALUES (:name, :business, :interns)");
                $rcomp->bindParam(':name', $name);
                $rcomp->bindParam(':business', $business);
                $rcomp->bindParam(':interns', $interns);
            
                // insertion d'une ligne
                $name = htmlspecialchars($_POST['name']);
                $business = htmlspecialchars($_POST['business']);
                $interns = (int)$_POST['interns'];
                $rcomp->execute();

                $radd = $dbco->prepare("INSERT INTO address (contry, postal_code, city, street, street_number, address_complement, company_id) VALUES (:country, :postal_code, :city, :street, :street_number, :address_complement, :company_id)");
                
                $radd->bindParam(':country', $country);
                $radd->bindParam(':postal_code', $postal_code);
                $radd->bindParam(':city', $city);
                $radd->bindParam(':street', $street);
                $radd->bindParam(':street_number', $street_number);
                $radd->bindParam(':address_complement', $address_complement);
                $radd->bindParam(':company_id', $last_id_company);

                $last_id_company = $dbco->lastInsertId();

                $country = htmlspecialchars($_POST['country']);
                $postal_code = (int)$_POST['postal'];
                $city = htmlspecialchars($_POST['city']);
                $street = htmlspecialchars($_POST['address']);
                $street_number = (int)$_POST['number'];
                $address_complement = htmlspecialchars($_POST['complement']);

                $radd->execute();
    ?>  