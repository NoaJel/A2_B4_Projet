<!DOCTYPE html>
<html>
    <?php require "head.php" ?>
    <title> Create an internship proposal </title>
    <meta charset="description" content="Page where you create internship proposal">
    <link rel="stylesheet" href="./scss/internship_proposal.scss">
    </head>

<body>
        <?php require "header-stu.php"?>
        <main>
                <h1>Create an Internship Proposal</h1>
                <label for="What entreprise ?">What company ?</label>
                <br>
                <input type="text" id="company" placeholder="CESI" autofocus="" required="">
                <br>
                <table>
                        <td><label for="Which domain ?">Which domain ?</label></td>
                        <td><label for="Profile">Profile</label></td>
                        <tr>
                        <td><input type="text" id="domain" placeholder="Domain" required=""></td>
                        <td><input type="text" id="profile" placeholder="Profile" required=""></td>
                </table>
                <br>
                <label for="Description">Description</label>
                <br>
                <textarea  id="Description"></textarea>
                <br>
                <input type="submit" value="Submit" id="sub">
                </form>
        </main> 
        <?php require "footer.php"?>
</body>