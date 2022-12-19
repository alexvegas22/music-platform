
var play = "https://img.icons8.com/ios-filled/50/null/play--v2.png";
var pause = "https://img.icons8.com/ios-filled/50/null/pause--v1.png";
var state = 1;
var current_song = document.getElementById("lien"); 
var previous_song = current_song;
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
    }   

    else if(state==2){
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
    current_song = document.getElementById("lien");
    current_song.play();
}

function setSong_String(lien, title, artist, image){
    playing=1;
    checkSong()
    document.getElementById("lien").src=lien;
    document.getElementById("title").innerHTML=title;
    document.getElementById("artist").innerText=artist;
    document.getElementById("image").src=image;
    document.getElementById("play").src="https://img.icons8.com/ios-filled/50/null/pause--v1.png";
    current_song = document.getElementById("lien");
    current_song.play();
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