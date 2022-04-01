<?php 
include("./php/companyAdd.php")
?>



<?php require_once "head.php" ?>
    <meta name="description" content="Add or edit a company to uLink." />
    <title>uLink - Company Management</title>
    <link rel="preload" as="style" href="https://ulinkserver.com/scss/pages/company-management.css" type="text/css" onload="this.rel='stylesheet'" />
    <script type="text/javascript" src="https://ulinkserver.com/js/company-management.js" defer></script> 
</head>
<body>
    <?php require_once "header-stu.php" ?>
     <main class=".main">
        <h2>Company Management</h2>
        <form class="main-form" method="POST">
            <div class="form-field">
                <label for="name">Name</label>
                <input name="name" type="text" id="name" placeholder="Your company name" inputmode="text" value="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo $row['name'];} ?>" required />
            </div>
            <div class="form-field">
                <label for="domain">Domain of activity</label>
                <input name="business" type="text" id="domain" placeholder="Domains (e.g. web dev, pentesting, etc.)" inputmode="text" value="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo $row['business_sector'];}?>" required />
            </div>
            <div class="form-field">
                <label for="interns_accepted">Number of interns accepted</label>
                <input name="interns" type="text" id="interns" placeholder="Number of interns that can be hired for one intership" inputmode="numeric" value="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo $row['nb_interns_accepted'];}?>" pattern="[0-9]{*}" />
            </div>
            <div class="form-field">
                <label for="country">Country</label>
                <input name="country" type="text" id="country" placeholder="" inputmode="text" value="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo $row['country'];}?>" required />
            </div>
            <div class="form-field">
                <label for="address">Address</label>
                <input name="address" type="text" id="address" placeholder="Street, Road, Avenue, etc." value="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo $row['street'];}?>" required />
            </div>
            <div class="form-field">
                <label for="addressNumber">Address number</label>
                <input name="number" type="text" id="addressNumber" placeholder="" value="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo $row['street_number'];}?>" required />
            </div>
            <div class="form-field">
                <label for="addressComplement">Address complement</label>
                <input name="complement" type="text" id="addressComplement" placeholder="" value="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo $row['address_complement'];}?>"/>
            </div>
            <div class="form-field">
                <label for="postal-code">Postal Code</label>
                <input name="postal" type="text" id="postal-code" placeholder="5 numbers" pattern="[0-9]{5}" maxlength="5" value="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo $row['postal_code'];}?>" required />
            </div>
            <div class="form-field">
                <label for="city">City</label>
                <select name="city" id="city">
                    <option>-- Enter your postal code first (autocompletion) --</option>
                </select>
            </div>
            <div class="form-submit">
                <button name="insert" type="submit" name="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo "valid_update";} else{echo "insert";}?>" id="submit-btn">Validate &rarr;</button>
            </div>
        </form>
    </main> 
    <?php require_once "footer.php" ?>
</body>
</html>