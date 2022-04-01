<?php
    include("database_connection.php");

    if (isset($_POST["insert"])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $request = $connect->prepare("INSERT INTO user (name, first_name, centre, login, password) VALUES (:name, :first_name, :centre, :login, :password)");
        $request->execute(array('name'=>$_POST['name'], 'first_name'=>$_POST['first_name'], 'centre'=>$_POST['campus'], 'login'=>$_POST['login'], 'password'=>$password)); 
        $last_id_user = $connect->lastInsertId();

        if ($_POST["promotion"] != 0) {
            $request = $connect->prepare("UPDATE user SET id_yearGroup = :id_yearGroup WHERE id_user = :id_user");
            $request->execute(array('id_user'=>$last_id_user, 'id_yearGroup'=>$_POST["promotion"]));
        }

        $request = $connect->prepare("INSERT INTO be (id_roles, id_user) VALUES (:id_roles, :id_user)");
        $request->execute(array('id_roles'=>$_POST["type"], 'id_user'=>$last_id_user));
        
        if (
            isset($_POST["administrator"])
            && $_POST["administrator"] == true
        ) {
            $request = $connect->prepare("INSERT INTO be (id_roles, id_user) VALUES ('1', :id_user)");
            $request->execute(array('id_user'=>$last_id_user));
        }

        if (
            isset($_POST["delegate"])
            && $_POST["delegate"] == true
        ) {
            $request = $connect->prepare("INSERT INTO be (id_roles, id_user) VALUES ('4', :id_user)");
            $request->execute(array('id_user'=>$last_id_user));

            $permissionsToAdd = "";
            
            for ($i = 1; $i <= 35; $i++) {
                $permissionsToCheck = "sFx" . $i;
                if (isset($_POST[$permissionsToCheck])) {
                    $permissionsToAdd = $permissionsToAdd . "(" . $last_id_user . "," . $i . "),";
                }
            }
            $permissionsToAdd = substr($permissionsToAdd, 0, -1);
            $requete = "INSERT INTO possess (id_user, id_permissions) VALUES " . $permissionsToAdd;
            $request = $connect->prepare($requete);
            $request->execute();
        }

        header("location:../entity-management.php");
    }

    elseif (isset($_POST["valid_update"])) {
        $request = $connect->prepare("UPDATE user SET name = :nom, first_name = :first_name, centre = :centre, id_yearGroup = :id_yearGroup WHERE id_user = :id_user");
        $request->execute(array('nom'=>$_POST['name'], 'first_name'=>$_POST['first_name'], 'centre'=>$_POST['campus'], 'id_yearGroup'=>$_POST["promotion"], 'id_user'=>$_COOKIE["id_user"]));

        $request = $connect->prepare("UPDATE be SET id_roles = :id_roles, id_user = :id_user1 WHERE id_user = :id_user2 AND (id_roles = '2' OR id_roles = '3' OR id_roles = '5')");
        $request->execute(array('id_roles'=>$_POST["type"], 'id_user1'=>$_COOKIE["id_user"], 'id_user2'=>$_COOKIE["id_user"]));

        if (isset($_POST["administrator"]) && $_POST["administrator"] == true) {
            $request = $connect->prepare("INSERT INTO be (id_roles, id_user) VALUES ('1', :id_user)");
            $request->execute(array('id_user'=>$_COOKIE["id_user"]));
        }

        if (isset($_POST["delegate"]) && $_POST["delegate"] == true) {
            $request = $connect->prepare("INSERT INTO be (id_roles, id_user) VALUES ('4', :id_user)");
            $request->execute(array('id_user'=>$_COOKIE["id_user"]));
        }

        $request = $connect->prepare("DELETE FROM possess WHERE id_user = :id_user");
        $request->execute(array('id_user'=>$_COOKIE["id_user"]));

        if (
            isset($_POST["delegate"])
            && $_POST["delegate"] == true
        ) {
            $permissionsToAdd ="";
            
            for ($i = 1; $i <= 35; $i++) {
                $permissionsToCheck = "sFx".$i;
                if (isset($_POST[$permissionsToCheck])) {
                    $permissionsToAdd = $permissionsToAdd . "(" . $_COOKIE['id_user'] . "," . $i . "),";
                }
            }
            $permissionsToAdd = substr($permissionsToAdd, 0, -1);
            $requete = "INSERT INTO possess (id_user, id_permissions) VALUES " . $permissionsToAdd;
            $request = $connect->prepare($requete);
            $request->execute();
            setcookie("id_user", "", time() - 3600);
            header("location:../entity-management.php");
        }

    } elseif (
        !empty($_GET['action'])
        && $_GET["action"] == "update"
    ) {
        if (!empty($_COOKIE["id_user"])) {
            setcookie("id_user", "", time() - 3600);  
        }
        $request = $connect->prepare(<<<EOD
            SELECT *
            FROM can
            NATURAL JOIN roles
            NATURAL JOIN be
            NATURAL JOIN user
            WHERE id_user=:id_user
            EOD
        );
        $request->execute(array('id_user'=> $_GET["user_id"]));
        $line = $request->fetch();
        $rows = $request->fetchAll();


        $request3 = $connect->prepare(<<<EOD
            SELECT *
            FROM roles
            NATURAL JOIN be
            NATURAL JOIN user
            WHERE id_user=:id_user
            EOD
        );
        $request3->execute(array('id_user'=>$_GET["user_id"]));
        $rows3 = $request3->fetchAll();
        $isDelegate = false;

        foreach ($rows3 as $row3) {
            if ($row3['roles'] == 'delegate') {
                $isDelegate = true;
            }
        }

        $isAdmin = false;
        $isStudent = false;
        $isPilot = false;
        $isOther = false;
        foreach ($rows as $row) {
            if ($row['roles'] == 'other') {
                $isOther = true;
            }

            if ($row['roles'] == 'pilot') {
                $isPilot = true;
            }

            if ($row['roles'] == 'student') {
                $isStudent = true;
            }

            if ($row['roles'] == 'administrator') {
                $isAdmin = true;
            }
        }




        if ($isDelegate) {
            $request2 = $connect->prepare(<<<EOD
                SELECT * FROM permissions
                NATURAL JOIN possess
                NATURAL JOIN user
                WHERE id_user=:id_user
                EOD
            );
            $request2->execute(array('id_user'=>$_GET["user_id"]));
            $rows2 = $request2->fetchAll();
            for ($i = 1; $i <= 35; $i++) {
                $permissionsToCheck = "sFx" . $i;
                $$permissionsToCheck = false;
            }    

            foreach ($rows2 as $row2) {
                for ($i = 1; $i <= 35; $i++) {
                    $permissionsToCheck = "sFx" . $i;
                    if ($row2['permissions'] == $permissionsToCheck) {
                        $$permissionsToCheck = true;
                    }
                }
            }
        }
        
        setcookie("id_user", $_GET["user_id"], time() + 3600);
    }