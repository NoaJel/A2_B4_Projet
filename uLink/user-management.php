<?php require_once "head.php"; ?>
<?php require_once "./php/userAdd.php"; ?>
    <meta name="description" content="uLink is an efficient website to find your internship quickly. Go faster with uLink!" />
    <title>uLink - Home Page</title>
    <link rel="preload" as="style" href="https://ulinkserver.com/scss/pages/user-management.css" type="text/css" onload="this.rel='stylesheet'" />
    <script type="text/javascript" src="https://ulinkserver.com/js/verification-mdp.js" defer></script>
</head>
<body>
    <?php require_once "header-stu.php"; ?>
    <main>
        <form class="main-form" method="POST">
            <legend><h1>Create user</h1></legend>
            <div class="form-field">
                <div class="role">
                    <input id="student" type="radio" value="3" name="type" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and $isStudent == true){echo 'checked';} ?>>
                    <label for="student">Student</label>
                    <input id="tutor" type="radio" value="2" name="type" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and $isPilot == true){echo 'checked';} ?>>
                    <label for="tutor">Tutor</label>
                    <input id="other" type="radio" value="5" name="type" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and $isOther == true){echo 'checked';} ?>>
                    <label for="other">Other</label>
                    <input id="delegate" type="checkbox" value="1" name="delegate" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and $isDelegate == true){echo 'checked';} ?>>
                    <label for="delegate">Delegate</label>
                    <input id="administrator" type="checkbox" value="1" name="administrator" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and $isAdmin == true){echo 'checked';} ?>>
                    <label for="administrator">Administrator</label>
                </div>
            </div>
            <div id="perm">
                <input id="sFx2" type="checkbox" value="2" name="sFx2" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx2) and $sFx2 == true){echo 'checked';} ?>>
                <label for="sFx2">sFx2</label>
                <input id="sFx3" type="checkbox" value="3" name="sFx3" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx3) and $sFx3 == true){echo 'checked';} ?>>
                <label for="sFx3">sFx3</label>
                <input id="sFx4" type="checkbox" value="4" name="sFx4" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx4) and $sFx4 == true){echo 'checked';} ?>>
                <label for="sFx4">sFx4</label>
                <input id="sFx5" type="checkbox" value="5" name="sFx5" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx5) and $sFx5 == true){echo 'checked';} ?>>
                <label for="sFx5">sFx5</label>
                <input id="sFx6" type="checkbox" value="6" name="sFx6" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx6) and $sFx6 == true){echo 'checked';} ?>>
                <label for="sFx6">sFx6</label>
                <input id="sFx7" type="checkbox" value="7" name="sFx7" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx7) and $sFx7 == true){echo 'checked';} ?>>
                <label for="sFx7">sFx7</label>
                <input id="sFx8" type="checkbox" value="8" name="sFx8" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx8) and $sFx8 == true){echo 'checked';} ?>>
                <label for="sFx8">sFx8</label>
                <input id="sFx9" type="checkbox" value="9" name="sFx9" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx9) and $sFx9 == true){echo 'checked';} ?>>
                <label for="sFx9">sFx9</label>
                <input id="sFx10" type="checkbox" value="10" name="sFx10" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx10) and $sFx10 == true){echo 'checked';} ?>>
                <label for="sFx10">sFx10</label>
                <input id="sFx11" type="checkbox" value="11" name="sFx11" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx11) and $sFx11 == true){echo 'checked';} ?>>
                <label for="sFx11">sFx11</label>
                <input id="sFx12" type="checkbox" value="12" name="sFx12" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx12) and $sFx12 == true){echo 'checked';} ?>>
                <label for="sFx12">sFx12</label>
                <input id="sFx13" type="checkbox" value="13" name="sFx13" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx13) and $sFx13 == true){echo 'checked';} ?>>
                <label for="sFx13">sFx13</label>
                <input id="sFx14" type="checkbox" value="14" name="sFx14" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx14) and $sFx14 == true){echo 'checked';} ?>>
                <label for="sFx14">sFx14</label>
                <input id="sFx15" type="checkbox" value="15" name="sFx15" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx15) and $sFx15 == true){echo 'checked';} ?>>
                <label for="sFx15">sFx15</label>
                <input id="sFx16" type="checkbox" value="16" name="sFx16" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx16) and $sFx16 == true){echo 'checked';} ?>>
                <label for="sFx16">sFx16</label>
                <input id="sFx17" type="checkbox" value="17" name="sFx17" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx17) and $sFx17 == true){echo 'checked';} ?>>
                <label for="sFx17">sFx17</label>
                <input id="sFx18" type="checkbox" value="18" name="sFx18" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx18) and $sFx18 == true){echo 'checked';} ?>>
                <label for="sFx18">sFx18</label>
                <input id="sFx19" type="checkbox" value="19" name="sFx19" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx19) and $sFx19 == true){echo 'checked';} ?>>
                <label for="sFx19">sFx19</label>
                <input id="sFx20" type="checkbox" value="20" name="sFx20" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx20) and $sFx20 == true){echo 'checked';} ?>>
                <label for="sFx20">sFx20</label>
                <input id="sFx22" type="checkbox" value="22" name="sFx22" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx22) and $sFx22 == true){echo 'checked';} ?>>
                <label for="sFx22">sFx22</label>
                <input id="sFx23" type="checkbox" value="23" name="sFx23" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx23) and $sFx23 == true){echo 'checked';} ?>>
                <label for="sFx23">sFx23</label>
                <input id="sFx24" type="checkbox" value="24" name="sFx24" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx24) and $sFx24 == true){echo 'checked';} ?>>
                <label for="sFx24">sFx24</label>
                <input id="sFx25" type="checkbox" value="25" name="sFx25" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx25) and $sFx25 == true){echo 'checked';} ?>>
                <label for="sFx25">sFx25</label>
                <input id="sFx26" type="checkbox" value="26" name="sFx26" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx26) and $sFx26 == true){echo 'checked';} ?>>
                <label for="sFx26">sFx26</label>
                <input id="sFx32" type="checkbox" value="32" name="sFx32" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx32) and $sFx32 == true){echo 'checked';} ?>>
                <label for="sFx32">sFx32</label>
                <input id="sFx33" type="checkbox" value="33" name="sFx33" <?php if (!empty($_GET['action']) and $_GET["action"] == "update" and isset($sFx33) and $sFx33 == true){echo 'checked';} ?>>
                <label for="sFx33">sFx33</label>
            </div>
            
            <div class="form-field">
                <label for="name">Name</label>
                <input name="name" type="text" id="name" placeholder="user's name" value="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo $line['name'];} ?>">
            </div>
            <div class="form-field">
                <label for="first_name">First name</label>
                <input name="first_name" type="text" id="first_name" placeholder="user's first name" value="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo $line['first_name'];} ?>">
            </div>
            <div class="form-field">
                <label for="campus">Campus</label>
                <input name="campus" type="text" id="campus" placeholder="Which campus ?" value="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo $line['centre'];} ?>">
            </div>
            <div class="form-field">
            <label for="promotion">Choose a promotion:</label>
            <select name="promotion" id="promotion">
                <option value="">--Please choose a promotion--</option>
                <option value="1">A1</option>
                <option value="2">A2</option>
                <option value="3">A3</option>
                <option value="4">A4</option>
                <option value="5">A5</option>
                <option value="0">any</option>
            </select>
            </div>

            <?php if (
                (
                    !empty($_GET['action'])
                    && $_GET["action"] == "update"
                    && $line['id_user'] == $_COOKIE['type']
                ) || empty($_GET['action'])
            ): ?>
                <div class="form-field">
                    <label for="login">Login</label>
                    <input name="login" type="text" id="login" placeholder="user login" required>
                </div>
                <div class="form-field">
                    <label for="password">Password</label>
                    <input name="password" type="password" id="password" placeholder="user password (can be change later)" required>
                </div>
                <div class="form-field">
                    <label for="confirm_password">confirm password</label>
                    <input name="confirm_password" type="password" id="confirm_password" placeholder="confirm password" required>
                </div>
            <?php endif; ?>

            <div class="form-submit">
                <input id="submit_button" type="submit" name="<?php if (!empty($_GET['action']) and $_GET["action"] == "update"){echo "valid_update";} else{echo "insert";}?>" value="Validate →">
            </div>
        </form>
    </main>
    <?php require_once "footer.php" ?>
</body>
</html>