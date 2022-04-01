<?php require_once "head.php" ?>
    <meta name="description" content="Make your internship researches easier and more relevant with this tool." />
    <title>uLink - Advanced Internship Search</title>
    <link rel="preload" as="style" href="https://ulinkserver.com/scss/pages/adv-search.css" type="text/css" onload="this.rel='stylesheet'" />
    <script src="https://ulinkserver.com/js/adv-search.js" defer></script>
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main class="main">
    <?php require_once "./php/internship-advanced-search.php"; ?>
        <div>
            <h1>Advanced search</h1>
            <form method="GET" class="searchbar">
                <label for="internship-search" id="searchbar">
                    <input type="search" name="internship_search" id="internship-search" class="search-element" placeholder="Enter the domain of your internship here" />
                    <button type="submit" class="search-element">Search <i class="fas fa-search"></i></button>
                </label>

                <h2>Filter by:</h2>
                <div class="filters">
                    <!-- <div class="filter-container">
                        <input type="checkbox" name="filter" id="domain-filter" class="filter">
                        <label for="domain-filter">Domain</label>
                        <input type="search" name="domain_filter_search" id="domain-filter-search" class="search-element" hidden />
                    </div> -->
                    
                    <div class="filter-container">
                        <input type="checkbox" name="duration_filter" id="duration-filter" class="filter">
                        <label for="duration-filter">Duration</label>
                        <input type="search" name="duration_filter_search" id="duration-filter-search" class="search-element" placeholder="Duration of the internship (in weeks)" hidden />
                    </div>
                    
                    <div class="filter-container">
                        <input type="checkbox" name="location_filter" id="location-filter" class="filter">
                        <label for="location-filter">Location</label>
                        <input type="search" name="location_filter_search" id="location-filter-search" class="search-element" placeholder="Location of the internship" hidden />
                    </div>
                    
                    <div class="filter-container">
                        <input type="checkbox" name="company_filter" id="company-filter" class="filter">
                        <label for="company-filter">Company name</label>
                        <input type="search" name="company_filter_search" id="company-filter-search" class="search-element" placeholder="The name of the company" hidden />
                    </div>

                    <div class="filter-container">
                        <input type="checkbox" name="id_filter" id="id-filter" class="filter">
                        <label for="id-filter">ID</label>
                        <input type="search" name="id_filter_search" id="id-filter-search" class="search-element" placeholder="Enter a specific ID for an internship" hidden />
                    </div>
                </div>
            </form>
        </div>

        <section class="results">
            <h2>Results</h2>
            <table>
                <?php if ($result !== null): ?>
                    <?php $i = 1 ?>
                    <?php foreach ((array) $result as $card): ?> <!-- as an array cannot be returned before a GET request (clicking the search button), without casting PHP would return an error saying it's not the correct type (undefined here) -->
                        <?php if ($i % 3 == 0): ?>
                            <tr>
                        <?php endif; ?>
                            <td>
                                <div class="internship-card">
                                    <h3><?=$card["name"]?> - <?=$card["skills"]?> internship</h3>
                                    <?php if ($sFx27): ?>
                                        <a href="./adv-search.php?id=<?=$card["internship_id"]?>&internship_search"><i class="fa-solid fa-star"></i></a>
                                    <?php endif; ?>
                                    <img src="https://picsum.photos/200?random=<?=random_int(1, 100)?>" alt="desc of the photo here" />
                                    <ul>
                                        <li>Domain: <?=$card["business_sector"]?> &rArr; <?=$card["skills"]?></li>
                                        <li>Profile searched: <?=$card["promotions_concerned"]?></li>
                                        <li>Duration: <?=random_int(9, 39)?> weeks</li>
                                        <li>Places available: <?=$card["places_available"]?></li>
                                    </ul>
                                </div>
                            </td>
                        <?php if ($i % 3 == 0): ?>
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