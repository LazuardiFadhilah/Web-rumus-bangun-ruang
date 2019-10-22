<?php include 'header.php'; ?>

<h1 class="w3-center">Kalkulator</h1>
    </div>

    <div class="w3-row w3-container">
        <br><br>
    <div class="w3-col s5">
        <br>
    </div>
    <div class="w3-card-4 w3-col s3">
        <form>
  <div class="w3-container w3-blue-gray w3-center" style="height:70px;">
      <input type="text" name="display" class="w3-input w3-border w3-light-grey" style="height:70px;">
  </div>
  <div class="w3-container">      
      <table class="w3-table">
      <tr>
 <td><input class="w3-btn w3-blue-grey" type="button" value="7" onClick="tambah(this.form.display, '7')"></td>
 <td><input class="w3-btn w3-blue-grey" type="button" value="8" onClick="tambah(this.form.display, '8')"></td>
 <td><input class="w3-btn w3-blue-grey" type="button" value="9" onClick="tambah(this.form.display, '9')"></td>
 <td><input class="w3-btn w3-blue-grey" type="button" value="/" onClick="tambah(this.form.display, '/')"></td>
</tr>

<tr>
 <td><input class="w3-btn w3-blue-grey" type="button" value="4" onClick="tambah(this.form.display, '4')"></td>
 <td><input class="w3-btn w3-blue-grey" type="button" value="5" onClick="tambah(this.form.display, '5')"></td>
 <td><input class="w3-btn w3-blue-grey" type="button" value="6" onClick="tambah(this.form.display, '6')"></td>
 <td><input class="w3-btn w3-blue-grey" type="button" value="*" onClick="tambah(this.form.display, '*')"></td>
</tr>

<tr>
 <td><input class="w3-btn w3-blue-grey" type="button" value="1" onClick="tambah(this.form.display, '1')"></td>
 <td><input class="w3-btn w3-blue-grey" type="button" value="2" onClick="tambah(this.form.display, '2')"></td>
 <td><input class="w3-btn w3-blue-grey" type="button" value="3" onClick="tambah(this.form.display, '3')"></td>
 <td><input class="w3-btn w3-blue-grey" type="button" value="-" onClick="tambah(this.form.display, '-')"></td>
</tr>

<tr>
 <td><input class="w3-btn w3-blue-grey" type="button" value="C"onClick="tambah(this.form.display.value=0, 'clear')"></td>
 <td><input class="w3-btn w3-blue-grey" type="button" value="0" onClick="tambah(this.form.display, '0')"></td>
 <td><input class="w3-btn w3-blue-grey" type="button" value="." onClick="tambah(this.form.display, '.')"></td>
 <td><input class="w3-btn w3-blue-grey" type="button" value="+" onClick="tambah(this.form.display, '+')"></td>
</tr>

<tr>
 <td colspan="2"><input class="w3-btn w3-blue-grey" type="button" value="     CE     " onClick="tambah(this.form.display.value=0, 'clear')"></td>
 <td colspan="2"><input class="w3-btn w3-blue-grey" type="button" value="     =     " name="Enter" onClick="hitung(this.form)"></td>
</tr>
</table>
</div>
</form></div>
<div class="w3-col s4"></div>
</div>

<?php include 'footer.php' ?>