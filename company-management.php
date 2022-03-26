<?php require_once "head.php" ?>
    <meta name="description" content="Add or edit a company to uLink." />
    <title>uLink - Company Management</title>
    <link rel="stylesheet" href="./scss/pages/company-management.css" type="text/css" />
    <script type="text/javascript" src="./js/company-management.js" defer></script> 
</head>
<body>
    <?php require_once "header-stu.php" ?>
     <main class=".main">
        <h2>Company Management</h2>
        <form class="main-form" action="./php/companyAdd.php" method="POST">
            <div class="form-field">
                <label for="name">Name</label>
                <input name="name" type="text" id="name" placeholder="Your company name" inputmode="text" required />
            </div>
            <div class="form-field">
                <label for="domain">Domain of activity</label>
                <input name="business" type="text" id="domain" placeholder="Domains (e.g. web dev, pentesting, etc.)" inputmode="text" required />
            </div>
            <div class="form-field">
                <label for="interns_accepted">Number of interns accepted</label>
                <input name="interns" type="text" id="interns" placeholder="Number of interns that can be hired for one intership" inputmode="numeric" pattern="[0-9]" />
            </div>
            <div class="form-field">
                <label for="country">Country</label>
                <input name="country" type="text" id="country" placeholder="" inputmode="text" required />
            </div>
            <div class="form-field">
                <label for="address">Address</label>
                <input name="address" type="text" id="address" placeholder="Street, Road, Avenue, etc." required />
            </div>
            <div class="form-field">
                <label for="addressNumber">Address number</label>
                <input name="number" type="text" id="addressNumber" placeholder="" required />
            </div>
            <div class="form-field">
                <label for="addressComplement">Address complement</label>
                <input name="complement" type="text" id="addressComplement" placeholder="" />
            </div>
            <div class="form-field">
                <label for="postal-code">Postal Code</label>
                <input name="postal" type="text" id="postal-code" placeholder="5 numbers" pattern="[0-9]{5}" maxlength="5" required />
            </div>
            <div class="form-field">
                <label for="city">City</label>
                <select name="city" id="city">
                    <option aria-placeholder="Enter your postal code first (autocompletion)">-- Enter your postal code first (autocompletion) --</option>
                </select>
            </div>
            <div class="form-field">
                <label for="phone-number">Phone Number</label>
                <input name="phone" type="text" id="phone-number" placeholder="Do not use dots or spaces to separate numbers" pattern="[0-9]{10}" maxlength="10" required />
            </div>
            <div class="form-field">
                <label for="tags">Add tags</label>
                <input type="text" id="tags" placeholder="Add some tags to precise your profile (e.g. #webdev, #java, etc.)" required />
            </div>
            <div class="form-field">
                <label for="description">Description</label>
                <textarea id="description" placeholder="Put more details here about your company"></textarea>
            </div>
            <div class="form-submit">
                <button type="submit" id="submit-btn">Validate &rarr;</button>
            </div>
        </form>
    </main> 
    <?php require_once "footer.php" ?>
</body>
</html>