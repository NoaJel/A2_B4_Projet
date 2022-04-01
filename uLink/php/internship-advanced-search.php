<?php
    require_once "./php/database_connection.php";
    $result = null;
<<<<<<< HEAD
    $reload = false;
    if (
        isset($_GET["id"])
    ) {
=======

    if (isset($_GET["id"])) {
>>>>>>> 89f0ef493fc4eb47f60c5ada440714887efd077b
        $request = $connect->prepare(<<<EOD
            SELECT *
            FROM wish
            WHERE internship_id = :internship_id
            AND id_user = :id_user
            EOD
        );
        $request->execute(array("internship_id" => $_GET["id"], "id_user" => $_COOKIE["type"]));
        $result = $request->fetch();

        if ($result == null) {
            $request = $connect->prepare(<<<EOD
                INSERT INTO wish
                (internship_id, id_user)
                VALUES
                (:internship_id, :id_user)
                EOD
            );
            $request->execute(array("internship_id" => $_GET["id"], "id_user" => $_COOKIE["type"]));
        }

        $reload = true;
    }

    if (
        (
            isset($_GET["internship_search"])
            && array_key_exists("internship_search", $_GET)
        ) || $reload
    ) {
        $reload = false;
        $search = $_GET["internship_search"];
        $param = "%$search%";
        $idFilter = null;
        $companyFilter = null;
        $locationFilter = null;
        $durationFilter = null;
        if (
            (
                isset($_GET["id_filter_search"])
                && !empty($_GET["id_filter_search"])
            ) || $reload
        ) {
            $idFilter = $_GET["id_filter_search"];
        }
        if (
            (
                isset($_GET["company_filter_search"])
                && !empty($_GET["company_filter_search"])
            ) || $reload
        ) {
            $companyFilter = $_GET["company_filter_search"];
        }
        if (
            (
                isset($_GET["location_filter_search"])
                && !empty($_GET["location_filter_search"])
            ) || $reload
        ) {
            $locationFilter = $_GET["location_filter_search"];
        }
        if (
            (
                isset($_GET["duration_filter_search"])
                && !empty($_GET["duration_filter_search"])
            ) || $reload
        ) {
            $durationFilter = $_GET["duration_filter_search"];
        }
        $request = $connect->prepare(<<<EOD
            SELECT *
            FROM internship
            INNER JOIN company ON internship.company_id = company.company_id
            WHERE skills
            LIKE :skills
            OR name
            LIKE :name
            OR internship_id
            LIKE :internship_id
            LIMIT 4
            EOD
        );
        $request->execute(
            array(
                "skills" => $param,
                "name" => $companyFilter,
                "internship_id" => $idFilter // some parameters are missing as we don't have them in the database (duration, etc.)
            )
        );
        $result = $request->fetchAll();
    }