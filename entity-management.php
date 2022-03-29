<?php require_once "head.php" ?>
<?php 
require "./php/entity-search.php";
require "./php/delete-entity.php";
require "./php/permissions.php";


 ?>
    <meta name="description" content="Manage your roles/users/companies here." />
    <title>uLink - Entity Management</title>
    <link rel="preload" as="style" href="./scss/pages/entity-management.css" type="text/css" onload="this.rel='stylesheet'" />
    <script type="text/javascript" src="./js/entity-management.js" defer></script>
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main>
        <h1>Entity Management</h1>
        <form method="POST">
            <div class="flex-row-container top-section">
                <div class="flex-row-container search-section">
                    <input name="search" type="search" class="searchbar"/>
                    <button type="input" name="all" id="js-search">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <a href="./company-management.php" class="add-entity"><i class="fas fa-plus-circle"></i>&nbsp;Add company</a> <!-- DISPLAYS A CONTEXTUAL MENU TO CHOOSE WHAT ENTITY WILL BE ADDED? -->
            </div>
            <div class="flex-row-container main">
                <div class="flex-row-container sort-entity">
                    <div class="flex-column-container select-entity">
                        <button id="js-all" type="submit" name="all" class="sort-btn">
                            <label for="all">All</label>
                        </button>
                        <button id="js-companies" type="submit" name="company" class="sort-btn">
                            <label for="companies">Companies</label>
                        </button>
                        <button id="js-tutors" type="submit" name="pilot" class="sort-btn">
                            <label for="tutors">Tutors</label>
                        </button>
                        <button id="js-delegates" type="submit" name="delegate" class="sort-btn">
                            <label for="delegates">Delegates</label>
                        </button>
                        <button id="js-students" type="submit" name="student" class="sort-btn">
                            <label for="students">Students</label>
                        </button>
                    </div>
                </div>
        </form>
            <div class="flex-row-container cards-section">


            <?php
            if(isset($_POST["all"]))
            {

                $rows = $request->fetchAll();
                foreach($rows as $row)
                {
                    echo '<div class="flex-column-container entity-card">
                            <div class="flex-row-container card-header">
                            <h2 class="card-title">',$row["name"],'</h2>
                            <div class="icons">
                            <a href="./company-management.php?action=update&company_name='.$row["name"].'"><i class="fas fa-pen"></i></a>
                            <a href="./entity-management.php?action=delete&company_name='.$row["name"].'"><i class="fas fa-trash"></i></a>
                            </div>
                            </div>
                            <img src="./images/logo.png" alt="put image desc here">
                            <p>',$row["business_sector"],',',"&nbsp","accept ", $row["nb_interns_accepted"], " interns",'</p>
                            </div>';

                }

                $rows2 = $request2->fetchAll();
                foreach($rows2 as $row2)
                {
                    echo '<div class="flex-column-container entity-card">
                            <div class="flex-row-container card-header">
                            <h2 class="card-title">',$row2["first_name"],"&nbsp",$row2["name"],'</h2>
                            <div class="icons">
                            <i class="fas fa-pen"></i>
                            <i class="fas fa-trash"></i>
                            </div>
                            </div>
                            <img src="./images/logo.png" alt="put image desc here">
                            <p>',$row2["login"],'</p>
                            </div>';

                }
            }
            elseif(isset($_POST["company"]))
            {
                $rows = $request->fetchAll();
                foreach($rows as $row)
                {
                    echo '<div class="flex-column-container entity-card">
                            <div class="flex-row-container card-header">
                            <h2 class="card-title">',$row["name"],'</h2>
                            <div class="icons">
                            <a href="./company-management.php?action=update&company_name='.$row["name"].'"><i class="fas fa-pen"></i></a>
                            <a href="./entity-management.php?action=delete&company_name='.$row["name"].'"><i class="fas fa-trash"></i></a>
                            </div>
                            </div>
                            <img src="./images/logo.png" alt="put image desc here">
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
                            <div class="icons">
                            <i class="fas fa-pen"></i>
                            <i class="fas fa-trash"></i>
                            </div>
                            </div>
                            <img src="./images/logo.png" alt="put image desc here">
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
                            <div class="icons">
                            <i class="fas fa-pen"></i>
                            <i class="fas fa-trash"></i>
                            </div>
                            </div>
                            <img src="./images/logo.png" alt="put image desc here">
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
                            <div class="icons">
                            <i class="fas fa-pen"></i>
                            <i class="fas fa-trash"></i>
                            </div>
                            </div>
                            <img src="./images/logo.png" alt="put image desc here">
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