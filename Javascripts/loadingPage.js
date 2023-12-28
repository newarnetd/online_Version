document.addEventListener("DOMContentLoaded", function () {
    var counteurBare = document.querySelector(".counteurBare");
    var barrScrolle = document.querySelector(".barrScrolle");

    function updateProgressBar() {
        var progress = 0;
        var intervalId = setInterval(function () {
            progress += 13; 
            counteurBare.style.width = progress + "%";

            if (progress >= 100) {
                clearInterval(intervalId);
                setTimeout(function () {
                    barrScrolle.style.display = 'none';
                }, 1000); 
            }
        }, 100);
    }
    updateProgressBar();
});