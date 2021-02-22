
$(document).ready(
    function(){
        var pageName = location.href.split("/").slice(-1);
        console.log(pageName);

        if(pageName == "application.php"){
            $('header nav ul li a').removeClass('active');
            $('header nav ul li:nth-child(1) a').addClass('active');
        }

        if(pageName == "partenaire.php"){
            $('header nav ul li a').removeClass('active');
            $('header nav ul li:nth-child(2) a').addClass('active');
        }

        if(pageName == "a-propos.php"){
            $('header nav ul li a').removeClass('active');
            $('header nav ul li:nth-child(3) a').addClass('active');
        }

        if(pageName == "blog.php"){
            $('header nav ul li a').removeClass('active');
            $('header nav ul li:nth-child(4) a').addClass('active');
        }

        if(pageName == "contact.php"){
            $('header nav ul li a').removeClass('active');
            $('header nav ul li:nth-child(5) a').addClass('active');
        }

        $('header .menu-burger').click(
            function(){
                $('header nav').toggleClass('active')
                $('header .menu-burger').toggleClass('active')
            }
        );

    }
);
