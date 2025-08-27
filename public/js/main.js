document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger');
    const navToggler = document.querySelector('.nav-toggler');
    const mobileMenu = document.querySelector('.mobile-menu');

    navToggler.addEventListener('click', function () {
        mobileMenu.classList.toggle('active');
        document.body.classList.toggle('disabled');
        hamburger.classList.toggle('open');
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");

    if (form) {
        form.reset();
    }
});

window.addEventListener('DOMContentLoaded', () => {
    const checkbox = document.getElementById('gdpr');
    if (checkbox) {
        checkbox.checked = false;
    }
});

const defaultSliderSettings = {
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    autoplay: false,
}

$('.image-slider').slick({
    prevArrow: $('.arrow-left'),
    nextArrow: $('.arrow-right'),
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    autoplay: false,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
    ]
});
