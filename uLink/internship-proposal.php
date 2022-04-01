<?php require "head.php" ?>
    <?php require "./php/internshipAdd.php" ?>
    <meta charset="description" content="Create an internship proposal here!" />
    <title>Create an internship proposal</title>
    <link rel="preload" as="style" href="https://ulinkserver.com/scss/pages/internship-proposal.css" onload="this.rel='stylesheet'" />
    <script src="https://ulinkserver.com/js/header-stu.js" defer></script>
</head>
<body>
        <?php require "header-stu.php"?>
        <main>
                <form action="" method="POST" class="form">
                        <legend><h1>Create an Internship Proposal</h1></legend>
                        <div class="form-field">
                                <label for="company">Which company ?</label>
                                <input name="company_name" type="text" id="company" placeholder="Your company name" autofocus required />
                        </div>
                        <div class="form-field">
                                <label for="skills">Which skills ?</label>
                                <input name="skills" type="text" id="skills" placeholder="skills (e.g. web dev, pentesting, etc.)" required />
                        </div>

                        <div class="form-field">
                                <label for="place_available">place available :</label>
                                <input name="place_available" type="text" id="place_available" placeholder="The number of available place" required />
                        </div>
                        <div class="form-field">
                                <label for="promotions">promotions :</label>
                                <input name="promotions" id="promotions" placeholder="For which promotions ?"></textarea>
                        </div>
                        <button name="insert" type="submit" id="submit-btn">SUBMIT</button>
                </form>
        </main>
        <?php require "footer.php"?>
</body>
</html>