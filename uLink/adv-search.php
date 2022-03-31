<?php require_once "head.php" ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="preload" as="style" href="https://ulinkserver.com/scss/pages/adv-search.css" type="text/css" onload="this.rel='stylesheet'" />
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main class="main">
        <div>
            <h1>Advanced search</h1>
            <div class="searchbar">
                <input type="search" name="internship_search" id="internship-search">
                <button type="submit">Search <i class="fas fa-search"></i></button>
            </div>
        </div>

        <section class="results">
            <h2>Results</h2>
            <table>
                <tr>
                    <td>
                        <div class="internship-card">
                            <h3>Company - Internship title</h3>
                            <img src="https://picsum.photos/200?random=1" alt="desc of the photo here">
                            <ul>
                                <li>Domain</li>
                                <li>Profile searched</li>
                                <li>Duration</li>
                                <li>Salary</li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="internship-card">
                            <h3>Company - Internship title</h3>
                            <img src="https://picsum.photos/200?random=2" alt="desc of the photo here">
                            <ul>
                                <li>Domain</li>
                                <li>Profile searched</li>
                                <li>Duration</li>
                                <li>Salary</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="internship-card">
                            <h3>Company - Internship title</h3>
                            <img src="https://picsum.photos/200?random=3" alt="desc of the photo here">
                            <ul>
                                <li>Domain</li>
                                <li>Profile searched</li>
                                <li>Duration</li>
                                <li>Salary</li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="internship-card">
                            <h3>Company - Internship title</h3>
                            <img src="https://picsum.photos/200?random=4" alt="desc of the photo here">
                            <ul>
                                <li>Domain</li>
                                <li>Profile searched</li>
                                <li>Duration</li>
                                <li>Salary</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="internship-card">
                            <h3>Company - Internship title</h3>
                            <img src="https://picsum.photos/200?random=5" alt="desc of the photo here">
                            <ul>
                                <li>Domain</li>
                                <li>Profile searched</li>
                                <li>Duration</li>
                                <li>Salary</li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="internship-card">
                            <h3>Company - Internship title</h3>
                            <img src="https://picsum.photos/200?random=6" alt="desc of the photo here">
                            <ul>
                                <li>Domain</li>
                                <li>Profile searched</li>
                                <li>Duration</li>
                                <li>Salary</li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </table>
        </section>
    </main>
    <?php require_once "footer.php" ?>
</body>
</html>