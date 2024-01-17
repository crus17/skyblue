document.addEventListener('DOMContentLoaded', function () {
    var video = document.getElementById('myVideo');
    var playButton = document.getElementById('playButton');

    playButton.addEventListener('click', function () {
        if (video.paused) {
            video.play();
            playButton.style.opacity = '0'; // Hide play button when video starts playing
        } else {
            video.pause();
        }
    });

    video.addEventListener('play', function () {
        playButton.style.opacity = '0'; // Hide play button when video starts playing
        video.controls = true; // Show video controls when playing
    });

    video.addEventListener('pause', function () {
        playButton.style.opacity = '1'; // Show play button when video is paused
        video.controls = false; // Hide video controls when paused
    });
});
