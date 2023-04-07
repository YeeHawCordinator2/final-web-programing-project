<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adoption center</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="pageThree.css">
    <script src="TIME.js"></script>
    <script src="FIND-JS.js"></script>
    <?php
    function readfilepets()
    {
        $filename = "allPets.txt";
        $allpets1 = [];
        $fd = fopen($filename, "r");
        while (!feof($fd)) {
            $petChara = [];
            $current = fgets($fd);
            $current = explode(":", $current);
            $petChara[] = $current;
            $allpets1[] = $petChara;
        }
        fclose($fd);

        return ($allpets1);
    }

    function find_pet($animal, $breed, $agemin, $agemax, $gender, array $extra, array $allpets1)
    {
        $goodPets = [];
        $extraAllPets = explode("|", "$allpets1[7]");
        $noextra = false;
        if ($extraAllPets[0] == "" && $extraAllPets[1] == "") $noextra = true;
        $counterMatch = 1;


        if ($allpets1[2] == $animal) {

            if ($allpets1[4] >= $agemin && $allpets1[4] <= $agemax) {
                if ($breed == "dc") {
                    if ($gender == "dc") {
                        if ($extra[0] == "DC") {
                            return 1;
                        } else {
                            for ($j = 0; $j < count($extra); $j++) {
                                for ($k = 0; $k < count($extraAllPets); $k++) {
                                    if ($extra[$j] == $extraAllPets[$k] && !$noextra) {
                                        $counterMatch++;

                                    }
                                }
                            }
                            if ($counterMatch == count($extra)) {
                                return 1;
                            }
                            return 0;
                        }
                    } else if ($allpets1[5] == $gender) {
                        if ($extra[0] == "DC") {
                            return 1;
                        } else {
                            for ($j = 0; $j < count($extra); $j++) {
                                for ($k = 0; $k < count($extraAllPets); $k++) {
                                    if ($extra[$j] == $extraAllPets[$k] && !$noextra) {
                                        $counterMatch++;
                                    }
                                }
                            }
                            if ($counterMatch == count($extra)) {
                                return 1;
                            }
                            return 0;
                        }
                    }
                } else {
                    if ($breed == $allpets1[3]) {
                        if ($gender == "dc") {
                            if ($extra[0] == "DC") {

                                return 1;
                            } else {
                                for ($j = 0; $j < count($extra); $j++) {
                                    for ($k = 0; $k < count($extraAllPets); $k++) {
                                        if ($extra[$j] == $extraAllPets[$k] && !$noextra) {
                                            $counterMatch++;
                                        }
                                    }
                                }
                                if ($counterMatch == count($extra)) {
                                    return 1;
                                }
                                return 0;
                            }
                        } else if ($allpets1[5] == $gender) {
                            if ($extra[0] == "DC") {
                                return 1;
                            } else {
                                for ($j = 0; $j < count($extra); $j++) {
                                    for ($k = 0; $k < count($extraAllPets); $k++) {
                                        if ($extra[$j] == $extraAllPets[$k] && !$noextra) {
                                            $counterMatch++;
                                        }
                                    }
                                }
                                if ($counterMatch == count($extra)) {
                                    return 1;
                                }
                                return 0;
                            }
                        }

                    }
                }

            }


        }
        return 0;
    }

    function print_pets($animal, $breed, $agemin, $agemax, $gender, array $extra)
    {
        $goodPets = [];
        $allpets1 = readfilepets();


        for ($i = 0; $i < count($allpets1) - 1; $i++) {

            $singlePet = [];
            $singlePet[] = $allpets1[$i][0][0];
            $singlePet[] = $allpets1[$i][0][1];
            $singlePet[] = $allpets1[$i][0][2];
            $singlePet[] = $allpets1[$i][0][3];
            $singlePet[] = $allpets1[$i][0][4];
            $singlePet[] = $allpets1[$i][0][5];
            $singlePet[] = $allpets1[$i][0][6];
            $singlePet[] = $allpets1[$i][0][7];
            if (find_pet(strtolower($animal), strtolower($breed), $agemin, $agemax, strtolower($gender), $extra, $singlePet)) {
                $goodPets[] = $allpets1[$i];

            }
        }
        for ($i = 0; $i < count($goodPets); $i++) {
            $singlePet11 = [];
            $animal1 = $goodPets[$i][0][2];
            $breed1 = $goodPets[$i][0][3];
            $age1 = $goodPets[$i][0][4];
            $gender1 = $goodPets[$i][0][5];
            $picture1 = $goodPets[$i][0][6];
            $text1 = $goodPets[$i][0][7];
            $singlePet11 = explode("|", $text1);
            if (strlen($singlePet11[1]) == 0) {
                $info = "I am not ready with children or pets yet";
            } elseif (count($singlePet11) == 2) {
                $info = "I am good with " . $singlePet11[1];
            } elseif (count($singlePet11) == 3) {
                $info = "I am good with " . $singlePet11[2] . " and " . $singlePet11[1];
            } else if (count($singlePet11) == 4) {
                $info = "I am good with " . $singlePet11[1] . ", " . $singlePet11[2] . " and " . $singlePet11[3];
            }
            $str = "Animal: " . $animal1 . "<br>Age: " . $age1 . "<br>Breed: " . $breed1 . "<br> Gender: " . $gender1 . "<br>" . $info;
            echo "<div class='pet' style='margin-bottom: 20px;height: 200px;width: 90%;'> <img id='imag' src='$picture1' alt='pet' class='petPic' style='height: 200px;float:left;'>
<p id='text' style='float:left; margin-left:30px;width: 500px'>$str</p>
</div>";
        }
    }

    ?>
