<?php include 'header.php'; ?>


<h1 class="w3-center">Segitiga</h1>
    </div>

    <div class="w3-card-4">
  <div class="w3-container w3-blue-gray w3-center">
  <img src="img/segitiga.jpg">
  </div>
  <div class="w3-container">      
      <table class="w3-table w3-striped">
          <tr>
          <h3 class="w3-text-blue-gray">Rumus</h3>
          </tr>
          <tr>
              <td><h4 class="w3-text-blue-gray">Luas</h4></td>
              <td><h4 class="w3-text-blue-gray">1/2 * a * t</h4></td>
          </tr>
          <tr>
          <td><h4 class="w3-text-blue-gray">Keliling</h4></td>
          <td><h4 class="w3-text-blue-gray">AB + BC + CA</h4></td>
          </tr>
      </table>
<br>

    <table class="w3-table">
        <form action="css/Myrumus.js">
                
        <tr>
            <h3>Kalkulator</h3>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Panjang Alas</h4></td></td>
            <td><h4><input class="w3-input w3-border w3-light-grey" id="sg_alas" type="text" onkeyup="sg()"/></h4></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Panjang Tinggi</h4></td></td>
            <td><h4><input class="w3-input w3-border w3-light-grey" id="sg_tinggi" type="text" onkeyup="sg()"/></h4></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Panjang AB</h4></td></td>
            <td><h4><input class="w3-input w3-border w3-light-grey" id="sg_ab" type="text" onkeyup="sg()"/></h4></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Panjang BC</h4></td></td>
            <td><h4><input class="w3-input w3-border w3-light-grey" id="sg_bc" type="text" onkeyup="sg()"/></h4></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Panjang CA</h4></td></td>
            <td><h4><input class="w3-input w3-border w3-light-grey" id="sg_ca" type="text" onkeyup="sg()"/></h4></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Luas</h4></td>
            <td><input class="w3-input w3-border w3-light-grey" type="text" id="sg_ls"/></td>
        </tr>
        <tr>
            <td><h4 class="w3-text-blue-gray">Keliling</h4></td>
            <td><input class="w3-input w3-border w3-light-grey" type="text" id="sg_kel"/></td>
        </tr>
      
        </form>
    </table>
    <br>
</div>
</div>


<?php include 'footer.php' ?>