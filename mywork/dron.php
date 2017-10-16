<?php include 'header.php';?>
<div id="me">Kamil Słotwiński</div>
<div class="title">
  Dron
</div>
<div class="line"></div>
<div class="text-center">
 <div class="carduino">
  <div class="content"><b>Dron</b> to zdalnie sterowany pojazd latający sterowany za pośrednictwem pilota którego sam skonstruowałem na podstawie obudowy gamepada od PlayStation, mikrokontrolera oraz radia 2.4GHz.
    Porusza się za pomocą trójfazowych silników bezszczotkowych, które są ze sobą odpowiednio zsynchronizowane. Utrzymuje pozycję za pomocą regulatora PID odpowiednio sprzężonego z akcelerometrem, którego pomiary są odpowiednio filtrowane przez rozszerzony algorym Kalmaana.
    <div style="margin-top:2em;"><img src="img/a1.jpg" alt="carduino" class="thumbnail_img"/></div>
    <div style="margin-top:2em;">
      <h4>Elementy z jakich zbudowany jest pojazd:</h4>
      <ul>
        <li>Specjalna rama dostępna na zamówienie</li>
        <li>4x Silniki bezszczotkowe</li>
        <li>4x ESC, regulatory prędkości</li>
        <li>Płytka rozprowadzająca prąd</li>
        <li>Arduino Nano</li>
        <li>2x śgmigła CW oraz 2x śmigła CCW</li>
        <li>Akumulator Litowo-Jonowo-Polimerowy</li>
        <li>Żyroskop, akcelerometr na jednym module</li>
        <li>Nadajnik/Odbiornik radiowy 2.4GHz</li>
      </ul>

      <h4>Elementy z jakich zbudowany jest pilot:</h4>
      <ul>
        <li>Obudowa po GamePadzie</li>
        <li>Nadajnik/Odbiornik radiowy 2.4GHz</li>
        <li>Dioda sygnalizująca różne stany</li>
        <li>Gałki z obudowy z przyciskami</li>
        <li>Arduino Nano</li>
        <li>Bateria/Powerbank 5V pod usb</li>
      </ul>
    </div>
  </div>
</div>
</div>
<?php include 'footer.php';?>