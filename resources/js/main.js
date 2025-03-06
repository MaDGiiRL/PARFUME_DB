// Banner
document.addEventListener("DOMContentLoaded", function() {
    const closeBannerBtn = document.getElementById("closeBannerBtn");
    const announcementBanner = document.getElementById("announcementBanner");

    closeBannerBtn.addEventListener("click", function() {
        announcementBanner.style.display = "none";
    });
});


import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 500,
    easing: 'ease-in-out',
    once: true
});
