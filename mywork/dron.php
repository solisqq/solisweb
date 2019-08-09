<?php include 'header.php';?>
<div id="me">Kamil Słotwiński</div>
<div class="title">
Kwadrokopter
</div>
<div class="line"></div>
<div class="text-center">
 <div class="carduino">
  <div class="content"><b>Kwadrokopter</b> to czterowirnikowy statek bezzałogowy sterowany za pośrednictwem aparatury FrSky Taranis QX7.
    Za wytworzenie ciągu nośnego odpowiadają tu cztery jednostki napędowe skłądające się ze śmigła 1050 oraz bezszczotkowego silnika prądu stałego 2212.
    Informacje o nachyleniu statku względem wektora przyspieszenie grawitacyjnego są otrzymywane z fuzji danych akcelerometru oraz żyroskopu.
    Dane te zanim trafią do regulatora PID są odpowiednio przetworzone przez filtry niskoprzepustowe (np. Butterworth), a za fuzję odpowiada filtr komplementarny. 
    
    <div style="margin-top:2em;">
      Kod oraz zdjęcia na githubie: <a target="_blank" rel="noopener noreferrer" href="https://github.com/solisqq/FC_FIN"><button type="button" class="btn btn-success">GitHub</button></a>
    </div>

    <div style="margin-top:2em;"><img src="img/d2.jpg" alt="carduino" class="thumbnail_img"/></div>
    <div style="margin-top:2em;"><img src="img/a1.jpg" alt="carduino" class="thumbnail_img"/></div>
    <div style="margin-top:2em;">
      <h4>Elementy z jakich zbudowany jest pojazd:</h4>
      <ul>
        <li>Sparkfun Thing ESP32</li>
        <li>MPU9250 GY-91 (acel,gyro,magnet,baro) 10DOF</li>
        <li>Rama S500</li>
        <li>4x Silniki BLDC - 2212</li>
        <li>4x BlHeli32 ESC HGLRC (max 28A)</li>
        <li>Płytka rozprowadzająca prąd</li>
        <li>2x śgmigła CW oraz 2x śmigła CCW 1050</li>
        <li>Akumulator LiIon 4S2P (8x 18650 2200mAh)</li>
        <li>Odbiornik FrSky D4R-II</li>
        <br><br>  asdfas
      </ul>
  </div>
  </div>
</div>
</div>
<?php include 'footer.php';?>