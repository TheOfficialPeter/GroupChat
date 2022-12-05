function saveName() {
    var name = document.getElementById("name-input-text2").value

    window.localStorage.setItem("name", name);
}