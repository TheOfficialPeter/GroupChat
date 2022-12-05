window.onload = function() {
    let pins = [];

    let pinsFound = document.getElementsByClassName('pin-input-text');

    for (let x = 0; x < pinsFound.length; x++) {
        pins.push(pinsFound[x]);
    }

    var counter = 0;
    window.addEventListener('keydown', (e) => {
        if (counter < 5) {
            var key = e.key;

            pins[counter].style.color = "black";
            pins[counter].innerText = key;

            document.getElementById('joinBtn').value += key;
            
            counter += 1;
        }
    })
}

function savePin() {
    window.localStorage.setItem("pin", document.getElementById("joinBtn").value)
}