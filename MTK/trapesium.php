<?php include 'header.php'; ?>

<h1 class="w3-center">Trapesium</h1>
    </div>
    <div class="w3-card-4">
  <div class="w3-container w3-blue-gray w3-center">
  <img src="img/trapesium.jpg">
  </div>
  <div class="w3-container">      
      <table class="w3-table w3-striped">
          <tr>
          <h3 class="w3-text-blue-gray">Rumus</h3>
          </tr>
          <tr>
              <td><h4 class="w3-text-blue-gray">Luas</h4></td>
              <td><h4 class="w3-text-blue-gray">1/2 * Jml.Sisi Sejajar * t</h4></td>
          </tr>
          <tr>
          <td><h4 class="w3-text-blue-gray">Keliling</h4></td>
          <td><h4 class="w3-text-blue-gray">AB + BC + CD + DA</h4></td>
          </tr>
      </table>
<br>

    <table class="w3-table">
        <form>
                
        <tr>
            <h3>Kalkulator</h3>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Jumlah Sisi Sejajar</h4></td></td>
            <td><h4><input class="w3-input w3-border w3-light-grey" id="sejajar" type="text" onkeyup="trapesium()"/></h4></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Panjang Tinggi</h4></td></td>
            <td><h4><input class="w3-input w3-border w3-light-grey" id="tinggi" type="text" onkeyup="trapesium()"/></h4></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Panjang AB</h4></td></td>
            <td><h4><input class="w3-input w3-border w3-light-grey" id="ab" type="text" onkeyup="trapesium()"/></h4></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Panjang BC</h4></td></td>
            <td><h4><input class="w3-input w3-border w3-light-grey" id="bc" type="text" onkeyup="trapesium()"/></h4></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Panjang CD</h4></td></td>
            <td><h4><input class="w3-input w3-border w3-light-grey" id="cd" type="text" onkeyup="trapesium()"/></h4></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Panjang DA</h4></td></td>
            <td><h4><input class="w3-input w3-border w3-light-grey" id="da" type="text" onkeyup="trapesium()"/></h4></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Luas</h4></td>
            <td><input class="w3-input w3-border w3-light-grey" type="text" id="luas"/></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Keliling</h4></td>
            <td><input class="w3-input w3-border w3-light-grey" type="text" id="keliling"/></td>
        </tr>
      
        </form>
    </table>
    <br>
</div>
</div>


<?php include 'footer.php' ?>