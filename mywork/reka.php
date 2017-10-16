<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kamil Słotwiński</title>

    <!-- Czcionka-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&amp;subset=latin-ext" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Mój CSS -->
    <link href="css/main.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Strona główna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="desktop.php">Aplikacje desktopowe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mikro.php">Programowanie mikrokontrolerów</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wbudowie.php">Aplikacje mobilne</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wbudowie.php">Strony oraz grafika</a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="me">Kamil Słotwiński</div>
    <div class="text-center">
        <div class="carduino">
        Ramie robota to w dużym stopniu autonomiczny wysięgnik pozwalający chwytać przedmioty w odległości nie większej jak 30cm. Jest zbudowany z 6 silników pozwalających podnieść masę do 10kg.
        Do jego działania skonstruowałem dodatkowo zasilacz warsztatowy, pozwalający pracować z dużym obciążeniem (maks pobór prądu każdego z silnika to około 2.5 ampera). Konstrukcja została wykonana
        z twardszego plastiku, który jest lekki oraz dosyć wytrzymały.
        <div style="margin-top:2em;"><img src="../second/img/arm.jpg" alt="carduino" class="thumbnail_img"/></div>
        <div style="margin-top:2em;">
            <h4>Elementy z jakich zbudowany jest pojazd:</h4>
            <ul>
                <li>Arduino Mega</li>
                <li>Powycinane bloki z twardego plastiku</li>
                <li>Sześć serwomechanizmów TowerPro MG-945</li>
            </ul>
            <h4>Elementy z jakich zbudowany jest zasilacz:</h4>
            <ul>
                <li>Zasilacz BeQuiet 550W</li>
                <li>Obudowa od starego zasilacz (Modecom)</li>
                <li>Przełączniki, złączki bananowe, laboratoryjne itp</li>
            </ul>
        </div>
        <div style="margin-top:2em;">
            Link do filmiku jak wykonać własny zasilacz warsztatowy: <a href="https://www.youtube.com/watch?v=GgxlA756Vj8"><button type="button" class="btn btn-success">YouTube film</button></a>
        </div>
    </div>
    </div>
    
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
