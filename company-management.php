<?php require_once "head.php" ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="stylesheet" href="./scss/company-management.css" type="text/css" />
    <script type="text/javascript" src="./js/header-stu.js" defer></script>
    <script type="text/javascript" src="./jquery/jquery-3.6.0.min.js" defer></script>
    <script type="text/javascript" src="./js/company-management.js" defer></script> 
</head>
<body>
    <?php require_once "header-stu.php" ?>
     <main>
        <form class="main-form" action="./php/companyAdd.php" method="post">
            <div class="parent2">
                <div class="form-field">
                    <label for="name">Name</label>
                    <input name="name" type="text" id="name" placeholder="Your company name" required>
                </div>
                <div class="form-field">
                    <label for="domain">Domain of activity</label>
                    <input name="business" type="text" id="domain" placeholder="Domains (e.g. web dev, pentesting, etc.)" required>
                </div>
                <div class="form-field">
                    <label for="interns_accepted">number of interns accepted</label>
                    <input name="interns" type="text" id="interns" placeholder="number of interns the company allowed" required>
                </div>
                <div class="form-field">
                    <label for="country">Country</label>
                    <input name="country" type="text" id="country" placeholder="" required>
                </div>
                <div class="form-field">
                    <label for="postalCode">Postal Code</label>
                    <input name="postal" type="text" id="codePostal" placeholder="" required>
                </div>

                <div class="form-field">
                    <label for="city">City</label>
				    <select name="city" id="city"></select>
                </div>
                <div class="form-field">
                    <label for="address">Address</label>
                    <input name="address" type="text" id="address" placeholder="" required>
                </div>
                <div class="form-field">
                    <label for="addressNumber">Address number</label>
                    <input name="number" type="text" id="addressNumber" placeholder="" required>
                </div>
                <div class="form-field">
                    <label for="addressComplement">Address complement</label>
                    <input name="complement" type="text" id="addressComplement" placeholder="">
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