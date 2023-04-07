function check() {
    let input3 = document.getElementById("breed").value;
    let input4 = document.getElementById('age').value;
    let mailz = document.getElementById('mail').value;
    let x = true
    var email = /\S+@\S+\.\S+/

    if (document.getElementById('fname').value.length === 0) {
        window.confirm("Please enter a first name")
        x = false;
    }
    if (document.getElementById('lname').value.length === 0) {
        window.confirm("Please enter a last name")
        x = false;
    }
    if (mailz.length === 0) {
        window.confirm("Please enter an email")
        x = false;
    } else if (!email.test(mailz)) {
        window.confirm("Please enter a valid email")
        x = false;
    }

    if (document.getElementById('phone').value.length === 0) {
        window.confirm("Please enter your phone number")
        x = false;
    } else if (isNaN(document.getElementById('phone').value) || document.getElementById('phone').value.length > 10) {
        window.confirm("Please enter a valid phone number xxxxxxxxxx")
        x = false;
    }
    if (document.getElementById('adress').value.length === 0) {
        window.confirm("Please enter an address")
        x = false;
    }
    if (!document.getElementById('catradio').checked && !document.getElementById('dogradio').checked) {
        {
            window.confirm("Please choose a pet")
        }
        x = false;
    }
    if (document.getElementById('breed').value.length === 0) {
        window.confirm("Please enter a breed")
        x = false;
    }
    if (document.getElementById('age').value.length === 0) {
        window.confirm("Please enter your pets age")
        x = false;
    } else if (isNaN(document.getElementById('age').value)) {
        window.confirm("Please enter your pets age")
        x = false;
    }
    if (!document.getElementById('femaleradio').checked && !document.getElementById('maleradio').checked && !document.getElementById('notmatterradio').checked) {
        window.confirm("Please choose a gender")

        x = false;
    }


    if (x === false) return false;
}