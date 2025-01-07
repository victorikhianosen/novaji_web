
// HERO
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    // centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


// Partners
var swiper = new Swiper(".myPartners", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-paginations",
        clickable: true,
    },
});

