function checks() {
    let input3 = document.getElementById("breed").value;
    let x = true

    if (!document.getElementById('catradio').checked && !document.getElementById('dogradio').checked) {
        {
            window.confirm("Please choose a pet")
        }
        x = false;
    }
    if (input3.length === 0 && !document.getElementById('idc').checked) {
        window.confirm("Please enter a breed or select Doesn't matter")
        x = false;
    }
    if (!document.getElementById('femaleradio').checked && !document.getElementById('maleradio').checked && !document.getElementById('notmatterradio').checked) {
        {
            window.confirm("Please choose a gender")
        }
        x = false;
    }

    if (x === false) return false;
}
