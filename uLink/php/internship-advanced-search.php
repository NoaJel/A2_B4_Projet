<?php
    require_once "./php/database_connection.php";
    $result = null;

    if (
        isset($_GET["internship_search"])
        && array_key_exists("internship_search", $_GET)
    ) {
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