</head>
<body>
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
            <h1>Find a Dog/Cat</h1>
            <form id="find_form" method="post">
                <fieldset>

                    <p> Animal:
                        <label> <input type="radio" name="animal[]"
                                       value="cat" id="catradio">
                            Cat </label>
                        <label> <input type="radio" name="animal[]"
                                       value="dog" id="dogradio">
                            Dog </label>
                    </p>
                    <label for="breed">Breed: </label>
                    <input type="text" id="breed" name="breed">
                    <label> <input type="checkbox" name="idc"
                                   value="DC" id="idc">
                        Doesn't Matter </label>
                    <p>
                        Preferred age:
                        <label for="find_age"><select name="ageAnimal" id="find_age">
                                <option class="option_Find" value="0"> Baby - Less than 2</option>
                                <option class="option_Find" value="1"> Young - 2 to 5</option>
                                <option class="option_Find" value="2"> Adult - 5 to 8</option>
                                <option class="option_Find" value="3"> Old - 8 to 12</option>
                                <option class="option_Find" value="4"> Senior - 12+</option>
                                <option class="option_Find" value="5"> Doesn't Matter</option>
                            </select>
                        </label>
                    </p>
                    <p> Gender:
                        <label> <input type="radio" name="AGender[]"
                                       value="female" id="femaleradio">
                            Female </label>
                        <label> <input type="radio" name="AGender[]"
                                       value="male" id="maleradio">
                            Male </label>
                        <label> <input type="radio" name="AGender[]"
                                       value="DC" id="notmatterradio">
                            Doesn't Matter </label>
                    </p>

                    <p> Needs to Get Along With (Select as Many as Apply or None if Nothing Applies) <br>
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
                </fieldset>
                <br>
                <input type="reset"
                       value="Reset Form">
                <input type="submit" name="submit111"
                       value="Submit Form" onclick="checks()">
                <?php
                if (isset($_POST['submit111'])) {

                    if (isset($_POST['animal'][0]))
                        $animal = $_POST['animal'][0];
                    if (isset($_POST['AGender'][0]))
                        $gender = $_POST['AGender'][0];
                    if (isset($_POST['animal'][1]))
                        $animal = $_POST['animal'][1];
                    if (isset($_POST['AGender'][1]))
                        $gender = $_POST['AGender'][1];
                    $selectOption = $_POST['ageAnimal'];
                    if ($selectOption == 0) {
                        $agemin = 0;
                        $agemax = 2;
                    } else if ($selectOption == 1) {
                        $agemin = 2;
                        $agemax = 5;
                    } else if ($selectOption == 2) {
                        $agemin = 5;
                        $agemax = 8;
                    } else if ($selectOption == 3) {
                        $agemin = 8;
                        $agemax = 12;
                    } else if ($selectOption == 4) {
                        $agemin = 12;
                        $agemax = 100;
                    } else if ($selectOption == 5) {
                        $agemin = 0;
                        $agemax = 100;
                    } else
                        $extra = [];
                    if (!isset($_POST['along'][0]) && !isset($_POST['along'][1]) && !isset($_POST['along'][2]))
                        $extra[] = "DC";
                    else {
                        if (isset($_POST['along'][0]))
                            $extra[] = $_POST['along'][0];
                        if (isset($_POST['along'][1]))
                            $extra[] = $_POST['along'][1];
                        if (isset($_POST['along'][2]))
                            $extra[] = $_POST['along'][2];
                    }

                    if (isset($_POST['idc']))
                        $breed = $_POST['idc'];
                    else
                        $breed = strtolower($_POST['breed']);

                    print_pets($animal, $breed, $agemin, $agemax, $gender, $extra);
                }
                ?>
            </form>
        </div>
        <?php include 'footer.php'; ?>

    </div>
</div>

</body>
</html>