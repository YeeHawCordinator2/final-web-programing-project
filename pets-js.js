const list = [
    {
        name: "Pistache",
        imglink: "Pistache.jpg",
        animal: "dog",
        age: 5,
        gender: "female",
        breed: "Pug",
        info: "good with small children and cats"
    },
    {
        name: "George",
        imglink: "george.jpg",
        animal: "cat",
        age: 2,
        gender: "male",
        breed: "American Wirehair",
        info: "currently getting litter trained"
    },
    {
        name: "Carrot",
        imglink: "carrot.jpg",
        animal: "dog",
        age: 7,
        gender: "male",
        breed: "Golden Retriever",
        info: "good with small dogs"
    },
    {
        name: "Nectar",
        imglink: "nectar.jpg",
        animal: "cat",
        age: 1,
        gender: "female",
        breed: "Bengal",
        info: "good with any animals or kids"
    },
    {
        name: "Peanut Butter",
        imglink: "Peanut butter.jpg",
        animal: "dog",
        age: 10,
        breed: "female",
        bread: "Dachshund",
        info: "good with small animals"
    },
    {name: "Luffy", imglink: "luffy.jpg", animal: "cat", age: 15, gender: "male", breed: "Mixed", info: "children only"}
];
//https://unsplash.com/photos/mJaD10XeD7w
//https://unsplash.com/photos/JBrbzg5N7Go
//https://unsplash.com/photos/7AIDE8PrvA0
function makeFormat() {

    const bigDiv = document.createElement("div");
    bigDiv.className = "petsHolder";

    for (let i = 1; i <= rows; i++) {
        const newDiv = document.createElement("div");
        for (let j = counter; j <= colums; j++) {
            const newDiv1 = document.createElement("div");

            var imag = document.createElement("img");
            imag.src = list[j - 1].imglink;
            imag.style.width = "320px";

            var para = document.createElement("p");


            var butt = document.createElement("button");
            butt.innerHTML = "Interested";
            butt.className = "interestedBut"
            butt.style.backgroundColor = "#001580";
            butt.style.textAlign = "center";
            butt.style.fontSize = "13px";
            butt.style.color = "white";
            butt.style.padding = "10px 15px";
            butt.style.border = "none";
            butt.style.borderRadius = "35px";


            para.innerHTML = "Hello, my name is " + list[j - 1].name + " and I am a " + list[j - 1].age + " years old " + list[j - 1].animal +
                ". I am a " + list[j - 1].gender + " " + list[j - 1].breed + " and I am " + list[j - 1].info + "."

            newDiv1.appendChild(imag);
            newDiv1.appendChild(para);
            newDiv1.appendChild(butt);
            counter++;
            newDiv.appendChild(newDiv1);

            if (j === 3 || j === 6) break;
        }
        bigDiv.appendChild(newDiv);
    }
    document.getElementById("petsSquares").appendChild(bigDiv);

}


/*
Create a list with all pets and their shit and image
create format - > loops for each pet
do document write and 3 per row
 */