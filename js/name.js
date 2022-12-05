function saveName() {
    var name = document.getElementById("name-input-text2").value

    document.cookie = "name="+name;
}