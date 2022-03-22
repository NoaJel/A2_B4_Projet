<!DOCTYPE html>
<html>
    <?php require "head.php" ?>
    <title> Create an internship proposal </title>
    <meta charset="description" content="Page where you create internship proposal">
    <link rel="stylesheet" href="internship-proposal.css">
    </head>

<body>
        <?php require "header-stu.php"?>
        <h1>Create an Internship Proposal</h1>
    
        <td><label>What entreprise ?</label></td>
        <br>
        <label for="What entreprise ?"> <em>*</em></label>
        <input id="nom" placeholder="CESI" autofocus="" required=""><br>
<br>
        <td><label>Which domain ?</label></td>
        <br>
        <label for="Which domain ?"> <em>*</em></label>
        <input id="nom" placeholder="Domain" autofocus="" required=""><br>
<br>
        <td><label>Profile</label></td>
        <br>
        <label for="Profile"> <em>*</em></label>
        <input id="nom" placeholder="Profile" autofocus="" required=""><br>
<br>
        <label for="Description">Description</label><br>
        <textarea id="Description"></textarea>
<br><br>
        <input type="submit" value="Submit">
        </form>
        <?php require "footer.php"?>
</body>