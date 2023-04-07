function checks2() {
    let a = document.getElementById("username1").value;
    let x = true

    if (a.search(/\W/) > 0) {
        window.confirm("enter a username with only letters and digits")
        x = false;
    }
    if (x === false) return false;
}

function checks1() {
    let c = document.getElementById("username2").value;
    x = true;

    if (c.match(/[^a-zA-Z0-9]/)) {
        window.confirm("enter a username with only letters and digits")
        x = false;
    }
    if (x === false) return false;

}