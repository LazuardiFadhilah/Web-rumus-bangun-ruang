<?php include 'header.php'; ?>

<h1 class="w3-center">Persegi</h1>
    </div>
    <div class="w3-card-4">
  <div class="w3-container w3-blue-gray w3-center">
  <img src="img/Persegi.jpg">
  </div>
  <div class="w3-container">      
      <table class="w3-table w3-striped">
          <tr>
          <h3 class="w3-text-blue-gray">Rumus</h3>
          </tr>
          <tr>
              <td><h4 class="w3-text-blue-gray">Luas</h4></td>
              <td><h4 class="w3-text-blue-gray">S * S</h4></td>
          </tr>
          <tr>
          <td><h4 class="w3-text-blue-gray">Keliling</h4></td>
          <td><h4 class="w3-text-blue-gray">4 * S</h4></td>
          </tr>
      </table>
<br>

    <table class="w3-table">
        <form>
                
        <tr>
            <h3>Kalkulator</h3>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Panjang sisi</h4></td></td>
            <td><h4><input class="w3-input w3-border w3-light-grey" id="sisi" type="text" onkeyup="persegi()"/></h4></td>
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