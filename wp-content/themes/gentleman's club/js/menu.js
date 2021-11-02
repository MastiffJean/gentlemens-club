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
                var elems = document.getElementsByClassName("btn-overlay");

                for (var i = 0; i < elems.length; i++) {
                    elems[i].style.zIndex = 2;
                    elems[i].style.cursor = "pointer";
                }

                if ($(window).width() < 768) {
                    document.getElementById("header").style.fontSize = "40px";
                    document.getElementById("logo-text").style.fontSize = "40px";
                    document.getElementById("header").style.justifyContent = "center";
                    document.getElementById("logo-img").style.transform = "translate(0)";
                }
                else {
                    document.getElementById("header").style.fontSize = "50px";
                    document.getElementById("logo-text").style.fontSize = "50px";
                    console.log('else');
                }
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    document.getElementById("header").style.fontSize = "30px";
                    document.getElementById("logo-text").style.fontSize = "30px";
                    document.getElementById("logo-text").style.visibility = "hidden";
                    document.getElementById("logo-text").style.height = "0";
                    document.getElementById("logo-img").style.width = "140px";
                    document.getElementById("logo").style.marginBottom = "0";
                    if ($(window).width() < 768) {
                        document.getElementById("header").style.justifyContent = "space-between";
                        document.getElementById("logo-img").style.width = "100px";
                        document.getElementById("logo-img").style.transform = "translate(-30px)";
                    }
                }
                else {
                    if (document.getElementById("myNav").style.width != "100%") {
                        document.getElementById("logo-text").style.visibility = "visible";
                        document.getElementById("logo-text").style.height = "auto";
                        document.getElementById("logo-img").style.width = "250px";
                        document.getElementById("logo").style.marginBottom = "2%";
                    }
                }
            } else {
                $(this).removeClass('close');
                $(this).addClass('open');
                document.getElementById("myNav").style.width = "100%";

                document.getElementById("header").style.fontSize = "30px";
                document.getElementById("logo-text").style.fontSize = "30px";
                document.getElementById("logo-text").style.visibility = "hidden";
                document.getElementById("logo-text").style.height = "0";
                document.getElementById("logo-img").style.width = "140px";
                document.getElementById("logo").style.marginBottom = "0";

                var elems = document.getElementsByClassName("btn-overlay");

                for (var i = 0; i < elems.length; i++) {
                    elems[i].style.zIndex = 0;
                    elems[i].style.cursor = "auto";
                }

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


