<?php
    require_once "./php/database_connection.php";
    $result = null;

    if (
        isset($_GET["id"])
    ) {
        $request = $connect->prepare(<<<EOD
            SELECT *
            FROM wish
            WHERE internship_id = :internship_id
            AND id_user = :id_user
            EOD
        );
        $request->execute(array("internship_id" =>  $_GET["id"], "id_user" => $_COOKIE["type"]));
        $result = $request->fetch();
        if (
            $result == NULL
        ) {
            $request = $connect->prepare(<<<EOD
            INSERT INTO wish
            (internship_id, id_user)
            VALUES
            (:internship_id, :id_user)
            EOD
            );
            $request->execute(array("internship_id" =>  $_GET["id"], "id_user" => $_COOKIE["type"]));
        }
    $reload = true;
    }

    if (
        (isset($_GET["internship_search"])
        && array_key_exists("internship_search", $_GET))
        || $reload
    ) {
        $reload = false;
        $search = $_GET["internship_search"];
        $param = "%$search%";
        $request = $connect->prepare(<<<EOD
            SELECT *
            FROM internship
            INNER JOIN company ON internship.company_id = company.company_id
            WHERE skills
            LIKE :skills
            LIMIT 4
            EOD
        );
        $request->execute(array("skills" =>  $param));
        $result = $request->fetchAll();
    }

