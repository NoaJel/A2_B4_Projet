<?php require_once "head.php" ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="stylesheet" href="https://ulinkserver.com/scss/pages/company-details.css" type="text/css" />
    <script type="text/javascript" src="https://ulinkserver.com/js/comment-modal.js" defer></script>
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main>
        <h1>Company details</h1>
        <div class="parent">
            <div class="sous-parent-1">
                <div class="child">
                    <h2 class="company">Ulink</h2>
                </div>
                <div class="child">
                    <i class="fas fa-map-marker-alt"> :</i>
                    2 All. des Foulons, 67380 Lingolsheim
                </div>
                <div class="child">
                    <i class="fas fa-phone"> :</i>
                    0306236589
                </div>
                <div class="child">
                    <i class="fas fa-at"> :</i>
                    contact@ulink.fr
                </div>
                <div class="child-ranking">

                    Users ranking
                    <div class="comment-btn">
                        <div class="star-avg">
                            <i class="rating-avg far fa-star"></i>
                            <i class="rating-avg far fa-star"></i>
                            <i class="rating-avg far fa-star"></i>
                            <i class="rating-avg far fa-star"></i>
                            <i class="rating-avg far fa-star"></i>
                            <input id="avg" type="hidden" value=3.5 />
                        </div>
                        <button data-comment-target="#comment-container" class="comment-btn">Rate this company →</button>
                    </div>
                    <div class="rating-number"></div>
                </div>
            </div>
            <div class="sous-parent-2">
                <div class="details">
                    <i class="fas fa-book-open"></i>
                    <section class="title" for="category">Category</section>
                    <section class="info" for="category-name">media</section>
                </div>
                <div class="details">
                    <i class="fas fa-pencil-ruler"></i>
                    <section class="title" for="activity">Activity</section>
                    <section class="info" for="activity-name">Application software publishing</section>
                </div>
                <div class="details">
                    <i class="fas fa-user-friends"></i>
                    <section class="title" for="staff">Staff</section>
                    <section class="info" for="staff-number">49</section>
                </div>
                <div class="details">
                    <i class="fas fa-dollar-sign"></i>
                    <section class="title" for="capital">Capital</section>
                    <section class="info" for="amount-of-capital">14 000 000 €</section>
                </div>
                <div class="details">
                    <i class="fas fa-user-graduate"></i>
                    <section class="title" for="intern">Interns already hired</section>
                    <section class="info" for="interns-already-hired">12</section>
                </div>
            </div>
        </div>
        <h1>Internship proposal</h1>
        <div class="internship">
            <a class="link" href="internship-proposal.php"><i class="fas fa-plus"></i></a>
        </div>
        <div class="comment-container" id="comment-container" role="dialog" aria-modal="true">
            <div class="comment-header">
                <h2 class="title">Leave a comment !</h2>
                <button class="comment-close-btn" data-comment-close type="button">
                    <span class="cross">&#10006;</span>
                    <span class="cross-bg"></span>
                </button>
            </div>
            <div class="comment-main">
                <form action="" method="POST" class="comment-rate">
                    <div class="star-rank">
                        <i class="rating-star far fa-star"></i>
                        <i class="rating-star far fa-star"></i>
                        <i class="rating-star far fa-star"></i>
                        <i class="rating-star far fa-star"></i>
                        <i class="rating-star far fa-star"></i>
                        <div class="result"></div>
                    </div>
                    <div class="comment-field">
                        <label for="comment"></label>
                        <textarea name="comment" class="comment-input" id="comment" placeholder="Comment"></textarea>
                    </div>
                    <button type="submit" class="comment-input" id="comment-btn">Send</button>
                </form>
            </div>
            <div class="comment-footer"></div>
        </div>
        <div id="comment-overlay"></div>
    </main>
    <?php require_once "footer.php" ?>
</body>
</html>