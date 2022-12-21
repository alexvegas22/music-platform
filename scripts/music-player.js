
var play = "https://img.icons8.com/ios-filled/50/null/play--v2.png";
var pause = "https://img.icons8.com/ios-filled/50/null/pause--v1.png";
var state = 1;
var audio = document.getElementById("lien"); 
var previous_song = audio;
var next_song =document.getElementById("next");
var x = 0;
var playing = 0;

var queue = [["music/Inna pad.wav","Inna pad","Blue Mar Ten","https://i1.sndcdn.com/artworks-000004187771-zi0naf-t500x500.jpg"],["music/jazz1.wav","Jazz1","Unknown","images/breakcore.jpg"],["music/jazz2.wav","Jazz2","Unknown","images/breakcore.jpg"],["music/jazz3.wav","Jazz3","Unknown","images/breakcore.jpg"]]
function restart(){
    previous_song.load();
    previous_song.play();
    document.getElementById("play").src="https://img.icons8.com/ios-filled/50/null/pause--v1.png";
}
function button(){
    if (state==1){
        
        document.getElementById("play").src="https://img.icons8.com/ios-filled/50/null/pause--v1.png";
        document.getElementById("lien").play();
        state=2;
    }else if(state==2){
        document.getElementById("play").src="https://img.icons8.com/ios-filled/50/null/play--v2.png";
        document.getElementById("lien").pause();
        state=1;
    }    
}

function setSong(array){
    playing=1;
    checkSong()
    document.getElementById("lien").src=array[0];
    document.getElementById("title").innerHTML=array[1];
    document.getElementById("artist").innerText=array[2];
    document.getElementById("image").src=array[3];
    document.getElementById("play").src="https://img.icons8.com/ios-filled/50/null/pause--v1.png";
    audio = document.getElementById("lien");
    audio.play();
}

function skip(){ 
    x++;
   setSong(queue[x]);
}
function previous(){
    x--;
    setSong(queue[x]); 
}

function checkSong(){
    if (playing == 0){
        $("#song-container").hide();
        $("#no-song").show();
    } 
    if (playing == 1){
        $("#no-song").hide();
        $("#song-container").show();  
    }
}

function removeSong(){
    playing = 0;
    checkSong();
    document.getElementById("lien").pause();    
}

function queuePlaylist(array){

}

let volume = document.querySelector("#volume-control");
volume.addEventListener("change", function(e) {
audio.volume = e.currentTarget.value / 100;})


const playBtn = document.getElementById("play");
const progressEl = document.querySelector('input[type="range"]');
let mouseDownOnSlider = false;

audio.addEventListener("loadeddata", () => {
  progressEl.value = 0;
});
audio.addEventListener("timeupdate", () => {
  if (!mouseDownOnSlider) {
    progressEl.value = audio.currentTime / audio.duration * 100;
  }
});
audio.addEventListener("ended", () => {
  playBtn.src = play;
});

playBtn.addEventListener("click", () => {
  audio.paused ? audio.play() : audio.pause();
  playBtn.src = audio.paused ? play : pause;
});

progressEl.addEventListener("change", () => {
  const pct = progressEl.value / 100;
  audio.currentTime = (audio.duration || 0) * pct;
});
progressEl.addEventListener("mousedown", () => {
  mouseDownOnSlider = true;
});
progressEl.addEventListener("mouseup", () => {
  mouseDownOnSlider = false;
});