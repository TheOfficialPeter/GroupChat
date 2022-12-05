document.body.style.animationName = "load";
document.body.style.animationDuration = "2s";
document.body.style.animationIterationCount = "infinite";

setTimeout(function() {
    document.body.style.animation = "";
}, 5000)