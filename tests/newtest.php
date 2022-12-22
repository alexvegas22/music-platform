<!doctype html>
<html>

<head>
  <script>
    //This plays a file, and call a callback once it completed (if a callback is set)

    function play(audio, callback) {
      audio.play();
      if (callback) {
        //When the audio object completes it's playback, call the callback
        //provided      
        audio.addEventListener('ended', callback);
      }
    }

    //Changed the name to better reflect the functionality
    function play_playlist(playlist) {
      var x = 0;
      function recursive_play() {
      
        if (index + 1 === playlist.length) {
          play(playlist[x], null);
        } else {
          play(playlist[x], function() {
            x++;
            recursive_play();
          });
        }
      }
      recursive_play();
    }

    function play_all() {
      play_sound_queue([new Audio("http://www.smldesign.com/1.wav"), new Audio("http://www.smldesign.com/2.wav"), new Audio("http://www.smldesign.com/3.wav")]);
    }
  </script>
</head>

<body>
  <a href="javascript:;" onclick="play_all();">PLAY THIS!</a>
</body>

</html>