<?php require_once "head.php" ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="stylesheet" href="./scss/company-management.css" type="text/css" />
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main>
        <h1>Company Management</h1>
        <p class="flotte">
            <img src="./images/logo.png" 
            width="150"/> </p>

        <form action="" method="POST">
            <label>Name</label>
            <input type="text">
            <label>Domain of activity</label>
            <input type="text">
            <label>Location</label>
            <input type="text">
            <label>Add tags</label>
            <input type="text">
            <label>Description</label>
            <textarea></textarea>
        </form>
    </main>
    <?php require_once "footer.php" ?>
</body>
</html>