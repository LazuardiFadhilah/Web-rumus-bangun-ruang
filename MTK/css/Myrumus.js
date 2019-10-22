function persegi() {
    var sisi = document.getElementById('sisi').value;
    var luas = parseInt(sisi) * parseInt(sisi);
    var keliling = parseInt(sisi) * 4;
    document.getElementById('luas').value = luas;
    document.getElementById('keliling').value = keliling;
}

function panjang() {
    var P = document.getElementById('sisi').value;
    var L = document.getElementById('lebar').value;
    var Ls = parseInt(P) * parseInt(L);
    var K = 2 * (parseInt(P) + parseInt(L));
    document.getElementById('ps_ls').value = Ls;
    document.getElementById('ps_kl').value = K;
}

function sg() {
    var a = document.getElementById('sg_alas').value;
    var t = document.getElementById('sg_tinggi').value;
    var AB1 = document.getElementById('sg_ab').value;
    var BC1 = document.getElementById('sg_bc').value;
    var CA1 = document.getElementById('sg_ca').value;
    var LS = 1 / 2 * parseInt(a) * parseInt(t);
    var KL = parseInt(AB1) + parseInt(BC1) + parseInt(CA1);
    document.getElementById('sg_ls').value = LS;
    document.getElementById('sg_kel').value = KL;
}

function jajar() {
    var a = document.getElementById('alas').value;
    var t = document.getElementById('tinggi').value;
    var ab = document.getElementById('ab').value;
    var bc = document.getElementById('bc').value;
    var cd = document.getElementById('cd').value;
    var da = document.getElementById('da').value;
    var L = parseInt(a) * parseInt(t);
    var K = parseInt(ab) + parseInt(bc) + parseInt(cd) + parseInt(da);
    document.getElementById('luas').value = L;
    document.getElementById('kel').value = K;
}

function trapesium() {
    var sisi = document.getElementById('sejajar').value;
    var t = document.getElementById('tinggi').value;
    var ab = document.getElementById('ab').value;
    var bc = document.getElementById('bc').value;
    var cd = document.getElementById('cd').value;
    var da = document.getElementById('da').value;
    var L = 1 / 2 * parseInt(sisi) * parseInt(t);
    var K = parseInt(ab) + parseInt(bc) + parseInt(cd) + parseInt(da);
    document.getElementById('luas').value = L;
    document.getElementById('keliling').value = K;
}

function tambah(input, character) {
    if (input.value == null || input.value == '0')
        input.value = character
    else
        input.value += character
}

function ubah_tanda(input) {
    if (input.value.substring(0, 1) == "-")
        input.value = input.value.substring(1, input.value.length)
    else
        input.value += "-" + input.value
}

function hitung(form) {
    form.display.value = eval(form.display.value)
}