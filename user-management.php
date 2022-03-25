<?php require_once "head.php" ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="stylesheet" href="./scss/pages/user-management.css" type="text/css" />
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main>
        <form class="main-form" action="" method="POST">
            <legend><h1>Create user</h1></legend>
            <div class="form-field">
                <div class="role">
                    <input type="checkbox" value="student">
                    <label for="student">Student</label>
                    <input type="checkbox" value="delegate">
                    <label for="delegate">Delegate</label>
                    <input type="checkbox" value="tutor">
                    <label for="tutor">Tutor</label>
                </div>
            </div>
            <div class="form-field">
                <label for="name">Name</label>
                <input name="name" type="text" id="name" placeholder="user's name">
            </div>
            <div class="form-field">
                <label for="first-name">First name</label>
                <input name="first-name" type="text" id="first-name" placeholder="user's first-name">
            </div>
            <div class="form-field">
                <label for="campus">Campus</label>
                <input name="campus" type="text" id="campus" placeholder="Which campus ?">
            </div>
            <div class="form-field">
                <label for="login">Login</label>
                <input name="login" type="text" id="login" placeholder="user's login">
            </div>
            <div class="form-field">
                <label for="password">Password</label>
                <input name="Password" type="text" id="Password" placeholder="user's password (can be change later)">
            </div>
            <div class="form-submit">
                <input type="submit" value="Validate →">
            </div>
        </form>
    </main>
    <?php require_once "footer.php" ?>
</body>
</html>