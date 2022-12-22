var play = "https://img.icons8.com/ios-filled/50/null/play--v2.png";
var pause = "https://img.icons8.com/ios-filled/50/null/pause--v1.png";
var state = 1;
var x = 0;
var playing = 0;

var audio = document.getElementById("lien"); 
var playlist = [["music/Innapad.wav","Inna pad","Blue Mar Ten","https://i1.sndcdn.com/artworks-000004187771-zi0naf-t500x500.jpg"],["music/jazz1.wav","Jazz1","Unknown","images/breakcore.jpg"],["music/jazz2.wav","Jazz2","Unknown","images/breakcore.jpg"],["music/jazz3.wav","Jazz3","Unknown","images/breakcore.jpg"]]

function playSong(audio, callback) {
  audio.play();
  if (callback) {   
    audio.addEventListener('ended', callback);
  }
    /* volume bar */
    let volume = document.querySelector("#volume-control");
    volume.addEventListener("change", function(e){
      audio.volume = e.currentTarget.value / 100;
    })
    /* song progress bar */
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
      audio.paused ? playSong(audio,null) : audio.pause();
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





}

function play_playlist(playlist) {
  var x = 0;
  function recursive_play() {
  
    if (x + 1 === playlist.length) {
      setSong(playlist[x], null);
    } else {
      setSong(playlist[x], function() {
        x++;
        recursive_play();
      });
    }
  }
  recursive_play();
}


function button(){
    if (state==1){
        
        document.getElementById("play").src="https://img.icons8.com/ios-filled/50/null/pause--v1.png";
        audio = document.getElementById("lien");
        playSong(audio,null);
        state=2;
    }else if(state==2){
        document.getElementById("play").src="https://img.icons8.com/ios-filled/50/null/play--v2.png";
        document.getElementById("lien").pause();
        state=1;
    }    
}

function setSong(array, callback ){
    playing=1;
    checkSong()
    document.getElementById("lien").src=array[0];
    document.getElementById("title").innerHTML=array[1];
    document.getElementById("artist").innerText=array[2];
    document.getElementById("image").src=array[3];
    document.getElementById("play").src="https://img.icons8.com/ios-filled/50/null/pause--v1.png";
    audio = document.getElementById("lien");
    playSong(audio,callback);
    
}

function skip(playlist){ 
    x++;
   setSong(playlist[x],null);
}
function previous(){
    x--;
    setSong(playlist[x],null); 
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




