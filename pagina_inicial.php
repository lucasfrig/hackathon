<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="http://icons.iconarchive.com/icons/artbees/paradise-fruits/256/Peach-icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <title>Tela inicial</title>
    
    <style type="text/css">
    


    
.video-section .pattern-overlay {
background-color: rgba(71, 71, 71, 0.59);
padding: 110px 0 32px;
min-height: 657px; 
/* Incase of overlay problems just increase the min-height*/
}
.video-section h1, .video-section h3{
text-align:center;
color:#fff;
}
.video-section h1{
font-size:110px;
font-family: 'Buenard', serif;
font-weight:bold;
text-transform: uppercase;
margin: 40px auto 0px;
text-shadow: 1px 1px 1px #000;
-webkit-text-shadow: 1px 1px 1px #000;
-moz-text-shadow: 1px 1px 1px #000;
}
.video-section h3{
font-size: 25px;
font-weight:lighter;
margin: 0px auto 15px;
}
.video-section .buttonBar{display:none;}
.player {font-size: 1px;}


.send {
  background: none;
  color: white;
  border: 1px solid #45981B;
  border-radius: 70px;
  box-shadow: 0 0 0 0 rgba(69, 152, 27, 0.5);
  cursor: pointer;
  font-size: 20px;
  min-height: 65px;
  min-width: 65px;
  outline: none;
  padding: 15px 70px;
  transition: background, padding 100ms ease-in-out;
  
  &.is-loading {
    animation: pulse 0.5s infinite;
    padding: 15px 17px;
  }
  
  &.is-success {
    background: #45981B;
    padding: 15px 17px;
  }
}

svg {
  width: 0;
  height: 0;
}

.is-success svg {
  height: 30px;
  width: 30px;
}

.check {
  stroke-dasharray: 130px 130px;
  stroke-dashoffset: 130px;
  transition: stroke-dashoffset 100ms ease-in-out;
}

.is-loading span,
.is-success span{
  display: none;
}

.is-success .check {
  stroke-dashoffset : 0px;
}

@keyframes pulse {
  0% {
    transform: scale(.3);
  }
  70% {
    transform: scale(1);
    box-shadow: 0 0 0 50px rgba(69, 152, 27, 0);
  }
    100% {
    transform: scale(1.5);
    box-shadow: 0 0 0 0 rgba(69, 152, 27, 0);
  }
}

#reset {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background: none;
  border: 1px solid white;
  font-size: 14px;
  color: white;
  padding: 5px 20px;

</style>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Warming Up -->
<link href='http://fonts.googleapis.com/css?family=Buenard:700' rel='stylesheet' type='text/css'>
<script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>

<!--Video Section-->
<section class="content-section video-section">
  <div class="pattern-overlay">
  <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=twhPnC6R7LI&list=PLOTMh_yK4f2IAJ6ZKc5gOgupmZ4ev4D0d&index=4',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <h1>PEACH.</h1>  
        <h3>Enriquecendo sua vida de forma saudável</h3>
        
      <center> <button type="button" id="send" class="send" onClick="Nova()">
  <svg viewBox="0 0 90.594 59.714">
    <polyline class="check" fill="none" stroke="#FFFFFF" stroke-width="10" stroke-miterlimit="10" points="1.768,23.532 34.415,56.179 88.826,1.768"/>
  </svg>
  <span>Próximo</span>
</button> </center> 
        
	   </div>
      </div>
    </div>
  </div>
</section>
<!--Video Section Ends Here-->




 </head>
  <body>
  
  
  
  <script>
  function Nova()
{
location.href="tela_inicial.php"
}
  
  $(document).ready(function () {

    $(".player").mb_YTPlayer();

});
  
  const btn = document.getElementById('send');

btn.addEventListener('click', function send () {
  btn.classList.add('is-loading');
  
  // fake API call
  setTimeout( () => {
    btn.classList.add('is-success');
    btn.classList.remove('is-loading');
    btn.removeEventListener('click', send);
  }, 4000);
});  


  </script>
  
  </body>
</html>


</html>

