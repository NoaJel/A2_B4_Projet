<?php require_once "head.php" ?>
    <meta name="description" content="Make your internship researches easier and more relevant with this tool." />
    <title>uLink - Advanced Internship Search</title>
    <link rel="preload" as="style" href="https://ulinkserver.com/scss/pages/adv-search.css" type="text/css" onload="this.rel='stylesheet'" />
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main class="main">
    <?php require_once "./php/internship-advanced-search.php"; ?>
        <div>
            <h1>Advanced search</h1>
            <form method="GET" class="searchbar">
                <label for="internship-search">
                    <input type="search" name="internship_search" id="internship-search" class="search-element" />
                    <button type="submit" class="search-element">Search <i class="fas fa-search"></i></button>
                </label>
            </form>
        </div>

        <section class="results">
            <h2>Results</h2>
            <table>
                <?php if ($result !== null): ?>
                    <?php $i = 1 ?>
                    <?php foreach ((array) $result as $card): ?> <!-- as an array cannot be returned before a GET request (clicking the search button), without casting PHP would return an error saying it's not the correct type (undefined here) -->
                        <?php if (!($i % 3)): ?>
                            <tr>
                        <?php endif; ?>
                            <td>
                                <div class="internship-card">
                                    <h3><?=$card["name"]?> - <?=$card["skills"]?> internship</h3>
                                    <img src="https://picsum.photos/200?random=<?=random_int(1, 100)?>" alt="desc of the photo here" />
                                    <ul>
                                        <li>Domain: <?=$card["business_sector"]?> &rArr; <?=$card["skills"]?></li>
                                        <li>Profile searched: <?=$card["promotions_concerned"]?></li>
                                        <li>Duration: <?=random_int(9, 39)?> weeks</li>
                                        <li>Places available: <?=$card["places_available"]?></li>
                                    </ul>
                                </div>
                            </td>
                        <?php if (!($i % 3)): ?>
                            </tr>
                        <?php ++$i; endif; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <em style="color: #dc3545">Please do a research to find what interships could interest you...</em>
                <?php endif; ?>
            </table>
        </section>
    </main>
    <?php require_once "footer.php" ?>
</body>
</html>