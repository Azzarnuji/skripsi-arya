'use strict';
/**
 * navbar toggle
 */
var updatePage = (hashUser) => {
    var currentLocation = window.location
    if (currentLocation.pathname == "/") {
        $('html, body').stop().animate({
                scrollTop: $(`${hashUser}`).offset().top
            })
            // element.scrollIntoView();
    } else if (currentLocation.pathname == "/rental") {
        switch (hashUser) {
            case "#about-we":
                window.location.href = `${currentLocation.origin + '/' + hashUser}`;
                break;
            case "#contact-we":
                window.location.href = `${currentLocation.origin + '/' + hashUser}`;
                break;
        }
    }
}
const overlay = document.querySelector("[data-overlay]");
const navbar = document.querySelector("[data-navbar]");
const navToggleBtn = document.querySelector("[data-nav-toggle-btn]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");

const navToggleFunc = function() {
    navToggleBtn.classList.toggle("active");
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
}

navToggleBtn.addEventListener("click", navToggleFunc);
overlay.addEventListener("click", navToggleFunc);

for (let i = 0; i < navbarLinks.length; i++) {
    navbarLinks[i].addEventListener("click", navToggleFunc);
}



/**
 * header active on scroll
 */

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function() {
    window.scrollY >= 10 ? header.classList.add("active") :
        header.classList.remove("active");
});
$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        loop: false,
        margin: 15,
        nav: true,
        mouseDrag: true,
        touchDrag: false,
        dots: true,
        responsive: {
            0: {
                items: 1,
                autoHeight: true,
                mouseDrag: false,
                touchDrag: true
            },
            600: {
                items: 1,
                autoHeight: true,
                mouseDrag: true,
                touchDrag: true
            },
            1050: {
                loop: true,
                items: 3,
                autoWidth: true,
                autoplay: true
            }
        }
    });
    $('#pesan').on('click', () => {
        var mobil = $('#input-1').val();
        var hari = $('#input-2').val();
        var sopir = $('#input-3').val();
        let text = `Halo Admin Kamandaka Premium Car\nSaya Ingin Rental : \nMobil : ${mobil}\nJumlah Hari : ${hari}\nDengan Sopir : ${sopir}`;
        window.open(`https://api.whatsapp.com/send?phone=62811905053&text=${encodeURIComponent(text)}`);
    })

});