<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adoption center</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="pageTwo.css">
    <script src="TIME.js"></script>
    <script src="pets-js.js"></script>

</head>
<body onload="makeFormat()">
<div id="mainDiv">
    <div id="sideDivReplacement">
        <div id="sideDiv">

            <a href="HOME.php">Home Page</a>
            <a href="PETS.php">Browse <br>Available Pets</a>
            <a href="FIND.php">Find a dog/cat</a>
            <a href="DCARE.php">Dog Care</a>
            <a href="CCARE.php">Cat Care</a>
            <a href="REHOMES.php">Have a pet<br> to give away</a>
            <a href="CONTACT.php">Contact us</a>
            <a href="ACCOUNT.php" class="choices">Sign in/Sign out</a>

        </div>
    </div>
    <div id="smallDiv">
        <?php include 'header.php'; ?>

        <div id="bodys">
            <h1>Browse available pets</h1>
            <div id="petsSquares">
            </div>
            <?php include 'footer.php'; ?>

        </div>
    </div>
</div>
</body>
</html>