<?php include 'header.php';?>
<div id="me">Kamil Słotwiński</div>
<div class="title">
  Laser tag
</div>
<div class="line"></div>
<div class="text-center">
  <div class="carduino">
    <b>Laser Tag</b> to zazwyczaj zespołowa zabawa podobna do paintballa, aczkolwiek naszą amunicją nie są kulki, a podczerwień. To znaczy, że w momencie naciśnięcia przez nas spustu, zamiast kulki wylatuje
    z lufy sygnał, wiadomość nadana w podczerwieni (dioda). Odpowiednia soczewka zwiększa zasięg diody oraz celność, bo o ile pilotem celnie trafić nie trzeba, tak pistoletem już tak.
    Po celnym trafieniu w kamizelke przeciwnika, która jest wyposażona w odbiorniki IR, wysyłany jest sygnał do centralki, że dany gracz zginął. Projekt póki co jest niedokończony,
    ponieważ nie wykonałem jeszcze do końca kamizelki która odbiera sygnał oraz przesyła wiadomość do centralki. Wykonany jest już pistolet i centrala która odbiera wiadomości na temat tego co się dzieje
    w grze. Centrala ma za zadanie sumowanie wyników.
    <div style="margin-top:2em;"><img src="img/lasertaggun.jpg" alt="carduino" class="thumbnail_img"/><img src="img/lasertagmain.jpg" alt="carduino" class="thumbnail_img"/></div>
    <div style="margin-top:2em;">
      <h4>Elementy z jakich zbudowany jest pistolet:</h4>
      <ul>
        <li>Obudowa z zapalniczki w kształcie pistoletu/ pistoletu na kulki.</li>
        <li>Laser 5v</li>
        <li>Dioda IR (nadawcza)</li>
        <li>Arduino Nano</li>
        <li>Buzzer (głośniczek)</li>
        <li>Power Bank potrzebny do zasilania Arduino</li>
        <li>Odpowiednie przyciski oraz przełączniki</li>
      </ul>
      <h4>Elementy z jakich zbudowana jest centralka:</h4>
      <ul>
        <li>Obudowa wykonana z drewna</li>
        <li>Wyświetlacz LCD, 16x2</li>
        <li>Moduł sieciowy nRF24L01 (2.4ghz)</li>
        <li>Joystick analogowy służący do sterowania</li>
        <li>Dioda RGB</li>
        <li>Arduino Mega</li>
      </ul>
    </div>
    <div style="margin-top:2em;">
      Link do opisu gry: <a href="https://pl.wikipedia.org/wiki/Laser_tag"><button type="button" class="btn btn-success">Wikipedia Link</button></a>
    </div>
  </div>
</div>
<?php include 'footer.php';?>
