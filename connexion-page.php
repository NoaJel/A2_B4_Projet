<?php

include("./php/database_connection.php");

if(isset($_COOKIE["type"]))
{
 header("location:index.php");
}

$message = '';

if(isset($_POST["login"]))
{
 if(empty($_POST["login_email"]) || empty($_POST["login_password"]))
 {
  $message = "<div class='alert alert-danger'>Both Fields are required</div>";
 }
 else
 {
  $query = "SELECT id_user FROM user NATURAL JOIN possess NATURAL JOIN permissions WHERE login=:user_login AND password=:user_password AND permissions='sFx1'";
  $statement = $connect->prepare($query);
  $statement->execute(array('user_login' => $_POST["login_email"], 'user_password' => $_POST["login_password"]));

  $count = $statement->rowCount();
  if($count == 1)
    {
        $result = $statement->fetch();

        setcookie("type", $result["id_user"], time()+3600);
        header("location:index.php");
    }
  
  else
  {
    $message = "<div class='alert alert-danger'>Wrong Email Address or password</div>";
  }
 }
}


?>

<?php require_once "head.php" ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="stylesheet" href="./scss/pages/index.css" type="text/css" />
</head>
<body>
    <?php require_once "header-stu.php" ?>
    <main>
    


       
    <form method="POST">
        <legend><h3>Login to your account!</h3></legend>
        <div class="login-field">
            <label for="login-email"></label>
            <input type="email" name="login_email" class="login-input" id="login-email" placeholder="Email" />
        </div>
        <div class="login-field">
            <label for="login-password"></label>
            <input type="password" name="login_password" class="login-input" id="login-password" placeholder="Password" />
        </div>
        <button type="submit" name="login" class="login-input" id="login-btn">Login</button>
    </form>
    
    
    
    </main>
    <?php require_once "footer.php" ?>
</body>
</html>