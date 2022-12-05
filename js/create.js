window.onload = function() {
    window.addEventListener('keyup', (e) => {
        document.getElementById('joinBtn').value = document.getElementById('code-bottom').innerText.split(":")[1].trim();
    })
}