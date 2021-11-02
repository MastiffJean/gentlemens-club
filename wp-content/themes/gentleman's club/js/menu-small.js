$(document).ready(function () {
    $(".container").click(function () {
        $(".stick").toggleClass(function () {
            if ($(this).hasClass('open')) {
                $(this).removeClass('open');
                $(this).addClass('close');
                document.getElementById("myNav").style.width = "0%";

                // document.getElementById("header").style.fontSize = "50px";

                // document.getElementById("logo-text").style.fontSize = "50px";
                // document.getElementById("logo-text").style.visibility = "visible";
                // document.getElementById("logo-img").style.width = "250px";
                document.getElementById("header").style.fontSize = "30px";
                document.getElementById("logo-text").style.fontSize = "30px";
                document.getElementById("logo-text").style.visibility = "hidden";
                document.getElementById("logo-img").style.width = "140px";
                if ($(window).width() < 768) {
                    document.getElementById("header").style.justifyContent = "space-between";
                    document.getElementById("logo-img").style.width = "100px";
                    document.getElementById("logo-img").style.transform = "translate(-30px)";
                }
                else {
                    console.log('else');
                }
            } else {
                $(this).removeClass('close');
                $(this).addClass('open');
                document.getElementById("myNav").style.width = "100%";


                document.getElementById("header").style.fontSize = "30px";
                document.getElementById("logo-text").style.fontSize = "30px";
                document.getElementById("logo-text").style.visibility = "hidden";
                document.getElementById("logo-img").style.width = "140px";
                if ($(window).width() < 768) {
                    document.getElementById("header").style.justifyContent = "space-between";
                    document.getElementById("logo-img").style.width = "100px";
                    document.getElementById("logo-img").style.transform = "translate(-30px)";
                }
                else {
                    console.log('else');
                }
            }
            return $(this);
        });
    });
});


