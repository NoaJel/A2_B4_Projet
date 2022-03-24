<?php require_once "head.php" ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="stylesheet" href="./scss/company-management.css" type="text/css" />
    <script src="./js/header-stu.js" defer></script>
    <script src="./js/script.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" defer></script>
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
                    <label for="country">Country</label>
                    <input type="text" id="country" placeholder="" required>
                </div>
                <div class="form-field">
                    <label for="postalCode">Postal Code</label>
                    <input type="text" id="postalCode" placeholder="" required>
                </div>
                <div class="form-field">
                    <label for="city">City</label>
                    <input type="text" id="city" placeholder="" required>
                </div>
                <div class="form-field">
                    <label for="address">Address</label>
                    <input type="text" id="address" placeholder="" required>
                </div>
                <div class="form-field">
                    <label for="addressNumber">Address number</label>
                    <input type="text" id="addressNumber" placeholder="" required>
                </div>
                <div class="form-field">
                    <label for="addressComplement">Address complement</label>
                    <input type="text" id="addressComplement" placeholder="" required>
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