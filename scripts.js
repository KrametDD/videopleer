var myVideo = document.getElementById("myVideo");
myVideo.addEventListener("timeupdate", function() {
    localStorage.setItem("videoCurrentTime", myVideo.currentTime);
});
myVideo.currentTime = localStorage.getItem("videoCurrentTime");

const darkModeSwitch = document.getElementById("dark-mode-switch");
darkModeSwitch.addEventListener("change", () => {
    document.body.classList.toggle("dark-mode");
});

var videoSelect = document.getElementById("video-select");
var videoPlayer = document.getElementById("myVideo");

videoSelect.onchange = function() {
    videoPlayer.src = this.value;
    videoPlayer.load();
};


