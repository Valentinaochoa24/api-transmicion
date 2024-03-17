<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Ivy Streams</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    body{
  background:#3d215d;
  background:-webkit-linear-gradient(to right, #602f89, #f0cb70, #0F2027) ;
  background: linear-gradient(to right, #3d215d, #203A43, #0F2027);
}

#join-btn{
  position: fixed;
  top:50%;
  left:50%;
  margin-top:-50px;
  margin-left:-100px;
  font-size:18px;
  padding:20px 40px;
}

#video-streams{
  display:grid;
  grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
  height: 90vh;
  width: 1400px;
  margin:0 auto;
}

.video-container{
  max-height: 100%;
  border: 2px solid black;
  background-color: #602f89;
}

.video-player{
  height: 100%;
  width: 100%;
}

button{
  border:none;
  background-color: cadetblue;
  color:#fff;
  padding:10px 20px;
  font-size:16px;
  margin:2px;
  cursor: pointer;
}

#stream-controls{
  display: none;
  justify-content: center;
  margin-top:0.5em;
}
#chat{
  display: none;
  justify-content: right;
  margin-top:0.5em;
}
#stream-wrapper{
  height: 40%;
  width: 65%;
  justify-content: center;
  margin-top:1.5em;
}
@media screen and (max-width:1400px){
  #video-streams{
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      width: 95%;
  }
}
  </style>
</head>

<body>

  <button id="join-btn">Join Stream</button>

  <div id="stream-wrapper">
    <div id="video-streams"></div>

    <div id="stream-controls">
      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button class="btn btn-outline-light" id="leave-btn">Leave Stream</button>
          <button class="btn btn-outline-light" id="mic-btn">Mic On</button>
          <button class="btn btn-outline-light" id="camera-btn">Camera on</button>
        </div>
        <div class="btn-group me-2" role="group" aria-label="Second group">
        <button type="button" class="btn btn-outline-light"><i class="bi bi-person-add">     </i>Solicitar unirse</button>
          <button type="button" class="btn btn-outline-light"><i class="bi bi-plus-lg"> </i>Herramientas</button>
        </div>
        <div class="btn-group" role="group" aria-label="Third group">
          <button type="button" class="btn btn-outline-light"><span><i class="bi bi-pencil-square">  </i></span>Crear apuntes</button>
        </div>
      </div>
    </div>

  </div>


  <!-- Importa Firebase -->
  <script src="https://www.gstatic.com/firebasejs/9.1.0/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.0.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.0.1/firebase-database.js"></script>

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://www.gstatic.com/firebasejs/9.6.3/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.6.3/firebase-database.js"></script>

  <script src="https://4235-191-156-42-121.ngrok-free.app/js/app.js"></script>
  <!-- <script src="https://download.agora.io/sdk/release/AgoraRTC_N.js"></script> -->
  <script src="{{ asset('js/AgoraRTC_N-4.20.1.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>