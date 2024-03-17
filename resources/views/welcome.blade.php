<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Video Chat</title>
  <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <style>
    * {
      font-family: 'Oxygen', sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
    background-color: black;
    /* Fondo con una imagen
    background-image: url('C:/Users/acorr/laragon/www/codicon/api/resources/img/background.jpeg');
    /* Centrar y hacer que la imagen cubra todo el fondo */
    background-size: cover;
    background-position: center;
    /* Fijar la imagen para que no se desplace con el contenido */
    background-attachment: fixed;
    }

    #app {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .button {
      padding: 10px 20px;
      background-color: #ffffff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>

<body >

    <div id="app">
        <!-- <button class="button" @click="transmissionStarted = true">Iniciar Transmisión</button> -->
        <!-- <video-chat v-if="transmissionStarted = true"></video-chat> -->
        <video-chat></video-chat>
    </div>
    <div>
        <button onclick="stopTransmission()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" id="detener">Detener Transmisión</button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script> 
function stopTransmission() {
    console.log(room);
}
</script>
</body>

</html>
