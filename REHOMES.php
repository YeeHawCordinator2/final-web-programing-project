<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adoption center</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="pageSix.css">
    <script src="TIME.js"></script>
    <script src="Rehomes-JS.js"></script>
    <?php
    function read_from_file2($acc, $pass)
    {
        $pass1 = "$pass" . PHP_EOL;
        $filename = "passwords.txt";
        $fd = fopen($filename, "r");
        while (!feof($fd)) {
            $current = fgets($fd);
            $current = explode(":", $current);
            if ($current[0] == $acc && $current[1] == $pass1)
                return (1);
        }
        fclose($fd);
        return (0);
    }

    function check_password2($acc, $pass)
    {

        if (read_from_file2($acc, $pass) == 1) {
            echo "<style>.hide_content {display:contents!important}</style>";
            //session_start();
            $cookie_value = $acc;
            setcookie('user_id', $acc, time() + (86400 * 30));
            echo "<br><p id='patate' style='font-size: 23px'>you are now signed in</p>";
        } else
            echo "<br><p style='font-size: 23px'>wrong username or password,<br> please try again</p>";
    }

    function getcounterNumber()
    {
        $filePath = "allPets.txt";
        $lines = count(file($filePath));

        return ($lines);
    }

    function writetoAllPets($animal, $gender, $goodWith)
    {
        $counter = getcounterNumber() + 1;
        $fd = fopen("allPets.txt", "a") or die("Unable to open file!");
        $str = $counter . ":" . $_COOKIE['user_id'] . ":" . $animal . ":" . strtolower($_POST['breed']) . ":" . $_POST['age'] . ":" . $gender . ":notAvailable.jpg:" . $goodWith . PHP_EOL;
        fwrite($fd, $str);
        fclose($fd);
        echo "<p>Submitted pet</p>";
    }

    ?>
    <script>
        function checks5() {
            let a = document.getElementById("username5").value;
            let x = true

            if (a.search(/\W/) > 0) {
                window.confirm("enter a username with only letters and digits")
                x = false;
            }
            if (x === false) return false;
        }
    </script>
</head>
<body>
<?php
if (!isset($_COOKIE['user_id'])) {
    echo "<style>.hide_content {display:none!important}</style>";
    echo "<style>.login_content {display:contents!important}.ans1:hover{color:#022CFF;background-color:lightcyan ;}</style>";

}
?>
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
        <div id="login-bodys" class="login_content">
            <div style="width:92%; background-color: #c69aff;height: 420px;border-radius: 25px;margin-left: 23px;font-size: 40px;padding-top: 60px;">
                <div style="padding-left:100px;float:left;">
                    <div style="font-size: 40px; padding-top: 20px;padding-bottom: 20px;text-align: center;font-weight: bold;">
                        Sign in
                    </div>
                    <div>
                        <p style='font-size: 23px'>You must be signed in to re-home a pet, thank you</p>
                        <form action="REHOMES.php" method="post">
                            <input id="username5" type="text" name="username5" placeholder="Username" required
                                   style="    height: 35px;border-radius: 25px;font-size: 20px;border: none;background-color: lightcyan">
                            <br>
                            <input type="password" name="password5" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$"
                                   placeholder="Password" minlength="4"
                                   title="Must contain at least one number and one uppercase and lowercase letter"
                                   required
                                   style="    height: 35px;border-radius: 25px;font-size: 20px;border: none;background-color: lightcyan">
                            <br>

                            <input type="submit" name="Submit5" value="Sign in" onclick="checks5()"
                                   style="height: 40px;font-size: 20px;background-color: #022CFF;color: lightcyan;border-radius: 25px;border: none;margin-left: 50px;padding: 10px 40px;">

                            <?php
                            if (isset($_POST['Submit5'])) {
                                check_password2($_POST['username5'], $_POST['password5']);

                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="bodys" class="hide_content">
            <h1> Re-home Pet</h1>
            <form id="rehome_form" method="post">
                <fieldset>
                    <legend>Personal information</legend>
                    <label for="fname">First name</label>
                    <input type="text" id="fname" name="fname"><br> <br>
                    <label for="lname">Last name</label>
                    <input type="text" id="lname" name="lname"> <br><br>

                    <label for="mail">Email</label>
                    <input type="text" id="mail" name="mail"> <br><br>
                    <label for="phone">Phone number</label>
                    <input type="text" id="phone" name="phone"><br><br>
                    <label for="adress">Address</label>
                    <input type="text" id="adress" name="adress"><br>

                </fieldset>
                <br>
                <fieldset>
                    <legend>Pet's Questions</legend>
                    <p> Animal:
                        <label> <input type="radio" name="animal[]"
                                       value="Cat" id="catradio">
                            Cat </label>
                        <label> <input type="radio" name="animal[]"
                                       value="Dog" id="dogradio">
                            Dog </label>
                    </p>
                    <label for="breed">Breed: </label>
                    <input type="text" id="breed" name="breed"><br><br>
                    <label for="age">Age: </label>
                    <input type="text" id="age" name="age">

                    <p> Gender:
                        <label> <input type="radio" name="AGender[]"
                                       value="Female" id="femaleradio">
                            Female </label>
                        <label> <input type="radio" name="AGender[]"
                                       value="Male" id="maleradio">
                            Male </label>
                    </p>

                    <p>Gets Along With (Select as Many as Apply or None if Nothing Applies) <br>
                        <label> <input type="checkbox" name="along[]"
                                       value="Children">
                            Children </label>
                        <label> <input type="checkbox" name="along[]"
                                       value="Cats">
                            Cats</label>
                        <label> <input type="checkbox" name="along[]"
                                       value="Dogs">
                            Dogs </label> <br>

                    </p>
                    <p>
                        <label>
<textarea name="comments" rows="3"
          cols="40" id="informations">
(Tell us about your animal if you want)
</textarea>
                        </label>
                    </p>

                </fieldset>
                <br>
                <input type="reset"
                       value="Reset Form">
                <input type="submit" name="buttonrehome"
                       value="Submit Form" onclick="check()">
                <?php
                if (isset($_POST['buttonrehome'])) {

                    if (isset($_POST['animal'][0]))
                        $animal = $_POST['animal'][0];
                    if (isset($_POST['AGender'][0]))
                        $gender = $_POST['AGender'][0];
                    if (isset($_POST['animal'][1]))
                        $animal = $_POST['animal'][1];
                    if (isset($_POST['AGender'][1]))
                        $gender = $_POST['AGender'][1];
                    $goodWith = "";
                    if (!isset($_POST['along'][0]) && !isset($_POST['along'][1]) && !isset($_POST['along'][2])) {
                        $goodWith = "|";
                    } else {
                        if (isset($_POST['along'][0]))
                            $goodWith .= "|" . $_POST['along'][0];
                        if (isset($_POST['along'][1]))
                            $goodWith .= "|" . $_POST['along'][1];
                        if (isset($_POST['along'][2]))
                            $goodWith .= "|" . $_POST['along'][2];
                    }


                    writetoAllPets(strtolower($animal), strtolower($gender), $goodWith);
                }

                ?>
            </form>


        </div>

        <?php include 'footer.php'; ?>

    </div>
</div>
</body>
</html>