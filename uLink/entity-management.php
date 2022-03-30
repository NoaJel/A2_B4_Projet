


<?php require_once "head.php"; ?>
    <meta name="description" content="Manage your roles/users/companies here." />
    <title>uLink - Entity Management</title>
    <link rel="preload" as="style" href="https://ulinkserver.com/scss/pages/entity-management.css" type="text/css" onload="this.rel='stylesheet'" />
    <script type="text/javascript" src="https://ulinkserver.com/js/entity-management.js" defer></script>
    <?php require_once "header-stu.php"; ?>
    <?php //require "./php/entity-search.php"; ?>
    <?php require_once "./php/delete-entity.php"; ?>
    <?php require_once "./php/permissions.php";?>




    
    




    <?php
require_once "./php/database_connection.php";
if(isset($_POST["search"]))
{
     if(isset($_POST["all"]))
    {
        $search = $_POST['search'];
        $param = "%$search%";
        $request = $connect->prepare("SELECT * FROM company WHERE name LIKE :company_name LIMIT 3");
        $request2 = $connect->prepare("SELECT * FROM user WHERE name LIKE :name OR first_name LIKE :first_name LIMIT 3");
        $request->execute(array('company_name' =>  $param));
        $request2->execute(array('name' => $param,'first_name' => $param));
    } 
    if(isset($_POST["company"]))
    {
        echo "company";
        $search = $_POST['search'];
        $param = "%$search%";
        echo $param;
        $request = $connect->prepare("SELECT * FROM company WHERE name LIKE :company_name LIMIT 5");
        $request->execute(array('company_name' => $param));
    }
    elseif(isset($_POST["pilot"]))
    {
        echo "pilot";
        $search = $_POST['search'];
        $param = "%$search%";
        $request = $connect->prepare("SELECT * FROM user NATURAL JOIN be NATURAL JOIN roles WHERE roles = 'pilot' AND (name LIKE :name OR first_name LIKE :first_name) LIMIT 5");
        $request->execute(array('name' => $param,'first_name' => $param));
    }
    elseif(isset($_POST["delegate"]))
    {
        echo "delegate";
        $search = $_POST['search'];
        $param = "%$search%";
        $request = $connect->prepare("SELECT * FROM user NATURAL JOIN be NATURAL JOIN roles WHERE roles = 'delegate' AND (name LIKE :name OR first_name LIKE :first_name) LIMIT 5");
        $request->execute(array('name' => $param,'first_name' => $param));
    }
    elseif(isset($_POST["student"]))
    {
        echo "student";
        $search = $_POST['search'];
        $param = "%$search%";
        $request = $connect->prepare("SELECT * FROM user NATURAL JOIN be NATURAL JOIN roles WHERE roles = 'student' AND (name LIKE :name OR first_name LIKE :first_name) LIMIT 5");
        $request->execute(array('name' => $param,'first_name' => $param));
    }
    else
    {
        echo "no result";
    } 
}
?>



