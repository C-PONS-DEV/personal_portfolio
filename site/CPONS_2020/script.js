$(document).ready(function(){
    $(window).scroll(function(){
        // barre de navigation collante sur le script de défilement
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        
        // bouton de défilement afficher / masquer le script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        // suppression du défilement fluide lors du clic du bouton coulissant vers le haut
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function(){
        // appliquer à nouveau un défilement fluide sur les éléments de menu cliquez
        $('html').css("scrollBehavior", "smooth");
    });

    // menu bascule / script de barre de navigation
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    var typed = new Typed(".typing-2", {
        strings: ["développeur web", "freelance","blogger", "front-end web développeur"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    // script de carrousel de hibou
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
    const footerYear = document.querySelector('#footer-year');

    footerYear.innerHTML = new Date().getFullYear();
});
