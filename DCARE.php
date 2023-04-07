<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adoption center</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="pageFour.css">
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
                <img src="dog-care.jpg" id="dog-care" alt="dog running">
                <!-- https://unsplash.com/photos/h7VBJRBcieM-->

                If your dog is a puppy or is old, the vet visits should be every month or few months but for adult dogs,
                one a year should be fine.
                If the dog was adopted at DAWGS & KITTY, the vaccinations should be up-to-date, but they might need
                renewal at a certain date,
                so make sure you talk to you veterinarian to know when it should be done. If your pet was not from DAWGS
                & KITTY, make sure to find out
                if your dog is missing any vaccinations and when is the renewal due. <br>
                It is also important to know if your pet is spayed or not. Female dogs do get their period if not spayed
                and can end up pregnant.
                Male dogs should also be spayed to avoid humping other dog or impregnating any other female dogs.
                <div class="care-titles">Make sure your dog is active</div>
                Big dogs often require more physical activities than small dogs, also different breeds are also more
                active than other dogs.
                The least active dogs need about one walk a day, but more active dogs need maybe 3-4 walks and also play
                time outside, or else
                they will become destructive in the house. It is important to know dogs sleep more than humans so if
                your dog sleep a lots it is completely
                normal. It is very important to give dogs walk especially if they spend a lot of time in cage or alone
                in the house. As long as dog are taught
                to be able to stay at home alone, they should not have an issue staying at home for 8h during the day.
                If they are never taught to stay at home,
                they might develop separation anxiety. It is important that dogs that already have anxiety have someone
                stay at home or have
                another pet with them to avoid them having anxiety all day long.For the winter, short haired dogs should
                wear a coat to not be cold and boots are also recommended
                especially if there is salt on the ground which is bad for their paws.
                <div class="care-titles">Know your dog's food preference</div>
                Some dog breeds like pugs and others that are inbred a lot often have a lot of allergies, a lot of them
                are food allergies,
                if is important to find them foods that they do like in taste and that are also good for them. Some dogs
                get allergic reaction to fish or gluten,
                so it is important to watch your dog after they try knew food, and they are very susceptible to
                allergies.
                It is also important to know foods that are bad for dogs like: chocolate, grapes, salad leaves, bananas.
                Make sure to watch your dog's food consumption and to not over feed them.
                the cup measurements for each meal is usually written on the food bag and overfeeding your dog will lead
                to obese dogs which is very unhealthy.
                <br>
                <form class="form_button"
                      action="https://www.battersea.org.uk/pet-advice/dog-care-advice/toxic-food-dogs" method="get">
                    <button class="care-buttons" id="care-text-butt" type="button">Bad Food For Dogs</button>
                </form>
                <div class="care-titles">Training your dog</div>
                When training your dog, it is important to know that dogs do not understand screaming, so getting upset
                at them and screaming at them will only
                make the sad and not allow it to learn better. It is also important to know what kind of rewards they
                like whether it is snack or physical attention.
                Rewarding your dog with the wrong type of reward will simply give a slower result.
                Dog work like human and learn by retrieving information therefore it is important to practice trick
                everyday so the dog will remember.
                <br>
                <form action="https://www.youtube.com/@zakgeorge" class="form_button" method="get">
                    <button class="care-buttons" id="youtube_care" type="button">Learn How to Train Your Dog</button>
                </form>
            </div>


        </div>
        <?php include 'footer.php'; ?>

    </div>
</div>
</body>
</html>