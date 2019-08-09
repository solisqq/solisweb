<?php include 'header.php';?>

<div id="me">Kamil Słotwiński</div>
<div class="title">
  Carduino
</div>
<div class="line"></div>
<div class="text-center">
 <div class="carduino">
  <div class="content"><b>Carduino</b> to zdalnie sterowany pojazd komunikujący się z manipulatorem poprzez sieć Bluetooth (możliwość sterowania przez smartphone z systemem android lub komputer PC) z wbudowanymi czujnikami odległości (do wykrywania przeszkód) oraz akumulatorem.
    Jednostkami napędowymi są tu 12-voltowe silniki prądu stałego, które są ze sobą zsynchronizowane regulatorem PID. Urządzenie jest w stanie określić jaką odległość przejechał oraz zatrzymać się przed przeszkodą stojącą na jego torze ruchu. 
    <div style="margin-top:2em;"><img src="img/a3.jpg" alt="carduino" class="thumbnail_img"/></div>
    <div style="margin-top:2em;">
      <h4>Elementy z jakich zbudowany jest pojazd:</h4>
      <ul>
        <li>Kawałek pociętej plexy</li>
        <li>Cztery koła dostępne w większości sklepów modelarskich</li>
        <li>Serwomechanizm pozwalający na obrót czujnika odległości</li>
        <li>Mostek H, sterownik silników (jeden na każdą oś) x2</li>
        <li>Arduino Mega</li>
        <li>Enkoder optyczny służący do mierzenia przebytej odległości</li>
        <li>Cztery silniki 12V prądu stałego</li>
        <li>Dźwiękowy czujnik odległości</li>
      </ul>
    </div>
    <div style="margin-top:2em;">
      Aplikacja do sterowania pojazdem przez bluetooth na smartphone'a: <a href="/wbudowie"><button type="button" class="btn btn-success">Carduino App</button></a>
      <br><br>
      Plik .ino do wgrania na płytkę Mega (wraz z bibliotekami): <a href="/wbudowie"><button type="button" class="btn btn-primary">Arduino program</button></a>
    </div>
  </div>
</div>
</div>
<?php include 'footer.php';?>