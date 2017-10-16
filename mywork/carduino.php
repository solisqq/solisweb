<?php include 'header.php';?>

<div id="me">Kamil Słotwiński</div>
<div class="title">
  Carduino
</div>
<div class="line"></div>
<div class="text-center">
 <div class="carduino">
  <div class="content"><b>Carduino</b> to zdalnie sterowany pojazd sterowany za pośrednictwem Bluetooth'a (możliwość sterowania z poziomu komórki lub komputera z bluetoothem) z wbudowanymi czujnikami oraz akumulatorem.
    Porusza się za pomocą 12V silników DC, które są ze sobą odpowiednio zsynchronizowane. Mierzy odległość jaką przejechał oraz potrafi zatrzymać się przed przeszkodą (moment hamowania zależny jest
    od odległości od przeszkody oraz prędkości pojazdu). Steruje się nim za pomocą smartphone'a, odpowiednio wysyłając odpowiednie cyfry przez Bluetooth (napisanazostała dedykowana aplikacja na Android'a).
    <div style="margin-top:2em;"><img src="img/a3.jpg" alt="carduino" class="thumbnail_img"/></div>
    <div style="margin-top:2em;">
      <h4>Elementy z jakich zbudowany jest pojazd:</h4>
      <ul>
        <li>Kawałek pociętej plexy</li>
        <li>Cztery koła dostępne w większości sklepów modelarskich</li>
        <li>Silnik Servo pozwalający na obrót czujnika odległości</li>
        <li>Mostek H, sterownik silników (jeden na każdą oś) x2</li>
        <li>Arduino Mega</li>
        <li>Enkoder optyczny służący do mierzenia odległości</li>
        <li>Cztery silniki 12V DC</li>
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