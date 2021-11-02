// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("header").style.fontSize = "30px";
        document.getElementById("logo-text").style.fontSize = "30px";
        document.getElementById("logo-text").style.visibility = "hidden";
        document.getElementById("logo-text").style.height = "0";
        document.getElementById("logo-img").style.width = "140px";
        if ($(window).width() < 768) {
            document.getElementById("header").style.justifyContent = "space-between";
            document.getElementById("logo-img").style.width = "100px";
            document.getElementById("logo-img").style.transform = "translate(-30px)";
            // document.getElementById("logo").style.marginLeft = "10px";

        }
    } else {
        if (document.getElementById("myNav").style.width != "100%") {
            if ($(window).width() < 768) {
                document.getElementById("header").style.fontSize = "40px";
                document.getElementById("logo-text").style.fontSize = "40px";
                document.getElementById("header").style.justifyContent = "center";
                document.getElementById("logo-img").style.transform = "translate(0)";
                // document.getElementById("logo").style.marginLeft = "20px";
            }
            else {
                document.getElementById("header").style.fontSize = "50px";
                document.getElementById("logo-text").style.fontSize = "50px";
            }
            // document.getElementById("header").style.fontSize = "50px";
            // document.getElementById("logo-text").style.fontSize = "50px";
            document.getElementById("logo-text").style.visibility = "visible";
            document.getElementById("logo-img").style.width = "250px";
            document.getElementById("logo-text").style.height = "auto";
        }
    }
}

var $page = $('html, body');
$('a[href*="#"]').click(function () {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
    return false;
});