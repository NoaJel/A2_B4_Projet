<?php
require_once "./php/database_connection.php";

if (!isset($_COOKIE["type"])) {
    header("location:connexion-page.php");
} else {
    for ($i = 1; $i <= 35; $i++) {
        $permissionsToCheck = "sFx".$i;
        $$permissionsToCheck = false;
    }

    $isDeleguate = false;

    $request = $connect->prepare("SELECT roles FROM roles NATURAL JOIN be NATURAL JOIN user WHERE user.id_user=:id_user");
    $request->execute(array('id_user'=>$_COOKIE["type"]));
    $roles = $request->fetchAll();
    foreach ($roles as $role) {
        if ($role['roles'] == "deleguate") {
            $isDeleguate == true;
        }
    }

    $request = $connect->prepare("SELECT permissions FROM permissions NATURAL JOIN can NATURAL JOIN roles NATURAL JOIN be NATURAL JOIN user WHERE user.id_user=:id_user");
    $request->execute(array('id_user'=>$_COOKIE["type"]));
    $rows = $request->fetchAll();
    foreach ($rows as $row) {
        for ($i = 1; $i <= 35; $i++) {
            $permissionsToCheck = "sFx".$i;
            if ($row['permissions'] == $permissionsToCheck) {
                $$permissionsToCheck = true;
            }
        }
    } 

    if ($isDeleguate == true) {
        $request = $connect->prepare("SELECT permissions FROM permissions NATURAL JOIN possess NATURAL JOIN user WHERE user.id_user=:id_user");
        $request->execute(array('id_user'=>$_COOKIE["type"]));
        $rows = $request->fetchAll();
        foreach ($rows as $row) {
            for ($i = 1; $i <= 35; $i++) {
                $permissionsToCheck = "sFx".$i;
                if ($row['permissions'] == $permissionsToCheck) {
                    $$permissionsToCheck = true;
                }
            }
        }
    }
}