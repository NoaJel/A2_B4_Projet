<?php require_once "head.php" ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="stylesheet" href="./scss/company-management.css" type="text/css" />
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main>
        <form action="" method="POST">
            <div class="parent1">
                <legend><h1>Company Management</h1></legend>
                <div class="form-img">
                    <input type="file">
                </div>
            </div>
            <div class="parent2">
                <div class="form-field">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Your company name" required>
                </div>
                <div class="form-field">
                    <label for="domain">Domain of activity</label>
                    <input type="text" id="domain" placeholder="Domains (e.g. web dev, pentesting, etc.)" required>
                </div>
                <div class="form-field">
                    <label for="location">Location</label>
                    <input type="text" id="location" placeholder="where you are located" required>
                </div>
                <div class="form-field">
                    <label for="tags">Add tags</label>
                    <input type="text" id="tags" placeholder="add some tags to precise your profile (e.g. #devweb, #java, etc.)" required>
                </div>
                <div class="form-field">
                    <label for="description">Description</label>
                    <textarea id="description" placeholder="Put more details here about your company"></textarea>
                </div>
                <div class="form-submit">
                    <input type="submit" value="Validate →">
                </div>
            </div>
        </form>
    </main>
    <?php require_once "footer.php" ?>
</body>
</html>