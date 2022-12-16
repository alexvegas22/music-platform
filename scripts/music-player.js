
var play = "https://img.icons8.com/ios-filled/50/null/play--v2.png";
var pause = "https://img.icons8.com/ios-filled/50/null/pause--v1.png";
var state = 1;
var queue = [];
var current_song = document.getElementById("song"); 
var previous_song = current_song;
var next_song ;
function restart(){
    previous_song.load();
    previous_song.play();
    document.getElementById("play").src="https://img.icons8.com/ios-filled/50/null/pause--v1.png";
}
function button(){
    if (state==1){
        document.getElementById("play").src="https://img.icons8.com/ios-filled/50/null/pause--v1.png";
        current_song.play();
        state=2;
    }   

    else if(state==2){
        document.getElementById("play").src="https://img.icons8.com/ios-filled/50/null/play--v2.png";
        current_song.pause();
        state=1;
    }    
}