$(document).ready(function() {
    $('.num').counterUp({
        time: 1200
    });
});
const footerYear = document.querySelector('#footer-year');

footerYear.innerHTML = new Date().getFullYear();