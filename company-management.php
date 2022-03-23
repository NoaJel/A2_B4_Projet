<?php require_once "head.php" ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="stylesheet" href="./scss/index.css" type="text/css" />
    <script src="./js/header-stu.js" defer></script>
    <script src="./js/script.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" defer></script>
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main>
        <h1>Company</h1>
        <form method="Post">
            <fieldset>
                <label>Name</label><br>
                <input type="text"><br><br>

                <label>business_sector</label><br>
                <input type="text"><br><br>

                <label>Number interns accepted</label><br>
                <input type="text"><br><br>

                <label>Country</label><br>
                <input type="text"><br><br>

                <label>Code postal :</label><br>
				<input type="text" id="codePostal" inputmode="numeric" pattern="[0-9]{5}"><br><br>
                
                <label>Ville</label><br>
                <input type="text"><br><br>
                <!-- <label>Ville :</label><br>
				<select id="selectVille">
					<option id="ville" value ="">...</option>
				</select><br><br> -->

                <label>address</label><br>
                <input type="text"><br><br>

                <label>address number</label><br>
                <input type="text"><br><br>

                <label>Adresse complement</label><br>
                <input type="text"><br><br>

                <input type="submit" value="Validate">
                <input type="reset" value="Reinitialise">

            </fieldset>
        </form>
    </main>
    <!-- <main>
        <h1 class="main-title">Autocomplétion des villes</h1>
        <form class="main-form" action="#" method="post">
            <div class="form-field">
                <label>
                    <h2>Code postal</h2>
                    <input data-postal-code type="text" name="code-postal" inputmode="numeric" pattern="[0-9]{5}" maxlength="5" required />
                </label>
            </div>
            <div class="form-field">
                <label>
                    <h2>Ville</h2>
                    <input data-textfield class="" type="text" name="ville" />
                    <div data-js-result class=""></div>
                </label>
            </div>
            <div class="form-field">
                <button type="submit">Envoyer</button>
            </div>
        </form>
        <div data-form-error-message class="form-error-message .disable-w-transition"></div>
    </main> -->
    <?php require_once "footer.php" ?>
</body>
</html>