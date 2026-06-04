// ================= HAMBURGER MENU =================

const icon = document.querySelector(".icon");
const iconX = document.querySelector(".icon_x");
const sidebar = document.querySelector(".sidebar");

// buka sidebar
icon.addEventListener("click", () => { 

    sidebar.classList.add("active");

});

// tutup sidebar
iconX.addEventListener("click", () => {

    sidebar.classList.remove("active");

});

// BAGIAN SWIPER

var swiper = new Swiper(".mySwiper", {

    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,

    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints: {

        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },

        1024: {
            slidesPerView: 3,
            spaceBetween: 30
        }

    }

});





// // Codingan bagian produk
//         const icon2 = document.querySelector(".icon");
//         const sidebar2 = document.querySelector(".sidebar");
//         const closeIcon = document.querySelector(".close-icon");
        
//         icon2.addEventListener("click", () => {
//             sidebar2.classList.add("active");
//         });

//         closeIcon.addEventListener("click", () => {
//             sidebar2.classList.remove("active");
//         });