</head>
<body>
    <main>
        <h1>Entity Management</h1>
        <form method="POST">
            <div class="flex-row-container top-section">
                <div class="flex-row-container search-section">
                    <input name="search" type="search" class="searchbar"/>
                </div>
                <?php if ($sFx2)
                        { 
                        echo
                        '<a href="./company-management.php" class="add-entity"><i class="fas fa-plus-circle"></i>&nbsp;Add company</a>';
                        }?>

                <?php if ($sFx2)
                        { 
                        echo
                        '<a href="./user-management.php" class="add-entity"><i class="fas fa-plus-circle"></i>&nbsp;Add user</a>';
                        }?>
            </div>
            <div class="flex-row-container main">
                <div class="flex-row-container sort-entity">
                    <div class="flex-column-container select-entity">
                        <?php
                        if ($sFx2 == true)
                        {
                            echo
                            '<button id="js-companies" type="submit" name="company" class="sort-btn">
                                <label for="companies">Companies</label>
                            </button>';
                        }
                        if ($sFx13 == true)
                        {
                        echo
                            '<button id="js-tutors" type="submit" name="pilot" class="sort-btn">
                                <label for="tutors">Tutors</label>
                            </button>';
                        }
                        if ($sFx17 == true)
                        {
                            echo
                            '<button id="js-delegates" type="submit" name="delegate" class="sort-btn">
                                <label for="delegates">Delegates</label>
                            </button>';
                        }
                        if ($sFx22 == true)
                        {
                            echo
                            '<button id="js-students" type="submit" name="student" class="sort-btn">
                                <label for="students">Students</label>
                            </button>';
                        }
                        ?>
                    </div>
                </div>
        </form>
            <div class="flex-row-container cards-section">


            <?php      
            if(isset($_POST["company"]))
            {
                $rows = $request->fetchAll();
                foreach($rows as $row)
                {
                    echo '<div class="flex-column-container entity-card">
                            <div class="flex-row-container card-header">
                            <h2 class="card-title">',$row["name"],'</h2>
                            <div class="icons">';
                            if ($sFx4 == 1)
                            {
                            echo '
                            <a href="./company-management.php?action=update&company_name='.$row["name"].'"><i class="fas fa-pen"></i></a>';
                            }
                            if ($sFx6 == 1)
                            {
                            echo '
                            <a href="./entity-management.php?action=delete&company_name='.$row["name"].'"><i class="fas fa-trash"></i></a>';
                            }
                            echo '
                            </div>
                            </div>
                            <img src="https://ulinkserver.com/images/logo.png" alt="put image desc here">
                            <p>',$row["business_sector"],',',"&nbsp","accept ", $row["nb_interns_accepted"], " interns",'</p>
                            </div>';
                }
            }
            elseif(isset($_POST["pilot"]))
            {
                $rows = $request->fetchAll();
                foreach($rows as $row)
                {
                    echo '<div class="flex-column-container entity-card">
                            <div class="flex-row-container card-header">
                            <h2 class="card-title">',$row["first_name"],"&nbsp",$row["name"],'</h2>
                            <div class="icons">';
                            if ($sFx4 == 1)
                            {
                            echo '
                            <a href="./user-management.php?action=update&user_id='.$row["id_user"].'"><i class="fas fa-pen"></i></a>';
                            }
                            if ($sFx16 == 1)
                            {
                            echo '
                            <a href="./entity-management.php?action=delete&user_id='.$row["id_user"].'"><i class="fas fa-trash"></i></a>';
                            }
                            echo '
                            </div>
                            </div>
                            <img src="https://ulinkserver.com/images/logo.png" alt="put image desc here">
                            <p>',$row["login"],'</p>
                            </div>'; 

                }
            }
            elseif(isset($_POST["delegate"]))
            {
                $rows = $request->fetchAll();
                foreach($rows as $row)
                {
                    echo '<div class="flex-column-container entity-card">
                            <div class="flex-row-container card-header">
                            <h2 class="card-title">',$row["first_name"],"&nbsp",$row["name"],'</h2>
                            <div class="icons">';
                            if ($sFx4 == 1)
                            {
                            echo '
                            <a href="./user-management.php?action=update&user_id='.$row["id_user"].'"><i class="fas fa-pen"></i></a>';
                            }
                            if ($sFx20 == 1)
                            {
                            echo '
                            <a href="./entity-management.php?action=delete&user_id='.$row["id_user"].'"><i class="fas fa-trash"></i></a>';
                            }
                            echo '
                            </div>
                            </div>
                            <img src="https://ulinkserver.com/images/logo.png" alt="put image desc here">
                            <p>',$row["login"],'</p>
                            </div>'; 
                }
            }
            elseif(isset($_POST["student"]))
            {
                $rows = $request->fetchAll();
                foreach($rows as $row)
                {
                    echo '<div class="flex-column-container entity-card">
                            <div class="flex-row-container card-header">
                            <h2 class="card-title">',$row["first_name"],"&nbsp",$row["name"],'</h2>
                            <div class="icons">';
                            if ($sFx4 == 1)
                            {
                            echo '
                            <a href="./user-management.php?action=update&user_id='.$row["id_user"].'"><i class="fas fa-pen"></i></a>';
                            }
                            if ($sFx25 == 1)
                            {
                            echo '
                            <a href="./entity-management.php?action=delete&user_id='.$row["id_user"].'"><i class="fas fa-trash"></i></a>';
                            }
                            echo '
                            </div>
                            </div>
                            <img src="https://ulinkserver.com/images/logo.png" alt="put image desc here">
                            <p>',$row["login"],'</p>
                            </div>'; 
                }
            }
            else
            {
                echo "no result";
            }
            ?>
            </div>
        

    </main>
    <?php require_once "footer.php" ?>
</body>
</html>