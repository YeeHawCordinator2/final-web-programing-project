<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adoption center</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="pageOne.css">
    <script src="TIME.js"></script>
    <


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
            <div>
                <img id="cat_image" src="cat.jpg" alt="cat Image">
            </div>
            <div>
                <img id="blue_square" src="2-2.png" alt="blue square">
            </div>
            <div class="centered">
                <div id="adopt1">Adopt today <br></div>
                <div id="adopt2"> at DAWGS & KITTY Adoption Center.<br></div>
                We rescue pets and ensure they will have a great life in their new home.
            </div>

            <form action="PETS.php" class="form_button" method="get">
                <button id="home-button" type="submit">Find out more about available pets!</button>
            </form>
            <!--https://unsplash.com/photos/Ea8rP2Ebp_4 -->
            <div>
                <img id="purple_rectangle" src="2-3.jpg" alt="purple rectangle">
            </div>
            <div class="centered_2">
                <div> Our goal is to ensure a happy and good home for all of our pets,
                    we focus on intensive research and making sure the possible owner is a perfect match for our pets.
                    We are a no-kill center, and we will keep every pet until it is adopted into a good home. We also
                    take the pets back if the dog does not adequate.
                    We make sure all of our pets are spayed, up to date on every vaccine and taking any medication if
                    needed.

                    <div id="color_yellow"> Contact us for any further questions</div>
                </div>
            </div>
            <form action="CONTACT.php" class="form_button" method="get">
                <button id="contact-button" type="submit">Contact us!</button>
            </form>
            <div id="specific_animal">
                <h1>Our Newest Recruits </h1></div>


            <div class="image123">
                <div class="imageContainer">
                    <a href="PETS.php"> <img src="Pistache.jpg" id="pistache" alt="dog"> </a>
                    <!--https://unsplash.com/photos/5PVXkqt2s9k-->
                    <div class="pet_text">Meet Pistache, a baby French bulldog.
                        Isn't she the cutest, she loves a long nap under the sun while snoring
                    </div>
                </div>
                <div class="imageContainer">
                    <a href="PETS.php"> <img class="middle-img" src="george.jpg" id="george" alt="cat"></a>
                    <!-- https://unsplash.com/photos/7GX5aICb5i4 -->
                    <div class="pet_text">Meet George, one of our silliest cats.
                        He loves cuddles, attention and play time with his favorite toys
                    </div>
                </div>
                <div class="imageContainer">
                    <a href="PETS.php"><img src="carrot.jpg" id="carrot" alt="dog"></a>
                    <!-- https://unsplash.com/photos/G8cB8hY3yvU -->
                    <div class="pet_text">Meet Carrot, the very energetic golden retriever.
                        His Favorite activity is rolling in the grass
                    </div>
                </div>
                <form action="FIND.php" class="form_button" method="get">
                    <button id="find-pet-button" type="submit">Find a Dog/Cat NOW!</button>
                </form>
            </div>
            <div id="need_help">
                <img src="2-4.2.png" id="ligthBBlue" alt="dog">
                <!--https://unsplash.com/photos/urs_y9NwFcc-->
                <div class="centered_3">
                    <div id="away_title"> Rehome Your Pet</div>
                    If you have to give a pet away, for any reason, we can take it in and ensure he will find a better
                    home.
                    We are a no-kill center and take pride in taking care of our pets.
                    Instead of giving away your pet to your local shelter which is most of the time very full and kill
                    pets that have been there for a lon time, we will ensure the pets conform, safety and work hard
                    towards finding them a great home.

                </div>
            </div>
            <form action="REHOMES.php" class="form_button" method="get">
                <button id="rehome-button" type="submit"> Surrender My Pet</button>
            </form>

            <div id="care">
                <div>
                    <form action="CCARE.php" class="form_button" method="get">
                        <button type="submit" class="care-butt" id="the-left-butt"><img src="2-5.2.png" id="CC"
                                                                                        alt="cat"></button>
                        <div id="CC-BUT">LEARN ABOUT CAT CARE</div>
                    </form>
                    <!-- https://unsplash.com/photos/0cyXsESU9yw-->
                </div>
                <div>
                    <form action="DCARE.php" class="form_button" method="get">
                        <button type="submit" class="care-butt" id="the-right-butt"><img src="2-5.1.png" id="DC"
                                                                                         alt="dog"></button>
                        <div id="DC-BUT">LEARN ABOUT DOG CARE</div>
                    </form>
                    <!--https://unsplash.com/photos/qEO5MpLyOks -->
                </div>
            </div>

            <?php include 'footer.php'; ?>

        </div>
    </div>
</div>
</body>
</html>