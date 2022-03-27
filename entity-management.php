<?php require_once "head.php" ?>
    <meta name="description" content="Manage your roles/users/companies here." />
    <title>uLink - Entity Management</title>
    <link rel="preload" as="style" href="./scss/pages/entity-management.css" type="text/css" onload="this.rel='stylesheet'" />
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main>
        <h1>Entity Management</h1>
        <div class="flex-row-container top-section">
            <div class="flex-row-container search-section">
                <input type="search" class="searchbar" />
                <i class="fas fa-search"></i>
            </div>
            <a href="#" class="add-entity"><i class="fas fa-plus-circle"></i>&nbsp;Add Entity</a> <!-- DISPLAYS A CONTEXTUAL MENU TO CHOOSE WHAT ENTITY WILL BE ADDED? -->
        </div>
        <div class="flex-row-container main">
            <div class="flex-row-container sort-entity">
                <div class="flex-column-container select-entity">
                    <button type="button" class="sort-btn">
                        <label for="all">All</label>
                    </button>
                    <button type="button" class="sort-btn">
                        <label for="companies">Companies</label>
                    </button>
                    <button type="button" class="sort-btn">
                        <label for="tutors">Tutors</label>
                    <button type="button" class="sort-btn">
                        <label for="delegates">Delegates</label>
                    </button>
                    <button type="button" class="sort-btn">
                        <label for="students">Students</label>
                    </button>
                </div>
                <div class="flex-column-container search-results">
                    <div class="search-results" id="all">
                        <div class="search-result">
                            <h3>Result1 title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>Result2 title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>Result... title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>ResultX title</h3>
                            <p>Short description text</p>
                        </div>
                    </div>

                    <div class="search-results" id="companies">
                        <div class="search-result">
                            <h3>Result1 title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>Result2 title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>Result... title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>ResultX title</h3>
                            <p>Short description text</p>
                        </div>
                    </div>
                    
                    <div class="search-results" id="tutors">
                        <div class="search-result">
                            <h3>Result1 title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>Result2 title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>Result... title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>ResultX title</h3>
                            <p>Short description text</p>
                        </div>
                    </div>

                    <div class="search-results" id="delegates">
                        <div class="search-result">
                            <h3>Result1 title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>Result2 title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>Result... title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>ResultX title</h3>
                            <p>Short description text</p>
                        </div>
                    </div>

                    <div class="search-results" id="students">
                        <div class="search-result">
                            <h3>Result1 title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>Result2 title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>Result... title</h3>
                            <p>Short description text</p>
                        </div>
                        <div class="search-result">
                            <h3>ResultX title</h3>
                            <p>Short description text</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-row-container cards-section">
                <div class="flex-column-container entity-card">
                    <div class="flex-row-container card-header">
                        <h2 class="card-title">Entity 1</h2>
                        <div class="icons">
                            <i class="fas fa-pen"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                    </div>
                    <img src="./images/logo.png" alt="put image desc here">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, tempora itaque! Veniam expedita, ex doloremque sit neque commodi at! Neque?</p>
                </div>
                <div class="flex-column-container entity-card">
                    <div class="flex-row-container card-header">
                        <h2 class="card-title">Entity 2</h2>
                        <div class="icons">
                            <i class="fas fa-pen"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                    </div>
                    <img src="./images/logo.png" alt="put image desc here">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, tempora itaque! Veniam expedita, ex doloremque sit neque commodi at! Neque?</p>
                </div>
                <div class="flex-column-container entity-card">
                    <div class="flex-row-container card-header">
                        <h2 class="card-title">Entity ...</h2>
                        <div class="icons">
                            <i class="fas fa-pen"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                    </div>
                    <img src="./images/logo.png" alt="put image desc here">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, tempora itaque! Veniam expedita, ex doloremque sit neque commodi at! Neque?</p>
                </div>
                <div class="flex-column-container entity-card">
                    <div class="flex-row-container card-header">
                        <h2 class="card-title">Entity X</h2>
                        <div class="icons">
                            <i class="fas fa-pen"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                    </div>
                    <img src="./images/logo.png" alt="put image desc here">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, tempora itaque! Veniam expedita, ex doloremque sit neque commodi at! Neque?</p>
                </div>
            </div>
        </div>

    </main>
    <?php require_once "footer.php" ?>
</body>
</html>