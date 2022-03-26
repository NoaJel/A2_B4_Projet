<?php require_once "head.php" ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="stylesheet" href="./scss/pages/company-details.css" type="text/css" />
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main>
        <h1>Company details</h1>
        <div class="parent">
            <div class="sous-parent-1">
                <div class="child">
                    <label class="company" for="company's name">Ulink</label>
                </div>
                <div class="child">
                    <i class="fas fa-map-marker-alt"> :</i>
                    <label for="address">2 All. des Foulons, 67380 Lingolsheim</label>
                </div>
                <div class="child">
                    <i class="fas fa-phone"> :</i>
                    <label for="phone">0306236589</label>
                </div>
                <div class="child">
                    <i class="fas fa-at"> :</i>
                    <label for="email">contact@ulink.fr</label>
                </div>
                <div class="child-ranking">
                   <label for="ranking">Users ranking</label>
                   <div>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                   </div>
                   <a href="">leave a comment →</a>
                </div>
            </div>
            <div class="sous-parent-2">
                <div class="details">
                    <i class="fas fa-book-open"></i>
                    <label class="title" for="category">Category</label>
                    <label class="info" for="category-name">media</label>
                </div>
                <div class="details">
                    <i class="fas fa-pencil-ruler"></i>
                    <label class="title" for="activity">Activity</label>
                    <label class="info" for="activity-name">Application software publishing</label>
                </div>
                <div class="details">
                    <i class="fas fa-user-friends"></i>
                    <label class="title" for="staff">Staff</label>
                    <label class="info" for="staff-number">49</label>
                </div>
                <div class="details">
                    <i class="fas fa-dollar-sign"></i>
                    <label class="title" for="capital">Capital</label>
                    <label class="info" for="amount-of-capital">14 000 000 €</label>
                </div>
                <div class="details">
                    <i class="fas fa-user-graduate"></i>
                    <label class="title" for="intern">Interns already hired</label>
                    <label class="info" for="interns-already-hired">12</label>
                </div>
            </div>
        </div>
        <h1>Internship proposal</h1>
    </main>
    <?php require_once "footer.php" ?>
</body>
</html>