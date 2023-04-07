<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adoption center</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="pageNine.css">
    <script src="TIME.js"></script>
    <script src="acc-js.js"></script>

    <?php
    function write_to_file($acc, $pass)
    {
        $file = "passwords.txt";
        $fd = fopen($file, "a") or die("Unable to open file!");
        $str = $acc . ":" . $pass . PHP_EOL;
        fwrite($fd, $str);
        fclose($fd);

    }

    function read_from_file($acc, $pass, $checkAccount)
    {
        $pass1 = "$pass" . PHP_EOL;
        $filename = "passwords.txt";
        $fd = fopen($filename, "r");
        while (!feof($fd)) {
            $current = fgets($fd);
            $current = explode(":", $current);
            if ($current[0] == $acc && $current[1] == $pass1)
                return (1);
            if ($checkAccount == 1 && $current[0] == $acc)
                return (2);
        }
        fclose($fd);
        return (0);
    }

    function check_account($acc, $pass)
    {
        if (read_from_file($acc, $pass, 1) == 2)
            echo "<br><p id='patate' style='font-size: 23px'>this username is already taken,<br> please try again</p>";
        else {
            write_to_file($acc, $pass);
            echo "<br><p id='patate' style='font-size: 23px'>you are now ready to sign in</p>";
        }
    }

    function check_password($acc, $pass)
    {

        if (read_from_file($acc, $pass, 0) == 1) {
            sessions($acc, 1);
        } else
            echo "<br><p id='patate' style='font-size: 23px'>wrong username or password,<br> please try again</p>";
    }

    function sessions($acc, $num)
    {
        if ($num == 1) {
            session_start();
            $cookie_value = $acc;
            setcookie('user_id', $acc, time() + (86400 * 30));
            echo "<br><p id='patate' style='font-size: 23px'>you are now signed in </p>";

        } else {
            if (isset($_COOKIE['user_id'])) {
                $value = $_COOKIE['user_id'];
                setcookie('user_id', $value, time() - 86000);
                echo "<br><p id='patate' style='font-size: 23px'>you are now signed out</p>";
            } else {
                echo "<br><p id='patate' style='font-size: 23px'>No current session</p>";
            }
        }
    }

    function sign_out()
    {
        sessions("", 0);
    }

    ?>
    <!DOCTYPE html>
    <html>
<body>


</body>
</html>

?>


</head>

<body>
<div id="mainDiv">
    <div id="sideDivReplacement">
        <div id="sideDiv">

            <a aria-current="page" href="HOME.php" class="choices">Home Page</a>
            <a href="PETS.php" class="choices">Browse <br>Available Pets</a>
            <a href="FIND.php" class="choices">Find a dog/cat</a>
            <a href="DCARE.php" class="choices">Dog Care</a>
            <a href="CCARE.php" class="choices">Cat Care</a>
            <a href="REHOMES.php" class="choices">Have a pet<br> to give away</a>
            <a href="CONTACT.php" class="choices">Contact us</a>
            <a href="ACCOUNT.php" class="choices">Sign in/Sign out</a>

        </div>
    </div>
    <div id="smallDiv">
        <?php include 'header.php'; ?>

        <div id="bodys">
            <div id="box">
                <div id="signout">
                    <div id="form">
                        <form action="ACCOUNT.php" method="post">
                            <input class="ans1" id="sobutt" type="submit" name="Submit3" value="Sign out">
                            <?php
                            if (isset($_POST['Submit3'])) {
                                sign_out();
                            }
                            ?>
                        </form>
                    </div>

                </div>
                <div id="signup">
                    <div class="title12">Sign up</div>
                    <div id="form">
                        <form action="ACCOUNT.php" method="post">
                            <input class="ans" id="username2" type="text" name="username2" placeholder="Username"
                                   required><br>
                            <input class="ans" id="password2" type="password"
                                   pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$" name="password2"
                                   placeholder="Password" minlength="4"
                                   title="Must contain at least one number and one letter, and at least 4 or more characters"
                                   required> <br>
                            <input class="ans1" type="submit" name="submit1" value="Sign up" onclick="checks1()">
                            <?php
                            if (isset($_POST['submit1'])) {
                                check_account($_POST['username2'], $_POST['password2']);
                            }
                            ?>
                        </form>

                    </div>
                </div>
                <div id="signin">
                    <div class="title12">Sign in</div>
                    <div id="form">
                        <form action="ACCOUNT.php" method="post">
                            <input class="ans" id="username1" type="text" name="username1" placeholder="Username"
                                   required> <br>
                            <input class="ans" id="password1" type="password" name="password1"
                                   pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$" placeholder="Password" minlength="4"
                                   title="Must contain at least one number and one uppercase and lowercase letter"
                                   required> <br>

                            <input class="ans1" type="submit" name="Submit2" value="Sign in" onclick="checks2()">
                            <?php
                            if (isset($_POST['Submit2'])) {
                                check_password($_POST['username1'], $_POST['password1']);

                            }
                            ?>
                        </form>
                    </div>

                </div>

            </div>

            <?php include 'footer.php'; ?>

        </div>
    </div>
</div>
</body>
</html>