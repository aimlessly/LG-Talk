<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <title>LG Talk!</title>

   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="keywords" content="">
   <meta name="author" content="">


   <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('jsLgVKeyboard/LgVKeyboard.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">   
      <script>

      var html5_audiotypes={ //define list of audio file extensions and their associated audio types. Add to it if your specified audio file isn't on this list:
         "mp3": "audio/mpeg",
         "mp4": "audio/mp4",
         "ogg": "audio/ogg",
         "wav": "audio/wav"
      }

      function createsoundbite(sound){
         var html5audio=document.createElement('audio')
         if (html5audio.canPlayType){ //check support for HTML5 audio
            for (var i=0; i<arguments.length; i++){
               var sourceel=document.createElement('source')
               sourceel.setAttribute('src', arguments[i])
               if (arguments[i].match(/\.(\w+)$/i))
                  sourceel.setAttribute('type', html5_audiotypes[RegExp.$1])
               html5audio.appendChild(sourceel)
            }
            html5audio.load()
            html5audio.playclip=function(){
               html5audio.pause()
               html5audio.currentTime=0
               html5audio.play()
            }
            return html5audio
         }
         else{
            return {playclip:function(){throw new Error("Your browser doesn't support HTML5 audio unfortunately")}}
         }
      }

      //Initialize two sound clips with 1 fallback file each:

      var mouseoversound1=createsoundbite("<?php echo base_url('assets/js/mmain.mp3') ?>")
      var mouseoversound2=createsoundbite("<?php echo base_url('assets/js/mcontact.mp3') ?>")
      var mouseoversound3=createsoundbite("<?php echo base_url('assets/js/mgroup.mp3') ?>")
      var mouseoversound4=createsoundbite("<?php echo base_url('assets/js/signout.mp3') ?>")

      </script>

</head>
<body>
