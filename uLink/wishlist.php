<?php require_once "head.php" ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="stylesheet" href="https://ulinkserver.com/scss/pages/wishlist.css" type="text/css" />
    <script type="text/javascript" src="https://ulinkserver.com/js/wishlist.js" defer></script>
    <?php require_once "./php/wishlistSelect.php" ?>
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main>
        <h1>Wishlist</h1>
        <div class="page">
            <div class="pagination">
                <?php
                $request = $connect->prepare(<<<EOD
                    SELECT *
                    FROM address 
                    NATURAL JOIN company 
                    NATURAL JOIN internship 
                    NATURAL JOIN wish
                    WHERE id_user = :id_user
                    EOD
                );
                $request->execute(array('id_user' => $_COOKIE['type']));
                
                $rows = $request->fetchAll(); ?>
                <?php if ($rows != null): ?>
                    <?php foreach($rows as $row): ?>
                    <div id="wishlist">
                        <div class="wish" onclick="details()">
                            <div class="wish-info">
                                <h2>Internship : <?=$row['skills'];?></h2>
                                <h3>Company : <?=$row['name'];?></h3>
                                <h3>Location : <?=$row['city'];?></h3>
                                <h3>Profile : <?=$row['skills'];?>, <?=$row['promotions_concerned'];?></h3>
                            </div>
                            <a href="./wishlist.php?id=<?=$row['internship_id'];?>"><i class="fas fa-star"></i></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <div class="btn-change">
                    <button class="change" onclick="firstPage()">|<</button>
                    <button class="change" onclick="previous()"><</button>
                    <span id="pageInfo"></span>
                    <button class="change" onclick="nextPage()">></button>
                    <button class="change" onclick="lastPage()">>|</button>
                </div>
            </div>
            <div id="details-window">
                <p id="placeholder">Select an internship in the wishlist.</p>
                <div id="internship-info">
                </div>
            </div>
        </div>
    </main>
    <?php require_once "footer.php" ?>
</body>
</html>




