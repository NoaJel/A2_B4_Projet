<!DOCTYPE html>
<html>
    <?php require "head.php" ?>
    <title> Create an internship proposal </title>
    <meta charset="description" content="Page where you create internship proposal">
    <link rel="stylesheet" href="internship_proposal.scss">
    </head>

<body>
        <?php require "header-stu.php"?>
        <main>
                <h1>Create an Internship Proposal</h1>

                <td><label>What entreprise ?</label></td>
                <br>
                <label for="What entreprise ?"> <em>*</em></label>
                <input id="nom" placeholder="CESI" autofocus="" required="">
                <td><label>Which domain ?</label></td>
                <br>
                <label for="Which domain ?"> <em>*</em></label>
                <input id="nom" placeholder="Domain" autofocus="" required="">
                <td><label>Profile</label></td>
                <br>
                <label for="Profile"> <em>*</em></label>
                <input id="nom" placeholder="Profile" autofocus="" required="">
                <label for="Description">Description</label>
                <br>
                <input type="text" id="Description">
                <input type="submit" value="Submit">
                </form>
        </main> 
        <?php require "footer.php"?>
</body>