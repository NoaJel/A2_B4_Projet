<?php
if(!isset($_COOKIE["type"]))
{
 header("location:connexion-page.php");
}
?>


<?php require_once "head.php" ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="preload" as="style" href="https://ulinkserver.com/scss/pages/index.css" type="text/css" onload="this.rel='stylesheet'" />
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main>
        <div id="home">
            <div id="text">
                <h1>Welcome to uLink !</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam adipisci laudantium, in numquam dicta consequuntur dolores mollitia voluptas. Ducimus, voluptatum voluptas! Provident quia pariatur cumque. Nemo, doloribus veniam amet, numquam similique officia repudiandae nostrum saepe, qui iusto autem? Iusto laborum aliquam omnis quibusdam aliquid magnam incidunt aspernatur molestiae enim! Recusandae amet beatae libero ipsa assumenda minima earum atque neque cumque error. Itaque culpa rerum voluptatem odit neque impedit nesciunt dolorum qui voluptate placeat, eligendi sed autem ad eveniet non commodi, rem laudantium amet maxime odio, ipsam molestiae nostrum velit. Possimus dolores rerum soluta aliquid vero, dicta nam dignissimos deserunt explicabo!
                </p>
            </div>
            <div id="img">
                <img src="https://ulinkserver.com/images/internship.jpg" alt="photo" id="image">
                <section id="quote">"QUOTE"</section>
            </div>
        </div>
    </main>
    <?php require_once "footer.php" ?>
</body>
</html>