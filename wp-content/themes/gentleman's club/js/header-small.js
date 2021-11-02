// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("header").style.fontSize = "30px";
        document.getElementById("logo-text").style.fontSize = "30px";
        document.getElementById("logo-text").style.visibility = "hidden";
        document.getElementById("logo-img").style.width = "140px";
        if ($(window).width() < 768) {
            document.getElementById("header").style.justifyContent = "space-between";
            document.getElementById("logo-img").style.width = "100px";
            document.getElementById("logo-img").style.transform = "translate(-30px)";
            // document.getElementById("logo").style.marginLeft = "10px";
        }
    } else {
        if (document.getElementById("myNav").style.width != "100%") {
            document.getElementById("header").style.fontSize = "30px";
            document.getElementById("logo-text").style.fontSize = "30px";
            document.getElementById("logo-text").style.visibility = "hidden";
            document.getElementById("logo-img").style.width = "140px";
            if ($(window).width() < 768) {
                document.getElementById("header").style.justifyContent = "space-between";
                document.getElementById("logo-img").style.width = "100px";
                document.getElementById("logo-img").style.transform = "translate(-30px)";
            }
        }
    }
}