<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adoption center</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="pageFive.css">
    <script src="TIME.js"></script>

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
            <h1>How to Care for Your Dod</h1>
            <div id="care-para">
                <div class="care-titles">Keep Your Dogs Vet Checkups Up To Date</div>
                <img src="cat-care.jpg" id="cat-care" alt="cat_nature">
                <!-- https://unsplash.com/photos/SlZq1f2tmaM-->
                If your cat is a kitten or is old, the vet visits should be every month or few months but for adult cat,
                one a year should be fine.
                If the cat was adopted at DAWGS & KITTY, the vaccinations should be up-to-date, but they might need
                renewal at a certain date,
                so make sure you talk to you veterinarian to know when it should be done. If your pet was not from DAWGS
                & KITTY, make sure to find out
                if your cat is missing any vaccinations and when is the renewal due. <br>
                It is also important to know if your pet is spayed or not. Female cats do get their period if not spayed
                and can end up pregnant.
                Male cats should also be spayed to avoid impregnating any other female cats, especially if it goes
                outside by itself.
                <div class="care-titles">Make sure your cat is active</div>
                Cats are often seen as lazy animal we do not need to watch over, but they do require some attention.
                Play time or a walk is ideal for cats.
                You should use a harness and slowly make ur cat used to wearing it. Indoor cats are usually better than
                outdoor cats, because there is not risk
                of your cat dying outside, getting lost, fighting or getting adopted by another family who thought it
                was homeless.
                An inactive cat often ends up in a overweight cat which is very bad for their health and their joints.
                For walks in winter, a cat coat
                would be good for them especially if they do not like cold weathers.
                <div class="care-titles">Know your cat's food preference</div>
                For cats, it is important to hydrate their kibbles very well, this can be done by adding some kind of
                broth to their dried kibbles
                or adding wet food in with their kibbles. Following the serving size on the food bag is important to
                avoid making you cat obese. When having multiple
                cats it is also important to make sure they all eat their part and that one cat does not steal other
                cats food. Cats can also be picky
                so finding a brand they like well is important. Some kibble brand have supplements for cat with special
                need or getting more healthy kibbles.
                <br>
                <form action="https://www.hillspet.com/cat-care/nutrition-feeding/toxic-foods-for-cats#:~:text=Some%20of%20the%20most%20toxic,may%20contain%20potentially%20toxic%20ingredients."
                      class="form_button" method="get">
                    <button class="care-buttons" id="care-text-butt" type="button">Bad Food For Cat</button>
                </form>
                <div class="care-titles">Training your cat</div>
                Training cats is not necessary in all situation, but it can be very useful especially if you walk your
                cat on a leash outside.
                Aggressive and territorial cats are not fun to deal with, and it is important to make sure your cat uses
                its litter properly.
                Teaching your cat tricks is also very cool and can be useful in some situations.
                <br>
                <form action="https://www.youtube.com/@CatSchool" class="form_button" method="get">
                    <button class="care-buttons" id="youtube_care" type="button">Learn How to Train Your Cat</button>
                </form>
            </div>
        </div>
        <?php include 'footer.php'; ?>

    </div>
</div>
</body>
</html>