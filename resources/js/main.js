// Banner
document.addEventListener("DOMContentLoaded", function() {
    const closeBannerBtn = document.getElementById("closeBannerBtn");
    const announcementBanner = document.getElementById("announcementBanner");

    closeBannerBtn.addEventListener("click", function() {
        announcementBanner.style.display = "none";
    });
});